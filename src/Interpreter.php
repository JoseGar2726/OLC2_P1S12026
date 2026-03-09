<?php

    class BreakException extends Exception {}
    class ContinueException extends Exception {}

use Context\AccesoArregloContext;
use Context\AccesoArreglosContext;
use Context\AccesoArreglosDContext;
use Context\ArrayLitContext;
use Context\ArrayLiteral2DContext;
use Context\ArrayLiteralContext;
use Context\ArreglosAsignationDContext;
use Context\AsignacionArreglosContext;
use Context\AsignacionArreglosDContext;
use Context\AsignacionContext;
    use Context\ProgramaContext;
    use Context\FuncionImprimirContext;
    use Context\BloqueMainContext;
    use Context\FloatLitContext;
    use Context\EnteroLitContext;
    use Context\BoolLitContext;
    use Context\StrLitContext;
    use Context\BinaryExpressionSContext;
    use Context\BinaryExpressionTContext;
    use Context\BloqueContext;
use Context\DeclaracionConstContext;
    use Context\DeclaracionContext;
    use Context\DeclaracionCortaContext;
    use Context\ExpForContext;
    use Context\ForClasicoContext;
use Context\FuncionContext;
use Context\FuncLenContext;
use Context\FuncNowContext;
use Context\FuncSubContext;
use Context\FuncTypeContext;
use Context\UnaryExpressionContext;
    use Context\GroupedExpressionContext;
    use Context\IdentifierContext;
    use Context\IfSentenciaContext;
use Context\ListaExprContext;
use Context\LlamadaFuncionContext;
use Context\LogicalExpressionContext;
use Context\MainFuncionContext;
use Context\NilLitContext;
use Context\RelationalExpresionContext;
use Context\RetornarContext;
use Context\RuneLitContext;
    use Context\SentenciaBreakContext;
    use Context\SentenciaContinueContext;
    use Context\SentenciaForContext;
    use Context\SentenciaIfContext;
    use Context\SentenciaSwitchContext;

    class Interpreter extends GrammarBaseVisitor{
        public $console = "";
        public $scopes = [];
        private $scopeNames = [];
        private $functions = [];
        private $callStack = [];
        private $returnValue = null;
        private $mainCount = 0;
        public $semanticErrors = [];

        //manejo de errores semanticos
        public function addSemanticErrors($msg, $ctx){

            if($ctx === null){
                $line = 0;
                $column = 0;
            } else {
                $line = $ctx->getStart()->getLine();
                $column = $ctx->getStart()->getCharPositionInLine();
            }

            $this->semanticErrors[] = "Error Semantico (Linea:$line Columna:$column): $msg";
        }

        //MANEJO DE SCOPES
        public function __construct() {
            $this->scopes[] = [];
            $this->scopeNames[] = "global";
        }

        private function currentScopeIndex(){
            return count($this->scopes) - 1;
        }

        private function declareSymbol($id, $data, $ctx = null){
            $current = $this->currentScopeIndex();
            
            if (isset($this->scopes[$current][$id])) {
                $this->addSemanticErrors(
                    "Error semantico: '$id' ya fue declarado en este scope", null
                );
                return;
            }

            if($ctx !== null){
                $data["line"] = $ctx->start->getLine();
                $data["column"] = $ctx->start->getCharPositionInLine();
            } else {
                $data["line"] = null;
                $data["column"] = null;
            }

            $data["scope"] = $this->scopeNames[$current];
            $this->scopes[$current][$id] = $data;
        }

        private function findSymbolScope($id){
            for ($i = count($this->callStack)-1;$i >= 0; $i--){
                if (isset($this->callStack[$i][$id])){
                    return ['callStack', $i];
                }
            }

            for ($i = count($this->scopes) - 1; $i >= 0; $i--) {
                if (isset($this->scopes[$i][$id])) {
                    return ['scope', $i];
                }
            }
            return null;
        }

        private function getSymbol($id){
            $location = $this->findSymbolScope($id);
            if ($location === null){
                return null;
            }

            list($type, $index) = $location;
            if ($type === 'scope') return $this->scopes[$index][$id];
            if ($type === 'callStack') return $this->callStack[$index][$id];
        }

        private function setSymbolValue($id, $value) {
            $location = $this->findSymbolScope($id);

            if ($location === null) {
                $this->addSemanticErrors(
                    "Error semantico: variable '$id no definida'", null
                );
                return;
            }

            list($type, $index) = $location;
            
            if($type === 'scope'){
                if($this->scopes[$index][$id]["const"]){
                    $this->addSemanticErrors(
                        "Error semantico: no se puede modificar una constante", null
                    );
                    return;
                }
                $this->scopes[$index][$id]["value"] = $value;
            } else {
                $this->callStack[$index][$id]["value"] = $value;
            }

        }

        private function symbolExistInCurrentScope(string $name): bool{
            if(empty($this->scopes)){
                return false;
            }

            $currentScope = end($this->scopes);

            return isset($currentScope[$name]);
        }

        //FUNCIONES EMBEBIDAS
        //len
        public function visitFuncLen(FuncLenContext $ctx){
            $res = $this->visit($ctx->logExpr());

            if($res === null){
                $this->addSemanticErrors(
                    "Error semantico: argumento invalindo en len()", $ctx
                );
                return ["type" => "int", "value"=> 0];
            }

            $value = $res["value"];

            if(is_string($value)  || is_array($value)){
                return [
                    "type" => "int",
                    "value" => count(is_array($value) ? $value : str_split($value))
                ];
            }

            $this->addSemanticErrors(
                "Error semantico: len() solo acepta string o arreglos", $ctx
            );

            return ["type"=>"int", "value"=>0];
        }

        //now
        public function visitFuncNow(FuncNowContext $ctx){
            $date = date("Y-m-d H:i:s");

            return [
                "type" => "string",
                "value" => $date
            ];
        }

        //substring
        public function visitFuncSub(FuncSubContext $ctx){
            $str = $this->visit($ctx->logExpr(0));
            $start = $this->visit($ctx->logExpr(1));
            $len = $this->visit($ctx->logExpr(2));

            if($str["type"] !== "string"){
                $this->addSemanticErrors(
                    "Error semantico: substring espera un string", $ctx
                );
                return["type" => "string", "value"=>""];
            }

            $sub = substr($str["value"], $start["value"], $len["value"]);

            return[
                "type" => "string",
                "value" => $sub
            ];
        }

        private function lookupSymbol($name){
            for ($i = count($this->scopes) - 1; $i >= 0; $i--){
                if(isset($this->scopes[$i][$name])){
                    return $this->scopes[$i][$name];
                }
            }
            return null;
        }

        //typeof
        public function visitFuncType(FuncTypeContext $ctx){
            $id = $ctx->IDENTIFICADOR()->getText();
            
            $symbol = $this->lookupSymbol($id);

            if($symbol === null){
                $this->addSemanticErrors(
                    "Error semantico: variable '$id' no existe", $ctx
                );
                return [
                    "type" => "string",
                    "value" => "error"
                ];
            }


            return [
                "type" => "string",
                "value" => $symbol["type"]
            ];
        }

        //LLAMADA FUNCION
        public function visitLlamadaFuncion(LlamadaFuncionContext $ctx){
            $nombre = $ctx->IDENTIFICADOR()->getText();

            if(!isset($this->functions[$nombre])){
                $this->addSemanticErrors("Error semantico: funcion '$nombre' no existe", $ctx);
                return ["type" => "error", "value" => null];
            }

            $func = $this->functions[$nombre];

            //Evaluar Argumentos
            $args = [];
            
            if ($ctx->listaExpr() !== null){
                $args = $this->visit($ctx->listaExpr());
            }

            $params = $func["params"] ?? [];

            if (count($args) != count($params)){
                $this->addSemanticErrors("Error semantico: funcion '$nombre' espera " . count($params) . " argumentos, recibidos " . count($args), $ctx);
                return ["type" => "error", "value" => null];
            }

            for($i=0; $i<count($args); $i++){
                if($params[$i]["type"] === "int32"){
                    $params[$i]["type"] = "int";
                }
                if($params[$i]["type"] === "float32"){
                    $params[$i]["type"] = "float";
                }
                if(isset($params[$i]["type"]) && $args[$i]["type"] !== $params[$i]["type"]){
                    $this->addSemanticErrors(
                        "Error semantico: argumento " . ($i + 1) . " de '$nombre' debe ser tipo '{$params[$i]["type"]}', recibido '{$args[$i]["type"]}'",
                        $ctx
                    );
                    return ["type" => "error", "value" => null];
                }
            }

            //Nuevo Entorno
            array_push($this->callStack, []);
            array_push($this->scopeNames, $nombre);

            for ($i=0; $i<count($args); $i++){
                $paramName = $func["params"][$i]["name"];

                $this->callStack[count($this->callStack)-1][$paramName] = [
                    "type" => $args[$i]["type"],
                    "value" => $args[$i]["value"]
                ];
            }

            //Ejecutar
            $this->returnValue = null;
            try {
                $this->visit($func["ctx"]->bloque());
            } catch (Exception $e) {
                if ($e->getMessage() !== "__RETURN__"){
                    array_pop($this->callStack);
                    throw $e;
                }
            }

            $ret = $this->returnValue;

            array_pop($this->callStack);
            array_pop($this->scopeNames);

            return $ret;
        }

        //RETORNAR
        public function visitRetornar(RetornarContext $ctx){
            $valores = $this->visit($ctx->listaExpr());

            if(count($valores) == 1){
                $this->returnValue = $valores[0];
            } else {
                $this->returnValue = $valores;
            }

            throw new Exception("__RETURN__");
        }

        //BREAK Y CONTINUE
        public function visitSentenciaBreak(SentenciaBreakContext $ctx){
            throw new BreakException();
        }

        public function visitSentenciaContinue(SentenciaContinueContext $ctx){
            throw new ContinueException();
        }

        //SENTENCIA FOR
        public function visitSentenciaFor(SentenciaForContext $ctx){
            //FOR CLASICO
            if ($ctx->forClasico() !== null){
                return $this->visit($ctx->forClasico());
            }
            //FOR WHILE
            if ($ctx->logExpr() !== null){
                while (true) {
                    $cond = $this->visit($ctx->logExpr());

                    if ($cond["type"] !== "bool"){
                        $this->addSemanticErrors(
                            "Error semantico: la condicion del for debe ser booleana",
                            $ctx
                        );
                        break;
                    }

                    if($cond["value"] === false) break;

                    try {
                        $this->visit($ctx->bloque());
                    } catch (BreakException $e) {
                        break;
                    } catch (ContinueException $e) {
                        continue;
                    }

                }

                return null;
            }

            //FOR INFINITO
            if ($ctx->bloque() !== null){
                while (true) {
                    try {
                        $this->visit($ctx->bloque());
                    } catch (BreakException $e) {
                        break;
                    } catch (ContinueException $e) {
                        continue;
                    }
                }
            }

            return null;
        }

        //FOR CLASICO
        public function visitForClasico(ForClasicoContext $ctx){

            array_push($this->scopes, []);

            if($ctx->declaracionCorta() !== null){
                $this->visit($ctx->declaracionCorta());
            }

            while (true) {
                if ($ctx->logExpr() !== null){
                    $cond = $this->visit($ctx->logExpr());

                    if($cond["type"] !== "bool" || $cond["value"] === null){
                        $this->addSemanticErrors(
                            "Error semantico: la condicion del for debe ser booleana",
                            $ctx
                        );
                        break;
                    }

                    if($cond["value"] === false) break;
                }

                try {
                    $this->visit($ctx->bloque());
                } catch (BreakException $e) {
                    break;
                } catch (ContinueException $e){
                    
                }

                if ($ctx->condFor() !== null) {
                    $this->visit($ctx->condFor());
                }
            }

            array_pop($this->scopes);

            return null;
        }

        //AUMENTODECREMENTO
        public function visitExpFor(ExpForContext $ctx){
            $id = $ctx->IDENTIFICADOR()->getText();
            $simbolo = $this->getSymbol($id);

            if($simbolo === null){
                $this->addSemanticErrors(
                    "Error semantico: variable '$id' no existe",
                    $ctx
                );
                return null;
            }

            if ($ctx->PLUS() !== null && $ctx->PLUS(1) !== null){
                $this->setSymbolValue($id, $this->getSymbol($id)["value"] + 1);
            } else if ($ctx->MINUS() !== null && $ctx->MINUS(1) !== null){
                $this->setSymbolValue($id, $this->getSymbol($id)["value"] - 1);
            }

            return null;
        }

        //SENTENCIA SWITCH
        public function visitSentenciaSwitch(SentenciaSwitchContext $ctx){
            $switchV = $this->visit($ctx->logExpr());

            if ($switchV === null || !isset($switchV["type"])){
                $this->addSemanticErrors(
                    "Error semantico: valor de switch no valido",
                    $ctx
                );
                return null;
            }

            $bloqueSwitch = $ctx->bloqueSwitch();
            if ($bloqueSwitch === null){
                return null;
            }

            $cases = $bloqueSwitch->bloqueCase();
            $default = $bloqueSwitch->bloqueDefault();

            try {
                foreach($cases as $case){
                    $listaExpresiones = $case->listaExpr()->logExpr();

                    foreach($listaExpresiones as $expresion){
                        $caseValue = $this->visit($expresion);

                        if($caseValue["type"] !== $switchV["type"]){
                            $this->addSemanticErrors(
                                "Error semantico: case tipo '{$caseValue["type"]}' incompatible con switch tipo '{$switchV["type"]}'",
                                $ctx
                            );
                            continue;
                        }

                        if ($caseValue["value"] === $switchV["value"]){
                            foreach($case->i() as $inst){
                                $this->visit($inst);
                            }

                            return null;
                        }
                    }
                }

                if ($default !== null){
                    foreach($default->i() as $inst){
                        $this->visit($inst);
                    }
                }
            } catch (BreakException $e) {
                return null;
            }

            return null;
        }

        //SENTENCIA IF
        public function visitSentenciaIf(SentenciaIfContext $ctx){
            $condiciones = $ctx->logExpr();
            $bloques = $ctx->bloque();

            $cantidadCondiciones = count($condiciones);

            for ($i = 0; $i < $cantidadCondiciones; $i++){
                $condicion = $this->visit($condiciones[$i]);

                if($condicion["type"] === "nil"){
                    $this->addSemanticErrors(
                        "Error semantico: operacion con nil", $ctx
                    );
                    return null;
                }

                if ($condicion === null || !isset($condicion["type"]) || $condicion["type"] !== "bool"){
                    $this->addSemanticErrors(
                        "Error semantico: la condicion del if / else if debe de ser booleana",
                        $ctx
                    );
                    $condicion = ["value" => false, "type" => "bool"];
                }

                if ($condicion["value"]){
                    
                    $this->visit($bloques[$i]);
                    
                    return null;
                }
            }

            if (count($bloques) > $cantidadCondiciones){
                $this->visit($bloques[$cantidadCondiciones]);
            }

            return null;
        }

        //ARREGLOS FUNCIONES
        private function defaultValue($type){
            switch ($type) {
                case 'int': return 0; break;
                case 'float': return 0.0; break;
                case 'bool': return false; break;
                case 'string': return ""; break;
                case 'rune': return '\u0000'; break;
                default: return null; break;
            }
        }

        private function createDefaultArray($size, $subtype){
            $default = $this->defaultValue($subtype);

            $arr = [];

            for($i = 0; $i < $size; $i++){
                $arr[] = [
                    "type" => $subtype,
                    "value" => $default
                ];
            }

            return $arr;
        }

        //DECLARACION CONSTANTES
        public function visitDeclaracionConst(DeclaracionConstContext $ctx){

            $valorInicial = $this->visit($ctx->logExpr());
            $id = $ctx->IDENTIFICADOR()->getText();

            // Determinar tipo declarado
            $tipoVariable = null;

            $tipoCtx = $ctx->tipos();
            if($tipoCtx->tipoBase()){
                $tipoVariable = $tipoCtx->tipoBase()->getText();
                if($tipoVariable === "int32") $tipoVariable = "int";
                if($tipoVariable === "float32") $tipoVariable = "float";
            } elseif ($tipoCtx->tipoArray()) {
                $tipoVariable = "array";
            } elseif ($tipoCtx->tipoArray2D()) {
                $tipoVariable = "array2d";
            }

            if($valorInicial["value"] === null || $valorInicial["type"] === "nil"){
                $this->addSemanticErrors(
                    "Error semantico: la constante '$id' debe declararse con valor de inicialización",
                    $ctx
                );
                return null;
            }

            if ($this->symbolExistInCurrentScope($id)){
                $this->addSemanticErrors(
                    "Error semantico: la constante '$id' ya fue declarada",
                    $ctx
                );
                return null;
            }

            $tipoExpresion = $valorInicial["type"];

            // Si es un array 1D
            if($tipoVariable === "array"){
                if($tipoExpresion !== "array"){
                    $this->addSemanticErrors(
                        "Error semantico: tipo de constante '$id' '$tipoVariable' incompatible con valor de tipo '$tipoExpresion'",
                        $ctx
                    );
                    return null;
                }

                // Revisar que todos los elementos coincidan con tipo base
                $baseType = $tipoCtx->tipoArray()->tipoBase()->getText();
                if($baseType === "int32") $baseType = "int";
                if($baseType === "float32") $baseType = "float";

                foreach($valorInicial["value"] as $idx => $elem){
                    if($elem["type"] !== $baseType){
                        $this->addSemanticErrors(
                            "Error semantico: elemento [$idx] de la constante '$id' debe ser '$baseType', encontrado '{$elem["type"]}'",
                            $ctx
                        );
                        return null;
                    }
                }
            }

            // Si es un array 2D
            if($tipoVariable === "array2d"){
                if($tipoExpresion !== "array2d"){
                    $this->addSemanticErrors(
                        "Error semantico: tipo de constante '$id' '$tipoVariable' incompatible con valor de tipo '$tipoExpresion'",
                        $ctx
                    );
                    return null;
                }

                $baseType = $tipoCtx->tipoArray2D()->tipoBase()->getText();
                if($baseType === "int32") $baseType = "int";
                if($baseType === "float32") $baseType = "float";

                foreach($valorInicial["value"] as $i => $fila){
                    foreach($fila as $j => $elem){
                        if($elem["type"] !== $baseType){
                            $this->addSemanticErrors(
                                "Error semantico: elemento [$i][$j] de la constante '$id' debe ser '$baseType', encontrado '{$elem["type"]}'",
                                $ctx
                            );
                            return null;
                        }
                    }
                }
            }

            $this->declareSymbol($id, [
                'type' => $tipoVariable,
                'value' => $valorInicial["value"],
                'const' => true
            ], $ctx);

            return null;
        }

        // ASIGNACION
        private function applyAssignmentOperation($op, $left, $right, $ctx){

            $operatorMap = [
                "+=" => "+",
                "-=" => "-",
                "*=" => "*",
                "/=" => "/"
            ];

            $binOp = $operatorMap[$op];

            $resultType = $this->resultType($binOp, $left["type"], $right["type"]);

            if($resultType === null){
                $this->addSemanticErrors(
                    "Error semantico: operacion invalida '$op' entre {$left["type"]} y {$right["type"]}",
                    $ctx
                );
                return null;
            }

            $l = $this->normalizeValue($left["type"], $left["value"]);
            $r = $this->normalizeValue($right["type"], $right["value"]);

            if(($binOp === "/" ) && $r == 0){
                $this->addSemanticErrors(
                    "Error semantico: division entre cero",
                    $ctx
                );
                return null;
            }

            switch($binOp){

                case "+":
                    $value = ($resultType === "string") ? $l . $r : $l + $r;
                    break;
                
                case "-":
                    $value = $l - $r;
                    break;
                
                case "*":
                
                    if($left["type"] === "string" && $right["type"] === "int"){
                        return [
                            "type"=>"string",
                            "value"=>str_repeat($l,$r)
                        ];
                    }
                
                    if($left["type"] === "int" && $right["type"] === "string"){
                        return [
                            "type"=>"string",
                            "value"=>str_repeat($r,$l)
                        ];
                    }
                
                    $value = $l * $r;
                    break;
                
                case "/":
                    $value = ($resultType === "int")
                        ? intval($l / $r)
                        : $l / $r;
                    break;
            }
                
            return [
                "type"=>$resultType,
                "value"=>$value
            ];
        }

        public function visitAsignacion(AsignacionContext $ctx){

            if($ctx->IDENTIFICADOR() !== null){

                $id = $ctx->IDENTIFICADOR()->getText();
                $op = $ctx->simboloAsignacion()->getText();
                $right = $this->visit($ctx->logExpr());

                $simbolo = $this->getSymbol($id);

                if($simbolo === null){
                    $this->addSemanticErrors(
                        "Error semantico: la variable '$id' no existe",
                        $ctx
                    );
                    return null;
                }

                if($simbolo["const"]){
                    $this->addSemanticErrors(
                        "Error semantico: no se puede modificar una constante '$id'",
                        $ctx
                    );
                    return null;
                }

                $left = [
                    "type"=>$simbolo["type"],
                    "value"=>$simbolo["value"]
                ];

                if($op === "="){

                    if($left["type"] !== $right["type"]){
                        $this->addSemanticErrors(
                            "Error semantico: tipo incompatible '{$left["type"]}' y '{$right["type"]}'",
                            $ctx
                        );
                        return null;
                    }

                    $this->setSymbolValue($id,$right["value"]);
                    return null;
                }

                $result = $this->applyAssignmentOperation($op,$left,$right,$ctx);

                if($result === null) return null;

                if($result["type"] !== $left["type"]){
                    $this->addSemanticErrors(
                        "Error semantico: el resultado '{$result["type"]}' no se puede asignar a '{$left["type"]}'",
                        $ctx
                    );
                    return null;
                }

                $this->setSymbolValue($id,$result["value"]);

                return null;
            }

            if($ctx->accesoArreglo() !== null){

                $acceso = $ctx->accesoArreglo();
                $id = $acceso->IDENTIFICADOR()->getText();

                $simbolo = $this->getSymbol($id);

                if($simbolo === null){
                    $this->addSemanticErrors(
                        "Error semantico: la variable '$id' no existe",
                        $ctx
                    );
                    return null;
                }

                $array = $simbolo["value"];
                $indices = [];

                foreach($acceso->logExpr() as $expr){
                    $indices[] = $this->visit($expr)["value"];
                }

                $right = $this->visit($ctx->logExpr());
                $op = $ctx->simboloAsignacion()->getText();

            }

            if(count($indices) === 1){

                $i = $indices[0];

                if(!isset($array[$i])){
                    $this->addSemanticErrors(
                        "Error semantico: indice $i fuera de rango",
                        $ctx
                    );
                    return null;
                }

                $left = $array[$i];

                if($op === "="){

                    if($left["type"] !== $right["type"]){
                        $this->addSemanticErrors(
                            "Error semantico: tipo incompatible en '$id[$i]'",
                            $ctx
                        );
                        return null;
                    }

                    $array[$i]["value"] = $right["value"];
                }
                else{

                    $result = $this->applyAssignmentOperation($op,$left,$right,$ctx);

                    if($result === null) return null;

                    if($result["type"] !== $left["type"]){
                        $this->addSemanticErrors(
                            "Error semantico: tipo incompatible en '$id[$i]'",
                            $ctx
                        );
                        return null;
                    }

                    $array[$i]["value"] = $result["value"];
                }
            }

            if(count($indices) === 2){

                $i = $indices[0];
                $j = $indices[1];

                if(!isset($array[$i][$j])){
                    $this->addSemanticErrors(
                        "Error semantico: indice [$i][$j] fuera de rango",
                        $ctx
                    );
                    return null;
                }

                $left = $array[$i][$j];

                if($op === "="){

                    if($left["type"] !== $right["type"]){
                        $this->addSemanticErrors(
                            "Error semantico: tipo incompatible en '$id[$i][$j]'",
                            $ctx
                        );
                        return null;
                    }

                    $array[$i][$j]["value"] = $right["value"];
                }
                else{

                    $result = $this->applyAssignmentOperation($op,$left,$right,$ctx);

                    if($result === null) return null;

                    if($result["type"] !== $left["type"]){
                        $this->addSemanticErrors(
                            "Error semantico: tipo incompatible en '$id[$i][$j]'",
                            $ctx
                        );
                        return null;
                    }

                    $array[$i][$j]["value"] = $result["value"];
                }
            }

            $this->setSymbolValue($id,$array);

            return null;
        
        }

        //DECLARACION CORTA
        public function visitDeclaracionCorta(DeclaracionCortaContext $ctx){

            $ids = $ctx->listaId()->IDENTIFICADOR();
            $expresiones = $ctx->listaExpr()->logExpr();

            $values = [];

            // evaluar expresiones y expandir retornos multiples
            foreach ($expresiones as $expr){
                $res = $this->visit($expr);

                // si la funcion retorna multiples valores
                if (is_array($res) && isset($res[0]) && is_array($res[0]) && isset($res[0]["type"])){
                    foreach ($res as $v){
                        $values[] = $v;
                    }
                } else {
                    $values[] = $res;
                }
            }   

            // verificar cantidades
            if(count($ids) !== count($values)){
                $this->addSemanticErrors(
                    "Error semantico: la cantidad de variables y valores no coincide",
                    $ctx
                );
                return null;
            }

            // declarar variables
            for ($i=0; $i < count($ids); $i++){

                $name = $ids[$i]->getText();
                $res = $values[$i];

                if ($this->symbolExistInCurrentScope($name)){
                    $this->addSemanticErrors(
                        "Error semantico: la variable '$name' ya fue declarada",
                        $ctx
                    );
                    continue;
                }

                if($res["type"] === "nil"){
                    $this->addSemanticErrors(
                        "Error semantico: no se puede asignar valor nil a '$name'", $ctx
                    );
                    continue;
                }

                $this->declareSymbol($name,[
                    "type" => $res["type"],
                    "value" => $res["value"],
                    "const" => false
                ], $ctx);
            }

            return null;
        }

        //DECLARACION
        public function visitDeclaracion(DeclaracionContext $ctx){
            
            $listaIds = $ctx->listaId();
            $listaValores = $ctx->listaExpr();
            
            $ids = $listaIds->IDENTIFICADOR();
            $expresiones = $listaValores !== null ? $listaValores->logExpr() : [];

            $tipoCtx = $ctx->tipos();

            $type = null;
            $baseType = null;
            $defaultValue = null;

            if($tipoCtx->tipoBase()){
                $type = $tipoCtx->tipoBase()->getText();

                if($type === "int32"){
                    $type = "int";
                }
                if($type === "float32"){
                    $type = "float";
                }

                switch ($type) {
                    case 'int': $defaultValue = 0; break;
                    case 'float': $defaultValue = 0.0; break;
                    case 'bool': $defaultValue = false; break;
                    case 'string': $defaultValue = ""; break;
                    case 'rune': $defaultValue = '\u0000'; break;
                    default: $defaultValue = null; break;
                }
            
            }

            elseif($tipoCtx->tipoArray()){
                $sizeExpr = $tipoCtx->tipoArray()->logExpr();
                $size = $this->visit($sizeExpr)["value"];

                $baseType = $tipoCtx->tipoArray()->tipoBase()->getText();

                if($baseType === "int32"){
                    $baseType = "int";
                }
                if($baseType === "float32"){
                    $baseType = "float";
                }

                $type = "array";

                $baseDefault = $this->defaultValue($baseType);

                $array = [];

                for($i=0;$i<$size;$i++){
                    $array[$i] = [
                        "value"=>$baseDefault,
                        "type"=>$baseType
                    ];
                }

                $defaultValue = $array;
            }

            elseif ($tipoCtx->tipoArray2D()) {
                $size1 = $this->visit($tipoCtx->tipoArray2D()->logExpr(0))["value"];
                $size2 = $this->visit($tipoCtx->tipoArray2D()->logExpr(1))["value"];

                $baseType = $tipoCtx->tipoArray2D()->tipoBase()->getText();

                if($baseType === "int32"){
                    $baseType = "int";
                }
                if($baseType === "float32"){
                    $baseType = "float";
                }

                $type = "array2d";

                $baseDefault = $this->defaultValue($baseType);

                $matriz = [];

                for($i=0;$i<$size1;$i++){
                    $fila = [];

                    for($j=0;$j<$size2;$j++){
                        $fila[$j] = [
                            "value" => $baseDefault,
                            "type" => $baseType
                        ];  
                    }

                    $matriz[$i] = $fila;
                }

                $defaultValue = $matriz;
            }

            for ($i=0; $i < count($ids); $i++) { 
                $name = $ids[$i]->getText();

                if ($this->symbolExistInCurrentScope($name)){
                    $this->addSemanticErrors(
                        "Error semantico: la variable '$name' ya fue declarada",
                        $ctx
                    );
                    continue;
                }

                if($i < count($expresiones)){
                    $res = $this->visit($expresiones[$i]);

                    if($res["type"] === $type){
                        $value = $res["value"];
                    } else{
                        $this->addSemanticErrors(
                            "Error semantico: variable '$name' tipo '$type' incompatible con valor de tipo '{$res["type"]}'",
                            $ctx
                        );
                    }
                } else {
                    $value = $defaultValue;
                }

                $this->declareSymbol($name, [
                    'value' => $value,
                    'type' => $type,
                    'const' => false
                ], $ctx);
            }

            if(count($expresiones) > count($ids)){
                $this->addSemanticErrors(
                    "Error semantico: hay mas valores que variables en la declaracion",
                    $ctx
                );
            }
           
            return null;
        }

        //FUNCION IMPRIMIR  
        public function visitFuncionImprimir(FuncionImprimirContext $ctx){
            $lista = $ctx->imprimir()->listaExpr();

            if($lista == null) return null;

            $valores = [];

            foreach($lista->logExpr() as $e){
                $resultado = $this->visit($e);

                if($resultado === null){
                    $valores[] = "null";
                    continue;
                }

                switch ($resultado["type"]) {
                    case "bool":
                        $valores[] = $resultado["value"] ? "true" : "false";
                        break;
                    case "rune":
                    case "string":
                    case "int":
                    case "float":
                        $valores[] = (string)$resultado["value"];
                        break;
                    default:
                        $valores[] = "nil";
                        $imprimir = "nil";
                        $this->addSemanticErrors(
                            "Error Semantico: no se pudo imprimir: '$imprimir'",
                            $ctx
                        );
                }
            }

            $salida = implode(" ", $valores);

            $this->console .= $salida . "\n";


            return null;
        }

        public function visitBloque(BloqueContext $ctx){
            array_push($this->scopes, []);

            try {
                foreach ($ctx->i() as $instruction) {
                    if(method_exists($instruction, "funcion") && $instruction->funcion() !== null){
                        continue;
                    }
                    $this->visit($instruction);
                }
            } catch (Exception $e) {
                if ($e->getMessage() === "__RETURN__"){
                    array_pop($this->scopes);
                    return;
                }
                array_pop($this->scopes);
                throw $e;
            }

            $this->collectSymbols();

            array_pop($this->scopes);

            return null;
        }

        //GUARDAR VARIABLES
        public $visibleSymbols = [];

        private function collectSymbols() {
            foreach ($this->scopes as $scope) {
                foreach ($scope as $name => $data) {
                    $scopeName = $data["scope"] ?? "global";
                    $this->visibleSymbols["$name@$scopeName"] = $data;
                }
            }

            foreach($this->callStack as $i => $stack){
                foreach($stack as $name => $data){
                    $scopeName = $this->scopeNames[$i + 1] ?? "func";
                    $this->visibleSymbols["$name@$scopeName"] = $data;
                }
            }

            foreach($this->functions as $fname => $fdata){
                $params = implode(", ", array_map(fn($p) => $p["type"]." ".$p["name"], $fdata["params"] ?? []));
                $returns = implode(", ", $fdata["returns"] ?? []);

                $this->visibleSymbols[$fname] = [
                    "value" => "funcion",
                    "type" => "funcion",
                    "params" => $params,
                    "returns" => $returns,
                    "line" => $fdata["ctx"] ? $fdata["ctx"]->start->getLine() : null,
                    "column" => $fdata["ctx"] ? $fdata["ctx"]->start->getCharPositionInLine() : null,
                    "scope" => $fdata["scope"] ?? "global"
                ];
            }
        }

        private function preRegisterFunction($ctx){
            $nombre = $ctx->IDENTIFICADOR()->getText();

            if (isset($this->functions[$nombre])){
                $this->addSemanticErrors(
                    "Error Semantico: la funcion '$nombre' ya fue declarada",
                    $ctx
                );
                return;
            }

            //PARAMETROS
            $params = [];

            if($ctx->listaParametros() !== null){
                $ids = $ctx->listaParametros()->IDENTIFICADOR();
                $tipos = $ctx->listaParametros()->tipos();

                for ($i=0; $i<count($ids); $i++){
                    $params[] = [
                        "name" => $ids[$i]->getText(),
                        "type" => $tipos[$i]->getText()
                    ];
                }
            }

            //RETORNOS
            $returns = [];

            if ($ctx->listaRetorno() !== null){
                $tiposRet = $ctx->listaRetorno()->tipos();
                foreach ($tiposRet as $t){
                    $returns[] = $t->getText();
                }
            } elseif ($ctx->tipos() !== null){
                $returns[] = $ctx->tipos()->getText();
            }

            $this->functions[$nombre] = [
                "params" => $params,
                "returns" => $returns,
                "ctx" => $ctx,
                "scope" => end($this->scopeNames),
                "isMain" => false
            ];
        }

        private function preRegisterMain($ctx){
            $this->mainCount++;

            if ($this->mainCount > 1){
                $this->addSemanticErrors(
                    "Error Semantico: solo puede existir una funcion main",
                    $ctx
                );
            }

            $this->functions["main"] = [
                "ctx" => $ctx,
                "isMain" => true
            ];
        }

        private function executeMain(){

            if(!isset($this->functions["main"])){
                $this->addSemanticErrors(
                    "Error semantico: no existe la funcion main",
                    null
                );
                return;
            }
                        
            $mainCtx = $this->functions["main"]["ctx"];

            array_push($this->scopeNames, "main");

            foreach($mainCtx->bloque()->i() as $instr){
                $this->registerFunctionsInBlock($instr);
            }
           
            $this->visit($mainCtx->bloque());

            array_pop($this->scopeNames);

        }

        private function registerFunctionsInBlock($instruction){
            if(method_exists($instruction, "funcion") && $instruction->funcion() !== null){
                $this->preRegisterFunction($instruction->funcion());
            }

            if(method_exists($instruction, 'bloque') && $instruction->bloque() !== null){
                foreach($instruction->bloque()->i() as $instr){
                    $this->registerFunctionsInBlock($instr);
                }
            }
        }

        public function visitPrograma(ProgramaContext $ctx){

            foreach ($ctx->topLevel() as $node){
                if ($node->funcion() !== null){
                    $this->preRegisterFunction($node->funcion());
                }
            }

            foreach ($ctx->topLevel() as $node){
                if ($node->mainFuncion() !== null){
                    $this->preRegisterMain($node->mainFuncion());
                }
            }

            foreach ($ctx->topLevel() as $node){
                if($node->declaracion() !== null){
                    $this->visit($node->declaracion());
                }

                if($node->declaracionConst() !== null){
                    $this->visit($node->declaracionConst());
                }
            }

            $this->executeMain();

            return null;
        }

        //LISTAEXPRESIONES
        public function visitListaExpr(ListaExprContext $ctx){
            $resultados = [];

            $expresiones = $ctx->logExpr();

            foreach ($expresiones as $expr){
                $res = $this->visit($expr);
                $resultados[] = $res;
            }

            return $resultados;
        }

        //expresiones
        private function resultType($op, $t1, $t2){
            $rules = [
                '+' => [
                    'int' => ['int'=>'int', 'float'=>'float', 'rune'=>'int'],
                    'float' => ['int'=>'float', 'float'=>'float', 'rune'=>'float'],
                    'rune' => ['int'=>'int', 'float'=>'float', 'rune'=>'int'],
                    'string' => ['string'=>'string'],
                ],

                '-' => [
                    'int' => ['int'=>'int', 'float'=>'float', 'rune'=>'int'],
                    'float' => ['int'=>'float', 'float'=>'float', 'rune'=>'float'],
                    'rune' => ['int'=>'int', 'float'=>'float', 'rune'=>'int'],
                ],

                '*' => [
                    'int' => ['int'=>'int', 'float'=>'float', 'rune'=>'int', 'string'=>'string'],
                    'float' => ['int'=>'float', 'float'=>'float', 'rune'=>'float'],
                    'rune' => ['int'=>'int', 'float'=>'float', 'rune'=>'int'],
                    'string' => ['int'=>'string'],
                ],

                '/' => [
                    'int' => ['int'=>'int', 'float'=>'float', 'rune'=>'int'],
                    'float' => ['int'=>'float', 'float'=>'float', 'rune'=>'float'],
                    'rune' => ['int'=>'int', 'float'=>'float', 'rune'=>'int'],
                ],

                '%' => [
                    'int' => ['int'=>'int', 'rune'=>'int'],
                    'rune' => ['int'=>'int', 'rune'=>'int'],
                ],

                '==' => [
                    'int' => ['int'=>'bool', 'float'=>'bool', 'rune'=>'bool'],
                    'float' => ['int'=>'bool', 'float'=>'bool', 'rune'=>'bool'],
                    'rune' => ['int'=>'bool', 'float'=>'bool', 'rune'=>'bool'],
                    'string' => ['string'=>'bool'],
                    'bool' => ['bool'=>'bool'],
                ],

                '!=' => [
                    'int' => ['int'=>'bool', 'float'=>'bool', 'rune'=>'bool'],
                    'float' => ['int'=>'bool', 'float'=>'bool', 'rune'=>'bool'],
                    'rune' => ['int'=>'bool', 'float'=>'bool', 'rune'=>'bool'],
                    'string' => ['string'=>'bool'],
                    'bool' => ['bool'=>'bool'],
                ],

                '>' => [
                    'int' => ['int'=>'bool', 'float'=>'bool', 'rune'=>'bool'],
                    'float' => ['int'=>'bool', 'float'=>'bool', 'rune'=>'bool'],
                    'rune' => ['int'=>'bool', 'float'=>'bool', 'rune'=>'bool'],
                    'string' => ['string'=>'bool'],
                ],

                '<' => [
                    'int' => ['int'=>'bool', 'float'=>'bool', 'rune'=>'bool'],
                    'float' => ['int'=>'bool', 'float'=>'bool', 'rune'=>'bool'],
                    'rune' => ['int'=>'bool', 'float'=>'bool', 'rune'=>'bool'],
                    'string' => ['string'=>'bool'],
                ],

                '>=' => [
                    'int' => ['int'=>'bool', 'float'=>'bool', 'rune'=>'bool'],
                    'float' => ['int'=>'bool', 'float'=>'bool', 'rune'=>'bool'],
                    'rune' => ['int'=>'bool', 'float'=>'bool', 'rune'=>'bool'],
                    'string' => ['string'=>'bool'],
                ],

                '>=' => [
                    'int' => ['int'=>'bool', 'float'=>'bool', 'rune'=>'bool'],
                    'float' => ['int'=>'bool', 'float'=>'bool', 'rune'=>'bool'],
                    'rune' => ['int'=>'bool', 'float'=>'bool', 'rune'=>'bool'],
                    'string' => ['string'=>'bool'],
                ],
            ];

            if(isset($rules[$op][$t1][$t2])){
                return $rules[$op][$t1][$t2];
            }

            return null;
        }

        private function normalizeValue($type, $value){
            if($type === "rune"){
                return ord($value);
            }
            return $value;
        }


        public function visitBinaryExpressionT(BinaryExpressionTContext $ctx){
            $left = $this->visit($ctx->expr());
            $right = $this->visit($ctx->term());

            $op = $ctx->op->getText();

            if($left["type"] === "nil" || $right["type"] === "nil"){
                $this->addSemanticErrors(
                    "Errror semantico: operacion con nil",
                    $ctx
                );
                return ["type" => "nil", "value"=>null];
            }

            $resultType = $this->resultType($op, $left["type"], $right["type"]);

            if ($resultType === null) {
                $this->addSemanticErrors(
                    "Error semantico: operacion invalida '$op' entre {$left["type"]} y {$right["type"]}",
                    $ctx
                );
                return ["type" => "nil", "value"=>null];
            }

            $l = $this->normalizeValue($left["type"], $left["value"]);
            $r = $this->normalizeValue($right["type"], $right["value"]);

            switch ($op) {
                case '+':
                    $value = ($resultType === "string") ? $l . $r : $l + $r;
                    break;
                case '-':
                    $value = $l - $r;
                    break;
            }

            return [
                "type" => $resultType,
                "value" => $value
            ];
        }

        public function visitBinaryExpressionS(BinaryExpressionSContext $ctx){
            $left = $this->visit($ctx->term());
            $right = $this->visit($ctx->factor());

            $op = $ctx->op->getText();

            if($left["type"] === "nil" || $right["type"] === "nil"){
                $this->addSemanticErrors(
                    "Errror semantico: operacion con nil",
                    $ctx
                );
                return ["type" => "nil", "value"=>null];
            }

            if (($op === '/'  || $op === '%') && $right["value"] == 0) {
                $this->addSemanticErrors(
                    "Errror semantico: division o modulo por 0",
                    $ctx
                );
                return ["type" => "nil", "value"=>null];
            }

            $resultType = $this->resultType($op, $left["type"], $right["type"]);

            if ($resultType === null) {
                $this->addSemanticErrors(
                    "Error semantico: operacion invalida '$op' entre {$left["type"]} y {$right["type"]}",
                    $ctx
                );
                return ["type" => "nil", "value"=>null];
            }

            $l = $this->normalizeValue($left["type"], $left["value"]);
            $r = $this->normalizeValue($right["type"], $right["value"]);

            switch ($op) {
                case '*':
                    if($left["type"] === "string" && $right["type"] === "int"){
                        return [
                            "type" => "string",
                            "value" => str_repeat($l, $r)
                        ];
                    }
                    if($left["type"] === "int" && $right["type"] === "string"){
                        return [
                            "type" => "string",
                            "value" => str_repeat($r, $l)
                        ];
                    }
                    $value = $l * $r;
                    break;
                case '/':
                    $value = ($resultType === "int")
                    ? intval($l / $r)
                    : $l / $r;
                    break;
                case '%':
                    $value = $l % $r;
                    break;
            }

            return [
                "type" => $resultType,
                "value" => $value
            ];
        }

        public function visitRelationalExpresion(RelationalExpresionContext $ctx){
            $left = $this->visit($ctx->relExpr());
            $right = $this->visit($ctx->expr());

            $op = $ctx->op->getText();

            if($left["type"] === "nil" || $right["type"] === "nil"){
                $this->addSemanticErrors(
                    "Errror semantico: operacion con nil",
                    $ctx
                );
                return ["type" => "nil", "value"=>null];
            }

            $resultType = $this->resultType($op, $left["type"], $right["type"]);

            if ($resultType === null) {
                $this->addSemanticErrors(
                    "Error semantico: operacion invalida '$op' entre {$left["type"]} y {$right["type"]}",
                    $ctx
                );
                return ["type" => "nil", "value"=>null];
            }

            $l = $this->normalizeValue($left["type"], $left["value"]);
            $r = $this->normalizeValue($right["type"], $right["value"]);

            switch ($op) {
                case '==': $value = ($l == $r); break;
                case '!=': $value = ($l != $r); break;
                case '>': $value = ($l > $r); break;
                case '>=': $value = ($l >= $r); break;
                case '<': $value = ($l < $r); break;
                case '<=': $value = ($l <= $r); break;
            }

            return [
                "type" => "bool",
                "value" => $value
            ];
        }

        public function visitLogicalExpression(LogicalExpressionContext $ctx){
            $op = $ctx->op->getText();

            $left = $this->visit($ctx->logExpr());

            if($left["type"] === "nil"){
                $this->addSemanticErrors(
                    "Error semantico: operacion con nil",
                    $ctx
                );
                return ["type"=>"nil", "value"=>null];
            }

            if($left["type"] !== "bool"){
                $this->addSemanticErrors(
                    "Error semantico: operacion logica '$op' requiere operandos booleanos",
                    $ctx
                );
                return ["type"=>"nil", "value"=>null];
            }

            if($op === '||'){
                if(!$left["value"]){
                    return ["type" => "bool", "value"=> true];
                }

                $right = $this->visit($ctx->relExpr());

                if($right["type"] !== "bool"){
                    $this->addSemanticErrors(
                        "Error semantico: operacion logica '||' requiere booleanos",
                        $ctx
                    );
                    return ["type" => "nil", "value"=> null];
                }

                return [
                    "type" => "bool",
                    "value" => $right["value"]
                ] ;
            }

            if($op === '&&'){
                if(!$left["value"]){
                    return ["type" => "bool", "value"=> false];
                }

                $right = $this->visit($ctx->relExpr());

                if($right["type"] !== "bool"){
                    $this->addSemanticErrors(
                        "Error semantico: operacion logica '&&' requiere booleanos",
                        $ctx
                    );
                    return ["type" => "nil", "value"=> null];
                }

                return [
                    "type" => "bool",
                    "value" => $right["value"]
                ] ;
            }
        }

        public function visitGroupedExpression(GroupedExpressionContext $ctx){
            return $this->visit($ctx->logExpr());
        }

        public function visitUnaryExpression(UnaryExpressionContext $ctx){
            $res = $this->visit($ctx->factor());

            if($res["type"] === "nil"){
                $this->addSemanticErrors(
                    "Error semantico: operacion con nil", $ctx
                );
                return [
                    "type" => "nil",
                    "value" => null
                ];
            }

            $op = $ctx->op->getText();

            switch ($op) {
                case '-':
                    if($res["type"] === "int" || $res["type"] === "float"){
                        return [
                            "type"=>$res["type"],
                            "value"=> -$res["value"]
                        ];
                    }

                    if($res["type"] === "rune"){
                        return [
                            "type"=>"int",
                            "value"=> -ord($res["value"])
                        ];
                    }
                    break;
                
                case '!':
                    if($res["type"] === "bool"){
                        return [
                            "type" => "bool",
                            "value" => !$res["value"]
                        ];
                    }
                    break;
            }

            $this->addSemanticErrors(
                "Error semantico: no se puede aplicar operador '$op' al tipo ". $res["type"],
                $ctx
            );

            return [
                "value" => null,
                "type" => "nil"
            ];
        }

        //IDENTIFICADORES
        public function visitIdentifier(IdentifierContext $ctx){
            $identificador = $ctx->getText();

            $symbol = $this->getSymbol($identificador);

            if($symbol === null){
                $this->addSemanticErrors("La variable '$identificador' no ha sido declarada", $ctx);

                return [
                    "value" => null,
                    "type" => "error"
                ];
            }

            return $symbol;
        }
       
        //LITERALES

        public function visitAccesoArreglo(AccesoArregloContext $ctx){
            $name = $ctx->IDENTIFICADOR()->getText();

            $symbol = $this->lookupSymbol($name);

            if(!$symbol){
                $this->addSemanticErrors(
                    "Error semantico: la variable '$name' no existe",
                    $ctx
                );
                return ["type"=>"nil", "value"=>null];
            }

            $array = $symbol["value"];

            $index1 = $this->visit($ctx->logExpr(0))["value"];

            if($ctx->logExpr(1)){
                $index2 = $this->visit($ctx->logExpr(1))["value"];

                return $array[$index1][$index2];
            }

            return $array[$index1];
        }

        public function visitArrayLiteral(ArrayLiteralContext $ctx){
            $size = $this->visit($ctx->logExpr());
            $size = $size["value"];

            $tipo = $ctx->tipoBase()->getText();

            $values = [];

            if($ctx->listaExpr()){
                foreach($ctx->listaExpr()->logExpr() as $expr){
                    $res = $this->visit($expr);

                    if($res["type"] !== $tipo){
                        $this->addSemanticErrors(
                            "Error semantico: tipo incompatible en literal del arreglo", $ctx
                        );
                    }
                    $values[] = $res;
                }
            }

            $default = $this->defaultValue($tipo);

            while (count($values) < $size) {
                $values[] = [
                    "type" => $tipo,
                    "value" => $default
                ];
            }

            if(count($values) > $size){
                $this->addSemanticErrors(
                    "Error semantico: hay mas valores que indices en el arreglo",
                    $ctx
                );
            }

            return [
                "type" => "array",
                "subtype" => $tipo,
                "size" => $size,
                "value" => $values
            ];

        }

        public function visitArrayLiteral2D(ArrayLiteral2DContext $ctx){
            $rows = $this->visit($ctx->logExpr(0))["value"];
            $cols = $this->visit($ctx->logExpr(1))["value"];

            $tipo = $ctx->tipoBase()->getText();

            $matriz = [];

            foreach($ctx->listaValores()->listaExpr() as $fila){
                $row = [];

                foreach($fila->logExpr() as $expr){
                    $row[] = $this->visit($expr);
                }

                $matriz[] = $row;
            }

            return[
                "type" => "array2d",
                "subtype" => $tipo,
                "rows" => $rows,
                "cols" => $cols,
                "value" => $matriz
            ];
        }

        public function visitEnteroLit(EnteroLitContext $ctx){
            return [
                "value" => intval($ctx->getText()),
                "type" => "int"
            ];
        }

        public function visitFloatLit(FloatLitContext $ctx){
            return [
                "value" => floatval($ctx->getText()),
                "type" => "float"
            ];
        }

        public function visitBoolLit(BoolLitContext $ctx){
            return [
                "value" => $ctx->getText() === "true",
                "type" => "bool"
            ];
        }

        public function visitStrLit(StrLitContext $ctx){
            return [
                "value" => trim($ctx->getText(), '"'),
                "type" => "string"
            ];
        }

        public function visitNilLit(NilLitContext $ctx){
            return [
                "value" => null,
                "type" => "nil"
            ];
        }

        public function visitRuneLit(RuneLitContext $ctx){
            $text = trim($ctx->getText(), "'");

            if(preg_match('/^\\\\u([0-9A-Fa-f]{4})$/', $text, $matches)){
                $codepoint = hexdec($matches[1]);

                $char = mb_chr($codepoint, "UTF-8");

                return [
                    "value" => $char,
                    "type" => "rune"
                ];
            }

            switch ($text) {
                case '\\n': return ["value" => "\n", "type" => "rune"];
                case '\\t': return ["value" => "\t", "type" => "rune"];
                case '\\r': return ["value" => "\r", "type" => "rune"];
                case '\\\\': return ["value" => "\\", "type" => "rune"];
                case "\\'": return ["value" => "'", "type" => "rune"];
            }

            return [
                "value" => $text,
                "type" => "rune"
            ];
        }
}

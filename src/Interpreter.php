<?php

    class BreakException extends Exception {}
    class ContinueException extends Exception {}

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
    use Context\UnaryExpressionContext;
    use Context\GroupedExpressionContext;
    use Context\IdentifierContext;
    use Context\IfSentenciaContext;
    use Context\LogicalExpressionContext;
    use Context\RelationalExpresionContext;
    use Context\RuneLitContext;
    use Context\SentenciaBreakContext;
    use Context\SentenciaContinueContext;
    use Context\SentenciaForContext;
    use Context\SentenciaIfContext;
    use Context\SentenciaSwitchContext;

    class Interpreter extends GrammarBaseVisitor{
        public $console = "";
        public $scopes = [];

        //MANEJO DE SCOPES
        public function __construct() {
            $this->scopes[] = [];
        }

        private function currentScopeIndex(){
            return count($this->scopes) - 1;
        }

        private function declareSymbol($id, $data){
            $current = $this->currentScopeIndex();
            
            if (isset($this->scopes[$current][$id])) {
                //ERROR ID DECLARADO EN ESTA SCOPE
            }

            $this->scopes[$current][$id] = $data;
        }

        private function findSymbolScope($id){
            for ($i = count($this->scopes) - 1; $i >= 0; $i--) {
                if (isset($this->scopes[$i][$id])) {
                    return $i;
                }
            }
            return -1;
        }

        private function getSymbol($id){
            $index = $this->findSymbolScope($id);
            if ($index === -1){
                //ERROR NO DEFINIDIA
            }
            return $this->scopes[$index][$id];
        }

        private function setSymbolValue($id, $value) {
            $index = $this->findSymbolScope($id);
            if ($index === -1) {
                //VARIABLE NO DEFINIDA
            }
            if ($this->scopes[$index][$id]["const"]) {
                //constante
            }

            $this->scopes[$index][$id]["value"] = $value;
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

                    if ($cond["type"] !== "bool" || $cond["value"] === false){
                        break;
                    }

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
            if($ctx->declaracionCorta() !== null){
                $this->visit($ctx->declaracionCorta());
            }

            while (true) {
                if ($ctx->logExpr() !== null){
                    $cond = $this->visit($ctx->logExpr());

                    if($cond["type"] !== "bool" || $cond["value"] === false){
                        break;
                    }
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
            return null;
        }

        //AUMENTODECREMENTO
        public function visitExpFor(ExpForContext $ctx){
            $id = $ctx->IDENTIFICADOR()->getText();

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

                        if ($caseValue["value"] === $switchV["value"]){
                            $this->visit($case->bloque());

                            return null;
                        }
                    }
                }

                if ($default !== null){
                    $this->visit($default->bloque());
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

                //VERIFICAR TIPO

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

        //MANIPULACION DE NIL ->

        //DECLARACION CONSTANTES
        public function visitDeclaracionConst(DeclaracionConstContext $ctx){
            $valorInicial = $this->visit($ctx->logExpr());
            $id = $ctx->IDENTIFICADOR()->getText();
            $tipoVariable = $ctx->tipos()->getText();

            //ERROR DE QUE EXISTA EL VALOR INICIAL

            $tipoExpresion = $valorInicial["type"];

            if($tipoVariable !== $tipoExpresion){
                //ERROR DE QUE NO COINCIDEN TIPOS
            }

            //ERROR DE QUE YA FUE DECLARADO COMO VARIABLE

            $this->declareSymbol($id, [
                'type' => $tipoVariable,
                'value' => $valorInicial["value"],
                'const' => true
            ]);
            

            return null;
        }

        //ASIGNACION
        public function visitAsignacion(AsignacionContext $ctx){
            $id = $ctx->IDENTIFICADOR()->getText();
            $expresion = $this->visit($ctx->logExpr());
            $op = $ctx->simboloAsignacion()->getText();

            $simbolo = $this->getSymbol($id);

            if($simbolo["type"] !== $expresion["type"]){
                //ERROR DE TIPOS
                return null;
            }

            $valorActual = $simbolo["value"];
            $nuevoValor = null;

            switch ($op) {
                case '=':  $nuevoValor = $expresion["value"]; break;
                case '+=': $nuevoValor = $valorActual + $expresion["value"]; break;
                case '-=': $nuevoValor = $valorActual - $expresion["value"]; break;
                case '/=': $nuevoValor = $valorActual / $expresion["value"]; break;
                case '*=': $nuevoValor = $valorActual * $expresion["value"]; break;
            }

            $this->setSymbolValue($id, $nuevoValor);

            return null;

        }

        //DECLARACION CORTA
        public function visitDeclaracionCorta(DeclaracionCortaContext $ctx){
            $listaIds = $ctx->listaId();
            $listaValores = $ctx->listaExpr();

            $expresiones = $listaValores->logExpr();
            $ids = $listaIds->IDENTIFICADOR();
            
            for ($i=0; $i < count($ids) ; $i++) { 
                $name = $ids[$i]->getText();
                $res = $this->visit($expresiones[$i]);
                
                $this->declareSymbol($name,[
                    'type' => $res["type"],
                    'value' => $res["value"],
                    'const' => false
                ]);
            }
            //ERROR TAMAÑO LISTAS - YA FUE DECLARADO COMO CONSTANTE
            return null;
        }

        //DECLARACION
        public function visitDeclaracion(DeclaracionContext $ctx){
            $valorInicial = null;
            $listaIds = $ctx->listaId();
            $listaValores = $ctx->listaExpr();
            $tipoVariable = $ctx->tipos()->getText();

            if($listaValores == null){
                //TODAS LAS VARIABLES SE DECLARAN CON VALOR PREDETERMINADO
                switch ($tipoVariable) {
                    case 'int':
                        $valorInicial = 0;
                        break;
                    case 'float':
                        $valorInicial = 0.0;
                        break;
                    case 'bool':
                        $valorInicial = false;
                        break;
                    case 'string':
                        $valorInicial = "";
                        break;
                    case 'rune':
                        $valorInicial = '\0';
                        break;
                }
                foreach ($listaIds->IDENTIFICADOR() as $id) {
                    $name = $id->getText();
                    $this->declareSymbol($name,[
                        'type' => $tipoVariable,
                        'value' => $valorInicial,
                        'const' => false
                    ]);
                }
            } else {
                //LAS VARIABLES SE INICIAN CON LOS VALORES DE LA LISTAVALORES
                $expresiones = $listaValores->logExpr();
                $ids = $listaIds->IDENTIFICADOR();
                
                for ($i=0; $i < count($ids) ; $i++) { 
                    $name = $ids[$i]->getText();
                    $res = $this->visit($expresiones[$i]);

                    if ($res["type"] === $tipoVariable){
                        $this->declareSymbol($name, [
                            'type' => $tipoVariable,
                            'value' => $res["value"],
                            'const' => false
                        ]);
                    } //else {
                        //ERROR DE TIPO INCOMPATIBLE Y TAMAÑO DISTINTO Y COMO CONSTANTE
                    //}
                }
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

                switch ($resultado["type"]) {
                    case "bool":
                        $valores[] = $resultado["value"] ? "true" : "false";
                        break;
                    case "rune":
                        $valores[] = $resultado["value"];
                        break;
                    default:
                        $valores[] = $resultado["value"];
                }
            }

            $salida = implode(" ", $valores);

            $this->console .= $salida . "\n";


            return null;
        }

        public function visitBloqueMain(BloqueMainContext $ctx){

            $this->visit($ctx->bloque());

            $this->collectSymbols();

            return null;
        }

        public function visitBloque(BloqueContext $ctx){
            array_push($this->scopes, []);


            foreach ($ctx->i() as $instruction) {
                $this->visit($instruction);
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
                    $this->visibleSymbols[$name] = $data;
                }
            }
        }

        public function visitPrograma(ProgramaContext $ctx){
            $bmain = $ctx->bMain();

            return $this->visit($bmain);
        }

        //expresiones
        public function visitBinaryExpressionT(BinaryExpressionTContext $ctx)
        {
            $left = $this->visit($ctx->expr());
            $right = $this->visit($ctx->term());

            $leftValue = $left["value"]; 
            $rightValue = $right["value"];

            $leftT = $left["type"];
            $rightT = $right["type"];

            $op = $ctx->op->getText();

            if ($leftT === "int"){
                if ($rightT === "int") {
                    switch ($op){
                        case '+': return ["value" => $leftValue + $rightValue, "type" => "int"];
                        case '-': return ["value" => $leftValue - $rightValue, "type" => "int"];
                    }
                }
                if ($rightT === "float") {
                    switch ($op){
                        case '+': return ["value" => $leftValue + $rightValue, "type" => "float"];
                        case '-': return ["value" => $leftValue - $rightValue, "type" => "float"];
                    }
                }
                if ($rightT === "rune") {
                    $rightValue = ord($rightValue);
                    switch ($op){
                        case '+': return ["value" => $leftValue + $rightValue, "type" => "int"];
                        case '-': return ["value" => $leftValue - $rightValue, "type" => "int"];
                    }
                }
            }

            if ($leftT === "float"){
                if ($rightT === "int") {
                    switch ($op){
                        case '+': return ["value" => $leftValue + $rightValue, "type" => "float"];
                        case '-': return ["value" => $leftValue - $rightValue, "type" => "float"];
                    }
                }
                if ($rightT === "float") {
                    switch ($op){
                        case '+': return ["value" => $leftValue + $rightValue, "type" => "float"];
                        case '-': return ["value" => $leftValue - $rightValue, "type" => "float"];
                    }
                }
                if ($rightT === "rune") {
                    $rightValue = ord($rightValue);
                    switch ($op){
                        case '+': return ["value" => $leftValue + $rightValue, "type" => "float"];
                        case '-': return ["value" => $leftValue - $rightValue, "type" => "float"];
                    }
                }
            }

            if ($leftT === "rune"){
                $leftValue = ord($leftValue);
                if ($rightT === "int") {
                    switch ($op){
                        case '+': return ["value" => $leftValue + $rightValue, "type" => "int"];
                        case '-': return ["value" => $leftValue - $rightValue, "type" => "int"];
                    }
                }
                if ($rightT === "float") {
                    switch ($op){
                        case '+': return ["value" => $leftValue + $rightValue, "type" => "float"];
                        case '-': return ["value" => $leftValue - $rightValue, "type" => "float"];
                    }
                }
                if ($rightT === "rune") {
                    $rightValue = ord($rightValue);
                    switch ($op){
                        case '+': return ["value" => $leftValue + $rightValue, "type" => "int"];
                        case '-': return ["value" => $leftValue - $rightValue, "type" => "int"];
                    }
                }
            }

            if ($leftT === "string"){
                if ($rightT === "string") {
                    switch ($op){
                        case '+': return ["value" => $leftValue . $rightValue, "type" => "string"];
                    }
                }
            }
            
            //AQUI MOSTRAMOS ERROR
            return null;
        }

        public function visitBinaryExpressionS(BinaryExpressionSContext $ctx)
        {
            $left = $this->visit($ctx->term());
            $right = $this->visit($ctx->factor());

            $leftValue = $left["value"]; 
            $rightValue = $right["value"];

            //AGREGAR ERROR POR SI RIGHTVALUE ES 0 O ALGUN VALOR QUE GENERE ERROR AL DIVIDIR

            $leftT = $left["type"];
            $rightT = $right["type"];

            $op = $ctx->op->getText();

            if ($leftT === "int"){
                if ($rightT === "int") {
                    switch ($op){
                        case '*': return ["value" => $leftValue * $rightValue, "type" => "int"];
                        case '/': return ["value" => intval($leftValue / $rightValue), "type" => "int"];
                        case '%': return ["value" => $leftValue % $rightValue, "type" => "int"];
                    }
                }
                if ($rightT === "float") {
                    switch ($op){
                        case '*': return ["value" => $leftValue * $rightValue, "type" => "float"];
                        case '/': return ["value" => $leftValue / $rightValue, "type" => "float"];
                    }
                }
                if ($rightT === "rune") {
                    $rightValue = ord($rightValue);
                    switch ($op){
                        case '*': return ["value" => $leftValue * $rightValue, "type" => "int"];
                        case '/': return ["value" => intval($leftValue / $rightValue), "type" => "int"];
                        case '%': return ["value" => $leftValue % $rightValue, "type" => "int"];
                    }
                }
            }

            if ($leftT === "float"){
                if ($rightT === "int") {
                    switch ($op){
                        case '*': return ["value" => $leftValue * $rightValue, "type" => "float"];
                        case '/': return ["value" => $leftValue / $rightValue, "type" => "float"];
                    }
                }
                if ($rightT === "float") {
                    switch ($op){
                        case '*': return ["value" => $leftValue * $rightValue, "type" => "float"];
                        case '/': return ["value" => $leftValue / $rightValue, "type" => "float"];
                    }
                }
                if ($rightT === "rune") {
                    $rightValue = ord($rightValue);
                    switch ($op){
                        case '*': return ["value" => $leftValue * $rightValue, "type" => "float"];
                        case '/': return ["value" => $leftValue / $rightValue, "type" => "float"];
                    }
                }
            }

            if ($leftT === "rune"){
                $leftValue = ord($leftValue);
                if ($rightT === "int") {
                    switch ($op){
                        case '*': return ["value" => $leftValue * $rightValue, "type" => "int"];
                        case '/': return ["value" => intval($leftValue / $rightValue), "type" => "int"];
                        case '%': return ["value" => $leftValue % $rightValue, "type" => "int"];
                    }
                }
                if ($rightT === "float") {
                    switch ($op){
                        case '*': return ["value" => $leftValue * $rightValue, "type" => "float"];
                        case '/': return ["value" => $leftValue / $rightValue, "type" => "float"];
                    }
                }
                if ($rightT === "rune") {
                    $rightValue = ord($rightValue);
                    switch ($op){
                        case '*': return ["value" => $leftValue * $rightValue, "type" => "int"];
                        case '/': return ["value" => intval($leftValue / $rightValue), "type" => "int"];
                        case '%': return ["value" => $leftValue % $rightValue, "type" => "int"];
                    }
                }
            }

            if ($leftT === "string"){
                if ($rightT === "int") {
                    switch ($op){
                        case '*':
                            if ($rightValue <= 0) {
                                return ["value" => "", "type" => "string"];
                            }
                            $concatenacion = $leftValue;
                            for ($i=0; $i < $rightValue - 1; $i++) { 
                                $leftValue = $leftValue . $concatenacion;
                            }
                            return ["value" => $leftValue, "type" => "string"];
                    }
                }
            }
            
            //AQUI MOSTRAMOS ERROR
            return null;
        }

        public function visitRelationalExpresion(RelationalExpresionContext $ctx){
            $left = $this->visit($ctx->relExpr());
            $right = $this->visit($ctx->expr());

            $leftValue = $left["value"]; 
            $rightValue = $right["value"];

            $leftT = $left["type"];
            $rightT = $right["type"];

            $op = $ctx->op->getText();

            if ($leftT === "int"){
                if ($rightT === "int") {
                    switch ($op){
                        case '==': return ["value" => $leftValue === $rightValue, "type" => "bool"];
                        case '!=': return ["value" => $leftValue !== $rightValue, "type" => "bool"];
                        case '>': return ["value" => $leftValue > $rightValue, "type" => "bool"];
                        case '>=': return ["value" => $leftValue >= $rightValue, "type" => "bool"];
                        case '<': return ["value" => $leftValue < $rightValue, "type" => "bool"];
                        case '<=': return ["value" => $leftValue <= $rightValue, "type" => "bool"];
                    }
                }
                if ($rightT === "float") {
                    switch ($op){
                        case '==': return ["value" => $leftValue == $rightValue, "type" => "bool"];
                        case '!=': return ["value" => $leftValue != $rightValue, "type" => "bool"];
                        case '>': return ["value" => $leftValue > $rightValue, "type" => "bool"];
                        case '>=': return ["value" => $leftValue >= $rightValue, "type" => "bool"];
                        case '<': return ["value" => $leftValue < $rightValue, "type" => "bool"];
                        case '<=': return ["value" => $leftValue <= $rightValue, "type" => "bool"];
                    }
                }
                if ($rightT === "rune") {
                    $rightValue = ord($rightValue);
                    switch ($op){
                        case '==': return ["value" => $leftValue === $rightValue, "type" => "bool"];
                        case '!=': return ["value" => $leftValue !== $rightValue, "type" => "bool"];
                        case '>': return ["value" => $leftValue > $rightValue, "type" => "bool"];
                        case '>=': return ["value" => $leftValue >= $rightValue, "type" => "bool"];
                        case '<': return ["value" => $leftValue < $rightValue, "type" => "bool"];
                        case '<=': return ["value" => $leftValue <= $rightValue, "type" => "bool"];
                    }
                }
            }

            if ($leftT === "float"){
                if ($rightT === "int") {
                    switch ($op){
                        case '==': return ["value" => $leftValue === $rightValue, "type" => "bool"];
                        case '!=': return ["value" => $leftValue !== $rightValue, "type" => "bool"];
                        case '>': return ["value" => $leftValue > $rightValue, "type" => "bool"];
                        case '>=': return ["value" => $leftValue >= $rightValue, "type" => "bool"];
                        case '<': return ["value" => $leftValue < $rightValue, "type" => "bool"];
                        case '<=': return ["value" => $leftValue <= $rightValue, "type" => "bool"];
                    }
                }
                if ($rightT === "float") {
                    switch ($op){
                        case '==': return ["value" => $leftValue == $rightValue, "type" => "bool"];
                        case '!=': return ["value" => $leftValue != $rightValue, "type" => "bool"];
                        case '>': return ["value" => $leftValue > $rightValue, "type" => "bool"];
                        case '>=': return ["value" => $leftValue >= $rightValue, "type" => "bool"];
                        case '<': return ["value" => $leftValue < $rightValue, "type" => "bool"];
                        case '<=': return ["value" => $leftValue <= $rightValue, "type" => "bool"];
                    }
                }
                if ($rightT === "rune") {
                    $rightValue = ord($rightValue);
                    switch ($op){
                        case '==': return ["value" => $leftValue === $rightValue, "type" => "bool"];
                        case '!=': return ["value" => $leftValue !== $rightValue, "type" => "bool"];
                        case '>': return ["value" => $leftValue > $rightValue, "type" => "bool"];
                        case '>=': return ["value" => $leftValue >= $rightValue, "type" => "bool"];
                        case '<': return ["value" => $leftValue < $rightValue, "type" => "bool"];
                        case '<=': return ["value" => $leftValue <= $rightValue, "type" => "bool"];
                    }
                }
            }

            if ($leftT === "rune"){
                $leftValue = ord($leftValue);
                if ($rightT === "int") {
                    switch ($op){
                        case '==': return ["value" => $leftValue === $rightValue, "type" => "bool"];
                        case '!=': return ["value" => $leftValue !== $rightValue, "type" => "bool"];
                        case '>': return ["value" => $leftValue > $rightValue, "type" => "bool"];
                        case '>=': return ["value" => $leftValue >= $rightValue, "type" => "bool"];
                        case '<': return ["value" => $leftValue < $rightValue, "type" => "bool"];
                        case '<=': return ["value" => $leftValue <= $rightValue, "type" => "bool"];
                    }
                }
                if ($rightT === "float") {
                    switch ($op){
                        case '==': return ["value" => $leftValue == $rightValue, "type" => "bool"];
                        case '!=': return ["value" => $leftValue != $rightValue, "type" => "bool"];
                        case '>': return ["value" => $leftValue > $rightValue, "type" => "bool"];
                        case '>=': return ["value" => $leftValue >= $rightValue, "type" => "bool"];
                        case '<': return ["value" => $leftValue < $rightValue, "type" => "bool"];
                        case '<=': return ["value" => $leftValue <= $rightValue, "type" => "bool"];
                    }
                }
                if ($rightT === "rune") {
                    $rightValue = ord($rightValue);
                    switch ($op){
                        case '==': return ["value" => $leftValue === $rightValue, "type" => "bool"];
                        case '!=': return ["value" => $leftValue !== $rightValue, "type" => "bool"];
                        case '>': return ["value" => $leftValue > $rightValue, "type" => "bool"];
                        case '>=': return ["value" => $leftValue >= $rightValue, "type" => "bool"];
                        case '<': return ["value" => $leftValue < $rightValue, "type" => "bool"];
                        case '<=': return ["value" => $leftValue <= $rightValue, "type" => "bool"];
                    }
                }
            }

            if ($leftT === "bool"){
                if ($rightT === "bool") {
                    switch ($op){
                        case '==': return ["value" => $leftValue === $rightValue, "type" => "bool"];
                        case '!=': return ["value" => $leftValue !== $rightValue, "type" => "bool"];
                    }
                }
            }

            if ($leftT === "string"){
                if ($rightT === "string") {
                    switch ($op){
                        case '==': return ["value" => $leftValue === $rightValue, "type" => "bool"];
                        case '!=': return ["value" => $leftValue !== $rightValue, "type" => "bool"];
                        case '>': return ["value" => $leftValue > $rightValue, "type" => "bool"];
                        case '>=': return ["value" => $leftValue >= $rightValue, "type" => "bool"];
                        case '<': return ["value" => $leftValue < $rightValue, "type" => "bool"];
                        case '<=': return ["value" => $leftValue <= $rightValue, "type" => "bool"];
                    }
                }
            }

            //ERRORES
            return null;
        }

        public function visitLogicalExpression(LogicalExpressionContext $ctx){
            $op = $ctx->op->getText();

            switch ($op){
                case '&&':
                    $left = $this->visit($ctx->logExpr());
                    $leftValue = $left["value"];
                    $leftT = $left["type"];
                    if($leftT === "bool"){
                        if ($leftValue){
                            $right = $this->visit($ctx->relExpr());
                            $rightValue = $right["value"];
                            $rightT = $right["type"];
                            if($rightT === "bool"){
                                if ($rightValue) {
                                return ["value" => true, "type" => "bool"];
                            }
                                return ["value" => false, "type" => "bool"];
                            }     
                        } else {
                            return ["value" => false, "type" => "bool"];
                        }
                    }
                    break; 
                case '||': 
                    $left = $this->visit($ctx->logExpr());
                    $leftValue = $left["value"];
                    $leftT = $left["type"];
                    if($leftT === "bool"){
                        if (!$leftValue){
                            $right = $this->visit($ctx->relExpr());
                            $rightValue = $right["value"];
                            $rightT = $right["type"];
                            if($leftT === "bool"){
                                if (!$rightValue) {
                                    return ["value" => false, "type" => "bool"];
                                }
                                return ["value" => true, "type" => "bool"];   
                            } 
                        } else {
                            return ["value" => true, "type" => "bool"];
                        }
                    } 
                    break;
            }   

            //ERRORES
            return null;         
        }

        public function visitGroupedExpression(GroupedExpressionContext $ctx){
            return $this->visit($ctx->logExpr());
        }

        public function visitUnaryExpression(UnaryExpressionContext $ctx){
            $res = $this->visit($ctx->factor());
            if ($res["type"] === "int" || $res["type"] === "float"){
                return ["value" => -$res["value"], "type" => $res["type"]];
            }
            //MENSAJE DE ERROR DE QUE NO SE PUEDE HACER LA CONVERSION
            return -$res;
        }

        //IDENTIFICADORES
        public function visitIdentifier(IdentifierContext $ctx){
            $identificador = $ctx->getText();

            return $this->getSymbol($identificador);
        }
       
        //LITERALES
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

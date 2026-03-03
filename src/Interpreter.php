<?php
    
    use Context\ProgramaContext;
    use Context\FuncionImprimirContext;
    use Context\BloqueMainContext;
    use Context\FloatLitContext;
    use Context\EnteroLitContext;
    use Context\BoolLitContext;
    use Context\StrLitContext;
    use Context\BinaryExpressionSContext;
    use Context\BinaryExpressionTContext;
    use Context\DeclaracionContext;
    use Context\DeclaracionCortaContext;
    use Context\UnaryExpressionContext;
    use Context\GroupedExpressionContext;
    use Context\IdentifierContext;
use Context\RuneLitContext;

use function PHPSTORM_META\type;

    class Interpreter extends GrammarBaseVisitor{
        public $console = "";
        public $simbols = [];

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
                    $this->simbols[$name] = [
                        'type' => $tipoVariable,
                        'value' => $valorInicial
                    ];
                }
            } else {
                //LAS VARIABLES SE INICIAN CON LOS VALORES DE LA LISTAVALORES
                $expresiones = $listaValores->logExpr();
                $ids = $listaIds->IDENTIFICADOR();
                
                for ($i=0; $i < count($ids) ; $i++) { 
                    $name = $ids[$i]->getText();
                    $res = $this->visit($expresiones[$i]);

                    if ($res["type"] === $tipoVariable){
                        $this->simbols[$name] = [
                            'type' => $tipoVariable,
                            'value' => $res["value"]
                        ];
                    } //else {
                        //ERROR DE TIPO INCOMPATIBLE
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

                $valores[] = $resultado["value"];
            }

            $salida = implode(" ", $valores);

            $this->console .= $salida . "\n";


            return null;
        }

        public function visitBloqueMain(BloqueMainContext $ctx){
            $result = "";

            foreach ($ctx->i() as $instruction) {
                $res = $this->visit($instruction);
                if ($res !== null){
                    $result .= $res . "\n";
                }
            }

            return $result;
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

            $op = $ctx->op->getText();

            $resultType = "int";
            
            switch ($op){
                case '+': return ["value" => $leftValue + $rightValue, "type" => $resultType];
                case '-': return ["value" => $leftValue - $rightValue, "type" => $resultType];
            }

            return null;
        }

        public function visitBinaryExpressionS(BinaryExpressionSContext $ctx)
        {
            $left = $this->visit($ctx->term());
            $right = $this->visit($ctx->modterm());

            $op = $ctx->op->getText();
            switch ($op){
                case '*': return $left * $right;
                case '/': return $left / $right;
            }

            return null;
        }

        public function visitGroupedExpression(GroupedExpressionContext $ctx){
            return $this->visit($ctx->logExpr());
        }

        public function visitUnaryExpression(UnaryExpressionContext $ctx){
            $value = $this->visit($ctx->factor());
            return -$value;
        }

        //IDENTIFICADORES
        public function visitIdentifier(IdentifierContext $ctx){
            $identificador = $ctx->getText();

            if(array_key_exists($identificador, $this->simbols)){
                return $this->simbols[$identificador];
            }
            //aqui deberia de mostrar el error
            return null;
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
            return [
                "value" => trim($ctx->getText(), "'"),
                "type" => "rune"
            ];
        }
}

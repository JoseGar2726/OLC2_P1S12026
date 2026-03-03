<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tarea 1</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<?php
require __DIR__ . '/vendor/autoload.php';
require_once 'bootstrap.php';

use Antlr\Antlr4\Runtime\InputStream;
use Antlr\Antlr4\Runtime\CommonTokenStream;
use Antlr\Antlr4\Runtime\Error\Listeners\ANTLRErrorListener;
use Antlr\Antlr4\Runtime\Error\ErrorListener;
use Antlr\Antlr4\Runtime\RecognitionException;
use Antlr\Antlr4\Runtime\Recognizer;

$input = "";
$output = "";
$isError = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $input = $_POST["expression"] ?? "";

    if (!empty($input)) {
        try {

            //LEXER

            $inputStream = InputStream::fromString($input);
            $lexer  = new GrammarLexer($inputStream);
            $tokens = new CommonTokenStream($lexer);
            
            $tokens -> fill();

            $tokenlist = [];
            $errors = [];

            foreach ($tokens->getAllTokens() as $token) {
                $typeName = $lexer->getVocabulary()->getSymbolicName($token->getType());

                if ($typeName === "ERROR") {
                    $errors[] = [
                        "text" => $token->getText(),
                        "type" => $typeName,
                        "line" => $token->getLine(),
                        "column" => $token->getCharPositionInLine()
                    ];
                } else {
                    $tokenlist[] = [
                        "text" => $token->getText(),
                        "type" => $typeName,
                        "line" => $token->getLine(),
                        "column" => $token->getCharPositionInLine()
                    ];
                }
            }

            $tokensJson = json_encode($tokenlist, JSON_PRETTY_PRINT);
            $errorsJson = json_encode($errors, JSON_PRETTY_PRINT);

            $tokens->seek(0);

            //PARSER

            $parser = new GrammarParser($tokens);

            $parser -> removeErrorListeners();

            $sintaxErrors = [];
            $parser->addErrorListener(new class($syntaxErros) implements \Antlr\Antlr4\Runtime\Error\Listeners\ANTLRErrorListener{
                private $errors;
                public function __construct(&$errors) { $this->errors = &$errors; }
                
                public function syntaxError(
                    \Antlr\Antlr4\Runtime\Recognizer $recognizer,
                    $offendingSymbol,
                    int $line,
                    int $charPositionInLine,
                    string $msg,
                    $e = null
                ) : void {
                    $this->errors[] = [
                        "text" => $offendingSymbol ? $offendingSymbol->getText() : "",
                        "line" => $line,
                        "column" => $charPositionInLine,
                        "message" => $msg
                    ];
                }

                public function reportAmbiguity(
                    \Antlr\Antlr4\Runtime\Parser $recognizer,
                    $dfa,
                    int $startIndex,
                    int $stopIndex,
                    bool $exact,
                    $ambigAlts,
                    $configs
                ) : void {}

                public function reportAttemptingFullContext(
                    \Antlr\Antlr4\Runtime\Parser $recognizer,
                    $dfa,
                    int $startIndex,
                    int $stopIndex,
                    $conflictingAlts,
                    $configs
                ) : void {}

                public function reportContextSensitivity(
                    \Antlr\Antlr4\Runtime\Parser $recognizer,
                    $dfa,
                    int $startIndex,
                    int $stopIndex,
                    int $prediction,
                    $configs
                ) : void {}
            });

        
            //PARSEAR
            $tree = $parser->p();

            //errores sintacticos
            $syntaxErrorsJson = json_encode($syntaxErros, JSON_PRETTY_PRINT);

            $interpreter = new Interpreter();
            $interpreter->visit($tree);

            $output = $interpreter->console;

            //TABLA DE VARIABLES
            $simbolsJson = json_encode($interpreter->simbols, JSON_PRETTY_PRINT);


        } catch (Exception $e) {
            $output = "Error: " . $e->getMessage();
            $isError = true;
        }
    } else {
        $output = "Ingrese una expresión.";
        $isError = true;
    }
}
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card shadow-lg">
                <div class="card-header bg-dark text-white">
                    <h4 class="mb-0">Nombre: Jose Antonio Garcia Roca -     Carnet: 202401166</h4>
                </div>

                <div class="card-body">

                    <form method="post">
                        <div class="mb-3">
                            <label class="form-label fw-bold">Ingrese una expresión:</label>
                            <textarea 
                                name="expression"
                                rows="4"
                                class="form-control"
                                placeholder="Ej: 2.5 + 1 * (7 - 2) / 0.5"
                            ><?php echo htmlspecialchars($input); ?></textarea>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg">
                                Ejecutar
                            </button>
                        </div>
                    </form>

                    <?php if (!empty($output)): ?>
                        <div class="alert mt-4 <?php echo $isError ? 'alert-danger' : 'alert-success'; ?>">
                            <?php echo nl2br(htmlspecialchars($output)); ?>
                        </div>
                    <?php endif; ?>

                    <script>
                        const tokens = <?php echo $tokensJson ?? '[]'; ?>;
                        const errors = <?php echo $errorsJson ?? '[]'; ?>;
                        const syntaxErrors = <?php echo $syntaxErrorsJson ?? '[]'; ?>;
                        const symbols = <?php echo $simbolsJson ?? '{}'; ?>;

                        console.log("TOKENS:", tokens);
                        console.log("LEXICAL ERRORS:", errors);
                        console.log("SYNTACTIC ERRORS:", syntaxErrors)
                        console.log("TABLA DE SIMBOLOS:", symbols);
                    </script>

                </div>
            </div>

        </div>
    </div>
</div>

</body>
</html>
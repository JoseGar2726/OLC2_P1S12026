<?php

/*
 * Generated from Grammar.g4 by ANTLR 4.13.1
 */


use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Tree\ErrorNode;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;

/**
 * This class provides an empty implementation of {@see GrammarListener},
 * which can be extended to create a listener which only needs to handle a subset
 * of the available methods.
 */
class GrammarBaseListener implements GrammarListener
{
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterPrograma(Context\ProgramaContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitPrograma(Context\ProgramaContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterTopLevel(Context\TopLevelContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitTopLevel(Context\TopLevelContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterBloqueMain(Context\BloqueMainContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitBloqueMain(Context\BloqueMainContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterFuncionImprimir(Context\FuncionImprimirContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitFuncionImprimir(Context\FuncionImprimirContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterDeclaration(Context\DeclarationContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitDeclaration(Context\DeclarationContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterShortDeclaration(Context\ShortDeclarationContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitShortDeclaration(Context\ShortDeclarationContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterConstDeclaration(Context\ConstDeclarationContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitConstDeclaration(Context\ConstDeclarationContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterAsignation(Context\AsignationContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitAsignation(Context\AsignationContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterIfSentencia(Context\IfSentenciaContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitIfSentencia(Context\IfSentenciaContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterSwitchSentencia(Context\SwitchSentenciaContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitSwitchSentencia(Context\SwitchSentenciaContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterForSentencia(Context\ForSentenciaContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitForSentencia(Context\ForSentenciaContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterIncDec(Context\IncDecContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitIncDec(Context\IncDecContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterDFunction(Context\DFunctionContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitDFunction(Context\DFunctionContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterSentenciaReturn(Context\SentenciaReturnContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitSentenciaReturn(Context\SentenciaReturnContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterLlamarFuncion(Context\LlamarFuncionContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitLlamarFuncion(Context\LlamarFuncionContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterSentenciaContinue(Context\SentenciaContinueContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitSentenciaContinue(Context\SentenciaContinueContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterSentenciaBreak(Context\SentenciaBreakContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitSentenciaBreak(Context\SentenciaBreakContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterFuncLen(Context\FuncLenContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitFuncLen(Context\FuncLenContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterFuncNow(Context\FuncNowContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitFuncNow(Context\FuncNowContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterFuncSub(Context\FuncSubContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitFuncSub(Context\FuncSubContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterFuncType(Context\FuncTypeContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitFuncType(Context\FuncTypeContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterLlamadaFuncion(Context\LlamadaFuncionContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitLlamadaFuncion(Context\LlamadaFuncionContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterRetornar(Context\RetornarContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitRetornar(Context\RetornarContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterFuncion(Context\FuncionContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitFuncion(Context\FuncionContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterListaRetorno(Context\ListaRetornoContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitListaRetorno(Context\ListaRetornoContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterListaParametros(Context\ListaParametrosContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitListaParametros(Context\ListaParametrosContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterAccesoArreglo(Context\AccesoArregloContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitAccesoArreglo(Context\AccesoArregloContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterListaValores(Context\ListaValoresContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitListaValores(Context\ListaValoresContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterSentenciaFor(Context\SentenciaForContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitSentenciaFor(Context\SentenciaForContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterForClasico(Context\ForClasicoContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitForClasico(Context\ForClasicoContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterCondFor(Context\CondForContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitCondFor(Context\CondForContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterExpFor(Context\ExpForContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitExpFor(Context\ExpForContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterSentenciaSwitch(Context\SentenciaSwitchContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitSentenciaSwitch(Context\SentenciaSwitchContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterBloqueSwitch(Context\BloqueSwitchContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitBloqueSwitch(Context\BloqueSwitchContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterBloqueCase(Context\BloqueCaseContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitBloqueCase(Context\BloqueCaseContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterBloqueDefault(Context\BloqueDefaultContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitBloqueDefault(Context\BloqueDefaultContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterSentenciaIf(Context\SentenciaIfContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitSentenciaIf(Context\SentenciaIfContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterBloque(Context\BloqueContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitBloque(Context\BloqueContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterAsignacion(Context\AsignacionContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitAsignacion(Context\AsignacionContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterImprimir(Context\ImprimirContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitImprimir(Context\ImprimirContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterDeclaracion(Context\DeclaracionContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitDeclaracion(Context\DeclaracionContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterDeclaracionCorta(Context\DeclaracionCortaContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitDeclaracionCorta(Context\DeclaracionCortaContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterDeclaracionConst(Context\DeclaracionConstContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitDeclaracionConst(Context\DeclaracionConstContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterListaExpr(Context\ListaExprContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitListaExpr(Context\ListaExprContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterListaId(Context\ListaIdContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitListaId(Context\ListaIdContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterLogicalExpression(Context\LogicalExpressionContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitLogicalExpression(Context\LogicalExpressionContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterToRelExpr(Context\ToRelExprContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitToRelExpr(Context\ToRelExprContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterToExpr(Context\ToExprContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitToExpr(Context\ToExprContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterRelationalExpresion(Context\RelationalExpresionContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitRelationalExpresion(Context\RelationalExpresionContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterToTerm(Context\ToTermContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitToTerm(Context\ToTermContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterBinaryExpressionT(Context\BinaryExpressionTContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitBinaryExpressionT(Context\BinaryExpressionTContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterBinaryExpressionS(Context\BinaryExpressionSContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitBinaryExpressionS(Context\BinaryExpressionSContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterToFactor(Context\ToFactorContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitToFactor(Context\ToFactorContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterArrayLit(Context\ArrayLitContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitArrayLit(Context\ArrayLitContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterArrayLit2D(Context\ArrayLit2DContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitArrayLit2D(Context\ArrayLit2DContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterArregloAcceso(Context\ArregloAccesoContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitArregloAcceso(Context\ArregloAccesoContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterGroupedExpression(Context\GroupedExpressionContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitGroupedExpression(Context\GroupedExpressionContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterUnaryExpression(Context\UnaryExpressionContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitUnaryExpression(Context\UnaryExpressionContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterFloatLit(Context\FloatLitContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitFloatLit(Context\FloatLitContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterEnteroLit(Context\EnteroLitContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitEnteroLit(Context\EnteroLitContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterBoolLit(Context\BoolLitContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitBoolLit(Context\BoolLitContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterRuneLit(Context\RuneLitContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitRuneLit(Context\RuneLitContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterStrLit(Context\StrLitContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitStrLit(Context\StrLitContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterNilLit(Context\NilLitContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitNilLit(Context\NilLitContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterNowFunc(Context\NowFuncContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitNowFunc(Context\NowFuncContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterLenFunc(Context\LenFuncContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitLenFunc(Context\LenFuncContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterSubFunc(Context\SubFuncContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitSubFunc(Context\SubFuncContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterTypeFunc(Context\TypeFuncContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitTypeFunc(Context\TypeFuncContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterLlamarFuncionF(Context\LlamarFuncionFContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitLlamarFuncionF(Context\LlamarFuncionFContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterIdentifier(Context\IdentifierContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitIdentifier(Context\IdentifierContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterArrayLiteral(Context\ArrayLiteralContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitArrayLiteral(Context\ArrayLiteralContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterArrayLiteral2D(Context\ArrayLiteral2DContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitArrayLiteral2D(Context\ArrayLiteral2DContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterTipos(Context\TiposContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitTipos(Context\TiposContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterTipoArray(Context\TipoArrayContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitTipoArray(Context\TipoArrayContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterTipoArray2D(Context\TipoArray2DContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitTipoArray2D(Context\TipoArray2DContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterTipoBase(Context\TipoBaseContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitTipoBase(Context\TipoBaseContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterSimboloAsignacion(Context\SimboloAsignacionContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitSimboloAsignacion(Context\SimboloAsignacionContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterEveryRule(ParserRuleContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitEveryRule(ParserRuleContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function visitTerminal(TerminalNode $node): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function visitErrorNode(ErrorNode $node): void {}
}
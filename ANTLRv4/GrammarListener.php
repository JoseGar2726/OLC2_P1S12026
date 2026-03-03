<?php

/*
 * Generated from Grammar.g4 by ANTLR 4.13.1
 */

use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;

/**
 * This interface defines a complete listener for a parse tree produced by
 * {@see GrammarParser}.
 */
interface GrammarListener extends ParseTreeListener {
	/**
	 * Enter a parse tree produced by the `Programa`
	 * labeled alternative in {@see GrammarParser::p()}.
	 * @param $context The parse tree.
	 */
	public function enterPrograma(Context\ProgramaContext $context): void;
	/**
	 * Exit a parse tree produced by the `Programa` labeled alternative
	 * in {@see GrammarParser::p()}.
	 * @param $context The parse tree.
	 */
	public function exitPrograma(Context\ProgramaContext $context): void;
	/**
	 * Enter a parse tree produced by the `BloqueMain`
	 * labeled alternative in {@see GrammarParser::bMain()}.
	 * @param $context The parse tree.
	 */
	public function enterBloqueMain(Context\BloqueMainContext $context): void;
	/**
	 * Exit a parse tree produced by the `BloqueMain` labeled alternative
	 * in {@see GrammarParser::bMain()}.
	 * @param $context The parse tree.
	 */
	public function exitBloqueMain(Context\BloqueMainContext $context): void;
	/**
	 * Enter a parse tree produced by the `FuncionImprimir`
	 * labeled alternative in {@see GrammarParser::i()}.
	 * @param $context The parse tree.
	 */
	public function enterFuncionImprimir(Context\FuncionImprimirContext $context): void;
	/**
	 * Exit a parse tree produced by the `FuncionImprimir` labeled alternative
	 * in {@see GrammarParser::i()}.
	 * @param $context The parse tree.
	 */
	public function exitFuncionImprimir(Context\FuncionImprimirContext $context): void;
	/**
	 * Enter a parse tree produced by the `Declaration`
	 * labeled alternative in {@see GrammarParser::i()}.
	 * @param $context The parse tree.
	 */
	public function enterDeclaration(Context\DeclarationContext $context): void;
	/**
	 * Exit a parse tree produced by the `Declaration` labeled alternative
	 * in {@see GrammarParser::i()}.
	 * @param $context The parse tree.
	 */
	public function exitDeclaration(Context\DeclarationContext $context): void;
	/**
	 * Enter a parse tree produced by the `ShortDeclaration`
	 * labeled alternative in {@see GrammarParser::i()}.
	 * @param $context The parse tree.
	 */
	public function enterShortDeclaration(Context\ShortDeclarationContext $context): void;
	/**
	 * Exit a parse tree produced by the `ShortDeclaration` labeled alternative
	 * in {@see GrammarParser::i()}.
	 * @param $context The parse tree.
	 */
	public function exitShortDeclaration(Context\ShortDeclarationContext $context): void;
	/**
	 * Enter a parse tree produced by the `ConstDeclaration`
	 * labeled alternative in {@see GrammarParser::i()}.
	 * @param $context The parse tree.
	 */
	public function enterConstDeclaration(Context\ConstDeclarationContext $context): void;
	/**
	 * Exit a parse tree produced by the `ConstDeclaration` labeled alternative
	 * in {@see GrammarParser::i()}.
	 * @param $context The parse tree.
	 */
	public function exitConstDeclaration(Context\ConstDeclarationContext $context): void;
	/**
	 * Enter a parse tree produced by the `Asignation`
	 * labeled alternative in {@see GrammarParser::i()}.
	 * @param $context The parse tree.
	 */
	public function enterAsignation(Context\AsignationContext $context): void;
	/**
	 * Exit a parse tree produced by the `Asignation` labeled alternative
	 * in {@see GrammarParser::i()}.
	 * @param $context The parse tree.
	 */
	public function exitAsignation(Context\AsignationContext $context): void;
	/**
	 * Enter a parse tree produced by the `IfSentencia`
	 * labeled alternative in {@see GrammarParser::i()}.
	 * @param $context The parse tree.
	 */
	public function enterIfSentencia(Context\IfSentenciaContext $context): void;
	/**
	 * Exit a parse tree produced by the `IfSentencia` labeled alternative
	 * in {@see GrammarParser::i()}.
	 * @param $context The parse tree.
	 */
	public function exitIfSentencia(Context\IfSentenciaContext $context): void;
	/**
	 * Enter a parse tree produced by the `SwitchSentencia`
	 * labeled alternative in {@see GrammarParser::i()}.
	 * @param $context The parse tree.
	 */
	public function enterSwitchSentencia(Context\SwitchSentenciaContext $context): void;
	/**
	 * Exit a parse tree produced by the `SwitchSentencia` labeled alternative
	 * in {@see GrammarParser::i()}.
	 * @param $context The parse tree.
	 */
	public function exitSwitchSentencia(Context\SwitchSentenciaContext $context): void;
	/**
	 * Enter a parse tree produced by the `ForSentencia`
	 * labeled alternative in {@see GrammarParser::i()}.
	 * @param $context The parse tree.
	 */
	public function enterForSentencia(Context\ForSentenciaContext $context): void;
	/**
	 * Exit a parse tree produced by the `ForSentencia` labeled alternative
	 * in {@see GrammarParser::i()}.
	 * @param $context The parse tree.
	 */
	public function exitForSentencia(Context\ForSentenciaContext $context): void;
	/**
	 * Enter a parse tree produced by the `IncDec`
	 * labeled alternative in {@see GrammarParser::i()}.
	 * @param $context The parse tree.
	 */
	public function enterIncDec(Context\IncDecContext $context): void;
	/**
	 * Exit a parse tree produced by the `IncDec` labeled alternative
	 * in {@see GrammarParser::i()}.
	 * @param $context The parse tree.
	 */
	public function exitIncDec(Context\IncDecContext $context): void;
	/**
	 * Enter a parse tree produced by the `ArreglosDeclaration`
	 * labeled alternative in {@see GrammarParser::i()}.
	 * @param $context The parse tree.
	 */
	public function enterArreglosDeclaration(Context\ArreglosDeclarationContext $context): void;
	/**
	 * Exit a parse tree produced by the `ArreglosDeclaration` labeled alternative
	 * in {@see GrammarParser::i()}.
	 * @param $context The parse tree.
	 */
	public function exitArreglosDeclaration(Context\ArreglosDeclarationContext $context): void;
	/**
	 * Enter a parse tree produced by the `ArreglosAsignation`
	 * labeled alternative in {@see GrammarParser::i()}.
	 * @param $context The parse tree.
	 */
	public function enterArreglosAsignation(Context\ArreglosAsignationContext $context): void;
	/**
	 * Exit a parse tree produced by the `ArreglosAsignation` labeled alternative
	 * in {@see GrammarParser::i()}.
	 * @param $context The parse tree.
	 */
	public function exitArreglosAsignation(Context\ArreglosAsignationContext $context): void;
	/**
	 * Enter a parse tree produced by the `ArreglosDeclarationD`
	 * labeled alternative in {@see GrammarParser::i()}.
	 * @param $context The parse tree.
	 */
	public function enterArreglosDeclarationD(Context\ArreglosDeclarationDContext $context): void;
	/**
	 * Exit a parse tree produced by the `ArreglosDeclarationD` labeled alternative
	 * in {@see GrammarParser::i()}.
	 * @param $context The parse tree.
	 */
	public function exitArreglosDeclarationD(Context\ArreglosDeclarationDContext $context): void;
	/**
	 * Enter a parse tree produced by the `ArreglosAsignationD`
	 * labeled alternative in {@see GrammarParser::i()}.
	 * @param $context The parse tree.
	 */
	public function enterArreglosAsignationD(Context\ArreglosAsignationDContext $context): void;
	/**
	 * Exit a parse tree produced by the `ArreglosAsignationD` labeled alternative
	 * in {@see GrammarParser::i()}.
	 * @param $context The parse tree.
	 */
	public function exitArreglosAsignationD(Context\ArreglosAsignationDContext $context): void;
	/**
	 * Enter a parse tree produced by the `DFunction`
	 * labeled alternative in {@see GrammarParser::i()}.
	 * @param $context The parse tree.
	 */
	public function enterDFunction(Context\DFunctionContext $context): void;
	/**
	 * Exit a parse tree produced by the `DFunction` labeled alternative
	 * in {@see GrammarParser::i()}.
	 * @param $context The parse tree.
	 */
	public function exitDFunction(Context\DFunctionContext $context): void;
	/**
	 * Enter a parse tree produced by the `SentenciaReturn`
	 * labeled alternative in {@see GrammarParser::i()}.
	 * @param $context The parse tree.
	 */
	public function enterSentenciaReturn(Context\SentenciaReturnContext $context): void;
	/**
	 * Exit a parse tree produced by the `SentenciaReturn` labeled alternative
	 * in {@see GrammarParser::i()}.
	 * @param $context The parse tree.
	 */
	public function exitSentenciaReturn(Context\SentenciaReturnContext $context): void;
	/**
	 * Enter a parse tree produced by the `SentenciaContinue`
	 * labeled alternative in {@see GrammarParser::i()}.
	 * @param $context The parse tree.
	 */
	public function enterSentenciaContinue(Context\SentenciaContinueContext $context): void;
	/**
	 * Exit a parse tree produced by the `SentenciaContinue` labeled alternative
	 * in {@see GrammarParser::i()}.
	 * @param $context The parse tree.
	 */
	public function exitSentenciaContinue(Context\SentenciaContinueContext $context): void;
	/**
	 * Enter a parse tree produced by the `SentenciaBreak`
	 * labeled alternative in {@see GrammarParser::i()}.
	 * @param $context The parse tree.
	 */
	public function enterSentenciaBreak(Context\SentenciaBreakContext $context): void;
	/**
	 * Exit a parse tree produced by the `SentenciaBreak` labeled alternative
	 * in {@see GrammarParser::i()}.
	 * @param $context The parse tree.
	 */
	public function exitSentenciaBreak(Context\SentenciaBreakContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GrammarParser::funcLen()}.
	 * @param $context The parse tree.
	 */
	public function enterFuncLen(Context\FuncLenContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GrammarParser::funcLen()}.
	 * @param $context The parse tree.
	 */
	public function exitFuncLen(Context\FuncLenContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GrammarParser::funcNow()}.
	 * @param $context The parse tree.
	 */
	public function enterFuncNow(Context\FuncNowContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GrammarParser::funcNow()}.
	 * @param $context The parse tree.
	 */
	public function exitFuncNow(Context\FuncNowContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GrammarParser::funcSub()}.
	 * @param $context The parse tree.
	 */
	public function enterFuncSub(Context\FuncSubContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GrammarParser::funcSub()}.
	 * @param $context The parse tree.
	 */
	public function exitFuncSub(Context\FuncSubContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GrammarParser::funcType()}.
	 * @param $context The parse tree.
	 */
	public function enterFuncType(Context\FuncTypeContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GrammarParser::funcType()}.
	 * @param $context The parse tree.
	 */
	public function exitFuncType(Context\FuncTypeContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GrammarParser::retornar()}.
	 * @param $context The parse tree.
	 */
	public function enterRetornar(Context\RetornarContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GrammarParser::retornar()}.
	 * @param $context The parse tree.
	 */
	public function exitRetornar(Context\RetornarContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GrammarParser::funcion()}.
	 * @param $context The parse tree.
	 */
	public function enterFuncion(Context\FuncionContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GrammarParser::funcion()}.
	 * @param $context The parse tree.
	 */
	public function exitFuncion(Context\FuncionContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GrammarParser::listaRetorno()}.
	 * @param $context The parse tree.
	 */
	public function enterListaRetorno(Context\ListaRetornoContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GrammarParser::listaRetorno()}.
	 * @param $context The parse tree.
	 */
	public function exitListaRetorno(Context\ListaRetornoContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GrammarParser::listaParametros()}.
	 * @param $context The parse tree.
	 */
	public function enterListaParametros(Context\ListaParametrosContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GrammarParser::listaParametros()}.
	 * @param $context The parse tree.
	 */
	public function exitListaParametros(Context\ListaParametrosContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GrammarParser::bloqueFuncion()}.
	 * @param $context The parse tree.
	 */
	public function enterBloqueFuncion(Context\BloqueFuncionContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GrammarParser::bloqueFuncion()}.
	 * @param $context The parse tree.
	 */
	public function exitBloqueFuncion(Context\BloqueFuncionContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GrammarParser::declaracionArreglosD()}.
	 * @param $context The parse tree.
	 */
	public function enterDeclaracionArreglosD(Context\DeclaracionArreglosDContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GrammarParser::declaracionArreglosD()}.
	 * @param $context The parse tree.
	 */
	public function exitDeclaracionArreglosD(Context\DeclaracionArreglosDContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GrammarParser::listaValores()}.
	 * @param $context The parse tree.
	 */
	public function enterListaValores(Context\ListaValoresContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GrammarParser::listaValores()}.
	 * @param $context The parse tree.
	 */
	public function exitListaValores(Context\ListaValoresContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GrammarParser::asignacionArreglosD()}.
	 * @param $context The parse tree.
	 */
	public function enterAsignacionArreglosD(Context\AsignacionArreglosDContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GrammarParser::asignacionArreglosD()}.
	 * @param $context The parse tree.
	 */
	public function exitAsignacionArreglosD(Context\AsignacionArreglosDContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GrammarParser::accesoArreglosD()}.
	 * @param $context The parse tree.
	 */
	public function enterAccesoArreglosD(Context\AccesoArreglosDContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GrammarParser::accesoArreglosD()}.
	 * @param $context The parse tree.
	 */
	public function exitAccesoArreglosD(Context\AccesoArreglosDContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GrammarParser::declaracionArreglos()}.
	 * @param $context The parse tree.
	 */
	public function enterDeclaracionArreglos(Context\DeclaracionArreglosContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GrammarParser::declaracionArreglos()}.
	 * @param $context The parse tree.
	 */
	public function exitDeclaracionArreglos(Context\DeclaracionArreglosContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GrammarParser::asignacionArreglos()}.
	 * @param $context The parse tree.
	 */
	public function enterAsignacionArreglos(Context\AsignacionArreglosContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GrammarParser::asignacionArreglos()}.
	 * @param $context The parse tree.
	 */
	public function exitAsignacionArreglos(Context\AsignacionArreglosContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GrammarParser::accesoArreglos()}.
	 * @param $context The parse tree.
	 */
	public function enterAccesoArreglos(Context\AccesoArreglosContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GrammarParser::accesoArreglos()}.
	 * @param $context The parse tree.
	 */
	public function exitAccesoArreglos(Context\AccesoArreglosContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GrammarParser::sentenciaFor()}.
	 * @param $context The parse tree.
	 */
	public function enterSentenciaFor(Context\SentenciaForContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GrammarParser::sentenciaFor()}.
	 * @param $context The parse tree.
	 */
	public function exitSentenciaFor(Context\SentenciaForContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GrammarParser::forClasico()}.
	 * @param $context The parse tree.
	 */
	public function enterForClasico(Context\ForClasicoContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GrammarParser::forClasico()}.
	 * @param $context The parse tree.
	 */
	public function exitForClasico(Context\ForClasicoContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GrammarParser::condFor()}.
	 * @param $context The parse tree.
	 */
	public function enterCondFor(Context\CondForContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GrammarParser::condFor()}.
	 * @param $context The parse tree.
	 */
	public function exitCondFor(Context\CondForContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GrammarParser::bloqueFor()}.
	 * @param $context The parse tree.
	 */
	public function enterBloqueFor(Context\BloqueForContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GrammarParser::bloqueFor()}.
	 * @param $context The parse tree.
	 */
	public function exitBloqueFor(Context\BloqueForContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GrammarParser::expFor()}.
	 * @param $context The parse tree.
	 */
	public function enterExpFor(Context\ExpForContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GrammarParser::expFor()}.
	 * @param $context The parse tree.
	 */
	public function exitExpFor(Context\ExpForContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GrammarParser::sentenciaSwitch()}.
	 * @param $context The parse tree.
	 */
	public function enterSentenciaSwitch(Context\SentenciaSwitchContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GrammarParser::sentenciaSwitch()}.
	 * @param $context The parse tree.
	 */
	public function exitSentenciaSwitch(Context\SentenciaSwitchContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GrammarParser::bloqueSwitch()}.
	 * @param $context The parse tree.
	 */
	public function enterBloqueSwitch(Context\BloqueSwitchContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GrammarParser::bloqueSwitch()}.
	 * @param $context The parse tree.
	 */
	public function exitBloqueSwitch(Context\BloqueSwitchContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GrammarParser::bloqueCase()}.
	 * @param $context The parse tree.
	 */
	public function enterBloqueCase(Context\BloqueCaseContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GrammarParser::bloqueCase()}.
	 * @param $context The parse tree.
	 */
	public function exitBloqueCase(Context\BloqueCaseContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GrammarParser::bloqueDefault()}.
	 * @param $context The parse tree.
	 */
	public function enterBloqueDefault(Context\BloqueDefaultContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GrammarParser::bloqueDefault()}.
	 * @param $context The parse tree.
	 */
	public function exitBloqueDefault(Context\BloqueDefaultContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GrammarParser::sentenciaIf()}.
	 * @param $context The parse tree.
	 */
	public function enterSentenciaIf(Context\SentenciaIfContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GrammarParser::sentenciaIf()}.
	 * @param $context The parse tree.
	 */
	public function exitSentenciaIf(Context\SentenciaIfContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GrammarParser::bloqueElse()}.
	 * @param $context The parse tree.
	 */
	public function enterBloqueElse(Context\BloqueElseContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GrammarParser::bloqueElse()}.
	 * @param $context The parse tree.
	 */
	public function exitBloqueElse(Context\BloqueElseContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GrammarParser::bloqueElseIf()}.
	 * @param $context The parse tree.
	 */
	public function enterBloqueElseIf(Context\BloqueElseIfContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GrammarParser::bloqueElseIf()}.
	 * @param $context The parse tree.
	 */
	public function exitBloqueElseIf(Context\BloqueElseIfContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GrammarParser::asignacion()}.
	 * @param $context The parse tree.
	 */
	public function enterAsignacion(Context\AsignacionContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GrammarParser::asignacion()}.
	 * @param $context The parse tree.
	 */
	public function exitAsignacion(Context\AsignacionContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GrammarParser::imprimir()}.
	 * @param $context The parse tree.
	 */
	public function enterImprimir(Context\ImprimirContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GrammarParser::imprimir()}.
	 * @param $context The parse tree.
	 */
	public function exitImprimir(Context\ImprimirContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GrammarParser::declaracion()}.
	 * @param $context The parse tree.
	 */
	public function enterDeclaracion(Context\DeclaracionContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GrammarParser::declaracion()}.
	 * @param $context The parse tree.
	 */
	public function exitDeclaracion(Context\DeclaracionContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GrammarParser::declaracionCorta()}.
	 * @param $context The parse tree.
	 */
	public function enterDeclaracionCorta(Context\DeclaracionCortaContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GrammarParser::declaracionCorta()}.
	 * @param $context The parse tree.
	 */
	public function exitDeclaracionCorta(Context\DeclaracionCortaContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GrammarParser::declaracionConst()}.
	 * @param $context The parse tree.
	 */
	public function enterDeclaracionConst(Context\DeclaracionConstContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GrammarParser::declaracionConst()}.
	 * @param $context The parse tree.
	 */
	public function exitDeclaracionConst(Context\DeclaracionConstContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GrammarParser::listaExpr()}.
	 * @param $context The parse tree.
	 */
	public function enterListaExpr(Context\ListaExprContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GrammarParser::listaExpr()}.
	 * @param $context The parse tree.
	 */
	public function exitListaExpr(Context\ListaExprContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GrammarParser::listaId()}.
	 * @param $context The parse tree.
	 */
	public function enterListaId(Context\ListaIdContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GrammarParser::listaId()}.
	 * @param $context The parse tree.
	 */
	public function exitListaId(Context\ListaIdContext $context): void;
	/**
	 * Enter a parse tree produced by the `LogicalExpression`
	 * labeled alternative in {@see GrammarParser::logExpr()}.
	 * @param $context The parse tree.
	 */
	public function enterLogicalExpression(Context\LogicalExpressionContext $context): void;
	/**
	 * Exit a parse tree produced by the `LogicalExpression` labeled alternative
	 * in {@see GrammarParser::logExpr()}.
	 * @param $context The parse tree.
	 */
	public function exitLogicalExpression(Context\LogicalExpressionContext $context): void;
	/**
	 * Enter a parse tree produced by the `toRelExpr`
	 * labeled alternative in {@see GrammarParser::logExpr()}.
	 * @param $context The parse tree.
	 */
	public function enterToRelExpr(Context\ToRelExprContext $context): void;
	/**
	 * Exit a parse tree produced by the `toRelExpr` labeled alternative
	 * in {@see GrammarParser::logExpr()}.
	 * @param $context The parse tree.
	 */
	public function exitToRelExpr(Context\ToRelExprContext $context): void;
	/**
	 * Enter a parse tree produced by the `ToExpr`
	 * labeled alternative in {@see GrammarParser::relExpr()}.
	 * @param $context The parse tree.
	 */
	public function enterToExpr(Context\ToExprContext $context): void;
	/**
	 * Exit a parse tree produced by the `ToExpr` labeled alternative
	 * in {@see GrammarParser::relExpr()}.
	 * @param $context The parse tree.
	 */
	public function exitToExpr(Context\ToExprContext $context): void;
	/**
	 * Enter a parse tree produced by the `RelationalExpresion`
	 * labeled alternative in {@see GrammarParser::relExpr()}.
	 * @param $context The parse tree.
	 */
	public function enterRelationalExpresion(Context\RelationalExpresionContext $context): void;
	/**
	 * Exit a parse tree produced by the `RelationalExpresion` labeled alternative
	 * in {@see GrammarParser::relExpr()}.
	 * @param $context The parse tree.
	 */
	public function exitRelationalExpresion(Context\RelationalExpresionContext $context): void;
	/**
	 * Enter a parse tree produced by the `toTerm`
	 * labeled alternative in {@see GrammarParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function enterToTerm(Context\ToTermContext $context): void;
	/**
	 * Exit a parse tree produced by the `toTerm` labeled alternative
	 * in {@see GrammarParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function exitToTerm(Context\ToTermContext $context): void;
	/**
	 * Enter a parse tree produced by the `BinaryExpressionT`
	 * labeled alternative in {@see GrammarParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function enterBinaryExpressionT(Context\BinaryExpressionTContext $context): void;
	/**
	 * Exit a parse tree produced by the `BinaryExpressionT` labeled alternative
	 * in {@see GrammarParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function exitBinaryExpressionT(Context\BinaryExpressionTContext $context): void;
	/**
	 * Enter a parse tree produced by the `ToModTerm`
	 * labeled alternative in {@see GrammarParser::term()}.
	 * @param $context The parse tree.
	 */
	public function enterToModTerm(Context\ToModTermContext $context): void;
	/**
	 * Exit a parse tree produced by the `ToModTerm` labeled alternative
	 * in {@see GrammarParser::term()}.
	 * @param $context The parse tree.
	 */
	public function exitToModTerm(Context\ToModTermContext $context): void;
	/**
	 * Enter a parse tree produced by the `BinaryExpressionS`
	 * labeled alternative in {@see GrammarParser::term()}.
	 * @param $context The parse tree.
	 */
	public function enterBinaryExpressionS(Context\BinaryExpressionSContext $context): void;
	/**
	 * Exit a parse tree produced by the `BinaryExpressionS` labeled alternative
	 * in {@see GrammarParser::term()}.
	 * @param $context The parse tree.
	 */
	public function exitBinaryExpressionS(Context\BinaryExpressionSContext $context): void;
	/**
	 * Enter a parse tree produced by the `BinaryExpressionF`
	 * labeled alternative in {@see GrammarParser::modterm()}.
	 * @param $context The parse tree.
	 */
	public function enterBinaryExpressionF(Context\BinaryExpressionFContext $context): void;
	/**
	 * Exit a parse tree produced by the `BinaryExpressionF` labeled alternative
	 * in {@see GrammarParser::modterm()}.
	 * @param $context The parse tree.
	 */
	public function exitBinaryExpressionF(Context\BinaryExpressionFContext $context): void;
	/**
	 * Enter a parse tree produced by the `toFactor`
	 * labeled alternative in {@see GrammarParser::modterm()}.
	 * @param $context The parse tree.
	 */
	public function enterToFactor(Context\ToFactorContext $context): void;
	/**
	 * Exit a parse tree produced by the `toFactor` labeled alternative
	 * in {@see GrammarParser::modterm()}.
	 * @param $context The parse tree.
	 */
	public function exitToFactor(Context\ToFactorContext $context): void;
	/**
	 * Enter a parse tree produced by the `GroupedExpression`
	 * labeled alternative in {@see GrammarParser::factor()}.
	 * @param $context The parse tree.
	 */
	public function enterGroupedExpression(Context\GroupedExpressionContext $context): void;
	/**
	 * Exit a parse tree produced by the `GroupedExpression` labeled alternative
	 * in {@see GrammarParser::factor()}.
	 * @param $context The parse tree.
	 */
	public function exitGroupedExpression(Context\GroupedExpressionContext $context): void;
	/**
	 * Enter a parse tree produced by the `UnaryExpression`
	 * labeled alternative in {@see GrammarParser::factor()}.
	 * @param $context The parse tree.
	 */
	public function enterUnaryExpression(Context\UnaryExpressionContext $context): void;
	/**
	 * Exit a parse tree produced by the `UnaryExpression` labeled alternative
	 * in {@see GrammarParser::factor()}.
	 * @param $context The parse tree.
	 */
	public function exitUnaryExpression(Context\UnaryExpressionContext $context): void;
	/**
	 * Enter a parse tree produced by the `FloatLit`
	 * labeled alternative in {@see GrammarParser::factor()}.
	 * @param $context The parse tree.
	 */
	public function enterFloatLit(Context\FloatLitContext $context): void;
	/**
	 * Exit a parse tree produced by the `FloatLit` labeled alternative
	 * in {@see GrammarParser::factor()}.
	 * @param $context The parse tree.
	 */
	public function exitFloatLit(Context\FloatLitContext $context): void;
	/**
	 * Enter a parse tree produced by the `EnteroLit`
	 * labeled alternative in {@see GrammarParser::factor()}.
	 * @param $context The parse tree.
	 */
	public function enterEnteroLit(Context\EnteroLitContext $context): void;
	/**
	 * Exit a parse tree produced by the `EnteroLit` labeled alternative
	 * in {@see GrammarParser::factor()}.
	 * @param $context The parse tree.
	 */
	public function exitEnteroLit(Context\EnteroLitContext $context): void;
	/**
	 * Enter a parse tree produced by the `BoolLit`
	 * labeled alternative in {@see GrammarParser::factor()}.
	 * @param $context The parse tree.
	 */
	public function enterBoolLit(Context\BoolLitContext $context): void;
	/**
	 * Exit a parse tree produced by the `BoolLit` labeled alternative
	 * in {@see GrammarParser::factor()}.
	 * @param $context The parse tree.
	 */
	public function exitBoolLit(Context\BoolLitContext $context): void;
	/**
	 * Enter a parse tree produced by the `RuneLit`
	 * labeled alternative in {@see GrammarParser::factor()}.
	 * @param $context The parse tree.
	 */
	public function enterRuneLit(Context\RuneLitContext $context): void;
	/**
	 * Exit a parse tree produced by the `RuneLit` labeled alternative
	 * in {@see GrammarParser::factor()}.
	 * @param $context The parse tree.
	 */
	public function exitRuneLit(Context\RuneLitContext $context): void;
	/**
	 * Enter a parse tree produced by the `StrLit`
	 * labeled alternative in {@see GrammarParser::factor()}.
	 * @param $context The parse tree.
	 */
	public function enterStrLit(Context\StrLitContext $context): void;
	/**
	 * Exit a parse tree produced by the `StrLit` labeled alternative
	 * in {@see GrammarParser::factor()}.
	 * @param $context The parse tree.
	 */
	public function exitStrLit(Context\StrLitContext $context): void;
	/**
	 * Enter a parse tree produced by the `NilLit`
	 * labeled alternative in {@see GrammarParser::factor()}.
	 * @param $context The parse tree.
	 */
	public function enterNilLit(Context\NilLitContext $context): void;
	/**
	 * Exit a parse tree produced by the `NilLit` labeled alternative
	 * in {@see GrammarParser::factor()}.
	 * @param $context The parse tree.
	 */
	public function exitNilLit(Context\NilLitContext $context): void;
	/**
	 * Enter a parse tree produced by the `IdentifierR`
	 * labeled alternative in {@see GrammarParser::factor()}.
	 * @param $context The parse tree.
	 */
	public function enterIdentifierR(Context\IdentifierRContext $context): void;
	/**
	 * Exit a parse tree produced by the `IdentifierR` labeled alternative
	 * in {@see GrammarParser::factor()}.
	 * @param $context The parse tree.
	 */
	public function exitIdentifierR(Context\IdentifierRContext $context): void;
	/**
	 * Enter a parse tree produced by the `ArregloAccesoR`
	 * labeled alternative in {@see GrammarParser::factor()}.
	 * @param $context The parse tree.
	 */
	public function enterArregloAccesoR(Context\ArregloAccesoRContext $context): void;
	/**
	 * Exit a parse tree produced by the `ArregloAccesoR` labeled alternative
	 * in {@see GrammarParser::factor()}.
	 * @param $context The parse tree.
	 */
	public function exitArregloAccesoR(Context\ArregloAccesoRContext $context): void;
	/**
	 * Enter a parse tree produced by the `ArregloAccesoDR`
	 * labeled alternative in {@see GrammarParser::factor()}.
	 * @param $context The parse tree.
	 */
	public function enterArregloAccesoDR(Context\ArregloAccesoDRContext $context): void;
	/**
	 * Exit a parse tree produced by the `ArregloAccesoDR` labeled alternative
	 * in {@see GrammarParser::factor()}.
	 * @param $context The parse tree.
	 */
	public function exitArregloAccesoDR(Context\ArregloAccesoDRContext $context): void;
	/**
	 * Enter a parse tree produced by the `IdentifierD`
	 * labeled alternative in {@see GrammarParser::factor()}.
	 * @param $context The parse tree.
	 */
	public function enterIdentifierD(Context\IdentifierDContext $context): void;
	/**
	 * Exit a parse tree produced by the `IdentifierD` labeled alternative
	 * in {@see GrammarParser::factor()}.
	 * @param $context The parse tree.
	 */
	public function exitIdentifierD(Context\IdentifierDContext $context): void;
	/**
	 * Enter a parse tree produced by the `ArregloAccesoD`
	 * labeled alternative in {@see GrammarParser::factor()}.
	 * @param $context The parse tree.
	 */
	public function enterArregloAccesoD(Context\ArregloAccesoDContext $context): void;
	/**
	 * Exit a parse tree produced by the `ArregloAccesoD` labeled alternative
	 * in {@see GrammarParser::factor()}.
	 * @param $context The parse tree.
	 */
	public function exitArregloAccesoD(Context\ArregloAccesoDContext $context): void;
	/**
	 * Enter a parse tree produced by the `ArregloAccesoDD`
	 * labeled alternative in {@see GrammarParser::factor()}.
	 * @param $context The parse tree.
	 */
	public function enterArregloAccesoDD(Context\ArregloAccesoDDContext $context): void;
	/**
	 * Exit a parse tree produced by the `ArregloAccesoDD` labeled alternative
	 * in {@see GrammarParser::factor()}.
	 * @param $context The parse tree.
	 */
	public function exitArregloAccesoDD(Context\ArregloAccesoDDContext $context): void;
	/**
	 * Enter a parse tree produced by the `Identifier`
	 * labeled alternative in {@see GrammarParser::factor()}.
	 * @param $context The parse tree.
	 */
	public function enterIdentifier(Context\IdentifierContext $context): void;
	/**
	 * Exit a parse tree produced by the `Identifier` labeled alternative
	 * in {@see GrammarParser::factor()}.
	 * @param $context The parse tree.
	 */
	public function exitIdentifier(Context\IdentifierContext $context): void;
	/**
	 * Enter a parse tree produced by the `ArregloAcceso`
	 * labeled alternative in {@see GrammarParser::factor()}.
	 * @param $context The parse tree.
	 */
	public function enterArregloAcceso(Context\ArregloAccesoContext $context): void;
	/**
	 * Exit a parse tree produced by the `ArregloAcceso` labeled alternative
	 * in {@see GrammarParser::factor()}.
	 * @param $context The parse tree.
	 */
	public function exitArregloAcceso(Context\ArregloAccesoContext $context): void;
	/**
	 * Enter a parse tree produced by the `NowFunc`
	 * labeled alternative in {@see GrammarParser::factor()}.
	 * @param $context The parse tree.
	 */
	public function enterNowFunc(Context\NowFuncContext $context): void;
	/**
	 * Exit a parse tree produced by the `NowFunc` labeled alternative
	 * in {@see GrammarParser::factor()}.
	 * @param $context The parse tree.
	 */
	public function exitNowFunc(Context\NowFuncContext $context): void;
	/**
	 * Enter a parse tree produced by the `LenFunc`
	 * labeled alternative in {@see GrammarParser::factor()}.
	 * @param $context The parse tree.
	 */
	public function enterLenFunc(Context\LenFuncContext $context): void;
	/**
	 * Exit a parse tree produced by the `LenFunc` labeled alternative
	 * in {@see GrammarParser::factor()}.
	 * @param $context The parse tree.
	 */
	public function exitLenFunc(Context\LenFuncContext $context): void;
	/**
	 * Enter a parse tree produced by the `SubFunc`
	 * labeled alternative in {@see GrammarParser::factor()}.
	 * @param $context The parse tree.
	 */
	public function enterSubFunc(Context\SubFuncContext $context): void;
	/**
	 * Exit a parse tree produced by the `SubFunc` labeled alternative
	 * in {@see GrammarParser::factor()}.
	 * @param $context The parse tree.
	 */
	public function exitSubFunc(Context\SubFuncContext $context): void;
	/**
	 * Enter a parse tree produced by the `TypeFunc`
	 * labeled alternative in {@see GrammarParser::factor()}.
	 * @param $context The parse tree.
	 */
	public function enterTypeFunc(Context\TypeFuncContext $context): void;
	/**
	 * Exit a parse tree produced by the `TypeFunc` labeled alternative
	 * in {@see GrammarParser::factor()}.
	 * @param $context The parse tree.
	 */
	public function exitTypeFunc(Context\TypeFuncContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GrammarParser::tipos()}.
	 * @param $context The parse tree.
	 */
	public function enterTipos(Context\TiposContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GrammarParser::tipos()}.
	 * @param $context The parse tree.
	 */
	public function exitTipos(Context\TiposContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GrammarParser::simboloAsignacion()}.
	 * @param $context The parse tree.
	 */
	public function enterSimboloAsignacion(Context\SimboloAsignacionContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GrammarParser::simboloAsignacion()}.
	 * @param $context The parse tree.
	 */
	public function exitSimboloAsignacion(Context\SimboloAsignacionContext $context): void;
}
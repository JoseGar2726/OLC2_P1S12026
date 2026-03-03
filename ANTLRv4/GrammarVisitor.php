<?php

/*
 * Generated from Grammar.g4 by ANTLR 4.13.1
 */

use Antlr\Antlr4\Runtime\Tree\ParseTreeVisitor;

/**
 * This interface defines a complete generic visitor for a parse tree produced by {@see GrammarParser}.
 */
interface GrammarVisitor extends ParseTreeVisitor
{
	/**
	 * Visit a parse tree produced by the `Programa` labeled alternative
	 * in {@see GrammarParser::p()}.
	 *
	 * @param Context\ProgramaContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitPrograma(Context\ProgramaContext $context);

	/**
	 * Visit a parse tree produced by the `BloqueMain` labeled alternative
	 * in {@see GrammarParser::bMain()}.
	 *
	 * @param Context\BloqueMainContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitBloqueMain(Context\BloqueMainContext $context);

	/**
	 * Visit a parse tree produced by the `FuncionImprimir` labeled alternative
	 * in {@see GrammarParser::i()}.
	 *
	 * @param Context\FuncionImprimirContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitFuncionImprimir(Context\FuncionImprimirContext $context);

	/**
	 * Visit a parse tree produced by the `Declaration` labeled alternative
	 * in {@see GrammarParser::i()}.
	 *
	 * @param Context\DeclarationContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDeclaration(Context\DeclarationContext $context);

	/**
	 * Visit a parse tree produced by the `ShortDeclaration` labeled alternative
	 * in {@see GrammarParser::i()}.
	 *
	 * @param Context\ShortDeclarationContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitShortDeclaration(Context\ShortDeclarationContext $context);

	/**
	 * Visit a parse tree produced by the `ConstDeclaration` labeled alternative
	 * in {@see GrammarParser::i()}.
	 *
	 * @param Context\ConstDeclarationContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitConstDeclaration(Context\ConstDeclarationContext $context);

	/**
	 * Visit a parse tree produced by the `Asignation` labeled alternative
	 * in {@see GrammarParser::i()}.
	 *
	 * @param Context\AsignationContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAsignation(Context\AsignationContext $context);

	/**
	 * Visit a parse tree produced by the `IfSentencia` labeled alternative
	 * in {@see GrammarParser::i()}.
	 *
	 * @param Context\IfSentenciaContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitIfSentencia(Context\IfSentenciaContext $context);

	/**
	 * Visit a parse tree produced by the `SwitchSentencia` labeled alternative
	 * in {@see GrammarParser::i()}.
	 *
	 * @param Context\SwitchSentenciaContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSwitchSentencia(Context\SwitchSentenciaContext $context);

	/**
	 * Visit a parse tree produced by the `ForSentencia` labeled alternative
	 * in {@see GrammarParser::i()}.
	 *
	 * @param Context\ForSentenciaContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitForSentencia(Context\ForSentenciaContext $context);

	/**
	 * Visit a parse tree produced by the `IncDec` labeled alternative
	 * in {@see GrammarParser::i()}.
	 *
	 * @param Context\IncDecContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitIncDec(Context\IncDecContext $context);

	/**
	 * Visit a parse tree produced by the `ArreglosDeclaration` labeled alternative
	 * in {@see GrammarParser::i()}.
	 *
	 * @param Context\ArreglosDeclarationContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitArreglosDeclaration(Context\ArreglosDeclarationContext $context);

	/**
	 * Visit a parse tree produced by the `ArreglosAsignation` labeled alternative
	 * in {@see GrammarParser::i()}.
	 *
	 * @param Context\ArreglosAsignationContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitArreglosAsignation(Context\ArreglosAsignationContext $context);

	/**
	 * Visit a parse tree produced by the `ArreglosDeclarationD` labeled alternative
	 * in {@see GrammarParser::i()}.
	 *
	 * @param Context\ArreglosDeclarationDContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitArreglosDeclarationD(Context\ArreglosDeclarationDContext $context);

	/**
	 * Visit a parse tree produced by the `ArreglosAsignationD` labeled alternative
	 * in {@see GrammarParser::i()}.
	 *
	 * @param Context\ArreglosAsignationDContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitArreglosAsignationD(Context\ArreglosAsignationDContext $context);

	/**
	 * Visit a parse tree produced by the `DFunction` labeled alternative
	 * in {@see GrammarParser::i()}.
	 *
	 * @param Context\DFunctionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDFunction(Context\DFunctionContext $context);

	/**
	 * Visit a parse tree produced by the `SentenciaReturn` labeled alternative
	 * in {@see GrammarParser::i()}.
	 *
	 * @param Context\SentenciaReturnContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSentenciaReturn(Context\SentenciaReturnContext $context);

	/**
	 * Visit a parse tree produced by the `SentenciaContinue` labeled alternative
	 * in {@see GrammarParser::i()}.
	 *
	 * @param Context\SentenciaContinueContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSentenciaContinue(Context\SentenciaContinueContext $context);

	/**
	 * Visit a parse tree produced by the `SentenciaBreak` labeled alternative
	 * in {@see GrammarParser::i()}.
	 *
	 * @param Context\SentenciaBreakContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSentenciaBreak(Context\SentenciaBreakContext $context);

	/**
	 * Visit a parse tree produced by {@see GrammarParser::funcLen()}.
	 *
	 * @param Context\FuncLenContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitFuncLen(Context\FuncLenContext $context);

	/**
	 * Visit a parse tree produced by {@see GrammarParser::funcNow()}.
	 *
	 * @param Context\FuncNowContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitFuncNow(Context\FuncNowContext $context);

	/**
	 * Visit a parse tree produced by {@see GrammarParser::funcSub()}.
	 *
	 * @param Context\FuncSubContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitFuncSub(Context\FuncSubContext $context);

	/**
	 * Visit a parse tree produced by {@see GrammarParser::funcType()}.
	 *
	 * @param Context\FuncTypeContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitFuncType(Context\FuncTypeContext $context);

	/**
	 * Visit a parse tree produced by {@see GrammarParser::retornar()}.
	 *
	 * @param Context\RetornarContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitRetornar(Context\RetornarContext $context);

	/**
	 * Visit a parse tree produced by {@see GrammarParser::funcion()}.
	 *
	 * @param Context\FuncionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitFuncion(Context\FuncionContext $context);

	/**
	 * Visit a parse tree produced by {@see GrammarParser::listaRetorno()}.
	 *
	 * @param Context\ListaRetornoContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitListaRetorno(Context\ListaRetornoContext $context);

	/**
	 * Visit a parse tree produced by {@see GrammarParser::listaParametros()}.
	 *
	 * @param Context\ListaParametrosContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitListaParametros(Context\ListaParametrosContext $context);

	/**
	 * Visit a parse tree produced by {@see GrammarParser::bloqueFuncion()}.
	 *
	 * @param Context\BloqueFuncionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitBloqueFuncion(Context\BloqueFuncionContext $context);

	/**
	 * Visit a parse tree produced by {@see GrammarParser::declaracionArreglosD()}.
	 *
	 * @param Context\DeclaracionArreglosDContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDeclaracionArreglosD(Context\DeclaracionArreglosDContext $context);

	/**
	 * Visit a parse tree produced by {@see GrammarParser::listaValores()}.
	 *
	 * @param Context\ListaValoresContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitListaValores(Context\ListaValoresContext $context);

	/**
	 * Visit a parse tree produced by {@see GrammarParser::asignacionArreglosD()}.
	 *
	 * @param Context\AsignacionArreglosDContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAsignacionArreglosD(Context\AsignacionArreglosDContext $context);

	/**
	 * Visit a parse tree produced by {@see GrammarParser::accesoArreglosD()}.
	 *
	 * @param Context\AccesoArreglosDContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAccesoArreglosD(Context\AccesoArreglosDContext $context);

	/**
	 * Visit a parse tree produced by {@see GrammarParser::declaracionArreglos()}.
	 *
	 * @param Context\DeclaracionArreglosContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDeclaracionArreglos(Context\DeclaracionArreglosContext $context);

	/**
	 * Visit a parse tree produced by {@see GrammarParser::asignacionArreglos()}.
	 *
	 * @param Context\AsignacionArreglosContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAsignacionArreglos(Context\AsignacionArreglosContext $context);

	/**
	 * Visit a parse tree produced by {@see GrammarParser::accesoArreglos()}.
	 *
	 * @param Context\AccesoArreglosContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAccesoArreglos(Context\AccesoArreglosContext $context);

	/**
	 * Visit a parse tree produced by {@see GrammarParser::sentenciaFor()}.
	 *
	 * @param Context\SentenciaForContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSentenciaFor(Context\SentenciaForContext $context);

	/**
	 * Visit a parse tree produced by {@see GrammarParser::forClasico()}.
	 *
	 * @param Context\ForClasicoContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitForClasico(Context\ForClasicoContext $context);

	/**
	 * Visit a parse tree produced by {@see GrammarParser::condFor()}.
	 *
	 * @param Context\CondForContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitCondFor(Context\CondForContext $context);

	/**
	 * Visit a parse tree produced by {@see GrammarParser::bloqueFor()}.
	 *
	 * @param Context\BloqueForContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitBloqueFor(Context\BloqueForContext $context);

	/**
	 * Visit a parse tree produced by {@see GrammarParser::expFor()}.
	 *
	 * @param Context\ExpForContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitExpFor(Context\ExpForContext $context);

	/**
	 * Visit a parse tree produced by {@see GrammarParser::sentenciaSwitch()}.
	 *
	 * @param Context\SentenciaSwitchContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSentenciaSwitch(Context\SentenciaSwitchContext $context);

	/**
	 * Visit a parse tree produced by {@see GrammarParser::bloqueSwitch()}.
	 *
	 * @param Context\BloqueSwitchContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitBloqueSwitch(Context\BloqueSwitchContext $context);

	/**
	 * Visit a parse tree produced by {@see GrammarParser::bloqueCase()}.
	 *
	 * @param Context\BloqueCaseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitBloqueCase(Context\BloqueCaseContext $context);

	/**
	 * Visit a parse tree produced by {@see GrammarParser::bloqueDefault()}.
	 *
	 * @param Context\BloqueDefaultContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitBloqueDefault(Context\BloqueDefaultContext $context);

	/**
	 * Visit a parse tree produced by {@see GrammarParser::sentenciaIf()}.
	 *
	 * @param Context\SentenciaIfContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSentenciaIf(Context\SentenciaIfContext $context);

	/**
	 * Visit a parse tree produced by {@see GrammarParser::bloqueElse()}.
	 *
	 * @param Context\BloqueElseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitBloqueElse(Context\BloqueElseContext $context);

	/**
	 * Visit a parse tree produced by {@see GrammarParser::bloqueElseIf()}.
	 *
	 * @param Context\BloqueElseIfContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitBloqueElseIf(Context\BloqueElseIfContext $context);

	/**
	 * Visit a parse tree produced by {@see GrammarParser::asignacion()}.
	 *
	 * @param Context\AsignacionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAsignacion(Context\AsignacionContext $context);

	/**
	 * Visit a parse tree produced by {@see GrammarParser::imprimir()}.
	 *
	 * @param Context\ImprimirContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitImprimir(Context\ImprimirContext $context);

	/**
	 * Visit a parse tree produced by {@see GrammarParser::declaracion()}.
	 *
	 * @param Context\DeclaracionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDeclaracion(Context\DeclaracionContext $context);

	/**
	 * Visit a parse tree produced by {@see GrammarParser::declaracionCorta()}.
	 *
	 * @param Context\DeclaracionCortaContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDeclaracionCorta(Context\DeclaracionCortaContext $context);

	/**
	 * Visit a parse tree produced by {@see GrammarParser::declaracionConst()}.
	 *
	 * @param Context\DeclaracionConstContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDeclaracionConst(Context\DeclaracionConstContext $context);

	/**
	 * Visit a parse tree produced by {@see GrammarParser::listaExpr()}.
	 *
	 * @param Context\ListaExprContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitListaExpr(Context\ListaExprContext $context);

	/**
	 * Visit a parse tree produced by {@see GrammarParser::listaId()}.
	 *
	 * @param Context\ListaIdContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitListaId(Context\ListaIdContext $context);

	/**
	 * Visit a parse tree produced by the `LogicalExpression` labeled alternative
	 * in {@see GrammarParser::logExpr()}.
	 *
	 * @param Context\LogicalExpressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitLogicalExpression(Context\LogicalExpressionContext $context);

	/**
	 * Visit a parse tree produced by the `toRelExpr` labeled alternative
	 * in {@see GrammarParser::logExpr()}.
	 *
	 * @param Context\ToRelExprContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitToRelExpr(Context\ToRelExprContext $context);

	/**
	 * Visit a parse tree produced by the `ToExpr` labeled alternative
	 * in {@see GrammarParser::relExpr()}.
	 *
	 * @param Context\ToExprContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitToExpr(Context\ToExprContext $context);

	/**
	 * Visit a parse tree produced by the `RelationalExpresion` labeled alternative
	 * in {@see GrammarParser::relExpr()}.
	 *
	 * @param Context\RelationalExpresionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitRelationalExpresion(Context\RelationalExpresionContext $context);

	/**
	 * Visit a parse tree produced by the `toTerm` labeled alternative
	 * in {@see GrammarParser::expr()}.
	 *
	 * @param Context\ToTermContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitToTerm(Context\ToTermContext $context);

	/**
	 * Visit a parse tree produced by the `BinaryExpressionT` labeled alternative
	 * in {@see GrammarParser::expr()}.
	 *
	 * @param Context\BinaryExpressionTContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitBinaryExpressionT(Context\BinaryExpressionTContext $context);

	/**
	 * Visit a parse tree produced by the `ToModTerm` labeled alternative
	 * in {@see GrammarParser::term()}.
	 *
	 * @param Context\ToModTermContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitToModTerm(Context\ToModTermContext $context);

	/**
	 * Visit a parse tree produced by the `BinaryExpressionS` labeled alternative
	 * in {@see GrammarParser::term()}.
	 *
	 * @param Context\BinaryExpressionSContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitBinaryExpressionS(Context\BinaryExpressionSContext $context);

	/**
	 * Visit a parse tree produced by the `BinaryExpressionF` labeled alternative
	 * in {@see GrammarParser::modterm()}.
	 *
	 * @param Context\BinaryExpressionFContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitBinaryExpressionF(Context\BinaryExpressionFContext $context);

	/**
	 * Visit a parse tree produced by the `toFactor` labeled alternative
	 * in {@see GrammarParser::modterm()}.
	 *
	 * @param Context\ToFactorContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitToFactor(Context\ToFactorContext $context);

	/**
	 * Visit a parse tree produced by the `GroupedExpression` labeled alternative
	 * in {@see GrammarParser::factor()}.
	 *
	 * @param Context\GroupedExpressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitGroupedExpression(Context\GroupedExpressionContext $context);

	/**
	 * Visit a parse tree produced by the `UnaryExpression` labeled alternative
	 * in {@see GrammarParser::factor()}.
	 *
	 * @param Context\UnaryExpressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitUnaryExpression(Context\UnaryExpressionContext $context);

	/**
	 * Visit a parse tree produced by the `FloatLit` labeled alternative
	 * in {@see GrammarParser::factor()}.
	 *
	 * @param Context\FloatLitContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitFloatLit(Context\FloatLitContext $context);

	/**
	 * Visit a parse tree produced by the `EnteroLit` labeled alternative
	 * in {@see GrammarParser::factor()}.
	 *
	 * @param Context\EnteroLitContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitEnteroLit(Context\EnteroLitContext $context);

	/**
	 * Visit a parse tree produced by the `BoolLit` labeled alternative
	 * in {@see GrammarParser::factor()}.
	 *
	 * @param Context\BoolLitContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitBoolLit(Context\BoolLitContext $context);

	/**
	 * Visit a parse tree produced by the `RuneLit` labeled alternative
	 * in {@see GrammarParser::factor()}.
	 *
	 * @param Context\RuneLitContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitRuneLit(Context\RuneLitContext $context);

	/**
	 * Visit a parse tree produced by the `StrLit` labeled alternative
	 * in {@see GrammarParser::factor()}.
	 *
	 * @param Context\StrLitContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitStrLit(Context\StrLitContext $context);

	/**
	 * Visit a parse tree produced by the `NilLit` labeled alternative
	 * in {@see GrammarParser::factor()}.
	 *
	 * @param Context\NilLitContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitNilLit(Context\NilLitContext $context);

	/**
	 * Visit a parse tree produced by the `IdentifierR` labeled alternative
	 * in {@see GrammarParser::factor()}.
	 *
	 * @param Context\IdentifierRContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitIdentifierR(Context\IdentifierRContext $context);

	/**
	 * Visit a parse tree produced by the `ArregloAccesoR` labeled alternative
	 * in {@see GrammarParser::factor()}.
	 *
	 * @param Context\ArregloAccesoRContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitArregloAccesoR(Context\ArregloAccesoRContext $context);

	/**
	 * Visit a parse tree produced by the `ArregloAccesoDR` labeled alternative
	 * in {@see GrammarParser::factor()}.
	 *
	 * @param Context\ArregloAccesoDRContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitArregloAccesoDR(Context\ArregloAccesoDRContext $context);

	/**
	 * Visit a parse tree produced by the `IdentifierD` labeled alternative
	 * in {@see GrammarParser::factor()}.
	 *
	 * @param Context\IdentifierDContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitIdentifierD(Context\IdentifierDContext $context);

	/**
	 * Visit a parse tree produced by the `ArregloAccesoD` labeled alternative
	 * in {@see GrammarParser::factor()}.
	 *
	 * @param Context\ArregloAccesoDContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitArregloAccesoD(Context\ArregloAccesoDContext $context);

	/**
	 * Visit a parse tree produced by the `ArregloAccesoDD` labeled alternative
	 * in {@see GrammarParser::factor()}.
	 *
	 * @param Context\ArregloAccesoDDContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitArregloAccesoDD(Context\ArregloAccesoDDContext $context);

	/**
	 * Visit a parse tree produced by the `Identifier` labeled alternative
	 * in {@see GrammarParser::factor()}.
	 *
	 * @param Context\IdentifierContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitIdentifier(Context\IdentifierContext $context);

	/**
	 * Visit a parse tree produced by the `ArregloAcceso` labeled alternative
	 * in {@see GrammarParser::factor()}.
	 *
	 * @param Context\ArregloAccesoContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitArregloAcceso(Context\ArregloAccesoContext $context);

	/**
	 * Visit a parse tree produced by the `NowFunc` labeled alternative
	 * in {@see GrammarParser::factor()}.
	 *
	 * @param Context\NowFuncContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitNowFunc(Context\NowFuncContext $context);

	/**
	 * Visit a parse tree produced by the `LenFunc` labeled alternative
	 * in {@see GrammarParser::factor()}.
	 *
	 * @param Context\LenFuncContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitLenFunc(Context\LenFuncContext $context);

	/**
	 * Visit a parse tree produced by the `SubFunc` labeled alternative
	 * in {@see GrammarParser::factor()}.
	 *
	 * @param Context\SubFuncContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSubFunc(Context\SubFuncContext $context);

	/**
	 * Visit a parse tree produced by the `TypeFunc` labeled alternative
	 * in {@see GrammarParser::factor()}.
	 *
	 * @param Context\TypeFuncContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitTypeFunc(Context\TypeFuncContext $context);

	/**
	 * Visit a parse tree produced by {@see GrammarParser::tipos()}.
	 *
	 * @param Context\TiposContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitTipos(Context\TiposContext $context);

	/**
	 * Visit a parse tree produced by {@see GrammarParser::simboloAsignacion()}.
	 *
	 * @param Context\SimboloAsignacionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSimboloAsignacion(Context\SimboloAsignacionContext $context);
}
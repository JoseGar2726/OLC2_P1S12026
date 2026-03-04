// Generated from /home/josegar/Escritorio/p1compi/Grammar.g4 by ANTLR 4.13.1
import org.antlr.v4.runtime.atn.*;
import org.antlr.v4.runtime.dfa.DFA;
import org.antlr.v4.runtime.*;
import org.antlr.v4.runtime.misc.*;
import org.antlr.v4.runtime.tree.*;
import java.util.List;
import java.util.Iterator;
import java.util.ArrayList;

@SuppressWarnings({"all", "warnings", "unchecked", "unused", "cast", "CheckReturnValue"})
public class GrammarParser extends Parser {
	static { RuntimeMetaData.checkVersion("4.13.1", RuntimeMetaData.VERSION); }

	protected static final DFA[] _decisionToDFA;
	protected static final PredictionContextCache _sharedContextCache =
		new PredictionContextCache();
	public static final int
		FUNC=1, MAIN=2, VAR=3, FMT=4, PRINTLN=5, CONST=6, IF=7, ELSE=8, SWITCH=9, 
		CASE=10, DEFAULT=11, FOR=12, BREAK=13, CONTINUE=14, RETURN=15, LEN=16, 
		NOW=17, SUBSTR=18, TYPEOF=19, INT_T=20, FLOAT_T=21, BOOL_T=22, RUNE_T=23, 
		STRING_T=24, LBRACE=25, RBRACE=26, LPAREN=27, RPAREN=28, LCOR=29, RCOR=30, 
		COMMA=31, ASSIGN=32, COLON=33, SEMICOLON=34, PLUS=35, MINUS=36, MULT=37, 
		DIV=38, MOD=39, DOT=40, REF=41, ANDO=42, ORO=43, LE=44, GE=45, EQUAL=46, 
		NEQUAL=47, LESS=48, GREATER=49, BOOL=50, NIL=51, ENTERO=52, FLOAT=53, 
		STR=54, RUNE=55, IDENTIFICADOR=56, COMENTARIO_LINEA=57, COMENTARIO_BLOQUE=58, 
		WS=59, ERROR=60;
	public static final int
		RULE_p = 0, RULE_bMain = 1, RULE_i = 2, RULE_funcLen = 3, RULE_funcNow = 4, 
		RULE_funcSub = 5, RULE_funcType = 6, RULE_retornar = 7, RULE_funcion = 8, 
		RULE_listaRetorno = 9, RULE_listaParametros = 10, RULE_bloqueFuncion = 11, 
		RULE_declaracionArreglosD = 12, RULE_listaValores = 13, RULE_asignacionArreglosD = 14, 
		RULE_accesoArreglosD = 15, RULE_declaracionArreglos = 16, RULE_asignacionArreglos = 17, 
		RULE_accesoArreglos = 18, RULE_sentenciaFor = 19, RULE_forClasico = 20, 
		RULE_condFor = 21, RULE_expFor = 22, RULE_sentenciaSwitch = 23, RULE_bloqueSwitch = 24, 
		RULE_bloqueCase = 25, RULE_bloqueDefault = 26, RULE_sentenciaIf = 27, 
		RULE_bloque = 28, RULE_asignacion = 29, RULE_imprimir = 30, RULE_declaracion = 31, 
		RULE_declaracionCorta = 32, RULE_declaracionConst = 33, RULE_listaExpr = 34, 
		RULE_listaId = 35, RULE_logExpr = 36, RULE_relExpr = 37, RULE_expr = 38, 
		RULE_term = 39, RULE_factor = 40, RULE_tipos = 41, RULE_simboloAsignacion = 42;
	private static String[] makeRuleNames() {
		return new String[] {
			"p", "bMain", "i", "funcLen", "funcNow", "funcSub", "funcType", "retornar", 
			"funcion", "listaRetorno", "listaParametros", "bloqueFuncion", "declaracionArreglosD", 
			"listaValores", "asignacionArreglosD", "accesoArreglosD", "declaracionArreglos", 
			"asignacionArreglos", "accesoArreglos", "sentenciaFor", "forClasico", 
			"condFor", "expFor", "sentenciaSwitch", "bloqueSwitch", "bloqueCase", 
			"bloqueDefault", "sentenciaIf", "bloque", "asignacion", "imprimir", "declaracion", 
			"declaracionCorta", "declaracionConst", "listaExpr", "listaId", "logExpr", 
			"relExpr", "expr", "term", "factor", "tipos", "simboloAsignacion"
		};
	}
	public static final String[] ruleNames = makeRuleNames();

	private static String[] makeLiteralNames() {
		return new String[] {
			null, "'func'", "'main'", "'var'", "'fmt'", "'Println'", "'const'", "'if'", 
			"'else'", "'switch'", "'case'", "'default'", "'for'", "'break'", "'continue'", 
			"'return'", "'len'", "'now'", "'substr'", "'typeOf'", "'int'", "'float'", 
			"'bool'", "'rune'", "'string'", "'{'", "'}'", "'('", "')'", "'['", "']'", 
			"','", "'='", "':'", "';'", "'+'", "'-'", "'*'", "'/'", "'%'", "'.'", 
			"'&'", "'&&'", "'||'", "'<='", "'>='", "'=='", "'!='", "'<'", "'>'", 
			null, "'nil'"
		};
	}
	private static final String[] _LITERAL_NAMES = makeLiteralNames();
	private static String[] makeSymbolicNames() {
		return new String[] {
			null, "FUNC", "MAIN", "VAR", "FMT", "PRINTLN", "CONST", "IF", "ELSE", 
			"SWITCH", "CASE", "DEFAULT", "FOR", "BREAK", "CONTINUE", "RETURN", "LEN", 
			"NOW", "SUBSTR", "TYPEOF", "INT_T", "FLOAT_T", "BOOL_T", "RUNE_T", "STRING_T", 
			"LBRACE", "RBRACE", "LPAREN", "RPAREN", "LCOR", "RCOR", "COMMA", "ASSIGN", 
			"COLON", "SEMICOLON", "PLUS", "MINUS", "MULT", "DIV", "MOD", "DOT", "REF", 
			"ANDO", "ORO", "LE", "GE", "EQUAL", "NEQUAL", "LESS", "GREATER", "BOOL", 
			"NIL", "ENTERO", "FLOAT", "STR", "RUNE", "IDENTIFICADOR", "COMENTARIO_LINEA", 
			"COMENTARIO_BLOQUE", "WS", "ERROR"
		};
	}
	private static final String[] _SYMBOLIC_NAMES = makeSymbolicNames();
	public static final Vocabulary VOCABULARY = new VocabularyImpl(_LITERAL_NAMES, _SYMBOLIC_NAMES);

	/**
	 * @deprecated Use {@link #VOCABULARY} instead.
	 */
	@Deprecated
	public static final String[] tokenNames;
	static {
		tokenNames = new String[_SYMBOLIC_NAMES.length];
		for (int i = 0; i < tokenNames.length; i++) {
			tokenNames[i] = VOCABULARY.getLiteralName(i);
			if (tokenNames[i] == null) {
				tokenNames[i] = VOCABULARY.getSymbolicName(i);
			}

			if (tokenNames[i] == null) {
				tokenNames[i] = "<INVALID>";
			}
		}
	}

	@Override
	@Deprecated
	public String[] getTokenNames() {
		return tokenNames;
	}

	@Override

	public Vocabulary getVocabulary() {
		return VOCABULARY;
	}

	@Override
	public String getGrammarFileName() { return "Grammar.g4"; }

	@Override
	public String[] getRuleNames() { return ruleNames; }

	@Override
	public String getSerializedATN() { return _serializedATN; }

	@Override
	public ATN getATN() { return _ATN; }

	public GrammarParser(TokenStream input) {
		super(input);
		_interp = new ParserATNSimulator(this,_ATN,_decisionToDFA,_sharedContextCache);
	}

	@SuppressWarnings("CheckReturnValue")
	public static class PContext extends ParserRuleContext {
		public PContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_p; }
	 
		public PContext() { }
		public void copyFrom(PContext ctx) {
			super.copyFrom(ctx);
		}
	}
	@SuppressWarnings("CheckReturnValue")
	public static class ProgramaContext extends PContext {
		public BMainContext bMain() {
			return getRuleContext(BMainContext.class,0);
		}
		public TerminalNode EOF() { return getToken(GrammarParser.EOF, 0); }
		public ProgramaContext(PContext ctx) { copyFrom(ctx); }
	}

	public final PContext p() throws RecognitionException {
		PContext _localctx = new PContext(_ctx, getState());
		enterRule(_localctx, 0, RULE_p);
		try {
			_localctx = new ProgramaContext(_localctx);
			enterOuterAlt(_localctx, 1);
			{
			setState(86);
			bMain();
			setState(87);
			match(EOF);
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class BMainContext extends ParserRuleContext {
		public BMainContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_bMain; }
	 
		public BMainContext() { }
		public void copyFrom(BMainContext ctx) {
			super.copyFrom(ctx);
		}
	}
	@SuppressWarnings("CheckReturnValue")
	public static class BloqueMainContext extends BMainContext {
		public TerminalNode FUNC() { return getToken(GrammarParser.FUNC, 0); }
		public TerminalNode MAIN() { return getToken(GrammarParser.MAIN, 0); }
		public TerminalNode LPAREN() { return getToken(GrammarParser.LPAREN, 0); }
		public TerminalNode RPAREN() { return getToken(GrammarParser.RPAREN, 0); }
		public BloqueContext bloque() {
			return getRuleContext(BloqueContext.class,0);
		}
		public BloqueMainContext(BMainContext ctx) { copyFrom(ctx); }
	}

	public final BMainContext bMain() throws RecognitionException {
		BMainContext _localctx = new BMainContext(_ctx, getState());
		enterRule(_localctx, 2, RULE_bMain);
		try {
			_localctx = new BloqueMainContext(_localctx);
			enterOuterAlt(_localctx, 1);
			{
			setState(89);
			match(FUNC);
			setState(90);
			match(MAIN);
			setState(91);
			match(LPAREN);
			setState(92);
			match(RPAREN);
			setState(93);
			bloque();
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class IContext extends ParserRuleContext {
		public IContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_i; }
	 
		public IContext() { }
		public void copyFrom(IContext ctx) {
			super.copyFrom(ctx);
		}
	}
	@SuppressWarnings("CheckReturnValue")
	public static class ArreglosAsignationDContext extends IContext {
		public AsignacionArreglosDContext asignacionArreglosD() {
			return getRuleContext(AsignacionArreglosDContext.class,0);
		}
		public ArreglosAsignationDContext(IContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class IncDecContext extends IContext {
		public ExpForContext expFor() {
			return getRuleContext(ExpForContext.class,0);
		}
		public IncDecContext(IContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class FuncionImprimirContext extends IContext {
		public ImprimirContext imprimir() {
			return getRuleContext(ImprimirContext.class,0);
		}
		public FuncionImprimirContext(IContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class ForSentenciaContext extends IContext {
		public SentenciaForContext sentenciaFor() {
			return getRuleContext(SentenciaForContext.class,0);
		}
		public ForSentenciaContext(IContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class ArreglosDeclarationDContext extends IContext {
		public DeclaracionArreglosDContext declaracionArreglosD() {
			return getRuleContext(DeclaracionArreglosDContext.class,0);
		}
		public ArreglosDeclarationDContext(IContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class DFunctionContext extends IContext {
		public FuncionContext funcion() {
			return getRuleContext(FuncionContext.class,0);
		}
		public DFunctionContext(IContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class ArreglosDeclarationContext extends IContext {
		public DeclaracionArreglosContext declaracionArreglos() {
			return getRuleContext(DeclaracionArreglosContext.class,0);
		}
		public ArreglosDeclarationContext(IContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class SwitchSentenciaContext extends IContext {
		public SentenciaSwitchContext sentenciaSwitch() {
			return getRuleContext(SentenciaSwitchContext.class,0);
		}
		public SwitchSentenciaContext(IContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class ShortDeclarationContext extends IContext {
		public DeclaracionCortaContext declaracionCorta() {
			return getRuleContext(DeclaracionCortaContext.class,0);
		}
		public ShortDeclarationContext(IContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class ConstDeclarationContext extends IContext {
		public DeclaracionConstContext declaracionConst() {
			return getRuleContext(DeclaracionConstContext.class,0);
		}
		public ConstDeclarationContext(IContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class SentenciaReturnContext extends IContext {
		public RetornarContext retornar() {
			return getRuleContext(RetornarContext.class,0);
		}
		public SentenciaReturnContext(IContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class AsignationContext extends IContext {
		public AsignacionContext asignacion() {
			return getRuleContext(AsignacionContext.class,0);
		}
		public AsignationContext(IContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class SentenciaBreakContext extends IContext {
		public TerminalNode BREAK() { return getToken(GrammarParser.BREAK, 0); }
		public SentenciaBreakContext(IContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class SentenciaContinueContext extends IContext {
		public TerminalNode CONTINUE() { return getToken(GrammarParser.CONTINUE, 0); }
		public SentenciaContinueContext(IContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class ArreglosAsignationContext extends IContext {
		public AsignacionArreglosContext asignacionArreglos() {
			return getRuleContext(AsignacionArreglosContext.class,0);
		}
		public ArreglosAsignationContext(IContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class DeclarationContext extends IContext {
		public DeclaracionContext declaracion() {
			return getRuleContext(DeclaracionContext.class,0);
		}
		public DeclarationContext(IContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class IfSentenciaContext extends IContext {
		public SentenciaIfContext sentenciaIf() {
			return getRuleContext(SentenciaIfContext.class,0);
		}
		public IfSentenciaContext(IContext ctx) { copyFrom(ctx); }
	}

	public final IContext i() throws RecognitionException {
		IContext _localctx = new IContext(_ctx, getState());
		enterRule(_localctx, 4, RULE_i);
		try {
			setState(112);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,0,_ctx) ) {
			case 1:
				_localctx = new FuncionImprimirContext(_localctx);
				enterOuterAlt(_localctx, 1);
				{
				setState(95);
				imprimir();
				}
				break;
			case 2:
				_localctx = new DeclarationContext(_localctx);
				enterOuterAlt(_localctx, 2);
				{
				setState(96);
				declaracion();
				}
				break;
			case 3:
				_localctx = new ShortDeclarationContext(_localctx);
				enterOuterAlt(_localctx, 3);
				{
				setState(97);
				declaracionCorta();
				}
				break;
			case 4:
				_localctx = new ConstDeclarationContext(_localctx);
				enterOuterAlt(_localctx, 4);
				{
				setState(98);
				declaracionConst();
				}
				break;
			case 5:
				_localctx = new AsignationContext(_localctx);
				enterOuterAlt(_localctx, 5);
				{
				setState(99);
				asignacion();
				}
				break;
			case 6:
				_localctx = new IfSentenciaContext(_localctx);
				enterOuterAlt(_localctx, 6);
				{
				setState(100);
				sentenciaIf();
				}
				break;
			case 7:
				_localctx = new SwitchSentenciaContext(_localctx);
				enterOuterAlt(_localctx, 7);
				{
				setState(101);
				sentenciaSwitch();
				}
				break;
			case 8:
				_localctx = new ForSentenciaContext(_localctx);
				enterOuterAlt(_localctx, 8);
				{
				setState(102);
				sentenciaFor();
				}
				break;
			case 9:
				_localctx = new IncDecContext(_localctx);
				enterOuterAlt(_localctx, 9);
				{
				setState(103);
				expFor();
				}
				break;
			case 10:
				_localctx = new ArreglosDeclarationContext(_localctx);
				enterOuterAlt(_localctx, 10);
				{
				setState(104);
				declaracionArreglos();
				}
				break;
			case 11:
				_localctx = new ArreglosAsignationContext(_localctx);
				enterOuterAlt(_localctx, 11);
				{
				setState(105);
				asignacionArreglos();
				}
				break;
			case 12:
				_localctx = new ArreglosDeclarationDContext(_localctx);
				enterOuterAlt(_localctx, 12);
				{
				setState(106);
				declaracionArreglosD();
				}
				break;
			case 13:
				_localctx = new ArreglosAsignationDContext(_localctx);
				enterOuterAlt(_localctx, 13);
				{
				setState(107);
				asignacionArreglosD();
				}
				break;
			case 14:
				_localctx = new DFunctionContext(_localctx);
				enterOuterAlt(_localctx, 14);
				{
				setState(108);
				funcion();
				}
				break;
			case 15:
				_localctx = new SentenciaReturnContext(_localctx);
				enterOuterAlt(_localctx, 15);
				{
				setState(109);
				retornar();
				}
				break;
			case 16:
				_localctx = new SentenciaContinueContext(_localctx);
				enterOuterAlt(_localctx, 16);
				{
				setState(110);
				match(CONTINUE);
				}
				break;
			case 17:
				_localctx = new SentenciaBreakContext(_localctx);
				enterOuterAlt(_localctx, 17);
				{
				setState(111);
				match(BREAK);
				}
				break;
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class FuncLenContext extends ParserRuleContext {
		public TerminalNode LEN() { return getToken(GrammarParser.LEN, 0); }
		public TerminalNode LPAREN() { return getToken(GrammarParser.LPAREN, 0); }
		public LogExprContext logExpr() {
			return getRuleContext(LogExprContext.class,0);
		}
		public TerminalNode RPAREN() { return getToken(GrammarParser.RPAREN, 0); }
		public FuncLenContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_funcLen; }
	}

	public final FuncLenContext funcLen() throws RecognitionException {
		FuncLenContext _localctx = new FuncLenContext(_ctx, getState());
		enterRule(_localctx, 6, RULE_funcLen);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(114);
			match(LEN);
			setState(115);
			match(LPAREN);
			setState(116);
			logExpr(0);
			setState(117);
			match(RPAREN);
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class FuncNowContext extends ParserRuleContext {
		public TerminalNode NOW() { return getToken(GrammarParser.NOW, 0); }
		public TerminalNode LPAREN() { return getToken(GrammarParser.LPAREN, 0); }
		public TerminalNode RPAREN() { return getToken(GrammarParser.RPAREN, 0); }
		public FuncNowContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_funcNow; }
	}

	public final FuncNowContext funcNow() throws RecognitionException {
		FuncNowContext _localctx = new FuncNowContext(_ctx, getState());
		enterRule(_localctx, 8, RULE_funcNow);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(119);
			match(NOW);
			setState(120);
			match(LPAREN);
			setState(121);
			match(RPAREN);
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class FuncSubContext extends ParserRuleContext {
		public TerminalNode SUBSTR() { return getToken(GrammarParser.SUBSTR, 0); }
		public TerminalNode LPAREN() { return getToken(GrammarParser.LPAREN, 0); }
		public List<LogExprContext> logExpr() {
			return getRuleContexts(LogExprContext.class);
		}
		public LogExprContext logExpr(int i) {
			return getRuleContext(LogExprContext.class,i);
		}
		public List<TerminalNode> COMMA() { return getTokens(GrammarParser.COMMA); }
		public TerminalNode COMMA(int i) {
			return getToken(GrammarParser.COMMA, i);
		}
		public TerminalNode RPAREN() { return getToken(GrammarParser.RPAREN, 0); }
		public FuncSubContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_funcSub; }
	}

	public final FuncSubContext funcSub() throws RecognitionException {
		FuncSubContext _localctx = new FuncSubContext(_ctx, getState());
		enterRule(_localctx, 10, RULE_funcSub);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(123);
			match(SUBSTR);
			setState(124);
			match(LPAREN);
			setState(125);
			logExpr(0);
			setState(126);
			match(COMMA);
			setState(127);
			logExpr(0);
			setState(128);
			match(COMMA);
			setState(129);
			logExpr(0);
			setState(130);
			match(RPAREN);
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class FuncTypeContext extends ParserRuleContext {
		public TerminalNode TYPEOF() { return getToken(GrammarParser.TYPEOF, 0); }
		public TerminalNode LPAREN() { return getToken(GrammarParser.LPAREN, 0); }
		public TerminalNode IDENTIFICADOR() { return getToken(GrammarParser.IDENTIFICADOR, 0); }
		public TerminalNode RPAREN() { return getToken(GrammarParser.RPAREN, 0); }
		public FuncTypeContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_funcType; }
	}

	public final FuncTypeContext funcType() throws RecognitionException {
		FuncTypeContext _localctx = new FuncTypeContext(_ctx, getState());
		enterRule(_localctx, 12, RULE_funcType);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(132);
			match(TYPEOF);
			setState(133);
			match(LPAREN);
			setState(134);
			match(IDENTIFICADOR);
			setState(135);
			match(RPAREN);
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class RetornarContext extends ParserRuleContext {
		public TerminalNode RETURN() { return getToken(GrammarParser.RETURN, 0); }
		public ListaExprContext listaExpr() {
			return getRuleContext(ListaExprContext.class,0);
		}
		public RetornarContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_retornar; }
	}

	public final RetornarContext retornar() throws RecognitionException {
		RetornarContext _localctx = new RetornarContext(_ctx, getState());
		enterRule(_localctx, 14, RULE_retornar);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(137);
			match(RETURN);
			setState(138);
			listaExpr();
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class FuncionContext extends ParserRuleContext {
		public TerminalNode FUNC() { return getToken(GrammarParser.FUNC, 0); }
		public TerminalNode IDENTIFICADOR() { return getToken(GrammarParser.IDENTIFICADOR, 0); }
		public List<TerminalNode> LPAREN() { return getTokens(GrammarParser.LPAREN); }
		public TerminalNode LPAREN(int i) {
			return getToken(GrammarParser.LPAREN, i);
		}
		public List<TerminalNode> RPAREN() { return getTokens(GrammarParser.RPAREN); }
		public TerminalNode RPAREN(int i) {
			return getToken(GrammarParser.RPAREN, i);
		}
		public ListaRetornoContext listaRetorno() {
			return getRuleContext(ListaRetornoContext.class,0);
		}
		public BloqueFuncionContext bloqueFuncion() {
			return getRuleContext(BloqueFuncionContext.class,0);
		}
		public ListaParametrosContext listaParametros() {
			return getRuleContext(ListaParametrosContext.class,0);
		}
		public TiposContext tipos() {
			return getRuleContext(TiposContext.class,0);
		}
		public FuncionContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_funcion; }
	}

	public final FuncionContext funcion() throws RecognitionException {
		FuncionContext _localctx = new FuncionContext(_ctx, getState());
		enterRule(_localctx, 16, RULE_funcion);
		int _la;
		try {
			setState(162);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,3,_ctx) ) {
			case 1:
				enterOuterAlt(_localctx, 1);
				{
				setState(140);
				match(FUNC);
				setState(141);
				match(IDENTIFICADOR);
				setState(142);
				match(LPAREN);
				setState(144);
				_errHandler.sync(this);
				_la = _input.LA(1);
				if (_la==IDENTIFICADOR) {
					{
					setState(143);
					listaParametros();
					}
				}

				setState(146);
				match(RPAREN);
				setState(147);
				match(LPAREN);
				setState(148);
				listaRetorno();
				setState(149);
				match(RPAREN);
				setState(150);
				bloqueFuncion();
				}
				break;
			case 2:
				enterOuterAlt(_localctx, 2);
				{
				setState(152);
				match(FUNC);
				setState(153);
				match(IDENTIFICADOR);
				setState(154);
				match(LPAREN);
				setState(156);
				_errHandler.sync(this);
				_la = _input.LA(1);
				if (_la==IDENTIFICADOR) {
					{
					setState(155);
					listaParametros();
					}
				}

				setState(158);
				match(RPAREN);
				setState(159);
				tipos();
				setState(160);
				bloqueFuncion();
				}
				break;
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class ListaRetornoContext extends ParserRuleContext {
		public List<TiposContext> tipos() {
			return getRuleContexts(TiposContext.class);
		}
		public TiposContext tipos(int i) {
			return getRuleContext(TiposContext.class,i);
		}
		public List<TerminalNode> COMMA() { return getTokens(GrammarParser.COMMA); }
		public TerminalNode COMMA(int i) {
			return getToken(GrammarParser.COMMA, i);
		}
		public ListaRetornoContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_listaRetorno; }
	}

	public final ListaRetornoContext listaRetorno() throws RecognitionException {
		ListaRetornoContext _localctx = new ListaRetornoContext(_ctx, getState());
		enterRule(_localctx, 18, RULE_listaRetorno);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(164);
			tipos();
			setState(169);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while (_la==COMMA) {
				{
				{
				setState(165);
				match(COMMA);
				setState(166);
				tipos();
				}
				}
				setState(171);
				_errHandler.sync(this);
				_la = _input.LA(1);
			}
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class ListaParametrosContext extends ParserRuleContext {
		public List<TerminalNode> IDENTIFICADOR() { return getTokens(GrammarParser.IDENTIFICADOR); }
		public TerminalNode IDENTIFICADOR(int i) {
			return getToken(GrammarParser.IDENTIFICADOR, i);
		}
		public List<TiposContext> tipos() {
			return getRuleContexts(TiposContext.class);
		}
		public TiposContext tipos(int i) {
			return getRuleContext(TiposContext.class,i);
		}
		public List<TerminalNode> COMMA() { return getTokens(GrammarParser.COMMA); }
		public TerminalNode COMMA(int i) {
			return getToken(GrammarParser.COMMA, i);
		}
		public ListaParametrosContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_listaParametros; }
	}

	public final ListaParametrosContext listaParametros() throws RecognitionException {
		ListaParametrosContext _localctx = new ListaParametrosContext(_ctx, getState());
		enterRule(_localctx, 20, RULE_listaParametros);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(172);
			match(IDENTIFICADOR);
			setState(173);
			tipos();
			setState(179);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while (_la==COMMA) {
				{
				{
				setState(174);
				match(COMMA);
				setState(175);
				match(IDENTIFICADOR);
				setState(176);
				tipos();
				}
				}
				setState(181);
				_errHandler.sync(this);
				_la = _input.LA(1);
			}
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class BloqueFuncionContext extends ParserRuleContext {
		public TerminalNode LBRACE() { return getToken(GrammarParser.LBRACE, 0); }
		public TerminalNode RBRACE() { return getToken(GrammarParser.RBRACE, 0); }
		public List<IContext> i() {
			return getRuleContexts(IContext.class);
		}
		public IContext i(int i) {
			return getRuleContext(IContext.class,i);
		}
		public List<TerminalNode> SEMICOLON() { return getTokens(GrammarParser.SEMICOLON); }
		public TerminalNode SEMICOLON(int i) {
			return getToken(GrammarParser.SEMICOLON, i);
		}
		public BloqueFuncionContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_bloqueFuncion; }
	}

	public final BloqueFuncionContext bloqueFuncion() throws RecognitionException {
		BloqueFuncionContext _localctx = new BloqueFuncionContext(_ctx, getState());
		enterRule(_localctx, 22, RULE_bloqueFuncion);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(182);
			match(LBRACE);
			setState(189);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while ((((_la) & ~0x3f) == 0 && ((1L << _la) & 72057594037990106L) != 0)) {
				{
				{
				setState(183);
				i();
				setState(185);
				_errHandler.sync(this);
				_la = _input.LA(1);
				if (_la==SEMICOLON) {
					{
					setState(184);
					match(SEMICOLON);
					}
				}

				}
				}
				setState(191);
				_errHandler.sync(this);
				_la = _input.LA(1);
			}
			setState(192);
			match(RBRACE);
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class DeclaracionArreglosDContext extends ParserRuleContext {
		public TerminalNode VAR() { return getToken(GrammarParser.VAR, 0); }
		public TerminalNode IDENTIFICADOR() { return getToken(GrammarParser.IDENTIFICADOR, 0); }
		public List<TerminalNode> LCOR() { return getTokens(GrammarParser.LCOR); }
		public TerminalNode LCOR(int i) {
			return getToken(GrammarParser.LCOR, i);
		}
		public List<LogExprContext> logExpr() {
			return getRuleContexts(LogExprContext.class);
		}
		public LogExprContext logExpr(int i) {
			return getRuleContext(LogExprContext.class,i);
		}
		public List<TerminalNode> RCOR() { return getTokens(GrammarParser.RCOR); }
		public TerminalNode RCOR(int i) {
			return getToken(GrammarParser.RCOR, i);
		}
		public List<TiposContext> tipos() {
			return getRuleContexts(TiposContext.class);
		}
		public TiposContext tipos(int i) {
			return getRuleContext(TiposContext.class,i);
		}
		public TerminalNode ASSIGN() { return getToken(GrammarParser.ASSIGN, 0); }
		public TerminalNode LBRACE() { return getToken(GrammarParser.LBRACE, 0); }
		public ListaValoresContext listaValores() {
			return getRuleContext(ListaValoresContext.class,0);
		}
		public TerminalNode RBRACE() { return getToken(GrammarParser.RBRACE, 0); }
		public DeclaracionArreglosDContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_declaracionArreglosD; }
	}

	public final DeclaracionArreglosDContext declaracionArreglosD() throws RecognitionException {
		DeclaracionArreglosDContext _localctx = new DeclaracionArreglosDContext(_ctx, getState());
		enterRule(_localctx, 24, RULE_declaracionArreglosD);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(194);
			match(VAR);
			setState(195);
			match(IDENTIFICADOR);
			setState(196);
			match(LCOR);
			setState(197);
			logExpr(0);
			setState(198);
			match(RCOR);
			setState(199);
			match(LCOR);
			setState(200);
			logExpr(0);
			setState(201);
			match(RCOR);
			setState(202);
			tipos();
			setState(215);
			_errHandler.sync(this);
			_la = _input.LA(1);
			if (_la==ASSIGN) {
				{
				setState(203);
				match(ASSIGN);
				setState(204);
				match(LCOR);
				setState(205);
				logExpr(0);
				setState(206);
				match(RCOR);
				setState(207);
				match(LCOR);
				setState(208);
				logExpr(0);
				setState(209);
				match(RCOR);
				setState(210);
				tipos();
				setState(211);
				match(LBRACE);
				setState(212);
				listaValores();
				setState(213);
				match(RBRACE);
				}
			}

			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class ListaValoresContext extends ParserRuleContext {
		public List<TerminalNode> LBRACE() { return getTokens(GrammarParser.LBRACE); }
		public TerminalNode LBRACE(int i) {
			return getToken(GrammarParser.LBRACE, i);
		}
		public List<ListaExprContext> listaExpr() {
			return getRuleContexts(ListaExprContext.class);
		}
		public ListaExprContext listaExpr(int i) {
			return getRuleContext(ListaExprContext.class,i);
		}
		public List<TerminalNode> RBRACE() { return getTokens(GrammarParser.RBRACE); }
		public TerminalNode RBRACE(int i) {
			return getToken(GrammarParser.RBRACE, i);
		}
		public List<TerminalNode> COMMA() { return getTokens(GrammarParser.COMMA); }
		public TerminalNode COMMA(int i) {
			return getToken(GrammarParser.COMMA, i);
		}
		public ListaValoresContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_listaValores; }
	}

	public final ListaValoresContext listaValores() throws RecognitionException {
		ListaValoresContext _localctx = new ListaValoresContext(_ctx, getState());
		enterRule(_localctx, 26, RULE_listaValores);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(224);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while (_la==LBRACE) {
				{
				{
				setState(217);
				match(LBRACE);
				setState(218);
				listaExpr();
				setState(219);
				match(RBRACE);
				setState(220);
				match(COMMA);
				}
				}
				setState(226);
				_errHandler.sync(this);
				_la = _input.LA(1);
			}
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class AsignacionArreglosDContext extends ParserRuleContext {
		public AccesoArreglosDContext accesoArreglosD() {
			return getRuleContext(AccesoArreglosDContext.class,0);
		}
		public TerminalNode ASSIGN() { return getToken(GrammarParser.ASSIGN, 0); }
		public LogExprContext logExpr() {
			return getRuleContext(LogExprContext.class,0);
		}
		public AsignacionArreglosDContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_asignacionArreglosD; }
	}

	public final AsignacionArreglosDContext asignacionArreglosD() throws RecognitionException {
		AsignacionArreglosDContext _localctx = new AsignacionArreglosDContext(_ctx, getState());
		enterRule(_localctx, 28, RULE_asignacionArreglosD);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(227);
			accesoArreglosD();
			setState(228);
			match(ASSIGN);
			setState(229);
			logExpr(0);
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class AccesoArreglosDContext extends ParserRuleContext {
		public TerminalNode IDENTIFICADOR() { return getToken(GrammarParser.IDENTIFICADOR, 0); }
		public List<TerminalNode> LCOR() { return getTokens(GrammarParser.LCOR); }
		public TerminalNode LCOR(int i) {
			return getToken(GrammarParser.LCOR, i);
		}
		public List<LogExprContext> logExpr() {
			return getRuleContexts(LogExprContext.class);
		}
		public LogExprContext logExpr(int i) {
			return getRuleContext(LogExprContext.class,i);
		}
		public List<TerminalNode> RCOR() { return getTokens(GrammarParser.RCOR); }
		public TerminalNode RCOR(int i) {
			return getToken(GrammarParser.RCOR, i);
		}
		public AccesoArreglosDContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_accesoArreglosD; }
	}

	public final AccesoArreglosDContext accesoArreglosD() throws RecognitionException {
		AccesoArreglosDContext _localctx = new AccesoArreglosDContext(_ctx, getState());
		enterRule(_localctx, 30, RULE_accesoArreglosD);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(231);
			match(IDENTIFICADOR);
			setState(232);
			match(LCOR);
			setState(233);
			logExpr(0);
			setState(234);
			match(RCOR);
			setState(235);
			match(LCOR);
			setState(236);
			logExpr(0);
			setState(237);
			match(RCOR);
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class DeclaracionArreglosContext extends ParserRuleContext {
		public TerminalNode VAR() { return getToken(GrammarParser.VAR, 0); }
		public TerminalNode IDENTIFICADOR() { return getToken(GrammarParser.IDENTIFICADOR, 0); }
		public List<TerminalNode> LCOR() { return getTokens(GrammarParser.LCOR); }
		public TerminalNode LCOR(int i) {
			return getToken(GrammarParser.LCOR, i);
		}
		public List<LogExprContext> logExpr() {
			return getRuleContexts(LogExprContext.class);
		}
		public LogExprContext logExpr(int i) {
			return getRuleContext(LogExprContext.class,i);
		}
		public List<TerminalNode> RCOR() { return getTokens(GrammarParser.RCOR); }
		public TerminalNode RCOR(int i) {
			return getToken(GrammarParser.RCOR, i);
		}
		public List<TiposContext> tipos() {
			return getRuleContexts(TiposContext.class);
		}
		public TiposContext tipos(int i) {
			return getRuleContext(TiposContext.class,i);
		}
		public TerminalNode ASSIGN() { return getToken(GrammarParser.ASSIGN, 0); }
		public TerminalNode LBRACE() { return getToken(GrammarParser.LBRACE, 0); }
		public ListaExprContext listaExpr() {
			return getRuleContext(ListaExprContext.class,0);
		}
		public TerminalNode RBRACE() { return getToken(GrammarParser.RBRACE, 0); }
		public DeclaracionArreglosContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_declaracionArreglos; }
	}

	public final DeclaracionArreglosContext declaracionArreglos() throws RecognitionException {
		DeclaracionArreglosContext _localctx = new DeclaracionArreglosContext(_ctx, getState());
		enterRule(_localctx, 32, RULE_declaracionArreglos);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(239);
			match(VAR);
			setState(240);
			match(IDENTIFICADOR);
			setState(241);
			match(LCOR);
			setState(242);
			logExpr(0);
			setState(243);
			match(RCOR);
			setState(244);
			tipos();
			setState(254);
			_errHandler.sync(this);
			_la = _input.LA(1);
			if (_la==ASSIGN) {
				{
				setState(245);
				match(ASSIGN);
				setState(246);
				match(LCOR);
				setState(247);
				logExpr(0);
				setState(248);
				match(RCOR);
				setState(249);
				tipos();
				setState(250);
				match(LBRACE);
				setState(251);
				listaExpr();
				setState(252);
				match(RBRACE);
				}
			}

			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class AsignacionArreglosContext extends ParserRuleContext {
		public AccesoArreglosContext accesoArreglos() {
			return getRuleContext(AccesoArreglosContext.class,0);
		}
		public TerminalNode ASSIGN() { return getToken(GrammarParser.ASSIGN, 0); }
		public LogExprContext logExpr() {
			return getRuleContext(LogExprContext.class,0);
		}
		public AsignacionArreglosContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_asignacionArreglos; }
	}

	public final AsignacionArreglosContext asignacionArreglos() throws RecognitionException {
		AsignacionArreglosContext _localctx = new AsignacionArreglosContext(_ctx, getState());
		enterRule(_localctx, 34, RULE_asignacionArreglos);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(256);
			accesoArreglos();
			setState(257);
			match(ASSIGN);
			setState(258);
			logExpr(0);
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class AccesoArreglosContext extends ParserRuleContext {
		public TerminalNode IDENTIFICADOR() { return getToken(GrammarParser.IDENTIFICADOR, 0); }
		public TerminalNode LCOR() { return getToken(GrammarParser.LCOR, 0); }
		public LogExprContext logExpr() {
			return getRuleContext(LogExprContext.class,0);
		}
		public TerminalNode RCOR() { return getToken(GrammarParser.RCOR, 0); }
		public AccesoArreglosContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_accesoArreglos; }
	}

	public final AccesoArreglosContext accesoArreglos() throws RecognitionException {
		AccesoArreglosContext _localctx = new AccesoArreglosContext(_ctx, getState());
		enterRule(_localctx, 36, RULE_accesoArreglos);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(260);
			match(IDENTIFICADOR);
			setState(261);
			match(LCOR);
			setState(262);
			logExpr(0);
			setState(263);
			match(RCOR);
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class SentenciaForContext extends ParserRuleContext {
		public TerminalNode FOR() { return getToken(GrammarParser.FOR, 0); }
		public ForClasicoContext forClasico() {
			return getRuleContext(ForClasicoContext.class,0);
		}
		public LogExprContext logExpr() {
			return getRuleContext(LogExprContext.class,0);
		}
		public BloqueContext bloque() {
			return getRuleContext(BloqueContext.class,0);
		}
		public SentenciaForContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_sentenciaFor; }
	}

	public final SentenciaForContext sentenciaFor() throws RecognitionException {
		SentenciaForContext _localctx = new SentenciaForContext(_ctx, getState());
		enterRule(_localctx, 38, RULE_sentenciaFor);
		try {
			setState(273);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,11,_ctx) ) {
			case 1:
				enterOuterAlt(_localctx, 1);
				{
				setState(265);
				match(FOR);
				setState(266);
				forClasico();
				}
				break;
			case 2:
				enterOuterAlt(_localctx, 2);
				{
				setState(267);
				match(FOR);
				setState(268);
				logExpr(0);
				setState(269);
				bloque();
				}
				break;
			case 3:
				enterOuterAlt(_localctx, 3);
				{
				setState(271);
				match(FOR);
				setState(272);
				bloque();
				}
				break;
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class ForClasicoContext extends ParserRuleContext {
		public DeclaracionCortaContext declaracionCorta() {
			return getRuleContext(DeclaracionCortaContext.class,0);
		}
		public List<TerminalNode> SEMICOLON() { return getTokens(GrammarParser.SEMICOLON); }
		public TerminalNode SEMICOLON(int i) {
			return getToken(GrammarParser.SEMICOLON, i);
		}
		public LogExprContext logExpr() {
			return getRuleContext(LogExprContext.class,0);
		}
		public CondForContext condFor() {
			return getRuleContext(CondForContext.class,0);
		}
		public BloqueContext bloque() {
			return getRuleContext(BloqueContext.class,0);
		}
		public ForClasicoContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_forClasico; }
	}

	public final ForClasicoContext forClasico() throws RecognitionException {
		ForClasicoContext _localctx = new ForClasicoContext(_ctx, getState());
		enterRule(_localctx, 40, RULE_forClasico);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(275);
			declaracionCorta();
			setState(276);
			match(SEMICOLON);
			setState(277);
			logExpr(0);
			setState(278);
			match(SEMICOLON);
			setState(279);
			condFor();
			setState(280);
			bloque();
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class CondForContext extends ParserRuleContext {
		public ExpForContext expFor() {
			return getRuleContext(ExpForContext.class,0);
		}
		public AsignacionContext asignacion() {
			return getRuleContext(AsignacionContext.class,0);
		}
		public CondForContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_condFor; }
	}

	public final CondForContext condFor() throws RecognitionException {
		CondForContext _localctx = new CondForContext(_ctx, getState());
		enterRule(_localctx, 42, RULE_condFor);
		try {
			setState(284);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,12,_ctx) ) {
			case 1:
				enterOuterAlt(_localctx, 1);
				{
				setState(282);
				expFor();
				}
				break;
			case 2:
				enterOuterAlt(_localctx, 2);
				{
				setState(283);
				asignacion();
				}
				break;
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class ExpForContext extends ParserRuleContext {
		public TerminalNode IDENTIFICADOR() { return getToken(GrammarParser.IDENTIFICADOR, 0); }
		public List<TerminalNode> PLUS() { return getTokens(GrammarParser.PLUS); }
		public TerminalNode PLUS(int i) {
			return getToken(GrammarParser.PLUS, i);
		}
		public List<TerminalNode> MINUS() { return getTokens(GrammarParser.MINUS); }
		public TerminalNode MINUS(int i) {
			return getToken(GrammarParser.MINUS, i);
		}
		public ExpForContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_expFor; }
	}

	public final ExpForContext expFor() throws RecognitionException {
		ExpForContext _localctx = new ExpForContext(_ctx, getState());
		enterRule(_localctx, 44, RULE_expFor);
		try {
			setState(292);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,13,_ctx) ) {
			case 1:
				enterOuterAlt(_localctx, 1);
				{
				setState(286);
				match(IDENTIFICADOR);
				setState(287);
				match(PLUS);
				setState(288);
				match(PLUS);
				}
				break;
			case 2:
				enterOuterAlt(_localctx, 2);
				{
				setState(289);
				match(IDENTIFICADOR);
				setState(290);
				match(MINUS);
				setState(291);
				match(MINUS);
				}
				break;
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class SentenciaSwitchContext extends ParserRuleContext {
		public TerminalNode SWITCH() { return getToken(GrammarParser.SWITCH, 0); }
		public LogExprContext logExpr() {
			return getRuleContext(LogExprContext.class,0);
		}
		public TerminalNode LBRACE() { return getToken(GrammarParser.LBRACE, 0); }
		public BloqueSwitchContext bloqueSwitch() {
			return getRuleContext(BloqueSwitchContext.class,0);
		}
		public TerminalNode RBRACE() { return getToken(GrammarParser.RBRACE, 0); }
		public SentenciaSwitchContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_sentenciaSwitch; }
	}

	public final SentenciaSwitchContext sentenciaSwitch() throws RecognitionException {
		SentenciaSwitchContext _localctx = new SentenciaSwitchContext(_ctx, getState());
		enterRule(_localctx, 46, RULE_sentenciaSwitch);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(294);
			match(SWITCH);
			setState(295);
			logExpr(0);
			setState(296);
			match(LBRACE);
			setState(297);
			bloqueSwitch();
			setState(298);
			match(RBRACE);
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class BloqueSwitchContext extends ParserRuleContext {
		public List<BloqueCaseContext> bloqueCase() {
			return getRuleContexts(BloqueCaseContext.class);
		}
		public BloqueCaseContext bloqueCase(int i) {
			return getRuleContext(BloqueCaseContext.class,i);
		}
		public BloqueDefaultContext bloqueDefault() {
			return getRuleContext(BloqueDefaultContext.class,0);
		}
		public BloqueSwitchContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_bloqueSwitch; }
	}

	public final BloqueSwitchContext bloqueSwitch() throws RecognitionException {
		BloqueSwitchContext _localctx = new BloqueSwitchContext(_ctx, getState());
		enterRule(_localctx, 48, RULE_bloqueSwitch);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(301); 
			_errHandler.sync(this);
			_la = _input.LA(1);
			do {
				{
				{
				setState(300);
				bloqueCase();
				}
				}
				setState(303); 
				_errHandler.sync(this);
				_la = _input.LA(1);
			} while ( _la==CASE );
			setState(306);
			_errHandler.sync(this);
			_la = _input.LA(1);
			if (_la==DEFAULT) {
				{
				setState(305);
				bloqueDefault();
				}
			}

			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class BloqueCaseContext extends ParserRuleContext {
		public TerminalNode CASE() { return getToken(GrammarParser.CASE, 0); }
		public ListaExprContext listaExpr() {
			return getRuleContext(ListaExprContext.class,0);
		}
		public TerminalNode COLON() { return getToken(GrammarParser.COLON, 0); }
		public BloqueContext bloque() {
			return getRuleContext(BloqueContext.class,0);
		}
		public BloqueCaseContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_bloqueCase; }
	}

	public final BloqueCaseContext bloqueCase() throws RecognitionException {
		BloqueCaseContext _localctx = new BloqueCaseContext(_ctx, getState());
		enterRule(_localctx, 50, RULE_bloqueCase);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(308);
			match(CASE);
			setState(309);
			listaExpr();
			setState(310);
			match(COLON);
			setState(311);
			bloque();
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class BloqueDefaultContext extends ParserRuleContext {
		public TerminalNode DEFAULT() { return getToken(GrammarParser.DEFAULT, 0); }
		public TerminalNode COLON() { return getToken(GrammarParser.COLON, 0); }
		public BloqueContext bloque() {
			return getRuleContext(BloqueContext.class,0);
		}
		public BloqueDefaultContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_bloqueDefault; }
	}

	public final BloqueDefaultContext bloqueDefault() throws RecognitionException {
		BloqueDefaultContext _localctx = new BloqueDefaultContext(_ctx, getState());
		enterRule(_localctx, 52, RULE_bloqueDefault);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(313);
			match(DEFAULT);
			setState(314);
			match(COLON);
			setState(315);
			bloque();
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class SentenciaIfContext extends ParserRuleContext {
		public List<TerminalNode> IF() { return getTokens(GrammarParser.IF); }
		public TerminalNode IF(int i) {
			return getToken(GrammarParser.IF, i);
		}
		public List<LogExprContext> logExpr() {
			return getRuleContexts(LogExprContext.class);
		}
		public LogExprContext logExpr(int i) {
			return getRuleContext(LogExprContext.class,i);
		}
		public List<BloqueContext> bloque() {
			return getRuleContexts(BloqueContext.class);
		}
		public BloqueContext bloque(int i) {
			return getRuleContext(BloqueContext.class,i);
		}
		public List<TerminalNode> ELSE() { return getTokens(GrammarParser.ELSE); }
		public TerminalNode ELSE(int i) {
			return getToken(GrammarParser.ELSE, i);
		}
		public SentenciaIfContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_sentenciaIf; }
	}

	public final SentenciaIfContext sentenciaIf() throws RecognitionException {
		SentenciaIfContext _localctx = new SentenciaIfContext(_ctx, getState());
		enterRule(_localctx, 54, RULE_sentenciaIf);
		int _la;
		try {
			int _alt;
			enterOuterAlt(_localctx, 1);
			{
			setState(317);
			match(IF);
			setState(318);
			logExpr(0);
			setState(319);
			bloque();
			setState(327);
			_errHandler.sync(this);
			_alt = getInterpreter().adaptivePredict(_input,16,_ctx);
			while ( _alt!=2 && _alt!=org.antlr.v4.runtime.atn.ATN.INVALID_ALT_NUMBER ) {
				if ( _alt==1 ) {
					{
					{
					setState(320);
					match(ELSE);
					setState(321);
					match(IF);
					setState(322);
					logExpr(0);
					setState(323);
					bloque();
					}
					} 
				}
				setState(329);
				_errHandler.sync(this);
				_alt = getInterpreter().adaptivePredict(_input,16,_ctx);
			}
			setState(332);
			_errHandler.sync(this);
			_la = _input.LA(1);
			if (_la==ELSE) {
				{
				setState(330);
				match(ELSE);
				setState(331);
				bloque();
				}
			}

			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class BloqueContext extends ParserRuleContext {
		public TerminalNode LBRACE() { return getToken(GrammarParser.LBRACE, 0); }
		public TerminalNode RBRACE() { return getToken(GrammarParser.RBRACE, 0); }
		public List<IContext> i() {
			return getRuleContexts(IContext.class);
		}
		public IContext i(int i) {
			return getRuleContext(IContext.class,i);
		}
		public List<TerminalNode> SEMICOLON() { return getTokens(GrammarParser.SEMICOLON); }
		public TerminalNode SEMICOLON(int i) {
			return getToken(GrammarParser.SEMICOLON, i);
		}
		public BloqueContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_bloque; }
	}

	public final BloqueContext bloque() throws RecognitionException {
		BloqueContext _localctx = new BloqueContext(_ctx, getState());
		enterRule(_localctx, 56, RULE_bloque);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(334);
			match(LBRACE);
			setState(341);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while ((((_la) & ~0x3f) == 0 && ((1L << _la) & 72057594037990106L) != 0)) {
				{
				{
				setState(335);
				i();
				setState(337);
				_errHandler.sync(this);
				_la = _input.LA(1);
				if (_la==SEMICOLON) {
					{
					setState(336);
					match(SEMICOLON);
					}
				}

				}
				}
				setState(343);
				_errHandler.sync(this);
				_la = _input.LA(1);
			}
			setState(344);
			match(RBRACE);
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class AsignacionContext extends ParserRuleContext {
		public TerminalNode IDENTIFICADOR() { return getToken(GrammarParser.IDENTIFICADOR, 0); }
		public SimboloAsignacionContext simboloAsignacion() {
			return getRuleContext(SimboloAsignacionContext.class,0);
		}
		public LogExprContext logExpr() {
			return getRuleContext(LogExprContext.class,0);
		}
		public AsignacionContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_asignacion; }
	}

	public final AsignacionContext asignacion() throws RecognitionException {
		AsignacionContext _localctx = new AsignacionContext(_ctx, getState());
		enterRule(_localctx, 58, RULE_asignacion);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(346);
			match(IDENTIFICADOR);
			setState(347);
			simboloAsignacion();
			setState(348);
			logExpr(0);
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class ImprimirContext extends ParserRuleContext {
		public TerminalNode FMT() { return getToken(GrammarParser.FMT, 0); }
		public TerminalNode DOT() { return getToken(GrammarParser.DOT, 0); }
		public TerminalNode PRINTLN() { return getToken(GrammarParser.PRINTLN, 0); }
		public TerminalNode LPAREN() { return getToken(GrammarParser.LPAREN, 0); }
		public ListaExprContext listaExpr() {
			return getRuleContext(ListaExprContext.class,0);
		}
		public TerminalNode RPAREN() { return getToken(GrammarParser.RPAREN, 0); }
		public ImprimirContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_imprimir; }
	}

	public final ImprimirContext imprimir() throws RecognitionException {
		ImprimirContext _localctx = new ImprimirContext(_ctx, getState());
		enterRule(_localctx, 60, RULE_imprimir);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(350);
			match(FMT);
			setState(351);
			match(DOT);
			setState(352);
			match(PRINTLN);
			setState(353);
			match(LPAREN);
			setState(354);
			listaExpr();
			setState(355);
			match(RPAREN);
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class DeclaracionContext extends ParserRuleContext {
		public TerminalNode VAR() { return getToken(GrammarParser.VAR, 0); }
		public ListaIdContext listaId() {
			return getRuleContext(ListaIdContext.class,0);
		}
		public TiposContext tipos() {
			return getRuleContext(TiposContext.class,0);
		}
		public TerminalNode ASSIGN() { return getToken(GrammarParser.ASSIGN, 0); }
		public ListaExprContext listaExpr() {
			return getRuleContext(ListaExprContext.class,0);
		}
		public DeclaracionContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_declaracion; }
	}

	public final DeclaracionContext declaracion() throws RecognitionException {
		DeclaracionContext _localctx = new DeclaracionContext(_ctx, getState());
		enterRule(_localctx, 62, RULE_declaracion);
		try {
			setState(367);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,20,_ctx) ) {
			case 1:
				enterOuterAlt(_localctx, 1);
				{
				setState(357);
				match(VAR);
				setState(358);
				listaId();
				setState(359);
				tipos();
				}
				break;
			case 2:
				enterOuterAlt(_localctx, 2);
				{
				setState(361);
				match(VAR);
				setState(362);
				listaId();
				setState(363);
				tipos();
				setState(364);
				match(ASSIGN);
				setState(365);
				listaExpr();
				}
				break;
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class DeclaracionCortaContext extends ParserRuleContext {
		public ListaIdContext listaId() {
			return getRuleContext(ListaIdContext.class,0);
		}
		public TerminalNode COLON() { return getToken(GrammarParser.COLON, 0); }
		public TerminalNode ASSIGN() { return getToken(GrammarParser.ASSIGN, 0); }
		public ListaExprContext listaExpr() {
			return getRuleContext(ListaExprContext.class,0);
		}
		public DeclaracionCortaContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_declaracionCorta; }
	}

	public final DeclaracionCortaContext declaracionCorta() throws RecognitionException {
		DeclaracionCortaContext _localctx = new DeclaracionCortaContext(_ctx, getState());
		enterRule(_localctx, 64, RULE_declaracionCorta);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(369);
			listaId();
			setState(370);
			match(COLON);
			setState(371);
			match(ASSIGN);
			setState(372);
			listaExpr();
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class DeclaracionConstContext extends ParserRuleContext {
		public TerminalNode CONST() { return getToken(GrammarParser.CONST, 0); }
		public TerminalNode IDENTIFICADOR() { return getToken(GrammarParser.IDENTIFICADOR, 0); }
		public TiposContext tipos() {
			return getRuleContext(TiposContext.class,0);
		}
		public TerminalNode ASSIGN() { return getToken(GrammarParser.ASSIGN, 0); }
		public LogExprContext logExpr() {
			return getRuleContext(LogExprContext.class,0);
		}
		public DeclaracionConstContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_declaracionConst; }
	}

	public final DeclaracionConstContext declaracionConst() throws RecognitionException {
		DeclaracionConstContext _localctx = new DeclaracionConstContext(_ctx, getState());
		enterRule(_localctx, 66, RULE_declaracionConst);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(374);
			match(CONST);
			setState(375);
			match(IDENTIFICADOR);
			setState(376);
			tipos();
			setState(377);
			match(ASSIGN);
			setState(378);
			logExpr(0);
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class ListaExprContext extends ParserRuleContext {
		public List<LogExprContext> logExpr() {
			return getRuleContexts(LogExprContext.class);
		}
		public LogExprContext logExpr(int i) {
			return getRuleContext(LogExprContext.class,i);
		}
		public List<TerminalNode> COMMA() { return getTokens(GrammarParser.COMMA); }
		public TerminalNode COMMA(int i) {
			return getToken(GrammarParser.COMMA, i);
		}
		public ListaExprContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_listaExpr; }
	}

	public final ListaExprContext listaExpr() throws RecognitionException {
		ListaExprContext _localctx = new ListaExprContext(_ctx, getState());
		enterRule(_localctx, 68, RULE_listaExpr);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(380);
			logExpr(0);
			setState(385);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while (_la==COMMA) {
				{
				{
				setState(381);
				match(COMMA);
				setState(382);
				logExpr(0);
				}
				}
				setState(387);
				_errHandler.sync(this);
				_la = _input.LA(1);
			}
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class ListaIdContext extends ParserRuleContext {
		public List<TerminalNode> IDENTIFICADOR() { return getTokens(GrammarParser.IDENTIFICADOR); }
		public TerminalNode IDENTIFICADOR(int i) {
			return getToken(GrammarParser.IDENTIFICADOR, i);
		}
		public List<TerminalNode> COMMA() { return getTokens(GrammarParser.COMMA); }
		public TerminalNode COMMA(int i) {
			return getToken(GrammarParser.COMMA, i);
		}
		public ListaIdContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_listaId; }
	}

	public final ListaIdContext listaId() throws RecognitionException {
		ListaIdContext _localctx = new ListaIdContext(_ctx, getState());
		enterRule(_localctx, 70, RULE_listaId);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(388);
			match(IDENTIFICADOR);
			setState(393);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while (_la==COMMA) {
				{
				{
				setState(389);
				match(COMMA);
				setState(390);
				match(IDENTIFICADOR);
				}
				}
				setState(395);
				_errHandler.sync(this);
				_la = _input.LA(1);
			}
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class LogExprContext extends ParserRuleContext {
		public LogExprContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_logExpr; }
	 
		public LogExprContext() { }
		public void copyFrom(LogExprContext ctx) {
			super.copyFrom(ctx);
		}
	}
	@SuppressWarnings("CheckReturnValue")
	public static class LogicalExpressionContext extends LogExprContext {
		public Token op;
		public LogExprContext logExpr() {
			return getRuleContext(LogExprContext.class,0);
		}
		public RelExprContext relExpr() {
			return getRuleContext(RelExprContext.class,0);
		}
		public TerminalNode ORO() { return getToken(GrammarParser.ORO, 0); }
		public TerminalNode ANDO() { return getToken(GrammarParser.ANDO, 0); }
		public LogicalExpressionContext(LogExprContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class ToRelExprContext extends LogExprContext {
		public RelExprContext relExpr() {
			return getRuleContext(RelExprContext.class,0);
		}
		public ToRelExprContext(LogExprContext ctx) { copyFrom(ctx); }
	}

	public final LogExprContext logExpr() throws RecognitionException {
		return logExpr(0);
	}

	private LogExprContext logExpr(int _p) throws RecognitionException {
		ParserRuleContext _parentctx = _ctx;
		int _parentState = getState();
		LogExprContext _localctx = new LogExprContext(_ctx, _parentState);
		LogExprContext _prevctx = _localctx;
		int _startState = 72;
		enterRecursionRule(_localctx, 72, RULE_logExpr, _p);
		int _la;
		try {
			int _alt;
			enterOuterAlt(_localctx, 1);
			{
			{
			_localctx = new ToRelExprContext(_localctx);
			_ctx = _localctx;
			_prevctx = _localctx;

			setState(397);
			relExpr(0);
			}
			_ctx.stop = _input.LT(-1);
			setState(404);
			_errHandler.sync(this);
			_alt = getInterpreter().adaptivePredict(_input,23,_ctx);
			while ( _alt!=2 && _alt!=org.antlr.v4.runtime.atn.ATN.INVALID_ALT_NUMBER ) {
				if ( _alt==1 ) {
					if ( _parseListeners!=null ) triggerExitRuleEvent();
					_prevctx = _localctx;
					{
					{
					_localctx = new LogicalExpressionContext(new LogExprContext(_parentctx, _parentState));
					pushNewRecursionContext(_localctx, _startState, RULE_logExpr);
					setState(399);
					if (!(precpred(_ctx, 2))) throw new FailedPredicateException(this, "precpred(_ctx, 2)");
					setState(400);
					((LogicalExpressionContext)_localctx).op = _input.LT(1);
					_la = _input.LA(1);
					if ( !(_la==ANDO || _la==ORO) ) {
						((LogicalExpressionContext)_localctx).op = (Token)_errHandler.recoverInline(this);
					}
					else {
						if ( _input.LA(1)==Token.EOF ) matchedEOF = true;
						_errHandler.reportMatch(this);
						consume();
					}
					setState(401);
					relExpr(0);
					}
					} 
				}
				setState(406);
				_errHandler.sync(this);
				_alt = getInterpreter().adaptivePredict(_input,23,_ctx);
			}
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			unrollRecursionContexts(_parentctx);
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class RelExprContext extends ParserRuleContext {
		public RelExprContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_relExpr; }
	 
		public RelExprContext() { }
		public void copyFrom(RelExprContext ctx) {
			super.copyFrom(ctx);
		}
	}
	@SuppressWarnings("CheckReturnValue")
	public static class ToExprContext extends RelExprContext {
		public ExprContext expr() {
			return getRuleContext(ExprContext.class,0);
		}
		public ToExprContext(RelExprContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class RelationalExpresionContext extends RelExprContext {
		public Token op;
		public RelExprContext relExpr() {
			return getRuleContext(RelExprContext.class,0);
		}
		public ExprContext expr() {
			return getRuleContext(ExprContext.class,0);
		}
		public TerminalNode LE() { return getToken(GrammarParser.LE, 0); }
		public TerminalNode GE() { return getToken(GrammarParser.GE, 0); }
		public TerminalNode EQUAL() { return getToken(GrammarParser.EQUAL, 0); }
		public TerminalNode NEQUAL() { return getToken(GrammarParser.NEQUAL, 0); }
		public TerminalNode LESS() { return getToken(GrammarParser.LESS, 0); }
		public TerminalNode GREATER() { return getToken(GrammarParser.GREATER, 0); }
		public RelationalExpresionContext(RelExprContext ctx) { copyFrom(ctx); }
	}

	public final RelExprContext relExpr() throws RecognitionException {
		return relExpr(0);
	}

	private RelExprContext relExpr(int _p) throws RecognitionException {
		ParserRuleContext _parentctx = _ctx;
		int _parentState = getState();
		RelExprContext _localctx = new RelExprContext(_ctx, _parentState);
		RelExprContext _prevctx = _localctx;
		int _startState = 74;
		enterRecursionRule(_localctx, 74, RULE_relExpr, _p);
		int _la;
		try {
			int _alt;
			enterOuterAlt(_localctx, 1);
			{
			{
			_localctx = new ToExprContext(_localctx);
			_ctx = _localctx;
			_prevctx = _localctx;

			setState(408);
			expr(0);
			}
			_ctx.stop = _input.LT(-1);
			setState(415);
			_errHandler.sync(this);
			_alt = getInterpreter().adaptivePredict(_input,24,_ctx);
			while ( _alt!=2 && _alt!=org.antlr.v4.runtime.atn.ATN.INVALID_ALT_NUMBER ) {
				if ( _alt==1 ) {
					if ( _parseListeners!=null ) triggerExitRuleEvent();
					_prevctx = _localctx;
					{
					{
					_localctx = new RelationalExpresionContext(new RelExprContext(_parentctx, _parentState));
					pushNewRecursionContext(_localctx, _startState, RULE_relExpr);
					setState(410);
					if (!(precpred(_ctx, 2))) throw new FailedPredicateException(this, "precpred(_ctx, 2)");
					setState(411);
					((RelationalExpresionContext)_localctx).op = _input.LT(1);
					_la = _input.LA(1);
					if ( !((((_la) & ~0x3f) == 0 && ((1L << _la) & 1108307720798208L) != 0)) ) {
						((RelationalExpresionContext)_localctx).op = (Token)_errHandler.recoverInline(this);
					}
					else {
						if ( _input.LA(1)==Token.EOF ) matchedEOF = true;
						_errHandler.reportMatch(this);
						consume();
					}
					setState(412);
					expr(0);
					}
					} 
				}
				setState(417);
				_errHandler.sync(this);
				_alt = getInterpreter().adaptivePredict(_input,24,_ctx);
			}
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			unrollRecursionContexts(_parentctx);
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class ExprContext extends ParserRuleContext {
		public ExprContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_expr; }
	 
		public ExprContext() { }
		public void copyFrom(ExprContext ctx) {
			super.copyFrom(ctx);
		}
	}
	@SuppressWarnings("CheckReturnValue")
	public static class ToTermContext extends ExprContext {
		public TermContext term() {
			return getRuleContext(TermContext.class,0);
		}
		public ToTermContext(ExprContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class BinaryExpressionTContext extends ExprContext {
		public Token op;
		public ExprContext expr() {
			return getRuleContext(ExprContext.class,0);
		}
		public TermContext term() {
			return getRuleContext(TermContext.class,0);
		}
		public TerminalNode PLUS() { return getToken(GrammarParser.PLUS, 0); }
		public TerminalNode MINUS() { return getToken(GrammarParser.MINUS, 0); }
		public BinaryExpressionTContext(ExprContext ctx) { copyFrom(ctx); }
	}

	public final ExprContext expr() throws RecognitionException {
		return expr(0);
	}

	private ExprContext expr(int _p) throws RecognitionException {
		ParserRuleContext _parentctx = _ctx;
		int _parentState = getState();
		ExprContext _localctx = new ExprContext(_ctx, _parentState);
		ExprContext _prevctx = _localctx;
		int _startState = 76;
		enterRecursionRule(_localctx, 76, RULE_expr, _p);
		int _la;
		try {
			int _alt;
			enterOuterAlt(_localctx, 1);
			{
			{
			_localctx = new ToTermContext(_localctx);
			_ctx = _localctx;
			_prevctx = _localctx;

			setState(419);
			term(0);
			}
			_ctx.stop = _input.LT(-1);
			setState(426);
			_errHandler.sync(this);
			_alt = getInterpreter().adaptivePredict(_input,25,_ctx);
			while ( _alt!=2 && _alt!=org.antlr.v4.runtime.atn.ATN.INVALID_ALT_NUMBER ) {
				if ( _alt==1 ) {
					if ( _parseListeners!=null ) triggerExitRuleEvent();
					_prevctx = _localctx;
					{
					{
					_localctx = new BinaryExpressionTContext(new ExprContext(_parentctx, _parentState));
					pushNewRecursionContext(_localctx, _startState, RULE_expr);
					setState(421);
					if (!(precpred(_ctx, 2))) throw new FailedPredicateException(this, "precpred(_ctx, 2)");
					setState(422);
					((BinaryExpressionTContext)_localctx).op = _input.LT(1);
					_la = _input.LA(1);
					if ( !(_la==PLUS || _la==MINUS) ) {
						((BinaryExpressionTContext)_localctx).op = (Token)_errHandler.recoverInline(this);
					}
					else {
						if ( _input.LA(1)==Token.EOF ) matchedEOF = true;
						_errHandler.reportMatch(this);
						consume();
					}
					setState(423);
					term(0);
					}
					} 
				}
				setState(428);
				_errHandler.sync(this);
				_alt = getInterpreter().adaptivePredict(_input,25,_ctx);
			}
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			unrollRecursionContexts(_parentctx);
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class TermContext extends ParserRuleContext {
		public TermContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_term; }
	 
		public TermContext() { }
		public void copyFrom(TermContext ctx) {
			super.copyFrom(ctx);
		}
	}
	@SuppressWarnings("CheckReturnValue")
	public static class BinaryExpressionSContext extends TermContext {
		public Token op;
		public TermContext term() {
			return getRuleContext(TermContext.class,0);
		}
		public FactorContext factor() {
			return getRuleContext(FactorContext.class,0);
		}
		public TerminalNode MULT() { return getToken(GrammarParser.MULT, 0); }
		public TerminalNode DIV() { return getToken(GrammarParser.DIV, 0); }
		public TerminalNode MOD() { return getToken(GrammarParser.MOD, 0); }
		public BinaryExpressionSContext(TermContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class ToFactorContext extends TermContext {
		public FactorContext factor() {
			return getRuleContext(FactorContext.class,0);
		}
		public ToFactorContext(TermContext ctx) { copyFrom(ctx); }
	}

	public final TermContext term() throws RecognitionException {
		return term(0);
	}

	private TermContext term(int _p) throws RecognitionException {
		ParserRuleContext _parentctx = _ctx;
		int _parentState = getState();
		TermContext _localctx = new TermContext(_ctx, _parentState);
		TermContext _prevctx = _localctx;
		int _startState = 78;
		enterRecursionRule(_localctx, 78, RULE_term, _p);
		int _la;
		try {
			int _alt;
			enterOuterAlt(_localctx, 1);
			{
			{
			_localctx = new ToFactorContext(_localctx);
			_ctx = _localctx;
			_prevctx = _localctx;

			setState(430);
			factor();
			}
			_ctx.stop = _input.LT(-1);
			setState(437);
			_errHandler.sync(this);
			_alt = getInterpreter().adaptivePredict(_input,26,_ctx);
			while ( _alt!=2 && _alt!=org.antlr.v4.runtime.atn.ATN.INVALID_ALT_NUMBER ) {
				if ( _alt==1 ) {
					if ( _parseListeners!=null ) triggerExitRuleEvent();
					_prevctx = _localctx;
					{
					{
					_localctx = new BinaryExpressionSContext(new TermContext(_parentctx, _parentState));
					pushNewRecursionContext(_localctx, _startState, RULE_term);
					setState(432);
					if (!(precpred(_ctx, 2))) throw new FailedPredicateException(this, "precpred(_ctx, 2)");
					setState(433);
					((BinaryExpressionSContext)_localctx).op = _input.LT(1);
					_la = _input.LA(1);
					if ( !((((_la) & ~0x3f) == 0 && ((1L << _la) & 962072674304L) != 0)) ) {
						((BinaryExpressionSContext)_localctx).op = (Token)_errHandler.recoverInline(this);
					}
					else {
						if ( _input.LA(1)==Token.EOF ) matchedEOF = true;
						_errHandler.reportMatch(this);
						consume();
					}
					setState(434);
					factor();
					}
					} 
				}
				setState(439);
				_errHandler.sync(this);
				_alt = getInterpreter().adaptivePredict(_input,26,_ctx);
			}
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			unrollRecursionContexts(_parentctx);
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class FactorContext extends ParserRuleContext {
		public FactorContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_factor; }
	 
		public FactorContext() { }
		public void copyFrom(FactorContext ctx) {
			super.copyFrom(ctx);
		}
	}
	@SuppressWarnings("CheckReturnValue")
	public static class NowFuncContext extends FactorContext {
		public FuncNowContext funcNow() {
			return getRuleContext(FuncNowContext.class,0);
		}
		public NowFuncContext(FactorContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class UnaryExpressionContext extends FactorContext {
		public TerminalNode MINUS() { return getToken(GrammarParser.MINUS, 0); }
		public FactorContext factor() {
			return getRuleContext(FactorContext.class,0);
		}
		public UnaryExpressionContext(FactorContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class ArregloAccesoDRContext extends FactorContext {
		public TerminalNode REF() { return getToken(GrammarParser.REF, 0); }
		public AccesoArreglosDContext accesoArreglosD() {
			return getRuleContext(AccesoArreglosDContext.class,0);
		}
		public ArregloAccesoDRContext(FactorContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class ArregloAccesoDContext extends FactorContext {
		public TerminalNode MULT() { return getToken(GrammarParser.MULT, 0); }
		public AccesoArreglosContext accesoArreglos() {
			return getRuleContext(AccesoArreglosContext.class,0);
		}
		public AccesoArreglosDContext accesoArreglosD() {
			return getRuleContext(AccesoArreglosDContext.class,0);
		}
		public ArregloAccesoDContext(FactorContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class GroupedExpressionContext extends FactorContext {
		public TerminalNode LPAREN() { return getToken(GrammarParser.LPAREN, 0); }
		public LogExprContext logExpr() {
			return getRuleContext(LogExprContext.class,0);
		}
		public TerminalNode RPAREN() { return getToken(GrammarParser.RPAREN, 0); }
		public GroupedExpressionContext(FactorContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class IdentifierDContext extends FactorContext {
		public TerminalNode MULT() { return getToken(GrammarParser.MULT, 0); }
		public TerminalNode IDENTIFICADOR() { return getToken(GrammarParser.IDENTIFICADOR, 0); }
		public IdentifierDContext(FactorContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class FloatLitContext extends FactorContext {
		public TerminalNode FLOAT() { return getToken(GrammarParser.FLOAT, 0); }
		public FloatLitContext(FactorContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class IdentifierContext extends FactorContext {
		public TerminalNode IDENTIFICADOR() { return getToken(GrammarParser.IDENTIFICADOR, 0); }
		public IdentifierContext(FactorContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class NilLitContext extends FactorContext {
		public TerminalNode NIL() { return getToken(GrammarParser.NIL, 0); }
		public NilLitContext(FactorContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class SubFuncContext extends FactorContext {
		public FuncSubContext funcSub() {
			return getRuleContext(FuncSubContext.class,0);
		}
		public SubFuncContext(FactorContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class ArregloAccesoRContext extends FactorContext {
		public TerminalNode REF() { return getToken(GrammarParser.REF, 0); }
		public AccesoArreglosContext accesoArreglos() {
			return getRuleContext(AccesoArreglosContext.class,0);
		}
		public ArregloAccesoRContext(FactorContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class ArregloAccesoDDContext extends FactorContext {
		public TerminalNode MULT() { return getToken(GrammarParser.MULT, 0); }
		public AccesoArreglosDContext accesoArreglosD() {
			return getRuleContext(AccesoArreglosDContext.class,0);
		}
		public ArregloAccesoDDContext(FactorContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class EnteroLitContext extends FactorContext {
		public TerminalNode ENTERO() { return getToken(GrammarParser.ENTERO, 0); }
		public EnteroLitContext(FactorContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class TypeFuncContext extends FactorContext {
		public FuncTypeContext funcType() {
			return getRuleContext(FuncTypeContext.class,0);
		}
		public TypeFuncContext(FactorContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class LenFuncContext extends FactorContext {
		public FuncLenContext funcLen() {
			return getRuleContext(FuncLenContext.class,0);
		}
		public LenFuncContext(FactorContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class BoolLitContext extends FactorContext {
		public TerminalNode BOOL() { return getToken(GrammarParser.BOOL, 0); }
		public BoolLitContext(FactorContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class RuneLitContext extends FactorContext {
		public TerminalNode RUNE() { return getToken(GrammarParser.RUNE, 0); }
		public RuneLitContext(FactorContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class StrLitContext extends FactorContext {
		public TerminalNode STR() { return getToken(GrammarParser.STR, 0); }
		public StrLitContext(FactorContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class IdentifierRContext extends FactorContext {
		public TerminalNode REF() { return getToken(GrammarParser.REF, 0); }
		public TerminalNode IDENTIFICADOR() { return getToken(GrammarParser.IDENTIFICADOR, 0); }
		public IdentifierRContext(FactorContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class ArregloAccesoContext extends FactorContext {
		public AccesoArreglosContext accesoArreglos() {
			return getRuleContext(AccesoArreglosContext.class,0);
		}
		public ArregloAccesoContext(FactorContext ctx) { copyFrom(ctx); }
	}

	public final FactorContext factor() throws RecognitionException {
		FactorContext _localctx = new FactorContext(_ctx, getState());
		enterRule(_localctx, 80, RULE_factor);
		try {
			setState(471);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,27,_ctx) ) {
			case 1:
				_localctx = new GroupedExpressionContext(_localctx);
				enterOuterAlt(_localctx, 1);
				{
				setState(440);
				match(LPAREN);
				setState(441);
				logExpr(0);
				setState(442);
				match(RPAREN);
				}
				break;
			case 2:
				_localctx = new UnaryExpressionContext(_localctx);
				enterOuterAlt(_localctx, 2);
				{
				setState(444);
				match(MINUS);
				setState(445);
				factor();
				}
				break;
			case 3:
				_localctx = new FloatLitContext(_localctx);
				enterOuterAlt(_localctx, 3);
				{
				setState(446);
				match(FLOAT);
				}
				break;
			case 4:
				_localctx = new EnteroLitContext(_localctx);
				enterOuterAlt(_localctx, 4);
				{
				setState(447);
				match(ENTERO);
				}
				break;
			case 5:
				_localctx = new BoolLitContext(_localctx);
				enterOuterAlt(_localctx, 5);
				{
				setState(448);
				match(BOOL);
				}
				break;
			case 6:
				_localctx = new RuneLitContext(_localctx);
				enterOuterAlt(_localctx, 6);
				{
				setState(449);
				match(RUNE);
				}
				break;
			case 7:
				_localctx = new StrLitContext(_localctx);
				enterOuterAlt(_localctx, 7);
				{
				setState(450);
				match(STR);
				}
				break;
			case 8:
				_localctx = new NilLitContext(_localctx);
				enterOuterAlt(_localctx, 8);
				{
				setState(451);
				match(NIL);
				}
				break;
			case 9:
				_localctx = new IdentifierRContext(_localctx);
				enterOuterAlt(_localctx, 9);
				{
				setState(452);
				match(REF);
				setState(453);
				match(IDENTIFICADOR);
				}
				break;
			case 10:
				_localctx = new ArregloAccesoRContext(_localctx);
				enterOuterAlt(_localctx, 10);
				{
				setState(454);
				match(REF);
				setState(455);
				accesoArreglos();
				}
				break;
			case 11:
				_localctx = new ArregloAccesoDRContext(_localctx);
				enterOuterAlt(_localctx, 11);
				{
				setState(456);
				match(REF);
				setState(457);
				accesoArreglosD();
				}
				break;
			case 12:
				_localctx = new IdentifierDContext(_localctx);
				enterOuterAlt(_localctx, 12);
				{
				setState(458);
				match(MULT);
				setState(459);
				match(IDENTIFICADOR);
				}
				break;
			case 13:
				_localctx = new ArregloAccesoDContext(_localctx);
				enterOuterAlt(_localctx, 13);
				{
				setState(460);
				match(MULT);
				setState(461);
				accesoArreglos();
				}
				break;
			case 14:
				_localctx = new ArregloAccesoDDContext(_localctx);
				enterOuterAlt(_localctx, 14);
				{
				setState(462);
				match(MULT);
				setState(463);
				accesoArreglosD();
				}
				break;
			case 15:
				_localctx = new IdentifierContext(_localctx);
				enterOuterAlt(_localctx, 15);
				{
				setState(464);
				match(IDENTIFICADOR);
				}
				break;
			case 16:
				_localctx = new ArregloAccesoContext(_localctx);
				enterOuterAlt(_localctx, 16);
				{
				setState(465);
				accesoArreglos();
				}
				break;
			case 17:
				_localctx = new ArregloAccesoDContext(_localctx);
				enterOuterAlt(_localctx, 17);
				{
				setState(466);
				accesoArreglosD();
				}
				break;
			case 18:
				_localctx = new NowFuncContext(_localctx);
				enterOuterAlt(_localctx, 18);
				{
				setState(467);
				funcNow();
				}
				break;
			case 19:
				_localctx = new LenFuncContext(_localctx);
				enterOuterAlt(_localctx, 19);
				{
				setState(468);
				funcLen();
				}
				break;
			case 20:
				_localctx = new SubFuncContext(_localctx);
				enterOuterAlt(_localctx, 20);
				{
				setState(469);
				funcSub();
				}
				break;
			case 21:
				_localctx = new TypeFuncContext(_localctx);
				enterOuterAlt(_localctx, 21);
				{
				setState(470);
				funcType();
				}
				break;
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class TiposContext extends ParserRuleContext {
		public TerminalNode INT_T() { return getToken(GrammarParser.INT_T, 0); }
		public TerminalNode FLOAT_T() { return getToken(GrammarParser.FLOAT_T, 0); }
		public TerminalNode BOOL_T() { return getToken(GrammarParser.BOOL_T, 0); }
		public TerminalNode RUNE_T() { return getToken(GrammarParser.RUNE_T, 0); }
		public TerminalNode STRING_T() { return getToken(GrammarParser.STRING_T, 0); }
		public TiposContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_tipos; }
	}

	public final TiposContext tipos() throws RecognitionException {
		TiposContext _localctx = new TiposContext(_ctx, getState());
		enterRule(_localctx, 82, RULE_tipos);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(473);
			_la = _input.LA(1);
			if ( !((((_la) & ~0x3f) == 0 && ((1L << _la) & 32505856L) != 0)) ) {
			_errHandler.recoverInline(this);
			}
			else {
				if ( _input.LA(1)==Token.EOF ) matchedEOF = true;
				_errHandler.reportMatch(this);
				consume();
			}
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class SimboloAsignacionContext extends ParserRuleContext {
		public Token op;
		public TerminalNode ASSIGN() { return getToken(GrammarParser.ASSIGN, 0); }
		public TerminalNode PLUS() { return getToken(GrammarParser.PLUS, 0); }
		public TerminalNode MINUS() { return getToken(GrammarParser.MINUS, 0); }
		public TerminalNode MULT() { return getToken(GrammarParser.MULT, 0); }
		public TerminalNode DIV() { return getToken(GrammarParser.DIV, 0); }
		public SimboloAsignacionContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_simboloAsignacion; }
	}

	public final SimboloAsignacionContext simboloAsignacion() throws RecognitionException {
		SimboloAsignacionContext _localctx = new SimboloAsignacionContext(_ctx, getState());
		enterRule(_localctx, 84, RULE_simboloAsignacion);
		int _la;
		try {
			setState(478);
			_errHandler.sync(this);
			switch (_input.LA(1)) {
			case ASSIGN:
				enterOuterAlt(_localctx, 1);
				{
				setState(475);
				match(ASSIGN);
				}
				break;
			case PLUS:
			case MINUS:
			case MULT:
			case DIV:
				enterOuterAlt(_localctx, 2);
				{
				setState(476);
				((SimboloAsignacionContext)_localctx).op = _input.LT(1);
				_la = _input.LA(1);
				if ( !((((_la) & ~0x3f) == 0 && ((1L << _la) & 515396075520L) != 0)) ) {
					((SimboloAsignacionContext)_localctx).op = (Token)_errHandler.recoverInline(this);
				}
				else {
					if ( _input.LA(1)==Token.EOF ) matchedEOF = true;
					_errHandler.reportMatch(this);
					consume();
				}
				setState(477);
				match(ASSIGN);
				}
				break;
			default:
				throw new NoViableAltException(this);
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	public boolean sempred(RuleContext _localctx, int ruleIndex, int predIndex) {
		switch (ruleIndex) {
		case 36:
			return logExpr_sempred((LogExprContext)_localctx, predIndex);
		case 37:
			return relExpr_sempred((RelExprContext)_localctx, predIndex);
		case 38:
			return expr_sempred((ExprContext)_localctx, predIndex);
		case 39:
			return term_sempred((TermContext)_localctx, predIndex);
		}
		return true;
	}
	private boolean logExpr_sempred(LogExprContext _localctx, int predIndex) {
		switch (predIndex) {
		case 0:
			return precpred(_ctx, 2);
		}
		return true;
	}
	private boolean relExpr_sempred(RelExprContext _localctx, int predIndex) {
		switch (predIndex) {
		case 1:
			return precpred(_ctx, 2);
		}
		return true;
	}
	private boolean expr_sempred(ExprContext _localctx, int predIndex) {
		switch (predIndex) {
		case 2:
			return precpred(_ctx, 2);
		}
		return true;
	}
	private boolean term_sempred(TermContext _localctx, int predIndex) {
		switch (predIndex) {
		case 3:
			return precpred(_ctx, 2);
		}
		return true;
	}

	public static final String _serializedATN =
		"\u0004\u0001<\u01e1\u0002\u0000\u0007\u0000\u0002\u0001\u0007\u0001\u0002"+
		"\u0002\u0007\u0002\u0002\u0003\u0007\u0003\u0002\u0004\u0007\u0004\u0002"+
		"\u0005\u0007\u0005\u0002\u0006\u0007\u0006\u0002\u0007\u0007\u0007\u0002"+
		"\b\u0007\b\u0002\t\u0007\t\u0002\n\u0007\n\u0002\u000b\u0007\u000b\u0002"+
		"\f\u0007\f\u0002\r\u0007\r\u0002\u000e\u0007\u000e\u0002\u000f\u0007\u000f"+
		"\u0002\u0010\u0007\u0010\u0002\u0011\u0007\u0011\u0002\u0012\u0007\u0012"+
		"\u0002\u0013\u0007\u0013\u0002\u0014\u0007\u0014\u0002\u0015\u0007\u0015"+
		"\u0002\u0016\u0007\u0016\u0002\u0017\u0007\u0017\u0002\u0018\u0007\u0018"+
		"\u0002\u0019\u0007\u0019\u0002\u001a\u0007\u001a\u0002\u001b\u0007\u001b"+
		"\u0002\u001c\u0007\u001c\u0002\u001d\u0007\u001d\u0002\u001e\u0007\u001e"+
		"\u0002\u001f\u0007\u001f\u0002 \u0007 \u0002!\u0007!\u0002\"\u0007\"\u0002"+
		"#\u0007#\u0002$\u0007$\u0002%\u0007%\u0002&\u0007&\u0002\'\u0007\'\u0002"+
		"(\u0007(\u0002)\u0007)\u0002*\u0007*\u0001\u0000\u0001\u0000\u0001\u0000"+
		"\u0001\u0001\u0001\u0001\u0001\u0001\u0001\u0001\u0001\u0001\u0001\u0001"+
		"\u0001\u0002\u0001\u0002\u0001\u0002\u0001\u0002\u0001\u0002\u0001\u0002"+
		"\u0001\u0002\u0001\u0002\u0001\u0002\u0001\u0002\u0001\u0002\u0001\u0002"+
		"\u0001\u0002\u0001\u0002\u0001\u0002\u0001\u0002\u0001\u0002\u0003\u0002"+
		"q\b\u0002\u0001\u0003\u0001\u0003\u0001\u0003\u0001\u0003\u0001\u0003"+
		"\u0001\u0004\u0001\u0004\u0001\u0004\u0001\u0004\u0001\u0005\u0001\u0005"+
		"\u0001\u0005\u0001\u0005\u0001\u0005\u0001\u0005\u0001\u0005\u0001\u0005"+
		"\u0001\u0005\u0001\u0006\u0001\u0006\u0001\u0006\u0001\u0006\u0001\u0006"+
		"\u0001\u0007\u0001\u0007\u0001\u0007\u0001\b\u0001\b\u0001\b\u0001\b\u0003"+
		"\b\u0091\b\b\u0001\b\u0001\b\u0001\b\u0001\b\u0001\b\u0001\b\u0001\b\u0001"+
		"\b\u0001\b\u0001\b\u0003\b\u009d\b\b\u0001\b\u0001\b\u0001\b\u0001\b\u0003"+
		"\b\u00a3\b\b\u0001\t\u0001\t\u0001\t\u0005\t\u00a8\b\t\n\t\f\t\u00ab\t"+
		"\t\u0001\n\u0001\n\u0001\n\u0001\n\u0001\n\u0005\n\u00b2\b\n\n\n\f\n\u00b5"+
		"\t\n\u0001\u000b\u0001\u000b\u0001\u000b\u0003\u000b\u00ba\b\u000b\u0005"+
		"\u000b\u00bc\b\u000b\n\u000b\f\u000b\u00bf\t\u000b\u0001\u000b\u0001\u000b"+
		"\u0001\f\u0001\f\u0001\f\u0001\f\u0001\f\u0001\f\u0001\f\u0001\f\u0001"+
		"\f\u0001\f\u0001\f\u0001\f\u0001\f\u0001\f\u0001\f\u0001\f\u0001\f\u0001"+
		"\f\u0001\f\u0001\f\u0001\f\u0003\f\u00d8\b\f\u0001\r\u0001\r\u0001\r\u0001"+
		"\r\u0001\r\u0005\r\u00df\b\r\n\r\f\r\u00e2\t\r\u0001\u000e\u0001\u000e"+
		"\u0001\u000e\u0001\u000e\u0001\u000f\u0001\u000f\u0001\u000f\u0001\u000f"+
		"\u0001\u000f\u0001\u000f\u0001\u000f\u0001\u000f\u0001\u0010\u0001\u0010"+
		"\u0001\u0010\u0001\u0010\u0001\u0010\u0001\u0010\u0001\u0010\u0001\u0010"+
		"\u0001\u0010\u0001\u0010\u0001\u0010\u0001\u0010\u0001\u0010\u0001\u0010"+
		"\u0001\u0010\u0003\u0010\u00ff\b\u0010\u0001\u0011\u0001\u0011\u0001\u0011"+
		"\u0001\u0011\u0001\u0012\u0001\u0012\u0001\u0012\u0001\u0012\u0001\u0012"+
		"\u0001\u0013\u0001\u0013\u0001\u0013\u0001\u0013\u0001\u0013\u0001\u0013"+
		"\u0001\u0013\u0001\u0013\u0003\u0013\u0112\b\u0013\u0001\u0014\u0001\u0014"+
		"\u0001\u0014\u0001\u0014\u0001\u0014\u0001\u0014\u0001\u0014\u0001\u0015"+
		"\u0001\u0015\u0003\u0015\u011d\b\u0015\u0001\u0016\u0001\u0016\u0001\u0016"+
		"\u0001\u0016\u0001\u0016\u0001\u0016\u0003\u0016\u0125\b\u0016\u0001\u0017"+
		"\u0001\u0017\u0001\u0017\u0001\u0017\u0001\u0017\u0001\u0017\u0001\u0018"+
		"\u0004\u0018\u012e\b\u0018\u000b\u0018\f\u0018\u012f\u0001\u0018\u0003"+
		"\u0018\u0133\b\u0018\u0001\u0019\u0001\u0019\u0001\u0019\u0001\u0019\u0001"+
		"\u0019\u0001\u001a\u0001\u001a\u0001\u001a\u0001\u001a\u0001\u001b\u0001"+
		"\u001b\u0001\u001b\u0001\u001b\u0001\u001b\u0001\u001b\u0001\u001b\u0001"+
		"\u001b\u0005\u001b\u0146\b\u001b\n\u001b\f\u001b\u0149\t\u001b\u0001\u001b"+
		"\u0001\u001b\u0003\u001b\u014d\b\u001b\u0001\u001c\u0001\u001c\u0001\u001c"+
		"\u0003\u001c\u0152\b\u001c\u0005\u001c\u0154\b\u001c\n\u001c\f\u001c\u0157"+
		"\t\u001c\u0001\u001c\u0001\u001c\u0001\u001d\u0001\u001d\u0001\u001d\u0001"+
		"\u001d\u0001\u001e\u0001\u001e\u0001\u001e\u0001\u001e\u0001\u001e\u0001"+
		"\u001e\u0001\u001e\u0001\u001f\u0001\u001f\u0001\u001f\u0001\u001f\u0001"+
		"\u001f\u0001\u001f\u0001\u001f\u0001\u001f\u0001\u001f\u0001\u001f\u0003"+
		"\u001f\u0170\b\u001f\u0001 \u0001 \u0001 \u0001 \u0001 \u0001!\u0001!"+
		"\u0001!\u0001!\u0001!\u0001!\u0001\"\u0001\"\u0001\"\u0005\"\u0180\b\""+
		"\n\"\f\"\u0183\t\"\u0001#\u0001#\u0001#\u0005#\u0188\b#\n#\f#\u018b\t"+
		"#\u0001$\u0001$\u0001$\u0001$\u0001$\u0001$\u0005$\u0193\b$\n$\f$\u0196"+
		"\t$\u0001%\u0001%\u0001%\u0001%\u0001%\u0001%\u0005%\u019e\b%\n%\f%\u01a1"+
		"\t%\u0001&\u0001&\u0001&\u0001&\u0001&\u0001&\u0005&\u01a9\b&\n&\f&\u01ac"+
		"\t&\u0001\'\u0001\'\u0001\'\u0001\'\u0001\'\u0001\'\u0005\'\u01b4\b\'"+
		"\n\'\f\'\u01b7\t\'\u0001(\u0001(\u0001(\u0001(\u0001(\u0001(\u0001(\u0001"+
		"(\u0001(\u0001(\u0001(\u0001(\u0001(\u0001(\u0001(\u0001(\u0001(\u0001"+
		"(\u0001(\u0001(\u0001(\u0001(\u0001(\u0001(\u0001(\u0001(\u0001(\u0001"+
		"(\u0001(\u0001(\u0001(\u0003(\u01d8\b(\u0001)\u0001)\u0001*\u0001*\u0001"+
		"*\u0003*\u01df\b*\u0001*\u0000\u0004HJLN+\u0000\u0002\u0004\u0006\b\n"+
		"\f\u000e\u0010\u0012\u0014\u0016\u0018\u001a\u001c\u001e \"$&(*,.0246"+
		"8:<>@BDFHJLNPRT\u0000\u0006\u0001\u0000*+\u0001\u0000,1\u0001\u0000#$"+
		"\u0001\u0000%\'\u0001\u0000\u0014\u0018\u0001\u0000#&\u01f5\u0000V\u0001"+
		"\u0000\u0000\u0000\u0002Y\u0001\u0000\u0000\u0000\u0004p\u0001\u0000\u0000"+
		"\u0000\u0006r\u0001\u0000\u0000\u0000\bw\u0001\u0000\u0000\u0000\n{\u0001"+
		"\u0000\u0000\u0000\f\u0084\u0001\u0000\u0000\u0000\u000e\u0089\u0001\u0000"+
		"\u0000\u0000\u0010\u00a2\u0001\u0000\u0000\u0000\u0012\u00a4\u0001\u0000"+
		"\u0000\u0000\u0014\u00ac\u0001\u0000\u0000\u0000\u0016\u00b6\u0001\u0000"+
		"\u0000\u0000\u0018\u00c2\u0001\u0000\u0000\u0000\u001a\u00e0\u0001\u0000"+
		"\u0000\u0000\u001c\u00e3\u0001\u0000\u0000\u0000\u001e\u00e7\u0001\u0000"+
		"\u0000\u0000 \u00ef\u0001\u0000\u0000\u0000\"\u0100\u0001\u0000\u0000"+
		"\u0000$\u0104\u0001\u0000\u0000\u0000&\u0111\u0001\u0000\u0000\u0000("+
		"\u0113\u0001\u0000\u0000\u0000*\u011c\u0001\u0000\u0000\u0000,\u0124\u0001"+
		"\u0000\u0000\u0000.\u0126\u0001\u0000\u0000\u00000\u012d\u0001\u0000\u0000"+
		"\u00002\u0134\u0001\u0000\u0000\u00004\u0139\u0001\u0000\u0000\u00006"+
		"\u013d\u0001\u0000\u0000\u00008\u014e\u0001\u0000\u0000\u0000:\u015a\u0001"+
		"\u0000\u0000\u0000<\u015e\u0001\u0000\u0000\u0000>\u016f\u0001\u0000\u0000"+
		"\u0000@\u0171\u0001\u0000\u0000\u0000B\u0176\u0001\u0000\u0000\u0000D"+
		"\u017c\u0001\u0000\u0000\u0000F\u0184\u0001\u0000\u0000\u0000H\u018c\u0001"+
		"\u0000\u0000\u0000J\u0197\u0001\u0000\u0000\u0000L\u01a2\u0001\u0000\u0000"+
		"\u0000N\u01ad\u0001\u0000\u0000\u0000P\u01d7\u0001\u0000\u0000\u0000R"+
		"\u01d9\u0001\u0000\u0000\u0000T\u01de\u0001\u0000\u0000\u0000VW\u0003"+
		"\u0002\u0001\u0000WX\u0005\u0000\u0000\u0001X\u0001\u0001\u0000\u0000"+
		"\u0000YZ\u0005\u0001\u0000\u0000Z[\u0005\u0002\u0000\u0000[\\\u0005\u001b"+
		"\u0000\u0000\\]\u0005\u001c\u0000\u0000]^\u00038\u001c\u0000^\u0003\u0001"+
		"\u0000\u0000\u0000_q\u0003<\u001e\u0000`q\u0003>\u001f\u0000aq\u0003@"+
		" \u0000bq\u0003B!\u0000cq\u0003:\u001d\u0000dq\u00036\u001b\u0000eq\u0003"+
		".\u0017\u0000fq\u0003&\u0013\u0000gq\u0003,\u0016\u0000hq\u0003 \u0010"+
		"\u0000iq\u0003\"\u0011\u0000jq\u0003\u0018\f\u0000kq\u0003\u001c\u000e"+
		"\u0000lq\u0003\u0010\b\u0000mq\u0003\u000e\u0007\u0000nq\u0005\u000e\u0000"+
		"\u0000oq\u0005\r\u0000\u0000p_\u0001\u0000\u0000\u0000p`\u0001\u0000\u0000"+
		"\u0000pa\u0001\u0000\u0000\u0000pb\u0001\u0000\u0000\u0000pc\u0001\u0000"+
		"\u0000\u0000pd\u0001\u0000\u0000\u0000pe\u0001\u0000\u0000\u0000pf\u0001"+
		"\u0000\u0000\u0000pg\u0001\u0000\u0000\u0000ph\u0001\u0000\u0000\u0000"+
		"pi\u0001\u0000\u0000\u0000pj\u0001\u0000\u0000\u0000pk\u0001\u0000\u0000"+
		"\u0000pl\u0001\u0000\u0000\u0000pm\u0001\u0000\u0000\u0000pn\u0001\u0000"+
		"\u0000\u0000po\u0001\u0000\u0000\u0000q\u0005\u0001\u0000\u0000\u0000"+
		"rs\u0005\u0010\u0000\u0000st\u0005\u001b\u0000\u0000tu\u0003H$\u0000u"+
		"v\u0005\u001c\u0000\u0000v\u0007\u0001\u0000\u0000\u0000wx\u0005\u0011"+
		"\u0000\u0000xy\u0005\u001b\u0000\u0000yz\u0005\u001c\u0000\u0000z\t\u0001"+
		"\u0000\u0000\u0000{|\u0005\u0012\u0000\u0000|}\u0005\u001b\u0000\u0000"+
		"}~\u0003H$\u0000~\u007f\u0005\u001f\u0000\u0000\u007f\u0080\u0003H$\u0000"+
		"\u0080\u0081\u0005\u001f\u0000\u0000\u0081\u0082\u0003H$\u0000\u0082\u0083"+
		"\u0005\u001c\u0000\u0000\u0083\u000b\u0001\u0000\u0000\u0000\u0084\u0085"+
		"\u0005\u0013\u0000\u0000\u0085\u0086\u0005\u001b\u0000\u0000\u0086\u0087"+
		"\u00058\u0000\u0000\u0087\u0088\u0005\u001c\u0000\u0000\u0088\r\u0001"+
		"\u0000\u0000\u0000\u0089\u008a\u0005\u000f\u0000\u0000\u008a\u008b\u0003"+
		"D\"\u0000\u008b\u000f\u0001\u0000\u0000\u0000\u008c\u008d\u0005\u0001"+
		"\u0000\u0000\u008d\u008e\u00058\u0000\u0000\u008e\u0090\u0005\u001b\u0000"+
		"\u0000\u008f\u0091\u0003\u0014\n\u0000\u0090\u008f\u0001\u0000\u0000\u0000"+
		"\u0090\u0091\u0001\u0000\u0000\u0000\u0091\u0092\u0001\u0000\u0000\u0000"+
		"\u0092\u0093\u0005\u001c\u0000\u0000\u0093\u0094\u0005\u001b\u0000\u0000"+
		"\u0094\u0095\u0003\u0012\t\u0000\u0095\u0096\u0005\u001c\u0000\u0000\u0096"+
		"\u0097\u0003\u0016\u000b\u0000\u0097\u00a3\u0001\u0000\u0000\u0000\u0098"+
		"\u0099\u0005\u0001\u0000\u0000\u0099\u009a\u00058\u0000\u0000\u009a\u009c"+
		"\u0005\u001b\u0000\u0000\u009b\u009d\u0003\u0014\n\u0000\u009c\u009b\u0001"+
		"\u0000\u0000\u0000\u009c\u009d\u0001\u0000\u0000\u0000\u009d\u009e\u0001"+
		"\u0000\u0000\u0000\u009e\u009f\u0005\u001c\u0000\u0000\u009f\u00a0\u0003"+
		"R)\u0000\u00a0\u00a1\u0003\u0016\u000b\u0000\u00a1\u00a3\u0001\u0000\u0000"+
		"\u0000\u00a2\u008c\u0001\u0000\u0000\u0000\u00a2\u0098\u0001\u0000\u0000"+
		"\u0000\u00a3\u0011\u0001\u0000\u0000\u0000\u00a4\u00a9\u0003R)\u0000\u00a5"+
		"\u00a6\u0005\u001f\u0000\u0000\u00a6\u00a8\u0003R)\u0000\u00a7\u00a5\u0001"+
		"\u0000\u0000\u0000\u00a8\u00ab\u0001\u0000\u0000\u0000\u00a9\u00a7\u0001"+
		"\u0000\u0000\u0000\u00a9\u00aa\u0001\u0000\u0000\u0000\u00aa\u0013\u0001"+
		"\u0000\u0000\u0000\u00ab\u00a9\u0001\u0000\u0000\u0000\u00ac\u00ad\u0005"+
		"8\u0000\u0000\u00ad\u00b3\u0003R)\u0000\u00ae\u00af\u0005\u001f\u0000"+
		"\u0000\u00af\u00b0\u00058\u0000\u0000\u00b0\u00b2\u0003R)\u0000\u00b1"+
		"\u00ae\u0001\u0000\u0000\u0000\u00b2\u00b5\u0001\u0000\u0000\u0000\u00b3"+
		"\u00b1\u0001\u0000\u0000\u0000\u00b3\u00b4\u0001\u0000\u0000\u0000\u00b4"+
		"\u0015\u0001\u0000\u0000\u0000\u00b5\u00b3\u0001\u0000\u0000\u0000\u00b6"+
		"\u00bd\u0005\u0019\u0000\u0000\u00b7\u00b9\u0003\u0004\u0002\u0000\u00b8"+
		"\u00ba\u0005\"\u0000\u0000\u00b9\u00b8\u0001\u0000\u0000\u0000\u00b9\u00ba"+
		"\u0001\u0000\u0000\u0000\u00ba\u00bc\u0001\u0000\u0000\u0000\u00bb\u00b7"+
		"\u0001\u0000\u0000\u0000\u00bc\u00bf\u0001\u0000\u0000\u0000\u00bd\u00bb"+
		"\u0001\u0000\u0000\u0000\u00bd\u00be\u0001\u0000\u0000\u0000\u00be\u00c0"+
		"\u0001\u0000\u0000\u0000\u00bf\u00bd\u0001\u0000\u0000\u0000\u00c0\u00c1"+
		"\u0005\u001a\u0000\u0000\u00c1\u0017\u0001\u0000\u0000\u0000\u00c2\u00c3"+
		"\u0005\u0003\u0000\u0000\u00c3\u00c4\u00058\u0000\u0000\u00c4\u00c5\u0005"+
		"\u001d\u0000\u0000\u00c5\u00c6\u0003H$\u0000\u00c6\u00c7\u0005\u001e\u0000"+
		"\u0000\u00c7\u00c8\u0005\u001d\u0000\u0000\u00c8\u00c9\u0003H$\u0000\u00c9"+
		"\u00ca\u0005\u001e\u0000\u0000\u00ca\u00d7\u0003R)\u0000\u00cb\u00cc\u0005"+
		" \u0000\u0000\u00cc\u00cd\u0005\u001d\u0000\u0000\u00cd\u00ce\u0003H$"+
		"\u0000\u00ce\u00cf\u0005\u001e\u0000\u0000\u00cf\u00d0\u0005\u001d\u0000"+
		"\u0000\u00d0\u00d1\u0003H$\u0000\u00d1\u00d2\u0005\u001e\u0000\u0000\u00d2"+
		"\u00d3\u0003R)\u0000\u00d3\u00d4\u0005\u0019\u0000\u0000\u00d4\u00d5\u0003"+
		"\u001a\r\u0000\u00d5\u00d6\u0005\u001a\u0000\u0000\u00d6\u00d8\u0001\u0000"+
		"\u0000\u0000\u00d7\u00cb\u0001\u0000\u0000\u0000\u00d7\u00d8\u0001\u0000"+
		"\u0000\u0000\u00d8\u0019\u0001\u0000\u0000\u0000\u00d9\u00da\u0005\u0019"+
		"\u0000\u0000\u00da\u00db\u0003D\"\u0000\u00db\u00dc\u0005\u001a\u0000"+
		"\u0000\u00dc\u00dd\u0005\u001f\u0000\u0000\u00dd\u00df\u0001\u0000\u0000"+
		"\u0000\u00de\u00d9\u0001\u0000\u0000\u0000\u00df\u00e2\u0001\u0000\u0000"+
		"\u0000\u00e0\u00de\u0001\u0000\u0000\u0000\u00e0\u00e1\u0001\u0000\u0000"+
		"\u0000\u00e1\u001b\u0001\u0000\u0000\u0000\u00e2\u00e0\u0001\u0000\u0000"+
		"\u0000\u00e3\u00e4\u0003\u001e\u000f\u0000\u00e4\u00e5\u0005 \u0000\u0000"+
		"\u00e5\u00e6\u0003H$\u0000\u00e6\u001d\u0001\u0000\u0000\u0000\u00e7\u00e8"+
		"\u00058\u0000\u0000\u00e8\u00e9\u0005\u001d\u0000\u0000\u00e9\u00ea\u0003"+
		"H$\u0000\u00ea\u00eb\u0005\u001e\u0000\u0000\u00eb\u00ec\u0005\u001d\u0000"+
		"\u0000\u00ec\u00ed\u0003H$\u0000\u00ed\u00ee\u0005\u001e\u0000\u0000\u00ee"+
		"\u001f\u0001\u0000\u0000\u0000\u00ef\u00f0\u0005\u0003\u0000\u0000\u00f0"+
		"\u00f1\u00058\u0000\u0000\u00f1\u00f2\u0005\u001d\u0000\u0000\u00f2\u00f3"+
		"\u0003H$\u0000\u00f3\u00f4\u0005\u001e\u0000\u0000\u00f4\u00fe\u0003R"+
		")\u0000\u00f5\u00f6\u0005 \u0000\u0000\u00f6\u00f7\u0005\u001d\u0000\u0000"+
		"\u00f7\u00f8\u0003H$\u0000\u00f8\u00f9\u0005\u001e\u0000\u0000\u00f9\u00fa"+
		"\u0003R)\u0000\u00fa\u00fb\u0005\u0019\u0000\u0000\u00fb\u00fc\u0003D"+
		"\"\u0000\u00fc\u00fd\u0005\u001a\u0000\u0000\u00fd\u00ff\u0001\u0000\u0000"+
		"\u0000\u00fe\u00f5\u0001\u0000\u0000\u0000\u00fe\u00ff\u0001\u0000\u0000"+
		"\u0000\u00ff!\u0001\u0000\u0000\u0000\u0100\u0101\u0003$\u0012\u0000\u0101"+
		"\u0102\u0005 \u0000\u0000\u0102\u0103\u0003H$\u0000\u0103#\u0001\u0000"+
		"\u0000\u0000\u0104\u0105\u00058\u0000\u0000\u0105\u0106\u0005\u001d\u0000"+
		"\u0000\u0106\u0107\u0003H$\u0000\u0107\u0108\u0005\u001e\u0000\u0000\u0108"+
		"%\u0001\u0000\u0000\u0000\u0109\u010a\u0005\f\u0000\u0000\u010a\u0112"+
		"\u0003(\u0014\u0000\u010b\u010c\u0005\f\u0000\u0000\u010c\u010d\u0003"+
		"H$\u0000\u010d\u010e\u00038\u001c\u0000\u010e\u0112\u0001\u0000\u0000"+
		"\u0000\u010f\u0110\u0005\f\u0000\u0000\u0110\u0112\u00038\u001c\u0000"+
		"\u0111\u0109\u0001\u0000\u0000\u0000\u0111\u010b\u0001\u0000\u0000\u0000"+
		"\u0111\u010f\u0001\u0000\u0000\u0000\u0112\'\u0001\u0000\u0000\u0000\u0113"+
		"\u0114\u0003@ \u0000\u0114\u0115\u0005\"\u0000\u0000\u0115\u0116\u0003"+
		"H$\u0000\u0116\u0117\u0005\"\u0000\u0000\u0117\u0118\u0003*\u0015\u0000"+
		"\u0118\u0119\u00038\u001c\u0000\u0119)\u0001\u0000\u0000\u0000\u011a\u011d"+
		"\u0003,\u0016\u0000\u011b\u011d\u0003:\u001d\u0000\u011c\u011a\u0001\u0000"+
		"\u0000\u0000\u011c\u011b\u0001\u0000\u0000\u0000\u011d+\u0001\u0000\u0000"+
		"\u0000\u011e\u011f\u00058\u0000\u0000\u011f\u0120\u0005#\u0000\u0000\u0120"+
		"\u0125\u0005#\u0000\u0000\u0121\u0122\u00058\u0000\u0000\u0122\u0123\u0005"+
		"$\u0000\u0000\u0123\u0125\u0005$\u0000\u0000\u0124\u011e\u0001\u0000\u0000"+
		"\u0000\u0124\u0121\u0001\u0000\u0000\u0000\u0125-\u0001\u0000\u0000\u0000"+
		"\u0126\u0127\u0005\t\u0000\u0000\u0127\u0128\u0003H$\u0000\u0128\u0129"+
		"\u0005\u0019\u0000\u0000\u0129\u012a\u00030\u0018\u0000\u012a\u012b\u0005"+
		"\u001a\u0000\u0000\u012b/\u0001\u0000\u0000\u0000\u012c\u012e\u00032\u0019"+
		"\u0000\u012d\u012c\u0001\u0000\u0000\u0000\u012e\u012f\u0001\u0000\u0000"+
		"\u0000\u012f\u012d\u0001\u0000\u0000\u0000\u012f\u0130\u0001\u0000\u0000"+
		"\u0000\u0130\u0132\u0001\u0000\u0000\u0000\u0131\u0133\u00034\u001a\u0000"+
		"\u0132\u0131\u0001\u0000\u0000\u0000\u0132\u0133\u0001\u0000\u0000\u0000"+
		"\u01331\u0001\u0000\u0000\u0000\u0134\u0135\u0005\n\u0000\u0000\u0135"+
		"\u0136\u0003D\"\u0000\u0136\u0137\u0005!\u0000\u0000\u0137\u0138\u0003"+
		"8\u001c\u0000\u01383\u0001\u0000\u0000\u0000\u0139\u013a\u0005\u000b\u0000"+
		"\u0000\u013a\u013b\u0005!\u0000\u0000\u013b\u013c\u00038\u001c\u0000\u013c"+
		"5\u0001\u0000\u0000\u0000\u013d\u013e\u0005\u0007\u0000\u0000\u013e\u013f"+
		"\u0003H$\u0000\u013f\u0147\u00038\u001c\u0000\u0140\u0141\u0005\b\u0000"+
		"\u0000\u0141\u0142\u0005\u0007\u0000\u0000\u0142\u0143\u0003H$\u0000\u0143"+
		"\u0144\u00038\u001c\u0000\u0144\u0146\u0001\u0000\u0000\u0000\u0145\u0140"+
		"\u0001\u0000\u0000\u0000\u0146\u0149\u0001\u0000\u0000\u0000\u0147\u0145"+
		"\u0001\u0000\u0000\u0000\u0147\u0148\u0001\u0000\u0000\u0000\u0148\u014c"+
		"\u0001\u0000\u0000\u0000\u0149\u0147\u0001\u0000\u0000\u0000\u014a\u014b"+
		"\u0005\b\u0000\u0000\u014b\u014d\u00038\u001c\u0000\u014c\u014a\u0001"+
		"\u0000\u0000\u0000\u014c\u014d\u0001\u0000\u0000\u0000\u014d7\u0001\u0000"+
		"\u0000\u0000\u014e\u0155\u0005\u0019\u0000\u0000\u014f\u0151\u0003\u0004"+
		"\u0002\u0000\u0150\u0152\u0005\"\u0000\u0000\u0151\u0150\u0001\u0000\u0000"+
		"\u0000\u0151\u0152\u0001\u0000\u0000\u0000\u0152\u0154\u0001\u0000\u0000"+
		"\u0000\u0153\u014f\u0001\u0000\u0000\u0000\u0154\u0157\u0001\u0000\u0000"+
		"\u0000\u0155\u0153\u0001\u0000\u0000\u0000\u0155\u0156\u0001\u0000\u0000"+
		"\u0000\u0156\u0158\u0001\u0000\u0000\u0000\u0157\u0155\u0001\u0000\u0000"+
		"\u0000\u0158\u0159\u0005\u001a\u0000\u0000\u01599\u0001\u0000\u0000\u0000"+
		"\u015a\u015b\u00058\u0000\u0000\u015b\u015c\u0003T*\u0000\u015c\u015d"+
		"\u0003H$\u0000\u015d;\u0001\u0000\u0000\u0000\u015e\u015f\u0005\u0004"+
		"\u0000\u0000\u015f\u0160\u0005(\u0000\u0000\u0160\u0161\u0005\u0005\u0000"+
		"\u0000\u0161\u0162\u0005\u001b\u0000\u0000\u0162\u0163\u0003D\"\u0000"+
		"\u0163\u0164\u0005\u001c\u0000\u0000\u0164=\u0001\u0000\u0000\u0000\u0165"+
		"\u0166\u0005\u0003\u0000\u0000\u0166\u0167\u0003F#\u0000\u0167\u0168\u0003"+
		"R)\u0000\u0168\u0170\u0001\u0000\u0000\u0000\u0169\u016a\u0005\u0003\u0000"+
		"\u0000\u016a\u016b\u0003F#\u0000\u016b\u016c\u0003R)\u0000\u016c\u016d"+
		"\u0005 \u0000\u0000\u016d\u016e\u0003D\"\u0000\u016e\u0170\u0001\u0000"+
		"\u0000\u0000\u016f\u0165\u0001\u0000\u0000\u0000\u016f\u0169\u0001\u0000"+
		"\u0000\u0000\u0170?\u0001\u0000\u0000\u0000\u0171\u0172\u0003F#\u0000"+
		"\u0172\u0173\u0005!\u0000\u0000\u0173\u0174\u0005 \u0000\u0000\u0174\u0175"+
		"\u0003D\"\u0000\u0175A\u0001\u0000\u0000\u0000\u0176\u0177\u0005\u0006"+
		"\u0000\u0000\u0177\u0178\u00058\u0000\u0000\u0178\u0179\u0003R)\u0000"+
		"\u0179\u017a\u0005 \u0000\u0000\u017a\u017b\u0003H$\u0000\u017bC\u0001"+
		"\u0000\u0000\u0000\u017c\u0181\u0003H$\u0000\u017d\u017e\u0005\u001f\u0000"+
		"\u0000\u017e\u0180\u0003H$\u0000\u017f\u017d\u0001\u0000\u0000\u0000\u0180"+
		"\u0183\u0001\u0000\u0000\u0000\u0181\u017f\u0001\u0000\u0000\u0000\u0181"+
		"\u0182\u0001\u0000\u0000\u0000\u0182E\u0001\u0000\u0000\u0000\u0183\u0181"+
		"\u0001\u0000\u0000\u0000\u0184\u0189\u00058\u0000\u0000\u0185\u0186\u0005"+
		"\u001f\u0000\u0000\u0186\u0188\u00058\u0000\u0000\u0187\u0185\u0001\u0000"+
		"\u0000\u0000\u0188\u018b\u0001\u0000\u0000\u0000\u0189\u0187\u0001\u0000"+
		"\u0000\u0000\u0189\u018a\u0001\u0000\u0000\u0000\u018aG\u0001\u0000\u0000"+
		"\u0000\u018b\u0189\u0001\u0000\u0000\u0000\u018c\u018d\u0006$\uffff\uffff"+
		"\u0000\u018d\u018e\u0003J%\u0000\u018e\u0194\u0001\u0000\u0000\u0000\u018f"+
		"\u0190\n\u0002\u0000\u0000\u0190\u0191\u0007\u0000\u0000\u0000\u0191\u0193"+
		"\u0003J%\u0000\u0192\u018f\u0001\u0000\u0000\u0000\u0193\u0196\u0001\u0000"+
		"\u0000\u0000\u0194\u0192\u0001\u0000\u0000\u0000\u0194\u0195\u0001\u0000"+
		"\u0000\u0000\u0195I\u0001\u0000\u0000\u0000\u0196\u0194\u0001\u0000\u0000"+
		"\u0000\u0197\u0198\u0006%\uffff\uffff\u0000\u0198\u0199\u0003L&\u0000"+
		"\u0199\u019f\u0001\u0000\u0000\u0000\u019a\u019b\n\u0002\u0000\u0000\u019b"+
		"\u019c\u0007\u0001\u0000\u0000\u019c\u019e\u0003L&\u0000\u019d\u019a\u0001"+
		"\u0000\u0000\u0000\u019e\u01a1\u0001\u0000\u0000\u0000\u019f\u019d\u0001"+
		"\u0000\u0000\u0000\u019f\u01a0\u0001\u0000\u0000\u0000\u01a0K\u0001\u0000"+
		"\u0000\u0000\u01a1\u019f\u0001\u0000\u0000\u0000\u01a2\u01a3\u0006&\uffff"+
		"\uffff\u0000\u01a3\u01a4\u0003N\'\u0000\u01a4\u01aa\u0001\u0000\u0000"+
		"\u0000\u01a5\u01a6\n\u0002\u0000\u0000\u01a6\u01a7\u0007\u0002\u0000\u0000"+
		"\u01a7\u01a9\u0003N\'\u0000\u01a8\u01a5\u0001\u0000\u0000\u0000\u01a9"+
		"\u01ac\u0001\u0000\u0000\u0000\u01aa\u01a8\u0001\u0000\u0000\u0000\u01aa"+
		"\u01ab\u0001\u0000\u0000\u0000\u01abM\u0001\u0000\u0000\u0000\u01ac\u01aa"+
		"\u0001\u0000\u0000\u0000\u01ad\u01ae\u0006\'\uffff\uffff\u0000\u01ae\u01af"+
		"\u0003P(\u0000\u01af\u01b5\u0001\u0000\u0000\u0000\u01b0\u01b1\n\u0002"+
		"\u0000\u0000\u01b1\u01b2\u0007\u0003\u0000\u0000\u01b2\u01b4\u0003P(\u0000"+
		"\u01b3\u01b0\u0001\u0000\u0000\u0000\u01b4\u01b7\u0001\u0000\u0000\u0000"+
		"\u01b5\u01b3\u0001\u0000\u0000\u0000\u01b5\u01b6\u0001\u0000\u0000\u0000"+
		"\u01b6O\u0001\u0000\u0000\u0000\u01b7\u01b5\u0001\u0000\u0000\u0000\u01b8"+
		"\u01b9\u0005\u001b\u0000\u0000\u01b9\u01ba\u0003H$\u0000\u01ba\u01bb\u0005"+
		"\u001c\u0000\u0000\u01bb\u01d8\u0001\u0000\u0000\u0000\u01bc\u01bd\u0005"+
		"$\u0000\u0000\u01bd\u01d8\u0003P(\u0000\u01be\u01d8\u00055\u0000\u0000"+
		"\u01bf\u01d8\u00054\u0000\u0000\u01c0\u01d8\u00052\u0000\u0000\u01c1\u01d8"+
		"\u00057\u0000\u0000\u01c2\u01d8\u00056\u0000\u0000\u01c3\u01d8\u00053"+
		"\u0000\u0000\u01c4\u01c5\u0005)\u0000\u0000\u01c5\u01d8\u00058\u0000\u0000"+
		"\u01c6\u01c7\u0005)\u0000\u0000\u01c7\u01d8\u0003$\u0012\u0000\u01c8\u01c9"+
		"\u0005)\u0000\u0000\u01c9\u01d8\u0003\u001e\u000f\u0000\u01ca\u01cb\u0005"+
		"%\u0000\u0000\u01cb\u01d8\u00058\u0000\u0000\u01cc\u01cd\u0005%\u0000"+
		"\u0000\u01cd\u01d8\u0003$\u0012\u0000\u01ce\u01cf\u0005%\u0000\u0000\u01cf"+
		"\u01d8\u0003\u001e\u000f\u0000\u01d0\u01d8\u00058\u0000\u0000\u01d1\u01d8"+
		"\u0003$\u0012\u0000\u01d2\u01d8\u0003\u001e\u000f\u0000\u01d3\u01d8\u0003"+
		"\b\u0004\u0000\u01d4\u01d8\u0003\u0006\u0003\u0000\u01d5\u01d8\u0003\n"+
		"\u0005\u0000\u01d6\u01d8\u0003\f\u0006\u0000\u01d7\u01b8\u0001\u0000\u0000"+
		"\u0000\u01d7\u01bc\u0001\u0000\u0000\u0000\u01d7\u01be\u0001\u0000\u0000"+
		"\u0000\u01d7\u01bf\u0001\u0000\u0000\u0000\u01d7\u01c0\u0001\u0000\u0000"+
		"\u0000\u01d7\u01c1\u0001\u0000\u0000\u0000\u01d7\u01c2\u0001\u0000\u0000"+
		"\u0000\u01d7\u01c3\u0001\u0000\u0000\u0000\u01d7\u01c4\u0001\u0000\u0000"+
		"\u0000\u01d7\u01c6\u0001\u0000\u0000\u0000\u01d7\u01c8\u0001\u0000\u0000"+
		"\u0000\u01d7\u01ca\u0001\u0000\u0000\u0000\u01d7\u01cc\u0001\u0000\u0000"+
		"\u0000\u01d7\u01ce\u0001\u0000\u0000\u0000\u01d7\u01d0\u0001\u0000\u0000"+
		"\u0000\u01d7\u01d1\u0001\u0000\u0000\u0000\u01d7\u01d2\u0001\u0000\u0000"+
		"\u0000\u01d7\u01d3\u0001\u0000\u0000\u0000\u01d7\u01d4\u0001\u0000\u0000"+
		"\u0000\u01d7\u01d5\u0001\u0000\u0000\u0000\u01d7\u01d6\u0001\u0000\u0000"+
		"\u0000\u01d8Q\u0001\u0000\u0000\u0000\u01d9\u01da\u0007\u0004\u0000\u0000"+
		"\u01daS\u0001\u0000\u0000\u0000\u01db\u01df\u0005 \u0000\u0000\u01dc\u01dd"+
		"\u0007\u0005\u0000\u0000\u01dd\u01df\u0005 \u0000\u0000\u01de\u01db\u0001"+
		"\u0000\u0000\u0000\u01de\u01dc\u0001\u0000\u0000\u0000\u01dfU\u0001\u0000"+
		"\u0000\u0000\u001dp\u0090\u009c\u00a2\u00a9\u00b3\u00b9\u00bd\u00d7\u00e0"+
		"\u00fe\u0111\u011c\u0124\u012f\u0132\u0147\u014c\u0151\u0155\u016f\u0181"+
		"\u0189\u0194\u019f\u01aa\u01b5\u01d7\u01de";
	public static final ATN _ATN =
		new ATNDeserializer().deserialize(_serializedATN.toCharArray());
	static {
		_decisionToDFA = new DFA[_ATN.getNumberOfDecisions()];
		for (int i = 0; i < _ATN.getNumberOfDecisions(); i++) {
			_decisionToDFA[i] = new DFA(_ATN.getDecisionState(i), i);
		}
	}
}
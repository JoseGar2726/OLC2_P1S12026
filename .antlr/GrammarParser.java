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
		COMMA=31, ASSIGN=32, COLON=33, SEMICOLON=34, PLUS=35, MINUS=36, NEG=37, 
		MULT=38, DIV=39, MOD=40, DOT=41, REF=42, ANDO=43, ORO=44, LE=45, GE=46, 
		EQUAL=47, NEQUAL=48, LESS=49, GREATER=50, BOOL=51, NIL=52, ENTERO=53, 
		FLOAT=54, STR=55, RUNE=56, IDENTIFICADOR=57, COMENTARIO_LINEA=58, COMENTARIO_BLOQUE=59, 
		WS=60, ERROR=61;
	public static final int
		RULE_programa = 0, RULE_topLevel = 1, RULE_mainFuncion = 2, RULE_i = 3, 
		RULE_funcLen = 4, RULE_funcNow = 5, RULE_funcSub = 6, RULE_funcType = 7, 
		RULE_llamadaFuncion = 8, RULE_retornar = 9, RULE_funcion = 10, RULE_listaRetorno = 11, 
		RULE_listaParametros = 12, RULE_accesoArreglo = 13, RULE_listaValores = 14, 
		RULE_sentenciaFor = 15, RULE_forClasico = 16, RULE_condFor = 17, RULE_expFor = 18, 
		RULE_sentenciaSwitch = 19, RULE_bloqueSwitch = 20, RULE_bloqueCase = 21, 
		RULE_bloqueDefault = 22, RULE_sentenciaIf = 23, RULE_bloque = 24, RULE_asignacion = 25, 
		RULE_imprimir = 26, RULE_declaracion = 27, RULE_declaracionCorta = 28, 
		RULE_declaracionConst = 29, RULE_listaExpr = 30, RULE_listaId = 31, RULE_logExpr = 32, 
		RULE_relExpr = 33, RULE_expr = 34, RULE_term = 35, RULE_factor = 36, RULE_arrayLiteral = 37, 
		RULE_arrayLiteral2D = 38, RULE_tipos = 39, RULE_tipoArray = 40, RULE_tipoArray2D = 41, 
		RULE_tipoBase = 42, RULE_simboloAsignacion = 43;
	private static String[] makeRuleNames() {
		return new String[] {
			"programa", "topLevel", "mainFuncion", "i", "funcLen", "funcNow", "funcSub", 
			"funcType", "llamadaFuncion", "retornar", "funcion", "listaRetorno", 
			"listaParametros", "accesoArreglo", "listaValores", "sentenciaFor", "forClasico", 
			"condFor", "expFor", "sentenciaSwitch", "bloqueSwitch", "bloqueCase", 
			"bloqueDefault", "sentenciaIf", "bloque", "asignacion", "imprimir", "declaracion", 
			"declaracionCorta", "declaracionConst", "listaExpr", "listaId", "logExpr", 
			"relExpr", "expr", "term", "factor", "arrayLiteral", "arrayLiteral2D", 
			"tipos", "tipoArray", "tipoArray2D", "tipoBase", "simboloAsignacion"
		};
	}
	public static final String[] ruleNames = makeRuleNames();

	private static String[] makeLiteralNames() {
		return new String[] {
			null, "'func'", "'main'", "'var'", "'fmt'", "'Println'", "'const'", "'if'", 
			"'else'", "'switch'", "'case'", "'default'", "'for'", "'break'", "'continue'", 
			"'return'", "'len'", "'now'", "'substr'", "'typeOf'", null, null, "'bool'", 
			"'rune'", "'string'", "'{'", "'}'", "'('", "')'", "'['", "']'", "','", 
			"'='", "':'", "';'", "'+'", "'-'", "'!'", "'*'", "'/'", "'%'", "'.'", 
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
			"COLON", "SEMICOLON", "PLUS", "MINUS", "NEG", "MULT", "DIV", "MOD", "DOT", 
			"REF", "ANDO", "ORO", "LE", "GE", "EQUAL", "NEQUAL", "LESS", "GREATER", 
			"BOOL", "NIL", "ENTERO", "FLOAT", "STR", "RUNE", "IDENTIFICADOR", "COMENTARIO_LINEA", 
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
	public static class ProgramaContext extends ParserRuleContext {
		public TerminalNode EOF() { return getToken(GrammarParser.EOF, 0); }
		public List<TopLevelContext> topLevel() {
			return getRuleContexts(TopLevelContext.class);
		}
		public TopLevelContext topLevel(int i) {
			return getRuleContext(TopLevelContext.class,i);
		}
		public ProgramaContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_programa; }
	}

	public final ProgramaContext programa() throws RecognitionException {
		ProgramaContext _localctx = new ProgramaContext(_ctx, getState());
		enterRule(_localctx, 0, RULE_programa);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(91);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while ((((_la) & ~0x3f) == 0 && ((1L << _la) & 74L) != 0)) {
				{
				{
				setState(88);
				topLevel();
				}
				}
				setState(93);
				_errHandler.sync(this);
				_la = _input.LA(1);
			}
			setState(94);
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
	public static class TopLevelContext extends ParserRuleContext {
		public FuncionContext funcion() {
			return getRuleContext(FuncionContext.class,0);
		}
		public MainFuncionContext mainFuncion() {
			return getRuleContext(MainFuncionContext.class,0);
		}
		public DeclaracionContext declaracion() {
			return getRuleContext(DeclaracionContext.class,0);
		}
		public DeclaracionConstContext declaracionConst() {
			return getRuleContext(DeclaracionConstContext.class,0);
		}
		public TopLevelContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_topLevel; }
	}

	public final TopLevelContext topLevel() throws RecognitionException {
		TopLevelContext _localctx = new TopLevelContext(_ctx, getState());
		enterRule(_localctx, 2, RULE_topLevel);
		try {
			setState(100);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,1,_ctx) ) {
			case 1:
				enterOuterAlt(_localctx, 1);
				{
				setState(96);
				funcion();
				}
				break;
			case 2:
				enterOuterAlt(_localctx, 2);
				{
				setState(97);
				mainFuncion();
				}
				break;
			case 3:
				enterOuterAlt(_localctx, 3);
				{
				setState(98);
				declaracion();
				}
				break;
			case 4:
				enterOuterAlt(_localctx, 4);
				{
				setState(99);
				declaracionConst();
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
	public static class MainFuncionContext extends ParserRuleContext {
		public MainFuncionContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_mainFuncion; }
	 
		public MainFuncionContext() { }
		public void copyFrom(MainFuncionContext ctx) {
			super.copyFrom(ctx);
		}
	}
	@SuppressWarnings("CheckReturnValue")
	public static class BloqueMainContext extends MainFuncionContext {
		public TerminalNode FUNC() { return getToken(GrammarParser.FUNC, 0); }
		public TerminalNode MAIN() { return getToken(GrammarParser.MAIN, 0); }
		public TerminalNode LPAREN() { return getToken(GrammarParser.LPAREN, 0); }
		public TerminalNode RPAREN() { return getToken(GrammarParser.RPAREN, 0); }
		public BloqueContext bloque() {
			return getRuleContext(BloqueContext.class,0);
		}
		public BloqueMainContext(MainFuncionContext ctx) { copyFrom(ctx); }
	}

	public final MainFuncionContext mainFuncion() throws RecognitionException {
		MainFuncionContext _localctx = new MainFuncionContext(_ctx, getState());
		enterRule(_localctx, 4, RULE_mainFuncion);
		try {
			_localctx = new BloqueMainContext(_localctx);
			enterOuterAlt(_localctx, 1);
			{
			setState(102);
			match(FUNC);
			setState(103);
			match(MAIN);
			setState(104);
			match(LPAREN);
			setState(105);
			match(RPAREN);
			setState(106);
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
	public static class IncDecContext extends IContext {
		public ExpForContext expFor() {
			return getRuleContext(ExpForContext.class,0);
		}
		public IncDecContext(IContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class PruebaContext extends IContext {
		public LogExprContext logExpr() {
			return getRuleContext(LogExprContext.class,0);
		}
		public PruebaContext(IContext ctx) { copyFrom(ctx); }
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
	public static class DFunctionContext extends IContext {
		public FuncionContext funcion() {
			return getRuleContext(FuncionContext.class,0);
		}
		public DFunctionContext(IContext ctx) { copyFrom(ctx); }
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
	public static class LlamarFuncionContext extends IContext {
		public LlamadaFuncionContext llamadaFuncion() {
			return getRuleContext(LlamadaFuncionContext.class,0);
		}
		public LlamarFuncionContext(IContext ctx) { copyFrom(ctx); }
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
		enterRule(_localctx, 6, RULE_i);
		try {
			setState(123);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,2,_ctx) ) {
			case 1:
				_localctx = new FuncionImprimirContext(_localctx);
				enterOuterAlt(_localctx, 1);
				{
				setState(108);
				imprimir();
				}
				break;
			case 2:
				_localctx = new DeclarationContext(_localctx);
				enterOuterAlt(_localctx, 2);
				{
				setState(109);
				declaracion();
				}
				break;
			case 3:
				_localctx = new ShortDeclarationContext(_localctx);
				enterOuterAlt(_localctx, 3);
				{
				setState(110);
				declaracionCorta();
				}
				break;
			case 4:
				_localctx = new ConstDeclarationContext(_localctx);
				enterOuterAlt(_localctx, 4);
				{
				setState(111);
				declaracionConst();
				}
				break;
			case 5:
				_localctx = new AsignationContext(_localctx);
				enterOuterAlt(_localctx, 5);
				{
				setState(112);
				asignacion();
				}
				break;
			case 6:
				_localctx = new IfSentenciaContext(_localctx);
				enterOuterAlt(_localctx, 6);
				{
				setState(113);
				sentenciaIf();
				}
				break;
			case 7:
				_localctx = new SwitchSentenciaContext(_localctx);
				enterOuterAlt(_localctx, 7);
				{
				setState(114);
				sentenciaSwitch();
				}
				break;
			case 8:
				_localctx = new ForSentenciaContext(_localctx);
				enterOuterAlt(_localctx, 8);
				{
				setState(115);
				sentenciaFor();
				}
				break;
			case 9:
				_localctx = new IncDecContext(_localctx);
				enterOuterAlt(_localctx, 9);
				{
				setState(116);
				expFor();
				}
				break;
			case 10:
				_localctx = new DFunctionContext(_localctx);
				enterOuterAlt(_localctx, 10);
				{
				setState(117);
				funcion();
				}
				break;
			case 11:
				_localctx = new SentenciaReturnContext(_localctx);
				enterOuterAlt(_localctx, 11);
				{
				setState(118);
				retornar();
				}
				break;
			case 12:
				_localctx = new LlamarFuncionContext(_localctx);
				enterOuterAlt(_localctx, 12);
				{
				setState(119);
				llamadaFuncion();
				}
				break;
			case 13:
				_localctx = new PruebaContext(_localctx);
				enterOuterAlt(_localctx, 13);
				{
				setState(120);
				logExpr(0);
				}
				break;
			case 14:
				_localctx = new SentenciaContinueContext(_localctx);
				enterOuterAlt(_localctx, 14);
				{
				setState(121);
				match(CONTINUE);
				}
				break;
			case 15:
				_localctx = new SentenciaBreakContext(_localctx);
				enterOuterAlt(_localctx, 15);
				{
				setState(122);
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
		enterRule(_localctx, 8, RULE_funcLen);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(125);
			match(LEN);
			setState(126);
			match(LPAREN);
			setState(127);
			logExpr(0);
			setState(128);
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
		enterRule(_localctx, 10, RULE_funcNow);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(130);
			match(NOW);
			setState(131);
			match(LPAREN);
			setState(132);
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
		enterRule(_localctx, 12, RULE_funcSub);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(134);
			match(SUBSTR);
			setState(135);
			match(LPAREN);
			setState(136);
			logExpr(0);
			setState(137);
			match(COMMA);
			setState(138);
			logExpr(0);
			setState(139);
			match(COMMA);
			setState(140);
			logExpr(0);
			setState(141);
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
		enterRule(_localctx, 14, RULE_funcType);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(143);
			match(TYPEOF);
			setState(144);
			match(LPAREN);
			setState(145);
			match(IDENTIFICADOR);
			setState(146);
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
	public static class LlamadaFuncionContext extends ParserRuleContext {
		public TerminalNode IDENTIFICADOR() { return getToken(GrammarParser.IDENTIFICADOR, 0); }
		public TerminalNode LPAREN() { return getToken(GrammarParser.LPAREN, 0); }
		public TerminalNode RPAREN() { return getToken(GrammarParser.RPAREN, 0); }
		public ListaExprContext listaExpr() {
			return getRuleContext(ListaExprContext.class,0);
		}
		public LlamadaFuncionContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_llamadaFuncion; }
	}

	public final LlamadaFuncionContext llamadaFuncion() throws RecognitionException {
		LlamadaFuncionContext _localctx = new LlamadaFuncionContext(_ctx, getState());
		enterRule(_localctx, 16, RULE_llamadaFuncion);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(148);
			match(IDENTIFICADOR);
			setState(149);
			match(LPAREN);
			setState(151);
			_errHandler.sync(this);
			_la = _input.LA(1);
			if ((((_la) & ~0x3f) == 0 && ((1L << _la) & 285978783168528384L) != 0)) {
				{
				setState(150);
				listaExpr();
				}
			}

			setState(153);
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
		enterRule(_localctx, 18, RULE_retornar);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(155);
			match(RETURN);
			setState(157);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,4,_ctx) ) {
			case 1:
				{
				setState(156);
				listaExpr();
				}
				break;
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
		public BloqueContext bloque() {
			return getRuleContext(BloqueContext.class,0);
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
		enterRule(_localctx, 20, RULE_funcion);
		int _la;
		try {
			setState(189);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,8,_ctx) ) {
			case 1:
				enterOuterAlt(_localctx, 1);
				{
				setState(159);
				match(FUNC);
				setState(160);
				match(IDENTIFICADOR);
				setState(161);
				match(LPAREN);
				setState(163);
				_errHandler.sync(this);
				_la = _input.LA(1);
				if (_la==IDENTIFICADOR) {
					{
					setState(162);
					listaParametros();
					}
				}

				setState(165);
				match(RPAREN);
				setState(166);
				match(LPAREN);
				setState(167);
				listaRetorno();
				setState(168);
				match(RPAREN);
				setState(169);
				bloque();
				}
				break;
			case 2:
				enterOuterAlt(_localctx, 2);
				{
				setState(171);
				match(FUNC);
				setState(172);
				match(IDENTIFICADOR);
				setState(173);
				match(LPAREN);
				setState(175);
				_errHandler.sync(this);
				_la = _input.LA(1);
				if (_la==IDENTIFICADOR) {
					{
					setState(174);
					listaParametros();
					}
				}

				setState(177);
				match(RPAREN);
				setState(178);
				tipos();
				setState(179);
				bloque();
				}
				break;
			case 3:
				enterOuterAlt(_localctx, 3);
				{
				setState(181);
				match(FUNC);
				setState(182);
				match(IDENTIFICADOR);
				setState(183);
				match(LPAREN);
				setState(185);
				_errHandler.sync(this);
				_la = _input.LA(1);
				if (_la==IDENTIFICADOR) {
					{
					setState(184);
					listaParametros();
					}
				}

				setState(187);
				match(RPAREN);
				setState(188);
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
		enterRule(_localctx, 22, RULE_listaRetorno);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(191);
			tipos();
			setState(196);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while (_la==COMMA) {
				{
				{
				setState(192);
				match(COMMA);
				setState(193);
				tipos();
				}
				}
				setState(198);
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
		enterRule(_localctx, 24, RULE_listaParametros);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(199);
			match(IDENTIFICADOR);
			setState(200);
			tipos();
			setState(206);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while (_la==COMMA) {
				{
				{
				setState(201);
				match(COMMA);
				setState(202);
				match(IDENTIFICADOR);
				setState(203);
				tipos();
				}
				}
				setState(208);
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
	public static class AccesoArregloContext extends ParserRuleContext {
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
		public AccesoArregloContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_accesoArreglo; }
	}

	public final AccesoArregloContext accesoArreglo() throws RecognitionException {
		AccesoArregloContext _localctx = new AccesoArregloContext(_ctx, getState());
		enterRule(_localctx, 26, RULE_accesoArreglo);
		try {
			setState(222);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,11,_ctx) ) {
			case 1:
				enterOuterAlt(_localctx, 1);
				{
				setState(209);
				match(IDENTIFICADOR);
				setState(210);
				match(LCOR);
				setState(211);
				logExpr(0);
				setState(212);
				match(RCOR);
				}
				break;
			case 2:
				enterOuterAlt(_localctx, 2);
				{
				setState(214);
				match(IDENTIFICADOR);
				setState(215);
				match(LCOR);
				setState(216);
				logExpr(0);
				setState(217);
				match(RCOR);
				setState(218);
				match(LCOR);
				setState(219);
				logExpr(0);
				setState(220);
				match(RCOR);
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
		enterRule(_localctx, 28, RULE_listaValores);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(224);
			match(LBRACE);
			setState(225);
			listaExpr();
			setState(226);
			match(RBRACE);
			setState(234);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while (_la==COMMA) {
				{
				{
				setState(227);
				match(COMMA);
				setState(228);
				match(LBRACE);
				setState(229);
				listaExpr();
				setState(230);
				match(RBRACE);
				}
				}
				setState(236);
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
		enterRule(_localctx, 30, RULE_sentenciaFor);
		try {
			setState(245);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,13,_ctx) ) {
			case 1:
				enterOuterAlt(_localctx, 1);
				{
				setState(237);
				match(FOR);
				setState(238);
				forClasico();
				}
				break;
			case 2:
				enterOuterAlt(_localctx, 2);
				{
				setState(239);
				match(FOR);
				setState(240);
				logExpr(0);
				setState(241);
				bloque();
				}
				break;
			case 3:
				enterOuterAlt(_localctx, 3);
				{
				setState(243);
				match(FOR);
				setState(244);
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
		enterRule(_localctx, 32, RULE_forClasico);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(247);
			declaracionCorta();
			setState(248);
			match(SEMICOLON);
			setState(249);
			logExpr(0);
			setState(250);
			match(SEMICOLON);
			setState(251);
			condFor();
			setState(252);
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
		enterRule(_localctx, 34, RULE_condFor);
		try {
			setState(256);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,14,_ctx) ) {
			case 1:
				enterOuterAlt(_localctx, 1);
				{
				setState(254);
				expFor();
				}
				break;
			case 2:
				enterOuterAlt(_localctx, 2);
				{
				setState(255);
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
		enterRule(_localctx, 36, RULE_expFor);
		try {
			setState(264);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,15,_ctx) ) {
			case 1:
				enterOuterAlt(_localctx, 1);
				{
				setState(258);
				match(IDENTIFICADOR);
				setState(259);
				match(PLUS);
				setState(260);
				match(PLUS);
				}
				break;
			case 2:
				enterOuterAlt(_localctx, 2);
				{
				setState(261);
				match(IDENTIFICADOR);
				setState(262);
				match(MINUS);
				setState(263);
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
		enterRule(_localctx, 38, RULE_sentenciaSwitch);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(266);
			match(SWITCH);
			setState(267);
			logExpr(0);
			setState(268);
			match(LBRACE);
			setState(269);
			bloqueSwitch();
			setState(270);
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
		enterRule(_localctx, 40, RULE_bloqueSwitch);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(273); 
			_errHandler.sync(this);
			_la = _input.LA(1);
			do {
				{
				{
				setState(272);
				bloqueCase();
				}
				}
				setState(275); 
				_errHandler.sync(this);
				_la = _input.LA(1);
			} while ( _la==CASE );
			setState(278);
			_errHandler.sync(this);
			_la = _input.LA(1);
			if (_la==DEFAULT) {
				{
				setState(277);
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
		public List<IContext> i() {
			return getRuleContexts(IContext.class);
		}
		public IContext i(int i) {
			return getRuleContext(IContext.class,i);
		}
		public BloqueCaseContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_bloqueCase; }
	}

	public final BloqueCaseContext bloqueCase() throws RecognitionException {
		BloqueCaseContext _localctx = new BloqueCaseContext(_ctx, getState());
		enterRule(_localctx, 42, RULE_bloqueCase);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(280);
			match(CASE);
			setState(281);
			listaExpr();
			setState(282);
			match(COLON);
			setState(286);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while ((((_la) & ~0x3f) == 0 && ((1L << _la) & 285978783168590554L) != 0)) {
				{
				{
				setState(283);
				i();
				}
				}
				setState(288);
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
	public static class BloqueDefaultContext extends ParserRuleContext {
		public TerminalNode DEFAULT() { return getToken(GrammarParser.DEFAULT, 0); }
		public TerminalNode COLON() { return getToken(GrammarParser.COLON, 0); }
		public List<IContext> i() {
			return getRuleContexts(IContext.class);
		}
		public IContext i(int i) {
			return getRuleContext(IContext.class,i);
		}
		public BloqueDefaultContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_bloqueDefault; }
	}

	public final BloqueDefaultContext bloqueDefault() throws RecognitionException {
		BloqueDefaultContext _localctx = new BloqueDefaultContext(_ctx, getState());
		enterRule(_localctx, 44, RULE_bloqueDefault);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(289);
			match(DEFAULT);
			setState(290);
			match(COLON);
			setState(294);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while ((((_la) & ~0x3f) == 0 && ((1L << _la) & 285978783168590554L) != 0)) {
				{
				{
				setState(291);
				i();
				}
				}
				setState(296);
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
		enterRule(_localctx, 46, RULE_sentenciaIf);
		int _la;
		try {
			int _alt;
			enterOuterAlt(_localctx, 1);
			{
			setState(297);
			match(IF);
			setState(298);
			logExpr(0);
			setState(299);
			bloque();
			setState(307);
			_errHandler.sync(this);
			_alt = getInterpreter().adaptivePredict(_input,20,_ctx);
			while ( _alt!=2 && _alt!=org.antlr.v4.runtime.atn.ATN.INVALID_ALT_NUMBER ) {
				if ( _alt==1 ) {
					{
					{
					setState(300);
					match(ELSE);
					setState(301);
					match(IF);
					setState(302);
					logExpr(0);
					setState(303);
					bloque();
					}
					} 
				}
				setState(309);
				_errHandler.sync(this);
				_alt = getInterpreter().adaptivePredict(_input,20,_ctx);
			}
			setState(312);
			_errHandler.sync(this);
			_la = _input.LA(1);
			if (_la==ELSE) {
				{
				setState(310);
				match(ELSE);
				setState(311);
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
		enterRule(_localctx, 48, RULE_bloque);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(314);
			match(LBRACE);
			setState(321);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while ((((_la) & ~0x3f) == 0 && ((1L << _la) & 285978783168590554L) != 0)) {
				{
				{
				setState(315);
				i();
				setState(317);
				_errHandler.sync(this);
				_la = _input.LA(1);
				if (_la==SEMICOLON) {
					{
					setState(316);
					match(SEMICOLON);
					}
				}

				}
				}
				setState(323);
				_errHandler.sync(this);
				_la = _input.LA(1);
			}
			setState(324);
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
		public SimboloAsignacionContext simboloAsignacion() {
			return getRuleContext(SimboloAsignacionContext.class,0);
		}
		public LogExprContext logExpr() {
			return getRuleContext(LogExprContext.class,0);
		}
		public TerminalNode IDENTIFICADOR() { return getToken(GrammarParser.IDENTIFICADOR, 0); }
		public AccesoArregloContext accesoArreglo() {
			return getRuleContext(AccesoArregloContext.class,0);
		}
		public AsignacionContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_asignacion; }
	}

	public final AsignacionContext asignacion() throws RecognitionException {
		AsignacionContext _localctx = new AsignacionContext(_ctx, getState());
		enterRule(_localctx, 50, RULE_asignacion);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(328);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,24,_ctx) ) {
			case 1:
				{
				setState(326);
				match(IDENTIFICADOR);
				}
				break;
			case 2:
				{
				setState(327);
				accesoArreglo();
				}
				break;
			}
			setState(330);
			simboloAsignacion();
			setState(331);
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
		enterRule(_localctx, 52, RULE_imprimir);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(333);
			match(FMT);
			setState(334);
			match(DOT);
			setState(335);
			match(PRINTLN);
			setState(336);
			match(LPAREN);
			setState(337);
			listaExpr();
			setState(338);
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
		enterRule(_localctx, 54, RULE_declaracion);
		try {
			setState(350);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,25,_ctx) ) {
			case 1:
				enterOuterAlt(_localctx, 1);
				{
				setState(340);
				match(VAR);
				setState(341);
				listaId();
				setState(342);
				tipos();
				}
				break;
			case 2:
				enterOuterAlt(_localctx, 2);
				{
				setState(344);
				match(VAR);
				setState(345);
				listaId();
				setState(346);
				tipos();
				setState(347);
				match(ASSIGN);
				setState(348);
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
		enterRule(_localctx, 56, RULE_declaracionCorta);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(352);
			listaId();
			setState(353);
			match(COLON);
			setState(354);
			match(ASSIGN);
			setState(355);
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
		enterRule(_localctx, 58, RULE_declaracionConst);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(357);
			match(CONST);
			setState(358);
			match(IDENTIFICADOR);
			setState(359);
			tipos();
			setState(360);
			match(ASSIGN);
			setState(361);
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
		enterRule(_localctx, 60, RULE_listaExpr);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(363);
			logExpr(0);
			setState(368);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while (_la==COMMA) {
				{
				{
				setState(364);
				match(COMMA);
				setState(365);
				logExpr(0);
				}
				}
				setState(370);
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
		enterRule(_localctx, 62, RULE_listaId);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(371);
			match(IDENTIFICADOR);
			setState(376);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while (_la==COMMA) {
				{
				{
				setState(372);
				match(COMMA);
				setState(373);
				match(IDENTIFICADOR);
				}
				}
				setState(378);
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
		int _startState = 64;
		enterRecursionRule(_localctx, 64, RULE_logExpr, _p);
		int _la;
		try {
			int _alt;
			enterOuterAlt(_localctx, 1);
			{
			{
			_localctx = new ToRelExprContext(_localctx);
			_ctx = _localctx;
			_prevctx = _localctx;

			setState(380);
			relExpr(0);
			}
			_ctx.stop = _input.LT(-1);
			setState(387);
			_errHandler.sync(this);
			_alt = getInterpreter().adaptivePredict(_input,28,_ctx);
			while ( _alt!=2 && _alt!=org.antlr.v4.runtime.atn.ATN.INVALID_ALT_NUMBER ) {
				if ( _alt==1 ) {
					if ( _parseListeners!=null ) triggerExitRuleEvent();
					_prevctx = _localctx;
					{
					{
					_localctx = new LogicalExpressionContext(new LogExprContext(_parentctx, _parentState));
					pushNewRecursionContext(_localctx, _startState, RULE_logExpr);
					setState(382);
					if (!(precpred(_ctx, 2))) throw new FailedPredicateException(this, "precpred(_ctx, 2)");
					setState(383);
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
					setState(384);
					relExpr(0);
					}
					} 
				}
				setState(389);
				_errHandler.sync(this);
				_alt = getInterpreter().adaptivePredict(_input,28,_ctx);
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
		int _startState = 66;
		enterRecursionRule(_localctx, 66, RULE_relExpr, _p);
		int _la;
		try {
			int _alt;
			enterOuterAlt(_localctx, 1);
			{
			{
			_localctx = new ToExprContext(_localctx);
			_ctx = _localctx;
			_prevctx = _localctx;

			setState(391);
			expr(0);
			}
			_ctx.stop = _input.LT(-1);
			setState(398);
			_errHandler.sync(this);
			_alt = getInterpreter().adaptivePredict(_input,29,_ctx);
			while ( _alt!=2 && _alt!=org.antlr.v4.runtime.atn.ATN.INVALID_ALT_NUMBER ) {
				if ( _alt==1 ) {
					if ( _parseListeners!=null ) triggerExitRuleEvent();
					_prevctx = _localctx;
					{
					{
					_localctx = new RelationalExpresionContext(new RelExprContext(_parentctx, _parentState));
					pushNewRecursionContext(_localctx, _startState, RULE_relExpr);
					setState(393);
					if (!(precpred(_ctx, 2))) throw new FailedPredicateException(this, "precpred(_ctx, 2)");
					setState(394);
					((RelationalExpresionContext)_localctx).op = _input.LT(1);
					_la = _input.LA(1);
					if ( !((((_la) & ~0x3f) == 0 && ((1L << _la) & 2216615441596416L) != 0)) ) {
						((RelationalExpresionContext)_localctx).op = (Token)_errHandler.recoverInline(this);
					}
					else {
						if ( _input.LA(1)==Token.EOF ) matchedEOF = true;
						_errHandler.reportMatch(this);
						consume();
					}
					setState(395);
					expr(0);
					}
					} 
				}
				setState(400);
				_errHandler.sync(this);
				_alt = getInterpreter().adaptivePredict(_input,29,_ctx);
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
		int _startState = 68;
		enterRecursionRule(_localctx, 68, RULE_expr, _p);
		int _la;
		try {
			int _alt;
			enterOuterAlt(_localctx, 1);
			{
			{
			_localctx = new ToTermContext(_localctx);
			_ctx = _localctx;
			_prevctx = _localctx;

			setState(402);
			term(0);
			}
			_ctx.stop = _input.LT(-1);
			setState(409);
			_errHandler.sync(this);
			_alt = getInterpreter().adaptivePredict(_input,30,_ctx);
			while ( _alt!=2 && _alt!=org.antlr.v4.runtime.atn.ATN.INVALID_ALT_NUMBER ) {
				if ( _alt==1 ) {
					if ( _parseListeners!=null ) triggerExitRuleEvent();
					_prevctx = _localctx;
					{
					{
					_localctx = new BinaryExpressionTContext(new ExprContext(_parentctx, _parentState));
					pushNewRecursionContext(_localctx, _startState, RULE_expr);
					setState(404);
					if (!(precpred(_ctx, 2))) throw new FailedPredicateException(this, "precpred(_ctx, 2)");
					setState(405);
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
					setState(406);
					term(0);
					}
					} 
				}
				setState(411);
				_errHandler.sync(this);
				_alt = getInterpreter().adaptivePredict(_input,30,_ctx);
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
		int _startState = 70;
		enterRecursionRule(_localctx, 70, RULE_term, _p);
		int _la;
		try {
			int _alt;
			enterOuterAlt(_localctx, 1);
			{
			{
			_localctx = new ToFactorContext(_localctx);
			_ctx = _localctx;
			_prevctx = _localctx;

			setState(413);
			factor();
			}
			_ctx.stop = _input.LT(-1);
			setState(420);
			_errHandler.sync(this);
			_alt = getInterpreter().adaptivePredict(_input,31,_ctx);
			while ( _alt!=2 && _alt!=org.antlr.v4.runtime.atn.ATN.INVALID_ALT_NUMBER ) {
				if ( _alt==1 ) {
					if ( _parseListeners!=null ) triggerExitRuleEvent();
					_prevctx = _localctx;
					{
					{
					_localctx = new BinaryExpressionSContext(new TermContext(_parentctx, _parentState));
					pushNewRecursionContext(_localctx, _startState, RULE_term);
					setState(415);
					if (!(precpred(_ctx, 2))) throw new FailedPredicateException(this, "precpred(_ctx, 2)");
					setState(416);
					((BinaryExpressionSContext)_localctx).op = _input.LT(1);
					_la = _input.LA(1);
					if ( !((((_la) & ~0x3f) == 0 && ((1L << _la) & 1924145348608L) != 0)) ) {
						((BinaryExpressionSContext)_localctx).op = (Token)_errHandler.recoverInline(this);
					}
					else {
						if ( _input.LA(1)==Token.EOF ) matchedEOF = true;
						_errHandler.reportMatch(this);
						consume();
					}
					setState(417);
					factor();
					}
					} 
				}
				setState(422);
				_errHandler.sync(this);
				_alt = getInterpreter().adaptivePredict(_input,31,_ctx);
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
		public Token op;
		public FactorContext factor() {
			return getRuleContext(FactorContext.class,0);
		}
		public TerminalNode MINUS() { return getToken(GrammarParser.MINUS, 0); }
		public TerminalNode NEG() { return getToken(GrammarParser.NEG, 0); }
		public UnaryExpressionContext(FactorContext ctx) { copyFrom(ctx); }
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
	public static class ArrayLit2DContext extends FactorContext {
		public ArrayLiteral2DContext arrayLiteral2D() {
			return getRuleContext(ArrayLiteral2DContext.class,0);
		}
		public ArrayLit2DContext(FactorContext ctx) { copyFrom(ctx); }
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
	public static class ArrayLitContext extends FactorContext {
		public ArrayLiteralContext arrayLiteral() {
			return getRuleContext(ArrayLiteralContext.class,0);
		}
		public ArrayLitContext(FactorContext ctx) { copyFrom(ctx); }
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
	public static class ArregloAccesoContext extends FactorContext {
		public AccesoArregloContext accesoArreglo() {
			return getRuleContext(AccesoArregloContext.class,0);
		}
		public ArregloAccesoContext(FactorContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class StrLitContext extends FactorContext {
		public TerminalNode STR() { return getToken(GrammarParser.STR, 0); }
		public StrLitContext(FactorContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class LlamarFuncionFContext extends FactorContext {
		public LlamadaFuncionContext llamadaFuncion() {
			return getRuleContext(LlamadaFuncionContext.class,0);
		}
		public LlamarFuncionFContext(FactorContext ctx) { copyFrom(ctx); }
	}

	public final FactorContext factor() throws RecognitionException {
		FactorContext _localctx = new FactorContext(_ctx, getState());
		enterRule(_localctx, 72, RULE_factor);
		int _la;
		try {
			setState(444);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,32,_ctx) ) {
			case 1:
				_localctx = new ArrayLitContext(_localctx);
				enterOuterAlt(_localctx, 1);
				{
				setState(423);
				arrayLiteral();
				}
				break;
			case 2:
				_localctx = new ArrayLit2DContext(_localctx);
				enterOuterAlt(_localctx, 2);
				{
				setState(424);
				arrayLiteral2D();
				}
				break;
			case 3:
				_localctx = new ArregloAccesoContext(_localctx);
				enterOuterAlt(_localctx, 3);
				{
				setState(425);
				accesoArreglo();
				}
				break;
			case 4:
				_localctx = new GroupedExpressionContext(_localctx);
				enterOuterAlt(_localctx, 4);
				{
				setState(426);
				match(LPAREN);
				setState(427);
				logExpr(0);
				setState(428);
				match(RPAREN);
				}
				break;
			case 5:
				_localctx = new UnaryExpressionContext(_localctx);
				enterOuterAlt(_localctx, 5);
				{
				setState(430);
				((UnaryExpressionContext)_localctx).op = _input.LT(1);
				_la = _input.LA(1);
				if ( !(_la==MINUS || _la==NEG) ) {
					((UnaryExpressionContext)_localctx).op = (Token)_errHandler.recoverInline(this);
				}
				else {
					if ( _input.LA(1)==Token.EOF ) matchedEOF = true;
					_errHandler.reportMatch(this);
					consume();
				}
				setState(431);
				factor();
				}
				break;
			case 6:
				_localctx = new FloatLitContext(_localctx);
				enterOuterAlt(_localctx, 6);
				{
				setState(432);
				match(FLOAT);
				}
				break;
			case 7:
				_localctx = new EnteroLitContext(_localctx);
				enterOuterAlt(_localctx, 7);
				{
				setState(433);
				match(ENTERO);
				}
				break;
			case 8:
				_localctx = new BoolLitContext(_localctx);
				enterOuterAlt(_localctx, 8);
				{
				setState(434);
				match(BOOL);
				}
				break;
			case 9:
				_localctx = new RuneLitContext(_localctx);
				enterOuterAlt(_localctx, 9);
				{
				setState(435);
				match(RUNE);
				}
				break;
			case 10:
				_localctx = new StrLitContext(_localctx);
				enterOuterAlt(_localctx, 10);
				{
				setState(436);
				match(STR);
				}
				break;
			case 11:
				_localctx = new NilLitContext(_localctx);
				enterOuterAlt(_localctx, 11);
				{
				setState(437);
				match(NIL);
				}
				break;
			case 12:
				_localctx = new NowFuncContext(_localctx);
				enterOuterAlt(_localctx, 12);
				{
				setState(438);
				funcNow();
				}
				break;
			case 13:
				_localctx = new LenFuncContext(_localctx);
				enterOuterAlt(_localctx, 13);
				{
				setState(439);
				funcLen();
				}
				break;
			case 14:
				_localctx = new SubFuncContext(_localctx);
				enterOuterAlt(_localctx, 14);
				{
				setState(440);
				funcSub();
				}
				break;
			case 15:
				_localctx = new TypeFuncContext(_localctx);
				enterOuterAlt(_localctx, 15);
				{
				setState(441);
				funcType();
				}
				break;
			case 16:
				_localctx = new LlamarFuncionFContext(_localctx);
				enterOuterAlt(_localctx, 16);
				{
				setState(442);
				llamadaFuncion();
				}
				break;
			case 17:
				_localctx = new IdentifierContext(_localctx);
				enterOuterAlt(_localctx, 17);
				{
				setState(443);
				match(IDENTIFICADOR);
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
	public static class ArrayLiteralContext extends ParserRuleContext {
		public TerminalNode LCOR() { return getToken(GrammarParser.LCOR, 0); }
		public LogExprContext logExpr() {
			return getRuleContext(LogExprContext.class,0);
		}
		public TerminalNode RCOR() { return getToken(GrammarParser.RCOR, 0); }
		public TipoBaseContext tipoBase() {
			return getRuleContext(TipoBaseContext.class,0);
		}
		public TerminalNode LBRACE() { return getToken(GrammarParser.LBRACE, 0); }
		public ListaExprContext listaExpr() {
			return getRuleContext(ListaExprContext.class,0);
		}
		public TerminalNode RBRACE() { return getToken(GrammarParser.RBRACE, 0); }
		public ArrayLiteralContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_arrayLiteral; }
	}

	public final ArrayLiteralContext arrayLiteral() throws RecognitionException {
		ArrayLiteralContext _localctx = new ArrayLiteralContext(_ctx, getState());
		enterRule(_localctx, 74, RULE_arrayLiteral);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(446);
			match(LCOR);
			setState(447);
			logExpr(0);
			setState(448);
			match(RCOR);
			setState(449);
			tipoBase();
			setState(450);
			match(LBRACE);
			setState(451);
			listaExpr();
			setState(452);
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
	public static class ArrayLiteral2DContext extends ParserRuleContext {
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
		public TipoBaseContext tipoBase() {
			return getRuleContext(TipoBaseContext.class,0);
		}
		public TerminalNode LBRACE() { return getToken(GrammarParser.LBRACE, 0); }
		public ListaValoresContext listaValores() {
			return getRuleContext(ListaValoresContext.class,0);
		}
		public TerminalNode RBRACE() { return getToken(GrammarParser.RBRACE, 0); }
		public ArrayLiteral2DContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_arrayLiteral2D; }
	}

	public final ArrayLiteral2DContext arrayLiteral2D() throws RecognitionException {
		ArrayLiteral2DContext _localctx = new ArrayLiteral2DContext(_ctx, getState());
		enterRule(_localctx, 76, RULE_arrayLiteral2D);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(454);
			match(LCOR);
			setState(455);
			logExpr(0);
			setState(456);
			match(RCOR);
			setState(457);
			match(LCOR);
			setState(458);
			logExpr(0);
			setState(459);
			match(RCOR);
			setState(460);
			tipoBase();
			setState(461);
			match(LBRACE);
			setState(462);
			listaValores();
			setState(463);
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
	public static class TiposContext extends ParserRuleContext {
		public TipoBaseContext tipoBase() {
			return getRuleContext(TipoBaseContext.class,0);
		}
		public TipoArrayContext tipoArray() {
			return getRuleContext(TipoArrayContext.class,0);
		}
		public TipoArray2DContext tipoArray2D() {
			return getRuleContext(TipoArray2DContext.class,0);
		}
		public TiposContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_tipos; }
	}

	public final TiposContext tipos() throws RecognitionException {
		TiposContext _localctx = new TiposContext(_ctx, getState());
		enterRule(_localctx, 78, RULE_tipos);
		try {
			setState(468);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,33,_ctx) ) {
			case 1:
				enterOuterAlt(_localctx, 1);
				{
				setState(465);
				tipoBase();
				}
				break;
			case 2:
				enterOuterAlt(_localctx, 2);
				{
				setState(466);
				tipoArray();
				}
				break;
			case 3:
				enterOuterAlt(_localctx, 3);
				{
				setState(467);
				tipoArray2D();
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
	public static class TipoArrayContext extends ParserRuleContext {
		public TerminalNode LCOR() { return getToken(GrammarParser.LCOR, 0); }
		public LogExprContext logExpr() {
			return getRuleContext(LogExprContext.class,0);
		}
		public TerminalNode RCOR() { return getToken(GrammarParser.RCOR, 0); }
		public TipoBaseContext tipoBase() {
			return getRuleContext(TipoBaseContext.class,0);
		}
		public TipoArrayContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_tipoArray; }
	}

	public final TipoArrayContext tipoArray() throws RecognitionException {
		TipoArrayContext _localctx = new TipoArrayContext(_ctx, getState());
		enterRule(_localctx, 80, RULE_tipoArray);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(470);
			match(LCOR);
			setState(471);
			logExpr(0);
			setState(472);
			match(RCOR);
			setState(473);
			tipoBase();
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
	public static class TipoArray2DContext extends ParserRuleContext {
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
		public TipoBaseContext tipoBase() {
			return getRuleContext(TipoBaseContext.class,0);
		}
		public TipoArray2DContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_tipoArray2D; }
	}

	public final TipoArray2DContext tipoArray2D() throws RecognitionException {
		TipoArray2DContext _localctx = new TipoArray2DContext(_ctx, getState());
		enterRule(_localctx, 82, RULE_tipoArray2D);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(475);
			match(LCOR);
			setState(476);
			logExpr(0);
			setState(477);
			match(RCOR);
			setState(478);
			match(LCOR);
			setState(479);
			logExpr(0);
			setState(480);
			match(RCOR);
			setState(481);
			tipoBase();
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
	public static class TipoBaseContext extends ParserRuleContext {
		public TerminalNode INT_T() { return getToken(GrammarParser.INT_T, 0); }
		public TerminalNode FLOAT_T() { return getToken(GrammarParser.FLOAT_T, 0); }
		public TerminalNode BOOL_T() { return getToken(GrammarParser.BOOL_T, 0); }
		public TerminalNode RUNE_T() { return getToken(GrammarParser.RUNE_T, 0); }
		public TerminalNode STRING_T() { return getToken(GrammarParser.STRING_T, 0); }
		public TipoBaseContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_tipoBase; }
	}

	public final TipoBaseContext tipoBase() throws RecognitionException {
		TipoBaseContext _localctx = new TipoBaseContext(_ctx, getState());
		enterRule(_localctx, 84, RULE_tipoBase);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(483);
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
		enterRule(_localctx, 86, RULE_simboloAsignacion);
		int _la;
		try {
			setState(488);
			_errHandler.sync(this);
			switch (_input.LA(1)) {
			case ASSIGN:
				enterOuterAlt(_localctx, 1);
				{
				setState(485);
				match(ASSIGN);
				}
				break;
			case PLUS:
			case MINUS:
			case MULT:
			case DIV:
				enterOuterAlt(_localctx, 2);
				{
				setState(486);
				((SimboloAsignacionContext)_localctx).op = _input.LT(1);
				_la = _input.LA(1);
				if ( !((((_la) & ~0x3f) == 0 && ((1L << _la) & 927712935936L) != 0)) ) {
					((SimboloAsignacionContext)_localctx).op = (Token)_errHandler.recoverInline(this);
				}
				else {
					if ( _input.LA(1)==Token.EOF ) matchedEOF = true;
					_errHandler.reportMatch(this);
					consume();
				}
				setState(487);
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
		case 32:
			return logExpr_sempred((LogExprContext)_localctx, predIndex);
		case 33:
			return relExpr_sempred((RelExprContext)_localctx, predIndex);
		case 34:
			return expr_sempred((ExprContext)_localctx, predIndex);
		case 35:
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
		"\u0004\u0001=\u01eb\u0002\u0000\u0007\u0000\u0002\u0001\u0007\u0001\u0002"+
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
		"(\u0007(\u0002)\u0007)\u0002*\u0007*\u0002+\u0007+\u0001\u0000\u0005\u0000"+
		"Z\b\u0000\n\u0000\f\u0000]\t\u0000\u0001\u0000\u0001\u0000\u0001\u0001"+
		"\u0001\u0001\u0001\u0001\u0001\u0001\u0003\u0001e\b\u0001\u0001\u0002"+
		"\u0001\u0002\u0001\u0002\u0001\u0002\u0001\u0002\u0001\u0002\u0001\u0003"+
		"\u0001\u0003\u0001\u0003\u0001\u0003\u0001\u0003\u0001\u0003\u0001\u0003"+
		"\u0001\u0003\u0001\u0003\u0001\u0003\u0001\u0003\u0001\u0003\u0001\u0003"+
		"\u0001\u0003\u0001\u0003\u0003\u0003|\b\u0003\u0001\u0004\u0001\u0004"+
		"\u0001\u0004\u0001\u0004\u0001\u0004\u0001\u0005\u0001\u0005\u0001\u0005"+
		"\u0001\u0005\u0001\u0006\u0001\u0006\u0001\u0006\u0001\u0006\u0001\u0006"+
		"\u0001\u0006\u0001\u0006\u0001\u0006\u0001\u0006\u0001\u0007\u0001\u0007"+
		"\u0001\u0007\u0001\u0007\u0001\u0007\u0001\b\u0001\b\u0001\b\u0003\b\u0098"+
		"\b\b\u0001\b\u0001\b\u0001\t\u0001\t\u0003\t\u009e\b\t\u0001\n\u0001\n"+
		"\u0001\n\u0001\n\u0003\n\u00a4\b\n\u0001\n\u0001\n\u0001\n\u0001\n\u0001"+
		"\n\u0001\n\u0001\n\u0001\n\u0001\n\u0001\n\u0003\n\u00b0\b\n\u0001\n\u0001"+
		"\n\u0001\n\u0001\n\u0001\n\u0001\n\u0001\n\u0001\n\u0003\n\u00ba\b\n\u0001"+
		"\n\u0001\n\u0003\n\u00be\b\n\u0001\u000b\u0001\u000b\u0001\u000b\u0005"+
		"\u000b\u00c3\b\u000b\n\u000b\f\u000b\u00c6\t\u000b\u0001\f\u0001\f\u0001"+
		"\f\u0001\f\u0001\f\u0005\f\u00cd\b\f\n\f\f\f\u00d0\t\f\u0001\r\u0001\r"+
		"\u0001\r\u0001\r\u0001\r\u0001\r\u0001\r\u0001\r\u0001\r\u0001\r\u0001"+
		"\r\u0001\r\u0001\r\u0003\r\u00df\b\r\u0001\u000e\u0001\u000e\u0001\u000e"+
		"\u0001\u000e\u0001\u000e\u0001\u000e\u0001\u000e\u0001\u000e\u0005\u000e"+
		"\u00e9\b\u000e\n\u000e\f\u000e\u00ec\t\u000e\u0001\u000f\u0001\u000f\u0001"+
		"\u000f\u0001\u000f\u0001\u000f\u0001\u000f\u0001\u000f\u0001\u000f\u0003"+
		"\u000f\u00f6\b\u000f\u0001\u0010\u0001\u0010\u0001\u0010\u0001\u0010\u0001"+
		"\u0010\u0001\u0010\u0001\u0010\u0001\u0011\u0001\u0011\u0003\u0011\u0101"+
		"\b\u0011\u0001\u0012\u0001\u0012\u0001\u0012\u0001\u0012\u0001\u0012\u0001"+
		"\u0012\u0003\u0012\u0109\b\u0012\u0001\u0013\u0001\u0013\u0001\u0013\u0001"+
		"\u0013\u0001\u0013\u0001\u0013\u0001\u0014\u0004\u0014\u0112\b\u0014\u000b"+
		"\u0014\f\u0014\u0113\u0001\u0014\u0003\u0014\u0117\b\u0014\u0001\u0015"+
		"\u0001\u0015\u0001\u0015\u0001\u0015\u0005\u0015\u011d\b\u0015\n\u0015"+
		"\f\u0015\u0120\t\u0015\u0001\u0016\u0001\u0016\u0001\u0016\u0005\u0016"+
		"\u0125\b\u0016\n\u0016\f\u0016\u0128\t\u0016\u0001\u0017\u0001\u0017\u0001"+
		"\u0017\u0001\u0017\u0001\u0017\u0001\u0017\u0001\u0017\u0001\u0017\u0005"+
		"\u0017\u0132\b\u0017\n\u0017\f\u0017\u0135\t\u0017\u0001\u0017\u0001\u0017"+
		"\u0003\u0017\u0139\b\u0017\u0001\u0018\u0001\u0018\u0001\u0018\u0003\u0018"+
		"\u013e\b\u0018\u0005\u0018\u0140\b\u0018\n\u0018\f\u0018\u0143\t\u0018"+
		"\u0001\u0018\u0001\u0018\u0001\u0019\u0001\u0019\u0003\u0019\u0149\b\u0019"+
		"\u0001\u0019\u0001\u0019\u0001\u0019\u0001\u001a\u0001\u001a\u0001\u001a"+
		"\u0001\u001a\u0001\u001a\u0001\u001a\u0001\u001a\u0001\u001b\u0001\u001b"+
		"\u0001\u001b\u0001\u001b\u0001\u001b\u0001\u001b\u0001\u001b\u0001\u001b"+
		"\u0001\u001b\u0001\u001b\u0003\u001b\u015f\b\u001b\u0001\u001c\u0001\u001c"+
		"\u0001\u001c\u0001\u001c\u0001\u001c\u0001\u001d\u0001\u001d\u0001\u001d"+
		"\u0001\u001d\u0001\u001d\u0001\u001d\u0001\u001e\u0001\u001e\u0001\u001e"+
		"\u0005\u001e\u016f\b\u001e\n\u001e\f\u001e\u0172\t\u001e\u0001\u001f\u0001"+
		"\u001f\u0001\u001f\u0005\u001f\u0177\b\u001f\n\u001f\f\u001f\u017a\t\u001f"+
		"\u0001 \u0001 \u0001 \u0001 \u0001 \u0001 \u0005 \u0182\b \n \f \u0185"+
		"\t \u0001!\u0001!\u0001!\u0001!\u0001!\u0001!\u0005!\u018d\b!\n!\f!\u0190"+
		"\t!\u0001\"\u0001\"\u0001\"\u0001\"\u0001\"\u0001\"\u0005\"\u0198\b\""+
		"\n\"\f\"\u019b\t\"\u0001#\u0001#\u0001#\u0001#\u0001#\u0001#\u0005#\u01a3"+
		"\b#\n#\f#\u01a6\t#\u0001$\u0001$\u0001$\u0001$\u0001$\u0001$\u0001$\u0001"+
		"$\u0001$\u0001$\u0001$\u0001$\u0001$\u0001$\u0001$\u0001$\u0001$\u0001"+
		"$\u0001$\u0001$\u0001$\u0003$\u01bd\b$\u0001%\u0001%\u0001%\u0001%\u0001"+
		"%\u0001%\u0001%\u0001%\u0001&\u0001&\u0001&\u0001&\u0001&\u0001&\u0001"+
		"&\u0001&\u0001&\u0001&\u0001&\u0001\'\u0001\'\u0001\'\u0003\'\u01d5\b"+
		"\'\u0001(\u0001(\u0001(\u0001(\u0001(\u0001)\u0001)\u0001)\u0001)\u0001"+
		")\u0001)\u0001)\u0001)\u0001*\u0001*\u0001+\u0001+\u0001+\u0003+\u01e9"+
		"\b+\u0001+\u0000\u0004@BDF,\u0000\u0002\u0004\u0006\b\n\f\u000e\u0010"+
		"\u0012\u0014\u0016\u0018\u001a\u001c\u001e \"$&(*,.02468:<>@BDFHJLNPR"+
		"TV\u0000\u0007\u0001\u0000+,\u0001\u0000-2\u0001\u0000#$\u0001\u0000&"+
		"(\u0001\u0000$%\u0001\u0000\u0014\u0018\u0002\u0000#$&\'\u0202\u0000["+
		"\u0001\u0000\u0000\u0000\u0002d\u0001\u0000\u0000\u0000\u0004f\u0001\u0000"+
		"\u0000\u0000\u0006{\u0001\u0000\u0000\u0000\b}\u0001\u0000\u0000\u0000"+
		"\n\u0082\u0001\u0000\u0000\u0000\f\u0086\u0001\u0000\u0000\u0000\u000e"+
		"\u008f\u0001\u0000\u0000\u0000\u0010\u0094\u0001\u0000\u0000\u0000\u0012"+
		"\u009b\u0001\u0000\u0000\u0000\u0014\u00bd\u0001\u0000\u0000\u0000\u0016"+
		"\u00bf\u0001\u0000\u0000\u0000\u0018\u00c7\u0001\u0000\u0000\u0000\u001a"+
		"\u00de\u0001\u0000\u0000\u0000\u001c\u00e0\u0001\u0000\u0000\u0000\u001e"+
		"\u00f5\u0001\u0000\u0000\u0000 \u00f7\u0001\u0000\u0000\u0000\"\u0100"+
		"\u0001\u0000\u0000\u0000$\u0108\u0001\u0000\u0000\u0000&\u010a\u0001\u0000"+
		"\u0000\u0000(\u0111\u0001\u0000\u0000\u0000*\u0118\u0001\u0000\u0000\u0000"+
		",\u0121\u0001\u0000\u0000\u0000.\u0129\u0001\u0000\u0000\u00000\u013a"+
		"\u0001\u0000\u0000\u00002\u0148\u0001\u0000\u0000\u00004\u014d\u0001\u0000"+
		"\u0000\u00006\u015e\u0001\u0000\u0000\u00008\u0160\u0001\u0000\u0000\u0000"+
		":\u0165\u0001\u0000\u0000\u0000<\u016b\u0001\u0000\u0000\u0000>\u0173"+
		"\u0001\u0000\u0000\u0000@\u017b\u0001\u0000\u0000\u0000B\u0186\u0001\u0000"+
		"\u0000\u0000D\u0191\u0001\u0000\u0000\u0000F\u019c\u0001\u0000\u0000\u0000"+
		"H\u01bc\u0001\u0000\u0000\u0000J\u01be\u0001\u0000\u0000\u0000L\u01c6"+
		"\u0001\u0000\u0000\u0000N\u01d4\u0001\u0000\u0000\u0000P\u01d6\u0001\u0000"+
		"\u0000\u0000R\u01db\u0001\u0000\u0000\u0000T\u01e3\u0001\u0000\u0000\u0000"+
		"V\u01e8\u0001\u0000\u0000\u0000XZ\u0003\u0002\u0001\u0000YX\u0001\u0000"+
		"\u0000\u0000Z]\u0001\u0000\u0000\u0000[Y\u0001\u0000\u0000\u0000[\\\u0001"+
		"\u0000\u0000\u0000\\^\u0001\u0000\u0000\u0000][\u0001\u0000\u0000\u0000"+
		"^_\u0005\u0000\u0000\u0001_\u0001\u0001\u0000\u0000\u0000`e\u0003\u0014"+
		"\n\u0000ae\u0003\u0004\u0002\u0000be\u00036\u001b\u0000ce\u0003:\u001d"+
		"\u0000d`\u0001\u0000\u0000\u0000da\u0001\u0000\u0000\u0000db\u0001\u0000"+
		"\u0000\u0000dc\u0001\u0000\u0000\u0000e\u0003\u0001\u0000\u0000\u0000"+
		"fg\u0005\u0001\u0000\u0000gh\u0005\u0002\u0000\u0000hi\u0005\u001b\u0000"+
		"\u0000ij\u0005\u001c\u0000\u0000jk\u00030\u0018\u0000k\u0005\u0001\u0000"+
		"\u0000\u0000l|\u00034\u001a\u0000m|\u00036\u001b\u0000n|\u00038\u001c"+
		"\u0000o|\u0003:\u001d\u0000p|\u00032\u0019\u0000q|\u0003.\u0017\u0000"+
		"r|\u0003&\u0013\u0000s|\u0003\u001e\u000f\u0000t|\u0003$\u0012\u0000u"+
		"|\u0003\u0014\n\u0000v|\u0003\u0012\t\u0000w|\u0003\u0010\b\u0000x|\u0003"+
		"@ \u0000y|\u0005\u000e\u0000\u0000z|\u0005\r\u0000\u0000{l\u0001\u0000"+
		"\u0000\u0000{m\u0001\u0000\u0000\u0000{n\u0001\u0000\u0000\u0000{o\u0001"+
		"\u0000\u0000\u0000{p\u0001\u0000\u0000\u0000{q\u0001\u0000\u0000\u0000"+
		"{r\u0001\u0000\u0000\u0000{s\u0001\u0000\u0000\u0000{t\u0001\u0000\u0000"+
		"\u0000{u\u0001\u0000\u0000\u0000{v\u0001\u0000\u0000\u0000{w\u0001\u0000"+
		"\u0000\u0000{x\u0001\u0000\u0000\u0000{y\u0001\u0000\u0000\u0000{z\u0001"+
		"\u0000\u0000\u0000|\u0007\u0001\u0000\u0000\u0000}~\u0005\u0010\u0000"+
		"\u0000~\u007f\u0005\u001b\u0000\u0000\u007f\u0080\u0003@ \u0000\u0080"+
		"\u0081\u0005\u001c\u0000\u0000\u0081\t\u0001\u0000\u0000\u0000\u0082\u0083"+
		"\u0005\u0011\u0000\u0000\u0083\u0084\u0005\u001b\u0000\u0000\u0084\u0085"+
		"\u0005\u001c\u0000\u0000\u0085\u000b\u0001\u0000\u0000\u0000\u0086\u0087"+
		"\u0005\u0012\u0000\u0000\u0087\u0088\u0005\u001b\u0000\u0000\u0088\u0089"+
		"\u0003@ \u0000\u0089\u008a\u0005\u001f\u0000\u0000\u008a\u008b\u0003@"+
		" \u0000\u008b\u008c\u0005\u001f\u0000\u0000\u008c\u008d\u0003@ \u0000"+
		"\u008d\u008e\u0005\u001c\u0000\u0000\u008e\r\u0001\u0000\u0000\u0000\u008f"+
		"\u0090\u0005\u0013\u0000\u0000\u0090\u0091\u0005\u001b\u0000\u0000\u0091"+
		"\u0092\u00059\u0000\u0000\u0092\u0093\u0005\u001c\u0000\u0000\u0093\u000f"+
		"\u0001\u0000\u0000\u0000\u0094\u0095\u00059\u0000\u0000\u0095\u0097\u0005"+
		"\u001b\u0000\u0000\u0096\u0098\u0003<\u001e\u0000\u0097\u0096\u0001\u0000"+
		"\u0000\u0000\u0097\u0098\u0001\u0000\u0000\u0000\u0098\u0099\u0001\u0000"+
		"\u0000\u0000\u0099\u009a\u0005\u001c\u0000\u0000\u009a\u0011\u0001\u0000"+
		"\u0000\u0000\u009b\u009d\u0005\u000f\u0000\u0000\u009c\u009e\u0003<\u001e"+
		"\u0000\u009d\u009c\u0001\u0000\u0000\u0000\u009d\u009e\u0001\u0000\u0000"+
		"\u0000\u009e\u0013\u0001\u0000\u0000\u0000\u009f\u00a0\u0005\u0001\u0000"+
		"\u0000\u00a0\u00a1\u00059\u0000\u0000\u00a1\u00a3\u0005\u001b\u0000\u0000"+
		"\u00a2\u00a4\u0003\u0018\f\u0000\u00a3\u00a2\u0001\u0000\u0000\u0000\u00a3"+
		"\u00a4\u0001\u0000\u0000\u0000\u00a4\u00a5\u0001\u0000\u0000\u0000\u00a5"+
		"\u00a6\u0005\u001c\u0000\u0000\u00a6\u00a7\u0005\u001b\u0000\u0000\u00a7"+
		"\u00a8\u0003\u0016\u000b\u0000\u00a8\u00a9\u0005\u001c\u0000\u0000\u00a9"+
		"\u00aa\u00030\u0018\u0000\u00aa\u00be\u0001\u0000\u0000\u0000\u00ab\u00ac"+
		"\u0005\u0001\u0000\u0000\u00ac\u00ad\u00059\u0000\u0000\u00ad\u00af\u0005"+
		"\u001b\u0000\u0000\u00ae\u00b0\u0003\u0018\f\u0000\u00af\u00ae\u0001\u0000"+
		"\u0000\u0000\u00af\u00b0\u0001\u0000\u0000\u0000\u00b0\u00b1\u0001\u0000"+
		"\u0000\u0000\u00b1\u00b2\u0005\u001c\u0000\u0000\u00b2\u00b3\u0003N\'"+
		"\u0000\u00b3\u00b4\u00030\u0018\u0000\u00b4\u00be\u0001\u0000\u0000\u0000"+
		"\u00b5\u00b6\u0005\u0001\u0000\u0000\u00b6\u00b7\u00059\u0000\u0000\u00b7"+
		"\u00b9\u0005\u001b\u0000\u0000\u00b8\u00ba\u0003\u0018\f\u0000\u00b9\u00b8"+
		"\u0001\u0000\u0000\u0000\u00b9\u00ba\u0001\u0000\u0000\u0000\u00ba\u00bb"+
		"\u0001\u0000\u0000\u0000\u00bb\u00bc\u0005\u001c\u0000\u0000\u00bc\u00be"+
		"\u00030\u0018\u0000\u00bd\u009f\u0001\u0000\u0000\u0000\u00bd\u00ab\u0001"+
		"\u0000\u0000\u0000\u00bd\u00b5\u0001\u0000\u0000\u0000\u00be\u0015\u0001"+
		"\u0000\u0000\u0000\u00bf\u00c4\u0003N\'\u0000\u00c0\u00c1\u0005\u001f"+
		"\u0000\u0000\u00c1\u00c3\u0003N\'\u0000\u00c2\u00c0\u0001\u0000\u0000"+
		"\u0000\u00c3\u00c6\u0001\u0000\u0000\u0000\u00c4\u00c2\u0001\u0000\u0000"+
		"\u0000\u00c4\u00c5\u0001\u0000\u0000\u0000\u00c5\u0017\u0001\u0000\u0000"+
		"\u0000\u00c6\u00c4\u0001\u0000\u0000\u0000\u00c7\u00c8\u00059\u0000\u0000"+
		"\u00c8\u00ce\u0003N\'\u0000\u00c9\u00ca\u0005\u001f\u0000\u0000\u00ca"+
		"\u00cb\u00059\u0000\u0000\u00cb\u00cd\u0003N\'\u0000\u00cc\u00c9\u0001"+
		"\u0000\u0000\u0000\u00cd\u00d0\u0001\u0000\u0000\u0000\u00ce\u00cc\u0001"+
		"\u0000\u0000\u0000\u00ce\u00cf\u0001\u0000\u0000\u0000\u00cf\u0019\u0001"+
		"\u0000\u0000\u0000\u00d0\u00ce\u0001\u0000\u0000\u0000\u00d1\u00d2\u0005"+
		"9\u0000\u0000\u00d2\u00d3\u0005\u001d\u0000\u0000\u00d3\u00d4\u0003@ "+
		"\u0000\u00d4\u00d5\u0005\u001e\u0000\u0000\u00d5\u00df\u0001\u0000\u0000"+
		"\u0000\u00d6\u00d7\u00059\u0000\u0000\u00d7\u00d8\u0005\u001d\u0000\u0000"+
		"\u00d8\u00d9\u0003@ \u0000\u00d9\u00da\u0005\u001e\u0000\u0000\u00da\u00db"+
		"\u0005\u001d\u0000\u0000\u00db\u00dc\u0003@ \u0000\u00dc\u00dd\u0005\u001e"+
		"\u0000\u0000\u00dd\u00df\u0001\u0000\u0000\u0000\u00de\u00d1\u0001\u0000"+
		"\u0000\u0000\u00de\u00d6\u0001\u0000\u0000\u0000\u00df\u001b\u0001\u0000"+
		"\u0000\u0000\u00e0\u00e1\u0005\u0019\u0000\u0000\u00e1\u00e2\u0003<\u001e"+
		"\u0000\u00e2\u00ea\u0005\u001a\u0000\u0000\u00e3\u00e4\u0005\u001f\u0000"+
		"\u0000\u00e4\u00e5\u0005\u0019\u0000\u0000\u00e5\u00e6\u0003<\u001e\u0000"+
		"\u00e6\u00e7\u0005\u001a\u0000\u0000\u00e7\u00e9\u0001\u0000\u0000\u0000"+
		"\u00e8\u00e3\u0001\u0000\u0000\u0000\u00e9\u00ec\u0001\u0000\u0000\u0000"+
		"\u00ea\u00e8\u0001\u0000\u0000\u0000\u00ea\u00eb\u0001\u0000\u0000\u0000"+
		"\u00eb\u001d\u0001\u0000\u0000\u0000\u00ec\u00ea\u0001\u0000\u0000\u0000"+
		"\u00ed\u00ee\u0005\f\u0000\u0000\u00ee\u00f6\u0003 \u0010\u0000\u00ef"+
		"\u00f0\u0005\f\u0000\u0000\u00f0\u00f1\u0003@ \u0000\u00f1\u00f2\u0003"+
		"0\u0018\u0000\u00f2\u00f6\u0001\u0000\u0000\u0000\u00f3\u00f4\u0005\f"+
		"\u0000\u0000\u00f4\u00f6\u00030\u0018\u0000\u00f5\u00ed\u0001\u0000\u0000"+
		"\u0000\u00f5\u00ef\u0001\u0000\u0000\u0000\u00f5\u00f3\u0001\u0000\u0000"+
		"\u0000\u00f6\u001f\u0001\u0000\u0000\u0000\u00f7\u00f8\u00038\u001c\u0000"+
		"\u00f8\u00f9\u0005\"\u0000\u0000\u00f9\u00fa\u0003@ \u0000\u00fa\u00fb"+
		"\u0005\"\u0000\u0000\u00fb\u00fc\u0003\"\u0011\u0000\u00fc\u00fd\u0003"+
		"0\u0018\u0000\u00fd!\u0001\u0000\u0000\u0000\u00fe\u0101\u0003$\u0012"+
		"\u0000\u00ff\u0101\u00032\u0019\u0000\u0100\u00fe\u0001\u0000\u0000\u0000"+
		"\u0100\u00ff\u0001\u0000\u0000\u0000\u0101#\u0001\u0000\u0000\u0000\u0102"+
		"\u0103\u00059\u0000\u0000\u0103\u0104\u0005#\u0000\u0000\u0104\u0109\u0005"+
		"#\u0000\u0000\u0105\u0106\u00059\u0000\u0000\u0106\u0107\u0005$\u0000"+
		"\u0000\u0107\u0109\u0005$\u0000\u0000\u0108\u0102\u0001\u0000\u0000\u0000"+
		"\u0108\u0105\u0001\u0000\u0000\u0000\u0109%\u0001\u0000\u0000\u0000\u010a"+
		"\u010b\u0005\t\u0000\u0000\u010b\u010c\u0003@ \u0000\u010c\u010d\u0005"+
		"\u0019\u0000\u0000\u010d\u010e\u0003(\u0014\u0000\u010e\u010f\u0005\u001a"+
		"\u0000\u0000\u010f\'\u0001\u0000\u0000\u0000\u0110\u0112\u0003*\u0015"+
		"\u0000\u0111\u0110\u0001\u0000\u0000\u0000\u0112\u0113\u0001\u0000\u0000"+
		"\u0000\u0113\u0111\u0001\u0000\u0000\u0000\u0113\u0114\u0001\u0000\u0000"+
		"\u0000\u0114\u0116\u0001\u0000\u0000\u0000\u0115\u0117\u0003,\u0016\u0000"+
		"\u0116\u0115\u0001\u0000\u0000\u0000\u0116\u0117\u0001\u0000\u0000\u0000"+
		"\u0117)\u0001\u0000\u0000\u0000\u0118\u0119\u0005\n\u0000\u0000\u0119"+
		"\u011a\u0003<\u001e\u0000\u011a\u011e\u0005!\u0000\u0000\u011b\u011d\u0003"+
		"\u0006\u0003\u0000\u011c\u011b\u0001\u0000\u0000\u0000\u011d\u0120\u0001"+
		"\u0000\u0000\u0000\u011e\u011c\u0001\u0000\u0000\u0000\u011e\u011f\u0001"+
		"\u0000\u0000\u0000\u011f+\u0001\u0000\u0000\u0000\u0120\u011e\u0001\u0000"+
		"\u0000\u0000\u0121\u0122\u0005\u000b\u0000\u0000\u0122\u0126\u0005!\u0000"+
		"\u0000\u0123\u0125\u0003\u0006\u0003\u0000\u0124\u0123\u0001\u0000\u0000"+
		"\u0000\u0125\u0128\u0001\u0000\u0000\u0000\u0126\u0124\u0001\u0000\u0000"+
		"\u0000\u0126\u0127\u0001\u0000\u0000\u0000\u0127-\u0001\u0000\u0000\u0000"+
		"\u0128\u0126\u0001\u0000\u0000\u0000\u0129\u012a\u0005\u0007\u0000\u0000"+
		"\u012a\u012b\u0003@ \u0000\u012b\u0133\u00030\u0018\u0000\u012c\u012d"+
		"\u0005\b\u0000\u0000\u012d\u012e\u0005\u0007\u0000\u0000\u012e\u012f\u0003"+
		"@ \u0000\u012f\u0130\u00030\u0018\u0000\u0130\u0132\u0001\u0000\u0000"+
		"\u0000\u0131\u012c\u0001\u0000\u0000\u0000\u0132\u0135\u0001\u0000\u0000"+
		"\u0000\u0133\u0131\u0001\u0000\u0000\u0000\u0133\u0134\u0001\u0000\u0000"+
		"\u0000\u0134\u0138\u0001\u0000\u0000\u0000\u0135\u0133\u0001\u0000\u0000"+
		"\u0000\u0136\u0137\u0005\b\u0000\u0000\u0137\u0139\u00030\u0018\u0000"+
		"\u0138\u0136\u0001\u0000\u0000\u0000\u0138\u0139\u0001\u0000\u0000\u0000"+
		"\u0139/\u0001\u0000\u0000\u0000\u013a\u0141\u0005\u0019\u0000\u0000\u013b"+
		"\u013d\u0003\u0006\u0003\u0000\u013c\u013e\u0005\"\u0000\u0000\u013d\u013c"+
		"\u0001\u0000\u0000\u0000\u013d\u013e\u0001\u0000\u0000\u0000\u013e\u0140"+
		"\u0001\u0000\u0000\u0000\u013f\u013b\u0001\u0000\u0000\u0000\u0140\u0143"+
		"\u0001\u0000\u0000\u0000\u0141\u013f\u0001\u0000\u0000\u0000\u0141\u0142"+
		"\u0001\u0000\u0000\u0000\u0142\u0144\u0001\u0000\u0000\u0000\u0143\u0141"+
		"\u0001\u0000\u0000\u0000\u0144\u0145\u0005\u001a\u0000\u0000\u01451\u0001"+
		"\u0000\u0000\u0000\u0146\u0149\u00059\u0000\u0000\u0147\u0149\u0003\u001a"+
		"\r\u0000\u0148\u0146\u0001\u0000\u0000\u0000\u0148\u0147\u0001\u0000\u0000"+
		"\u0000\u0149\u014a\u0001\u0000\u0000\u0000\u014a\u014b\u0003V+\u0000\u014b"+
		"\u014c\u0003@ \u0000\u014c3\u0001\u0000\u0000\u0000\u014d\u014e\u0005"+
		"\u0004\u0000\u0000\u014e\u014f\u0005)\u0000\u0000\u014f\u0150\u0005\u0005"+
		"\u0000\u0000\u0150\u0151\u0005\u001b\u0000\u0000\u0151\u0152\u0003<\u001e"+
		"\u0000\u0152\u0153\u0005\u001c\u0000\u0000\u01535\u0001\u0000\u0000\u0000"+
		"\u0154\u0155\u0005\u0003\u0000\u0000\u0155\u0156\u0003>\u001f\u0000\u0156"+
		"\u0157\u0003N\'\u0000\u0157\u015f\u0001\u0000\u0000\u0000\u0158\u0159"+
		"\u0005\u0003\u0000\u0000\u0159\u015a\u0003>\u001f\u0000\u015a\u015b\u0003"+
		"N\'\u0000\u015b\u015c\u0005 \u0000\u0000\u015c\u015d\u0003<\u001e\u0000"+
		"\u015d\u015f\u0001\u0000\u0000\u0000\u015e\u0154\u0001\u0000\u0000\u0000"+
		"\u015e\u0158\u0001\u0000\u0000\u0000\u015f7\u0001\u0000\u0000\u0000\u0160"+
		"\u0161\u0003>\u001f\u0000\u0161\u0162\u0005!\u0000\u0000\u0162\u0163\u0005"+
		" \u0000\u0000\u0163\u0164\u0003<\u001e\u0000\u01649\u0001\u0000\u0000"+
		"\u0000\u0165\u0166\u0005\u0006\u0000\u0000\u0166\u0167\u00059\u0000\u0000"+
		"\u0167\u0168\u0003N\'\u0000\u0168\u0169\u0005 \u0000\u0000\u0169\u016a"+
		"\u0003@ \u0000\u016a;\u0001\u0000\u0000\u0000\u016b\u0170\u0003@ \u0000"+
		"\u016c\u016d\u0005\u001f\u0000\u0000\u016d\u016f\u0003@ \u0000\u016e\u016c"+
		"\u0001\u0000\u0000\u0000\u016f\u0172\u0001\u0000\u0000\u0000\u0170\u016e"+
		"\u0001\u0000\u0000\u0000\u0170\u0171\u0001\u0000\u0000\u0000\u0171=\u0001"+
		"\u0000\u0000\u0000\u0172\u0170\u0001\u0000\u0000\u0000\u0173\u0178\u0005"+
		"9\u0000\u0000\u0174\u0175\u0005\u001f\u0000\u0000\u0175\u0177\u00059\u0000"+
		"\u0000\u0176\u0174\u0001\u0000\u0000\u0000\u0177\u017a\u0001\u0000\u0000"+
		"\u0000\u0178\u0176\u0001\u0000\u0000\u0000\u0178\u0179\u0001\u0000\u0000"+
		"\u0000\u0179?\u0001\u0000\u0000\u0000\u017a\u0178\u0001\u0000\u0000\u0000"+
		"\u017b\u017c\u0006 \uffff\uffff\u0000\u017c\u017d\u0003B!\u0000\u017d"+
		"\u0183\u0001\u0000\u0000\u0000\u017e\u017f\n\u0002\u0000\u0000\u017f\u0180"+
		"\u0007\u0000\u0000\u0000\u0180\u0182\u0003B!\u0000\u0181\u017e\u0001\u0000"+
		"\u0000\u0000\u0182\u0185\u0001\u0000\u0000\u0000\u0183\u0181\u0001\u0000"+
		"\u0000\u0000\u0183\u0184\u0001\u0000\u0000\u0000\u0184A\u0001\u0000\u0000"+
		"\u0000\u0185\u0183\u0001\u0000\u0000\u0000\u0186\u0187\u0006!\uffff\uffff"+
		"\u0000\u0187\u0188\u0003D\"\u0000\u0188\u018e\u0001\u0000\u0000\u0000"+
		"\u0189\u018a\n\u0002\u0000\u0000\u018a\u018b\u0007\u0001\u0000\u0000\u018b"+
		"\u018d\u0003D\"\u0000\u018c\u0189\u0001\u0000\u0000\u0000\u018d\u0190"+
		"\u0001\u0000\u0000\u0000\u018e\u018c\u0001\u0000\u0000\u0000\u018e\u018f"+
		"\u0001\u0000\u0000\u0000\u018fC\u0001\u0000\u0000\u0000\u0190\u018e\u0001"+
		"\u0000\u0000\u0000\u0191\u0192\u0006\"\uffff\uffff\u0000\u0192\u0193\u0003"+
		"F#\u0000\u0193\u0199\u0001\u0000\u0000\u0000\u0194\u0195\n\u0002\u0000"+
		"\u0000\u0195\u0196\u0007\u0002\u0000\u0000\u0196\u0198\u0003F#\u0000\u0197"+
		"\u0194\u0001\u0000\u0000\u0000\u0198\u019b\u0001\u0000\u0000\u0000\u0199"+
		"\u0197\u0001\u0000\u0000\u0000\u0199\u019a\u0001\u0000\u0000\u0000\u019a"+
		"E\u0001\u0000\u0000\u0000\u019b\u0199\u0001\u0000\u0000\u0000\u019c\u019d"+
		"\u0006#\uffff\uffff\u0000\u019d\u019e\u0003H$\u0000\u019e\u01a4\u0001"+
		"\u0000\u0000\u0000\u019f\u01a0\n\u0002\u0000\u0000\u01a0\u01a1\u0007\u0003"+
		"\u0000\u0000\u01a1\u01a3\u0003H$\u0000\u01a2\u019f\u0001\u0000\u0000\u0000"+
		"\u01a3\u01a6\u0001\u0000\u0000\u0000\u01a4\u01a2\u0001\u0000\u0000\u0000"+
		"\u01a4\u01a5\u0001\u0000\u0000\u0000\u01a5G\u0001\u0000\u0000\u0000\u01a6"+
		"\u01a4\u0001\u0000\u0000\u0000\u01a7\u01bd\u0003J%\u0000\u01a8\u01bd\u0003"+
		"L&\u0000\u01a9\u01bd\u0003\u001a\r\u0000\u01aa\u01ab\u0005\u001b\u0000"+
		"\u0000\u01ab\u01ac\u0003@ \u0000\u01ac\u01ad\u0005\u001c\u0000\u0000\u01ad"+
		"\u01bd\u0001\u0000\u0000\u0000\u01ae\u01af\u0007\u0004\u0000\u0000\u01af"+
		"\u01bd\u0003H$\u0000\u01b0\u01bd\u00056\u0000\u0000\u01b1\u01bd\u0005"+
		"5\u0000\u0000\u01b2\u01bd\u00053\u0000\u0000\u01b3\u01bd\u00058\u0000"+
		"\u0000\u01b4\u01bd\u00057\u0000\u0000\u01b5\u01bd\u00054\u0000\u0000\u01b6"+
		"\u01bd\u0003\n\u0005\u0000\u01b7\u01bd\u0003\b\u0004\u0000\u01b8\u01bd"+
		"\u0003\f\u0006\u0000\u01b9\u01bd\u0003\u000e\u0007\u0000\u01ba\u01bd\u0003"+
		"\u0010\b\u0000\u01bb\u01bd\u00059\u0000\u0000\u01bc\u01a7\u0001\u0000"+
		"\u0000\u0000\u01bc\u01a8\u0001\u0000\u0000\u0000\u01bc\u01a9\u0001\u0000"+
		"\u0000\u0000\u01bc\u01aa\u0001\u0000\u0000\u0000\u01bc\u01ae\u0001\u0000"+
		"\u0000\u0000\u01bc\u01b0\u0001\u0000\u0000\u0000\u01bc\u01b1\u0001\u0000"+
		"\u0000\u0000\u01bc\u01b2\u0001\u0000\u0000\u0000\u01bc\u01b3\u0001\u0000"+
		"\u0000\u0000\u01bc\u01b4\u0001\u0000\u0000\u0000\u01bc\u01b5\u0001\u0000"+
		"\u0000\u0000\u01bc\u01b6\u0001\u0000\u0000\u0000\u01bc\u01b7\u0001\u0000"+
		"\u0000\u0000\u01bc\u01b8\u0001\u0000\u0000\u0000\u01bc\u01b9\u0001\u0000"+
		"\u0000\u0000\u01bc\u01ba\u0001\u0000\u0000\u0000\u01bc\u01bb\u0001\u0000"+
		"\u0000\u0000\u01bdI\u0001\u0000\u0000\u0000\u01be\u01bf\u0005\u001d\u0000"+
		"\u0000\u01bf\u01c0\u0003@ \u0000\u01c0\u01c1\u0005\u001e\u0000\u0000\u01c1"+
		"\u01c2\u0003T*\u0000\u01c2\u01c3\u0005\u0019\u0000\u0000\u01c3\u01c4\u0003"+
		"<\u001e\u0000\u01c4\u01c5\u0005\u001a\u0000\u0000\u01c5K\u0001\u0000\u0000"+
		"\u0000\u01c6\u01c7\u0005\u001d\u0000\u0000\u01c7\u01c8\u0003@ \u0000\u01c8"+
		"\u01c9\u0005\u001e\u0000\u0000\u01c9\u01ca\u0005\u001d\u0000\u0000\u01ca"+
		"\u01cb\u0003@ \u0000\u01cb\u01cc\u0005\u001e\u0000\u0000\u01cc\u01cd\u0003"+
		"T*\u0000\u01cd\u01ce\u0005\u0019\u0000\u0000\u01ce\u01cf\u0003\u001c\u000e"+
		"\u0000\u01cf\u01d0\u0005\u001a\u0000\u0000\u01d0M\u0001\u0000\u0000\u0000"+
		"\u01d1\u01d5\u0003T*\u0000\u01d2\u01d5\u0003P(\u0000\u01d3\u01d5\u0003"+
		"R)\u0000\u01d4\u01d1\u0001\u0000\u0000\u0000\u01d4\u01d2\u0001\u0000\u0000"+
		"\u0000\u01d4\u01d3\u0001\u0000\u0000\u0000\u01d5O\u0001\u0000\u0000\u0000"+
		"\u01d6\u01d7\u0005\u001d\u0000\u0000\u01d7\u01d8\u0003@ \u0000\u01d8\u01d9"+
		"\u0005\u001e\u0000\u0000\u01d9\u01da\u0003T*\u0000\u01daQ\u0001\u0000"+
		"\u0000\u0000\u01db\u01dc\u0005\u001d\u0000\u0000\u01dc\u01dd\u0003@ \u0000"+
		"\u01dd\u01de\u0005\u001e\u0000\u0000\u01de\u01df\u0005\u001d\u0000\u0000"+
		"\u01df\u01e0\u0003@ \u0000\u01e0\u01e1\u0005\u001e\u0000\u0000\u01e1\u01e2"+
		"\u0003T*\u0000\u01e2S\u0001\u0000\u0000\u0000\u01e3\u01e4\u0007\u0005"+
		"\u0000\u0000\u01e4U\u0001\u0000\u0000\u0000\u01e5\u01e9\u0005 \u0000\u0000"+
		"\u01e6\u01e7\u0007\u0006\u0000\u0000\u01e7\u01e9\u0005 \u0000\u0000\u01e8"+
		"\u01e5\u0001\u0000\u0000\u0000\u01e8\u01e6\u0001\u0000\u0000\u0000\u01e9"+
		"W\u0001\u0000\u0000\u0000#[d{\u0097\u009d\u00a3\u00af\u00b9\u00bd\u00c4"+
		"\u00ce\u00de\u00ea\u00f5\u0100\u0108\u0113\u0116\u011e\u0126\u0133\u0138"+
		"\u013d\u0141\u0148\u015e\u0170\u0178\u0183\u018e\u0199\u01a4\u01bc\u01d4"+
		"\u01e8";
	public static final ATN _ATN =
		new ATNDeserializer().deserialize(_serializedATN.toCharArray());
	static {
		_decisionToDFA = new DFA[_ATN.getNumberOfDecisions()];
		for (int i = 0; i < _ATN.getNumberOfDecisions(); i++) {
			_decisionToDFA[i] = new DFA(_ATN.getDecisionState(i), i);
		}
	}
}
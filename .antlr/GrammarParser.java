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
		NEQUAL=47, LESS=48, GREATER=49, IDENTIFICADOR=50, ENTERO=51, FLOAT=52, 
		BOOL=53, STR=54, RUNE=55, NIL=56, COMENTARIO_LINEA=57, COMENTARIO_BLOQUE=58, 
		WS=59, ERROR=60;
	public static final int
		RULE_p = 0, RULE_bMain = 1, RULE_i = 2, RULE_funcLen = 3, RULE_funcNow = 4, 
		RULE_funcSub = 5, RULE_funcType = 6, RULE_retornar = 7, RULE_funcion = 8, 
		RULE_listaRetorno = 9, RULE_listaParametros = 10, RULE_bloqueFuncion = 11, 
		RULE_declaracionArreglosD = 12, RULE_listaValores = 13, RULE_asignacionArreglosD = 14, 
		RULE_accesoArreglosD = 15, RULE_declaracionArreglos = 16, RULE_asignacionArreglos = 17, 
		RULE_accesoArreglos = 18, RULE_sentenciaFor = 19, RULE_forClasico = 20, 
		RULE_condFor = 21, RULE_bloqueFor = 22, RULE_expFor = 23, RULE_sentenciaSwitch = 24, 
		RULE_bloqueSwitch = 25, RULE_bloqueCase = 26, RULE_bloqueDefault = 27, 
		RULE_sentenciaIf = 28, RULE_bloqueElse = 29, RULE_bloqueElseIf = 30, RULE_asignacion = 31, 
		RULE_imprimir = 32, RULE_declaracion = 33, RULE_declaracionCorta = 34, 
		RULE_declaracionConst = 35, RULE_listaExpr = 36, RULE_listaId = 37, RULE_logExpr = 38, 
		RULE_relExpr = 39, RULE_expr = 40, RULE_term = 41, RULE_modterm = 42, 
		RULE_factor = 43, RULE_tipos = 44, RULE_simboloAsignacion = 45;
	private static String[] makeRuleNames() {
		return new String[] {
			"p", "bMain", "i", "funcLen", "funcNow", "funcSub", "funcType", "retornar", 
			"funcion", "listaRetorno", "listaParametros", "bloqueFuncion", "declaracionArreglosD", 
			"listaValores", "asignacionArreglosD", "accesoArreglosD", "declaracionArreglos", 
			"asignacionArreglos", "accesoArreglos", "sentenciaFor", "forClasico", 
			"condFor", "bloqueFor", "expFor", "sentenciaSwitch", "bloqueSwitch", 
			"bloqueCase", "bloqueDefault", "sentenciaIf", "bloqueElse", "bloqueElseIf", 
			"asignacion", "imprimir", "declaracion", "declaracionCorta", "declaracionConst", 
			"listaExpr", "listaId", "logExpr", "relExpr", "expr", "term", "modterm", 
			"factor", "tipos", "simboloAsignacion"
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
			null, null, null, null, null, null, "'nil'"
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
			"ANDO", "ORO", "LE", "GE", "EQUAL", "NEQUAL", "LESS", "GREATER", "IDENTIFICADOR", 
			"ENTERO", "FLOAT", "BOOL", "STR", "RUNE", "NIL", "COMENTARIO_LINEA", 
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
			setState(92);
			bMain();
			setState(93);
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
		public BloqueMainContext(BMainContext ctx) { copyFrom(ctx); }
	}

	public final BMainContext bMain() throws RecognitionException {
		BMainContext _localctx = new BMainContext(_ctx, getState());
		enterRule(_localctx, 2, RULE_bMain);
		int _la;
		try {
			_localctx = new BloqueMainContext(_localctx);
			enterOuterAlt(_localctx, 1);
			{
			setState(95);
			match(FUNC);
			setState(96);
			match(MAIN);
			setState(97);
			match(LPAREN);
			setState(98);
			match(RPAREN);
			setState(99);
			match(LBRACE);
			setState(106);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while ((((_la) & ~0x3f) == 0 && ((1L << _la) & 1125899906904794L) != 0)) {
				{
				{
				setState(100);
				i();
				setState(102);
				_errHandler.sync(this);
				_la = _input.LA(1);
				if (_la==SEMICOLON) {
					{
					setState(101);
					match(SEMICOLON);
					}
				}

				}
				}
				setState(108);
				_errHandler.sync(this);
				_la = _input.LA(1);
			}
			setState(109);
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
			setState(128);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,2,_ctx) ) {
			case 1:
				_localctx = new FuncionImprimirContext(_localctx);
				enterOuterAlt(_localctx, 1);
				{
				setState(111);
				imprimir();
				}
				break;
			case 2:
				_localctx = new DeclarationContext(_localctx);
				enterOuterAlt(_localctx, 2);
				{
				setState(112);
				declaracion();
				}
				break;
			case 3:
				_localctx = new ShortDeclarationContext(_localctx);
				enterOuterAlt(_localctx, 3);
				{
				setState(113);
				declaracionCorta();
				}
				break;
			case 4:
				_localctx = new ConstDeclarationContext(_localctx);
				enterOuterAlt(_localctx, 4);
				{
				setState(114);
				declaracionConst();
				}
				break;
			case 5:
				_localctx = new AsignationContext(_localctx);
				enterOuterAlt(_localctx, 5);
				{
				setState(115);
				asignacion();
				}
				break;
			case 6:
				_localctx = new IfSentenciaContext(_localctx);
				enterOuterAlt(_localctx, 6);
				{
				setState(116);
				sentenciaIf();
				}
				break;
			case 7:
				_localctx = new SwitchSentenciaContext(_localctx);
				enterOuterAlt(_localctx, 7);
				{
				setState(117);
				sentenciaSwitch();
				}
				break;
			case 8:
				_localctx = new ForSentenciaContext(_localctx);
				enterOuterAlt(_localctx, 8);
				{
				setState(118);
				sentenciaFor();
				}
				break;
			case 9:
				_localctx = new IncDecContext(_localctx);
				enterOuterAlt(_localctx, 9);
				{
				setState(119);
				expFor();
				}
				break;
			case 10:
				_localctx = new ArreglosDeclarationContext(_localctx);
				enterOuterAlt(_localctx, 10);
				{
				setState(120);
				declaracionArreglos();
				}
				break;
			case 11:
				_localctx = new ArreglosAsignationContext(_localctx);
				enterOuterAlt(_localctx, 11);
				{
				setState(121);
				asignacionArreglos();
				}
				break;
			case 12:
				_localctx = new ArreglosDeclarationDContext(_localctx);
				enterOuterAlt(_localctx, 12);
				{
				setState(122);
				declaracionArreglosD();
				}
				break;
			case 13:
				_localctx = new ArreglosAsignationDContext(_localctx);
				enterOuterAlt(_localctx, 13);
				{
				setState(123);
				asignacionArreglosD();
				}
				break;
			case 14:
				_localctx = new DFunctionContext(_localctx);
				enterOuterAlt(_localctx, 14);
				{
				setState(124);
				funcion();
				}
				break;
			case 15:
				_localctx = new SentenciaReturnContext(_localctx);
				enterOuterAlt(_localctx, 15);
				{
				setState(125);
				retornar();
				}
				break;
			case 16:
				_localctx = new SentenciaContinueContext(_localctx);
				enterOuterAlt(_localctx, 16);
				{
				setState(126);
				match(CONTINUE);
				}
				break;
			case 17:
				_localctx = new SentenciaBreakContext(_localctx);
				enterOuterAlt(_localctx, 17);
				{
				setState(127);
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
			setState(130);
			match(LEN);
			setState(131);
			match(LPAREN);
			setState(132);
			logExpr(0);
			setState(133);
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
			setState(135);
			match(NOW);
			setState(136);
			match(LPAREN);
			setState(137);
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
			setState(139);
			match(SUBSTR);
			setState(140);
			match(LPAREN);
			setState(141);
			logExpr(0);
			setState(142);
			match(COMMA);
			setState(143);
			logExpr(0);
			setState(144);
			match(COMMA);
			setState(145);
			logExpr(0);
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
			setState(148);
			match(TYPEOF);
			setState(149);
			match(LPAREN);
			setState(150);
			match(IDENTIFICADOR);
			setState(151);
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
			setState(153);
			match(RETURN);
			setState(154);
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
			setState(178);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,5,_ctx) ) {
			case 1:
				enterOuterAlt(_localctx, 1);
				{
				setState(156);
				match(FUNC);
				setState(157);
				match(IDENTIFICADOR);
				setState(158);
				match(LPAREN);
				setState(160);
				_errHandler.sync(this);
				_la = _input.LA(1);
				if (_la==IDENTIFICADOR) {
					{
					setState(159);
					listaParametros();
					}
				}

				setState(162);
				match(RPAREN);
				setState(163);
				match(LPAREN);
				setState(164);
				listaRetorno();
				setState(165);
				match(RPAREN);
				setState(166);
				bloqueFuncion();
				}
				break;
			case 2:
				enterOuterAlt(_localctx, 2);
				{
				setState(168);
				match(FUNC);
				setState(169);
				match(IDENTIFICADOR);
				setState(170);
				match(LPAREN);
				setState(172);
				_errHandler.sync(this);
				_la = _input.LA(1);
				if (_la==IDENTIFICADOR) {
					{
					setState(171);
					listaParametros();
					}
				}

				setState(174);
				match(RPAREN);
				setState(175);
				tipos();
				setState(176);
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
			setState(180);
			tipos();
			setState(185);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while (_la==COMMA) {
				{
				{
				setState(181);
				match(COMMA);
				setState(182);
				tipos();
				}
				}
				setState(187);
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
			setState(188);
			match(IDENTIFICADOR);
			setState(189);
			tipos();
			setState(195);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while (_la==COMMA) {
				{
				{
				setState(190);
				match(COMMA);
				setState(191);
				match(IDENTIFICADOR);
				setState(192);
				tipos();
				}
				}
				setState(197);
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
			setState(198);
			match(LBRACE);
			setState(205);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while ((((_la) & ~0x3f) == 0 && ((1L << _la) & 1125899906904794L) != 0)) {
				{
				{
				setState(199);
				i();
				setState(201);
				_errHandler.sync(this);
				_la = _input.LA(1);
				if (_la==SEMICOLON) {
					{
					setState(200);
					match(SEMICOLON);
					}
				}

				}
				}
				setState(207);
				_errHandler.sync(this);
				_la = _input.LA(1);
			}
			setState(208);
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
			setState(210);
			match(VAR);
			setState(211);
			match(IDENTIFICADOR);
			setState(212);
			match(LCOR);
			setState(213);
			logExpr(0);
			setState(214);
			match(RCOR);
			setState(215);
			match(LCOR);
			setState(216);
			logExpr(0);
			setState(217);
			match(RCOR);
			setState(218);
			tipos();
			setState(231);
			_errHandler.sync(this);
			_la = _input.LA(1);
			if (_la==ASSIGN) {
				{
				setState(219);
				match(ASSIGN);
				setState(220);
				match(LCOR);
				setState(221);
				logExpr(0);
				setState(222);
				match(RCOR);
				setState(223);
				match(LCOR);
				setState(224);
				logExpr(0);
				setState(225);
				match(RCOR);
				setState(226);
				tipos();
				setState(227);
				match(LBRACE);
				setState(228);
				listaValores();
				setState(229);
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
			setState(240);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while (_la==LBRACE) {
				{
				{
				setState(233);
				match(LBRACE);
				setState(234);
				listaExpr();
				setState(235);
				match(RBRACE);
				setState(236);
				match(COMMA);
				}
				}
				setState(242);
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
			setState(243);
			accesoArreglosD();
			setState(244);
			match(ASSIGN);
			setState(245);
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
			setState(247);
			match(IDENTIFICADOR);
			setState(248);
			match(LCOR);
			setState(249);
			logExpr(0);
			setState(250);
			match(RCOR);
			setState(251);
			match(LCOR);
			setState(252);
			logExpr(0);
			setState(253);
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
			setState(255);
			match(VAR);
			setState(256);
			match(IDENTIFICADOR);
			setState(257);
			match(LCOR);
			setState(258);
			logExpr(0);
			setState(259);
			match(RCOR);
			setState(260);
			tipos();
			setState(270);
			_errHandler.sync(this);
			_la = _input.LA(1);
			if (_la==ASSIGN) {
				{
				setState(261);
				match(ASSIGN);
				setState(262);
				match(LCOR);
				setState(263);
				logExpr(0);
				setState(264);
				match(RCOR);
				setState(265);
				tipos();
				setState(266);
				match(LBRACE);
				setState(267);
				listaExpr();
				setState(268);
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
			setState(272);
			accesoArreglos();
			setState(273);
			match(ASSIGN);
			setState(274);
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
			setState(276);
			match(IDENTIFICADOR);
			setState(277);
			match(LCOR);
			setState(278);
			logExpr(0);
			setState(279);
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
		public BloqueForContext bloqueFor() {
			return getRuleContext(BloqueForContext.class,0);
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
			setState(289);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,13,_ctx) ) {
			case 1:
				enterOuterAlt(_localctx, 1);
				{
				setState(281);
				match(FOR);
				setState(282);
				forClasico();
				}
				break;
			case 2:
				enterOuterAlt(_localctx, 2);
				{
				setState(283);
				match(FOR);
				setState(284);
				logExpr(0);
				setState(285);
				bloqueFor();
				}
				break;
			case 3:
				enterOuterAlt(_localctx, 3);
				{
				setState(287);
				match(FOR);
				setState(288);
				bloqueFor();
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
		public BloqueForContext bloqueFor() {
			return getRuleContext(BloqueForContext.class,0);
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
			setState(291);
			declaracionCorta();
			setState(292);
			match(SEMICOLON);
			setState(293);
			logExpr(0);
			setState(294);
			match(SEMICOLON);
			setState(295);
			condFor();
			setState(296);
			bloqueFor();
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
			setState(300);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,14,_ctx) ) {
			case 1:
				enterOuterAlt(_localctx, 1);
				{
				setState(298);
				expFor();
				}
				break;
			case 2:
				enterOuterAlt(_localctx, 2);
				{
				setState(299);
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
	public static class BloqueForContext extends ParserRuleContext {
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
		public BloqueForContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_bloqueFor; }
	}

	public final BloqueForContext bloqueFor() throws RecognitionException {
		BloqueForContext _localctx = new BloqueForContext(_ctx, getState());
		enterRule(_localctx, 44, RULE_bloqueFor);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(302);
			match(LBRACE);
			setState(309);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while ((((_la) & ~0x3f) == 0 && ((1L << _la) & 1125899906904794L) != 0)) {
				{
				{
				setState(303);
				i();
				setState(305);
				_errHandler.sync(this);
				_la = _input.LA(1);
				if (_la==SEMICOLON) {
					{
					setState(304);
					match(SEMICOLON);
					}
				}

				}
				}
				setState(311);
				_errHandler.sync(this);
				_la = _input.LA(1);
			}
			setState(312);
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
		enterRule(_localctx, 46, RULE_expFor);
		try {
			setState(320);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,17,_ctx) ) {
			case 1:
				enterOuterAlt(_localctx, 1);
				{
				setState(314);
				match(IDENTIFICADOR);
				setState(315);
				match(PLUS);
				setState(316);
				match(PLUS);
				}
				break;
			case 2:
				enterOuterAlt(_localctx, 2);
				{
				setState(317);
				match(IDENTIFICADOR);
				setState(318);
				match(MINUS);
				setState(319);
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
		enterRule(_localctx, 48, RULE_sentenciaSwitch);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(322);
			match(SWITCH);
			setState(323);
			logExpr(0);
			setState(324);
			match(LBRACE);
			setState(325);
			bloqueSwitch();
			setState(326);
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
		enterRule(_localctx, 50, RULE_bloqueSwitch);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(331);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while (_la==CASE) {
				{
				{
				setState(328);
				bloqueCase();
				}
				}
				setState(333);
				_errHandler.sync(this);
				_la = _input.LA(1);
			}
			setState(335);
			_errHandler.sync(this);
			_la = _input.LA(1);
			if (_la==DEFAULT) {
				{
				setState(334);
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
		public List<TerminalNode> SEMICOLON() { return getTokens(GrammarParser.SEMICOLON); }
		public TerminalNode SEMICOLON(int i) {
			return getToken(GrammarParser.SEMICOLON, i);
		}
		public BloqueCaseContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_bloqueCase; }
	}

	public final BloqueCaseContext bloqueCase() throws RecognitionException {
		BloqueCaseContext _localctx = new BloqueCaseContext(_ctx, getState());
		enterRule(_localctx, 52, RULE_bloqueCase);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(337);
			match(CASE);
			setState(338);
			listaExpr();
			setState(339);
			match(COLON);
			setState(346);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while ((((_la) & ~0x3f) == 0 && ((1L << _la) & 1125899906904794L) != 0)) {
				{
				{
				setState(340);
				i();
				setState(342);
				_errHandler.sync(this);
				_la = _input.LA(1);
				if (_la==SEMICOLON) {
					{
					setState(341);
					match(SEMICOLON);
					}
				}

				}
				}
				setState(348);
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
		public List<TerminalNode> SEMICOLON() { return getTokens(GrammarParser.SEMICOLON); }
		public TerminalNode SEMICOLON(int i) {
			return getToken(GrammarParser.SEMICOLON, i);
		}
		public BloqueDefaultContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_bloqueDefault; }
	}

	public final BloqueDefaultContext bloqueDefault() throws RecognitionException {
		BloqueDefaultContext _localctx = new BloqueDefaultContext(_ctx, getState());
		enterRule(_localctx, 54, RULE_bloqueDefault);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(349);
			match(DEFAULT);
			setState(350);
			match(COLON);
			setState(357);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while ((((_la) & ~0x3f) == 0 && ((1L << _la) & 1125899906904794L) != 0)) {
				{
				{
				setState(351);
				i();
				setState(353);
				_errHandler.sync(this);
				_la = _input.LA(1);
				if (_la==SEMICOLON) {
					{
					setState(352);
					match(SEMICOLON);
					}
				}

				}
				}
				setState(359);
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
		public TerminalNode IF() { return getToken(GrammarParser.IF, 0); }
		public LogExprContext logExpr() {
			return getRuleContext(LogExprContext.class,0);
		}
		public TerminalNode LBRACE() { return getToken(GrammarParser.LBRACE, 0); }
		public TerminalNode RBRACE() { return getToken(GrammarParser.RBRACE, 0); }
		public BloqueElseIfContext bloqueElseIf() {
			return getRuleContext(BloqueElseIfContext.class,0);
		}
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
		public SentenciaIfContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_sentenciaIf; }
	}

	public final SentenciaIfContext sentenciaIf() throws RecognitionException {
		SentenciaIfContext _localctx = new SentenciaIfContext(_ctx, getState());
		enterRule(_localctx, 56, RULE_sentenciaIf);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(360);
			match(IF);
			setState(361);
			logExpr(0);
			setState(362);
			match(LBRACE);
			setState(369);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while ((((_la) & ~0x3f) == 0 && ((1L << _la) & 1125899906904794L) != 0)) {
				{
				{
				setState(363);
				i();
				setState(365);
				_errHandler.sync(this);
				_la = _input.LA(1);
				if (_la==SEMICOLON) {
					{
					setState(364);
					match(SEMICOLON);
					}
				}

				}
				}
				setState(371);
				_errHandler.sync(this);
				_la = _input.LA(1);
			}
			setState(372);
			match(RBRACE);
			setState(373);
			bloqueElseIf();
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
	public static class BloqueElseContext extends ParserRuleContext {
		public TerminalNode ELSE() { return getToken(GrammarParser.ELSE, 0); }
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
		public BloqueElseContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_bloqueElse; }
	}

	public final BloqueElseContext bloqueElse() throws RecognitionException {
		BloqueElseContext _localctx = new BloqueElseContext(_ctx, getState());
		enterRule(_localctx, 58, RULE_bloqueElse);
		int _la;
		try {
			setState(388);
			_errHandler.sync(this);
			switch (_input.LA(1)) {
			case ELSE:
				enterOuterAlt(_localctx, 1);
				{
				setState(375);
				match(ELSE);
				setState(376);
				match(LBRACE);
				setState(383);
				_errHandler.sync(this);
				_la = _input.LA(1);
				while ((((_la) & ~0x3f) == 0 && ((1L << _la) & 1125899906904794L) != 0)) {
					{
					{
					setState(377);
					i();
					setState(379);
					_errHandler.sync(this);
					_la = _input.LA(1);
					if (_la==SEMICOLON) {
						{
						setState(378);
						match(SEMICOLON);
						}
					}

					}
					}
					setState(385);
					_errHandler.sync(this);
					_la = _input.LA(1);
				}
				setState(386);
				match(RBRACE);
				}
				break;
			case FUNC:
			case VAR:
			case FMT:
			case CONST:
			case IF:
			case SWITCH:
			case CASE:
			case DEFAULT:
			case FOR:
			case BREAK:
			case CONTINUE:
			case RETURN:
			case RBRACE:
			case SEMICOLON:
			case IDENTIFICADOR:
				enterOuterAlt(_localctx, 2);
				{
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

	@SuppressWarnings("CheckReturnValue")
	public static class BloqueElseIfContext extends ParserRuleContext {
		public BloqueElseContext bloqueElse() {
			return getRuleContext(BloqueElseContext.class,0);
		}
		public List<TerminalNode> ELSE() { return getTokens(GrammarParser.ELSE); }
		public TerminalNode ELSE(int i) {
			return getToken(GrammarParser.ELSE, i);
		}
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
		public List<TerminalNode> LBRACE() { return getTokens(GrammarParser.LBRACE); }
		public TerminalNode LBRACE(int i) {
			return getToken(GrammarParser.LBRACE, i);
		}
		public List<TerminalNode> RBRACE() { return getTokens(GrammarParser.RBRACE); }
		public TerminalNode RBRACE(int i) {
			return getToken(GrammarParser.RBRACE, i);
		}
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
		public BloqueElseIfContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_bloqueElseIf; }
	}

	public final BloqueElseIfContext bloqueElseIf() throws RecognitionException {
		BloqueElseIfContext _localctx = new BloqueElseIfContext(_ctx, getState());
		enterRule(_localctx, 60, RULE_bloqueElseIf);
		int _la;
		try {
			int _alt;
			enterOuterAlt(_localctx, 1);
			{
			setState(407);
			_errHandler.sync(this);
			_alt = getInterpreter().adaptivePredict(_input,31,_ctx);
			while ( _alt!=2 && _alt!=org.antlr.v4.runtime.atn.ATN.INVALID_ALT_NUMBER ) {
				if ( _alt==1 ) {
					{
					{
					setState(390);
					match(ELSE);
					setState(391);
					match(IF);
					setState(392);
					logExpr(0);
					setState(393);
					match(LBRACE);
					setState(400);
					_errHandler.sync(this);
					_la = _input.LA(1);
					while ((((_la) & ~0x3f) == 0 && ((1L << _la) & 1125899906904794L) != 0)) {
						{
						{
						setState(394);
						i();
						setState(396);
						_errHandler.sync(this);
						_la = _input.LA(1);
						if (_la==SEMICOLON) {
							{
							setState(395);
							match(SEMICOLON);
							}
						}

						}
						}
						setState(402);
						_errHandler.sync(this);
						_la = _input.LA(1);
					}
					setState(403);
					match(RBRACE);
					}
					} 
				}
				setState(409);
				_errHandler.sync(this);
				_alt = getInterpreter().adaptivePredict(_input,31,_ctx);
			}
			setState(410);
			bloqueElse();
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
		public ExprContext expr() {
			return getRuleContext(ExprContext.class,0);
		}
		public AsignacionContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_asignacion; }
	}

	public final AsignacionContext asignacion() throws RecognitionException {
		AsignacionContext _localctx = new AsignacionContext(_ctx, getState());
		enterRule(_localctx, 62, RULE_asignacion);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(412);
			match(IDENTIFICADOR);
			setState(413);
			simboloAsignacion();
			setState(414);
			expr(0);
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
		enterRule(_localctx, 64, RULE_imprimir);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(416);
			match(FMT);
			setState(417);
			match(DOT);
			setState(418);
			match(PRINTLN);
			setState(419);
			match(LPAREN);
			setState(420);
			listaExpr();
			setState(421);
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
		enterRule(_localctx, 66, RULE_declaracion);
		try {
			setState(433);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,32,_ctx) ) {
			case 1:
				enterOuterAlt(_localctx, 1);
				{
				setState(423);
				match(VAR);
				setState(424);
				listaId();
				setState(425);
				tipos();
				}
				break;
			case 2:
				enterOuterAlt(_localctx, 2);
				{
				setState(427);
				match(VAR);
				setState(428);
				listaId();
				setState(429);
				tipos();
				setState(430);
				match(ASSIGN);
				setState(431);
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
		enterRule(_localctx, 68, RULE_declaracionCorta);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(435);
			listaId();
			setState(436);
			match(COLON);
			setState(437);
			match(ASSIGN);
			setState(438);
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
		public ExprContext expr() {
			return getRuleContext(ExprContext.class,0);
		}
		public DeclaracionConstContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_declaracionConst; }
	}

	public final DeclaracionConstContext declaracionConst() throws RecognitionException {
		DeclaracionConstContext _localctx = new DeclaracionConstContext(_ctx, getState());
		enterRule(_localctx, 70, RULE_declaracionConst);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(440);
			match(CONST);
			setState(441);
			match(IDENTIFICADOR);
			setState(442);
			tipos();
			setState(443);
			match(ASSIGN);
			setState(444);
			expr(0);
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
		enterRule(_localctx, 72, RULE_listaExpr);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(446);
			logExpr(0);
			setState(451);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while (_la==COMMA) {
				{
				{
				setState(447);
				match(COMMA);
				setState(448);
				logExpr(0);
				}
				}
				setState(453);
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
		enterRule(_localctx, 74, RULE_listaId);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(454);
			match(IDENTIFICADOR);
			setState(459);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while (_la==COMMA) {
				{
				{
				setState(455);
				match(COMMA);
				setState(456);
				match(IDENTIFICADOR);
				}
				}
				setState(461);
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
		int _startState = 76;
		enterRecursionRule(_localctx, 76, RULE_logExpr, _p);
		int _la;
		try {
			int _alt;
			enterOuterAlt(_localctx, 1);
			{
			{
			_localctx = new ToRelExprContext(_localctx);
			_ctx = _localctx;
			_prevctx = _localctx;

			setState(463);
			relExpr(0);
			}
			_ctx.stop = _input.LT(-1);
			setState(470);
			_errHandler.sync(this);
			_alt = getInterpreter().adaptivePredict(_input,35,_ctx);
			while ( _alt!=2 && _alt!=org.antlr.v4.runtime.atn.ATN.INVALID_ALT_NUMBER ) {
				if ( _alt==1 ) {
					if ( _parseListeners!=null ) triggerExitRuleEvent();
					_prevctx = _localctx;
					{
					{
					_localctx = new LogicalExpressionContext(new LogExprContext(_parentctx, _parentState));
					pushNewRecursionContext(_localctx, _startState, RULE_logExpr);
					setState(465);
					if (!(precpred(_ctx, 2))) throw new FailedPredicateException(this, "precpred(_ctx, 2)");
					setState(466);
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
					setState(467);
					relExpr(0);
					}
					} 
				}
				setState(472);
				_errHandler.sync(this);
				_alt = getInterpreter().adaptivePredict(_input,35,_ctx);
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
		int _startState = 78;
		enterRecursionRule(_localctx, 78, RULE_relExpr, _p);
		int _la;
		try {
			int _alt;
			enterOuterAlt(_localctx, 1);
			{
			{
			_localctx = new ToExprContext(_localctx);
			_ctx = _localctx;
			_prevctx = _localctx;

			setState(474);
			expr(0);
			}
			_ctx.stop = _input.LT(-1);
			setState(481);
			_errHandler.sync(this);
			_alt = getInterpreter().adaptivePredict(_input,36,_ctx);
			while ( _alt!=2 && _alt!=org.antlr.v4.runtime.atn.ATN.INVALID_ALT_NUMBER ) {
				if ( _alt==1 ) {
					if ( _parseListeners!=null ) triggerExitRuleEvent();
					_prevctx = _localctx;
					{
					{
					_localctx = new RelationalExpresionContext(new RelExprContext(_parentctx, _parentState));
					pushNewRecursionContext(_localctx, _startState, RULE_relExpr);
					setState(476);
					if (!(precpred(_ctx, 2))) throw new FailedPredicateException(this, "precpred(_ctx, 2)");
					setState(477);
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
					setState(478);
					expr(0);
					}
					} 
				}
				setState(483);
				_errHandler.sync(this);
				_alt = getInterpreter().adaptivePredict(_input,36,_ctx);
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
		int _startState = 80;
		enterRecursionRule(_localctx, 80, RULE_expr, _p);
		int _la;
		try {
			int _alt;
			enterOuterAlt(_localctx, 1);
			{
			{
			_localctx = new ToTermContext(_localctx);
			_ctx = _localctx;
			_prevctx = _localctx;

			setState(485);
			term(0);
			}
			_ctx.stop = _input.LT(-1);
			setState(492);
			_errHandler.sync(this);
			_alt = getInterpreter().adaptivePredict(_input,37,_ctx);
			while ( _alt!=2 && _alt!=org.antlr.v4.runtime.atn.ATN.INVALID_ALT_NUMBER ) {
				if ( _alt==1 ) {
					if ( _parseListeners!=null ) triggerExitRuleEvent();
					_prevctx = _localctx;
					{
					{
					_localctx = new BinaryExpressionTContext(new ExprContext(_parentctx, _parentState));
					pushNewRecursionContext(_localctx, _startState, RULE_expr);
					setState(487);
					if (!(precpred(_ctx, 2))) throw new FailedPredicateException(this, "precpred(_ctx, 2)");
					setState(488);
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
					setState(489);
					term(0);
					}
					} 
				}
				setState(494);
				_errHandler.sync(this);
				_alt = getInterpreter().adaptivePredict(_input,37,_ctx);
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
	public static class ToModTermContext extends TermContext {
		public ModtermContext modterm() {
			return getRuleContext(ModtermContext.class,0);
		}
		public ToModTermContext(TermContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class BinaryExpressionSContext extends TermContext {
		public Token op;
		public TermContext term() {
			return getRuleContext(TermContext.class,0);
		}
		public ModtermContext modterm() {
			return getRuleContext(ModtermContext.class,0);
		}
		public TerminalNode MULT() { return getToken(GrammarParser.MULT, 0); }
		public TerminalNode DIV() { return getToken(GrammarParser.DIV, 0); }
		public BinaryExpressionSContext(TermContext ctx) { copyFrom(ctx); }
	}

	public final TermContext term() throws RecognitionException {
		return term(0);
	}

	private TermContext term(int _p) throws RecognitionException {
		ParserRuleContext _parentctx = _ctx;
		int _parentState = getState();
		TermContext _localctx = new TermContext(_ctx, _parentState);
		TermContext _prevctx = _localctx;
		int _startState = 82;
		enterRecursionRule(_localctx, 82, RULE_term, _p);
		int _la;
		try {
			int _alt;
			enterOuterAlt(_localctx, 1);
			{
			{
			_localctx = new ToModTermContext(_localctx);
			_ctx = _localctx;
			_prevctx = _localctx;

			setState(496);
			modterm(0);
			}
			_ctx.stop = _input.LT(-1);
			setState(503);
			_errHandler.sync(this);
			_alt = getInterpreter().adaptivePredict(_input,38,_ctx);
			while ( _alt!=2 && _alt!=org.antlr.v4.runtime.atn.ATN.INVALID_ALT_NUMBER ) {
				if ( _alt==1 ) {
					if ( _parseListeners!=null ) triggerExitRuleEvent();
					_prevctx = _localctx;
					{
					{
					_localctx = new BinaryExpressionSContext(new TermContext(_parentctx, _parentState));
					pushNewRecursionContext(_localctx, _startState, RULE_term);
					setState(498);
					if (!(precpred(_ctx, 2))) throw new FailedPredicateException(this, "precpred(_ctx, 2)");
					setState(499);
					((BinaryExpressionSContext)_localctx).op = _input.LT(1);
					_la = _input.LA(1);
					if ( !(_la==MULT || _la==DIV) ) {
						((BinaryExpressionSContext)_localctx).op = (Token)_errHandler.recoverInline(this);
					}
					else {
						if ( _input.LA(1)==Token.EOF ) matchedEOF = true;
						_errHandler.reportMatch(this);
						consume();
					}
					setState(500);
					modterm(0);
					}
					} 
				}
				setState(505);
				_errHandler.sync(this);
				_alt = getInterpreter().adaptivePredict(_input,38,_ctx);
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
	public static class ModtermContext extends ParserRuleContext {
		public ModtermContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_modterm; }
	 
		public ModtermContext() { }
		public void copyFrom(ModtermContext ctx) {
			super.copyFrom(ctx);
		}
	}
	@SuppressWarnings("CheckReturnValue")
	public static class BinaryExpressionFContext extends ModtermContext {
		public ModtermContext modterm() {
			return getRuleContext(ModtermContext.class,0);
		}
		public TerminalNode MOD() { return getToken(GrammarParser.MOD, 0); }
		public FactorContext factor() {
			return getRuleContext(FactorContext.class,0);
		}
		public BinaryExpressionFContext(ModtermContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class ToFactorContext extends ModtermContext {
		public FactorContext factor() {
			return getRuleContext(FactorContext.class,0);
		}
		public ToFactorContext(ModtermContext ctx) { copyFrom(ctx); }
	}

	public final ModtermContext modterm() throws RecognitionException {
		return modterm(0);
	}

	private ModtermContext modterm(int _p) throws RecognitionException {
		ParserRuleContext _parentctx = _ctx;
		int _parentState = getState();
		ModtermContext _localctx = new ModtermContext(_ctx, _parentState);
		ModtermContext _prevctx = _localctx;
		int _startState = 84;
		enterRecursionRule(_localctx, 84, RULE_modterm, _p);
		try {
			int _alt;
			enterOuterAlt(_localctx, 1);
			{
			{
			_localctx = new ToFactorContext(_localctx);
			_ctx = _localctx;
			_prevctx = _localctx;

			setState(507);
			factor();
			}
			_ctx.stop = _input.LT(-1);
			setState(514);
			_errHandler.sync(this);
			_alt = getInterpreter().adaptivePredict(_input,39,_ctx);
			while ( _alt!=2 && _alt!=org.antlr.v4.runtime.atn.ATN.INVALID_ALT_NUMBER ) {
				if ( _alt==1 ) {
					if ( _parseListeners!=null ) triggerExitRuleEvent();
					_prevctx = _localctx;
					{
					{
					_localctx = new BinaryExpressionFContext(new ModtermContext(_parentctx, _parentState));
					pushNewRecursionContext(_localctx, _startState, RULE_modterm);
					setState(509);
					if (!(precpred(_ctx, 2))) throw new FailedPredicateException(this, "precpred(_ctx, 2)");
					setState(510);
					match(MOD);
					setState(511);
					factor();
					}
					} 
				}
				setState(516);
				_errHandler.sync(this);
				_alt = getInterpreter().adaptivePredict(_input,39,_ctx);
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
		enterRule(_localctx, 86, RULE_factor);
		try {
			setState(548);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,40,_ctx) ) {
			case 1:
				_localctx = new GroupedExpressionContext(_localctx);
				enterOuterAlt(_localctx, 1);
				{
				setState(517);
				match(LPAREN);
				setState(518);
				logExpr(0);
				setState(519);
				match(RPAREN);
				}
				break;
			case 2:
				_localctx = new UnaryExpressionContext(_localctx);
				enterOuterAlt(_localctx, 2);
				{
				setState(521);
				match(MINUS);
				setState(522);
				factor();
				}
				break;
			case 3:
				_localctx = new FloatLitContext(_localctx);
				enterOuterAlt(_localctx, 3);
				{
				setState(523);
				match(FLOAT);
				}
				break;
			case 4:
				_localctx = new EnteroLitContext(_localctx);
				enterOuterAlt(_localctx, 4);
				{
				setState(524);
				match(ENTERO);
				}
				break;
			case 5:
				_localctx = new BoolLitContext(_localctx);
				enterOuterAlt(_localctx, 5);
				{
				setState(525);
				match(BOOL);
				}
				break;
			case 6:
				_localctx = new RuneLitContext(_localctx);
				enterOuterAlt(_localctx, 6);
				{
				setState(526);
				match(RUNE);
				}
				break;
			case 7:
				_localctx = new StrLitContext(_localctx);
				enterOuterAlt(_localctx, 7);
				{
				setState(527);
				match(STR);
				}
				break;
			case 8:
				_localctx = new NilLitContext(_localctx);
				enterOuterAlt(_localctx, 8);
				{
				setState(528);
				match(NIL);
				}
				break;
			case 9:
				_localctx = new IdentifierRContext(_localctx);
				enterOuterAlt(_localctx, 9);
				{
				setState(529);
				match(REF);
				setState(530);
				match(IDENTIFICADOR);
				}
				break;
			case 10:
				_localctx = new ArregloAccesoRContext(_localctx);
				enterOuterAlt(_localctx, 10);
				{
				setState(531);
				match(REF);
				setState(532);
				accesoArreglos();
				}
				break;
			case 11:
				_localctx = new ArregloAccesoDRContext(_localctx);
				enterOuterAlt(_localctx, 11);
				{
				setState(533);
				match(REF);
				setState(534);
				accesoArreglosD();
				}
				break;
			case 12:
				_localctx = new IdentifierDContext(_localctx);
				enterOuterAlt(_localctx, 12);
				{
				setState(535);
				match(MULT);
				setState(536);
				match(IDENTIFICADOR);
				}
				break;
			case 13:
				_localctx = new ArregloAccesoDContext(_localctx);
				enterOuterAlt(_localctx, 13);
				{
				setState(537);
				match(MULT);
				setState(538);
				accesoArreglos();
				}
				break;
			case 14:
				_localctx = new ArregloAccesoDDContext(_localctx);
				enterOuterAlt(_localctx, 14);
				{
				setState(539);
				match(MULT);
				setState(540);
				accesoArreglosD();
				}
				break;
			case 15:
				_localctx = new IdentifierContext(_localctx);
				enterOuterAlt(_localctx, 15);
				{
				setState(541);
				match(IDENTIFICADOR);
				}
				break;
			case 16:
				_localctx = new ArregloAccesoContext(_localctx);
				enterOuterAlt(_localctx, 16);
				{
				setState(542);
				accesoArreglos();
				}
				break;
			case 17:
				_localctx = new ArregloAccesoDContext(_localctx);
				enterOuterAlt(_localctx, 17);
				{
				setState(543);
				accesoArreglosD();
				}
				break;
			case 18:
				_localctx = new NowFuncContext(_localctx);
				enterOuterAlt(_localctx, 18);
				{
				setState(544);
				funcNow();
				}
				break;
			case 19:
				_localctx = new LenFuncContext(_localctx);
				enterOuterAlt(_localctx, 19);
				{
				setState(545);
				funcLen();
				}
				break;
			case 20:
				_localctx = new SubFuncContext(_localctx);
				enterOuterAlt(_localctx, 20);
				{
				setState(546);
				funcSub();
				}
				break;
			case 21:
				_localctx = new TypeFuncContext(_localctx);
				enterOuterAlt(_localctx, 21);
				{
				setState(547);
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
		enterRule(_localctx, 88, RULE_tipos);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(550);
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
		enterRule(_localctx, 90, RULE_simboloAsignacion);
		int _la;
		try {
			setState(555);
			_errHandler.sync(this);
			switch (_input.LA(1)) {
			case ASSIGN:
				enterOuterAlt(_localctx, 1);
				{
				setState(552);
				match(ASSIGN);
				}
				break;
			case PLUS:
			case MINUS:
			case MULT:
			case DIV:
				enterOuterAlt(_localctx, 2);
				{
				setState(553);
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
				setState(554);
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
		case 38:
			return logExpr_sempred((LogExprContext)_localctx, predIndex);
		case 39:
			return relExpr_sempred((RelExprContext)_localctx, predIndex);
		case 40:
			return expr_sempred((ExprContext)_localctx, predIndex);
		case 41:
			return term_sempred((TermContext)_localctx, predIndex);
		case 42:
			return modterm_sempred((ModtermContext)_localctx, predIndex);
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
	private boolean modterm_sempred(ModtermContext _localctx, int predIndex) {
		switch (predIndex) {
		case 4:
			return precpred(_ctx, 2);
		}
		return true;
	}

	public static final String _serializedATN =
		"\u0004\u0001<\u022e\u0002\u0000\u0007\u0000\u0002\u0001\u0007\u0001\u0002"+
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
		"(\u0007(\u0002)\u0007)\u0002*\u0007*\u0002+\u0007+\u0002,\u0007,\u0002"+
		"-\u0007-\u0001\u0000\u0001\u0000\u0001\u0000\u0001\u0001\u0001\u0001\u0001"+
		"\u0001\u0001\u0001\u0001\u0001\u0001\u0001\u0001\u0001\u0003\u0001g\b"+
		"\u0001\u0005\u0001i\b\u0001\n\u0001\f\u0001l\t\u0001\u0001\u0001\u0001"+
		"\u0001\u0001\u0002\u0001\u0002\u0001\u0002\u0001\u0002\u0001\u0002\u0001"+
		"\u0002\u0001\u0002\u0001\u0002\u0001\u0002\u0001\u0002\u0001\u0002\u0001"+
		"\u0002\u0001\u0002\u0001\u0002\u0001\u0002\u0001\u0002\u0001\u0002\u0003"+
		"\u0002\u0081\b\u0002\u0001\u0003\u0001\u0003\u0001\u0003\u0001\u0003\u0001"+
		"\u0003\u0001\u0004\u0001\u0004\u0001\u0004\u0001\u0004\u0001\u0005\u0001"+
		"\u0005\u0001\u0005\u0001\u0005\u0001\u0005\u0001\u0005\u0001\u0005\u0001"+
		"\u0005\u0001\u0005\u0001\u0006\u0001\u0006\u0001\u0006\u0001\u0006\u0001"+
		"\u0006\u0001\u0007\u0001\u0007\u0001\u0007\u0001\b\u0001\b\u0001\b\u0001"+
		"\b\u0003\b\u00a1\b\b\u0001\b\u0001\b\u0001\b\u0001\b\u0001\b\u0001\b\u0001"+
		"\b\u0001\b\u0001\b\u0001\b\u0003\b\u00ad\b\b\u0001\b\u0001\b\u0001\b\u0001"+
		"\b\u0003\b\u00b3\b\b\u0001\t\u0001\t\u0001\t\u0005\t\u00b8\b\t\n\t\f\t"+
		"\u00bb\t\t\u0001\n\u0001\n\u0001\n\u0001\n\u0001\n\u0005\n\u00c2\b\n\n"+
		"\n\f\n\u00c5\t\n\u0001\u000b\u0001\u000b\u0001\u000b\u0003\u000b\u00ca"+
		"\b\u000b\u0005\u000b\u00cc\b\u000b\n\u000b\f\u000b\u00cf\t\u000b\u0001"+
		"\u000b\u0001\u000b\u0001\f\u0001\f\u0001\f\u0001\f\u0001\f\u0001\f\u0001"+
		"\f\u0001\f\u0001\f\u0001\f\u0001\f\u0001\f\u0001\f\u0001\f\u0001\f\u0001"+
		"\f\u0001\f\u0001\f\u0001\f\u0001\f\u0001\f\u0003\f\u00e8\b\f\u0001\r\u0001"+
		"\r\u0001\r\u0001\r\u0001\r\u0005\r\u00ef\b\r\n\r\f\r\u00f2\t\r\u0001\u000e"+
		"\u0001\u000e\u0001\u000e\u0001\u000e\u0001\u000f\u0001\u000f\u0001\u000f"+
		"\u0001\u000f\u0001\u000f\u0001\u000f\u0001\u000f\u0001\u000f\u0001\u0010"+
		"\u0001\u0010\u0001\u0010\u0001\u0010\u0001\u0010\u0001\u0010\u0001\u0010"+
		"\u0001\u0010\u0001\u0010\u0001\u0010\u0001\u0010\u0001\u0010\u0001\u0010"+
		"\u0001\u0010\u0001\u0010\u0003\u0010\u010f\b\u0010\u0001\u0011\u0001\u0011"+
		"\u0001\u0011\u0001\u0011\u0001\u0012\u0001\u0012\u0001\u0012\u0001\u0012"+
		"\u0001\u0012\u0001\u0013\u0001\u0013\u0001\u0013\u0001\u0013\u0001\u0013"+
		"\u0001\u0013\u0001\u0013\u0001\u0013\u0003\u0013\u0122\b\u0013\u0001\u0014"+
		"\u0001\u0014\u0001\u0014\u0001\u0014\u0001\u0014\u0001\u0014\u0001\u0014"+
		"\u0001\u0015\u0001\u0015\u0003\u0015\u012d\b\u0015\u0001\u0016\u0001\u0016"+
		"\u0001\u0016\u0003\u0016\u0132\b\u0016\u0005\u0016\u0134\b\u0016\n\u0016"+
		"\f\u0016\u0137\t\u0016\u0001\u0016\u0001\u0016\u0001\u0017\u0001\u0017"+
		"\u0001\u0017\u0001\u0017\u0001\u0017\u0001\u0017\u0003\u0017\u0141\b\u0017"+
		"\u0001\u0018\u0001\u0018\u0001\u0018\u0001\u0018\u0001\u0018\u0001\u0018"+
		"\u0001\u0019\u0005\u0019\u014a\b\u0019\n\u0019\f\u0019\u014d\t\u0019\u0001"+
		"\u0019\u0003\u0019\u0150\b\u0019\u0001\u001a\u0001\u001a\u0001\u001a\u0001"+
		"\u001a\u0001\u001a\u0003\u001a\u0157\b\u001a\u0005\u001a\u0159\b\u001a"+
		"\n\u001a\f\u001a\u015c\t\u001a\u0001\u001b\u0001\u001b\u0001\u001b\u0001"+
		"\u001b\u0003\u001b\u0162\b\u001b\u0005\u001b\u0164\b\u001b\n\u001b\f\u001b"+
		"\u0167\t\u001b\u0001\u001c\u0001\u001c\u0001\u001c\u0001\u001c\u0001\u001c"+
		"\u0003\u001c\u016e\b\u001c\u0005\u001c\u0170\b\u001c\n\u001c\f\u001c\u0173"+
		"\t\u001c\u0001\u001c\u0001\u001c\u0001\u001c\u0001\u001d\u0001\u001d\u0001"+
		"\u001d\u0001\u001d\u0003\u001d\u017c\b\u001d\u0005\u001d\u017e\b\u001d"+
		"\n\u001d\f\u001d\u0181\t\u001d\u0001\u001d\u0001\u001d\u0003\u001d\u0185"+
		"\b\u001d\u0001\u001e\u0001\u001e\u0001\u001e\u0001\u001e\u0001\u001e\u0001"+
		"\u001e\u0003\u001e\u018d\b\u001e\u0005\u001e\u018f\b\u001e\n\u001e\f\u001e"+
		"\u0192\t\u001e\u0001\u001e\u0001\u001e\u0005\u001e\u0196\b\u001e\n\u001e"+
		"\f\u001e\u0199\t\u001e\u0001\u001e\u0001\u001e\u0001\u001f\u0001\u001f"+
		"\u0001\u001f\u0001\u001f\u0001 \u0001 \u0001 \u0001 \u0001 \u0001 \u0001"+
		" \u0001!\u0001!\u0001!\u0001!\u0001!\u0001!\u0001!\u0001!\u0001!\u0001"+
		"!\u0003!\u01b2\b!\u0001\"\u0001\"\u0001\"\u0001\"\u0001\"\u0001#\u0001"+
		"#\u0001#\u0001#\u0001#\u0001#\u0001$\u0001$\u0001$\u0005$\u01c2\b$\n$"+
		"\f$\u01c5\t$\u0001%\u0001%\u0001%\u0005%\u01ca\b%\n%\f%\u01cd\t%\u0001"+
		"&\u0001&\u0001&\u0001&\u0001&\u0001&\u0005&\u01d5\b&\n&\f&\u01d8\t&\u0001"+
		"\'\u0001\'\u0001\'\u0001\'\u0001\'\u0001\'\u0005\'\u01e0\b\'\n\'\f\'\u01e3"+
		"\t\'\u0001(\u0001(\u0001(\u0001(\u0001(\u0001(\u0005(\u01eb\b(\n(\f(\u01ee"+
		"\t(\u0001)\u0001)\u0001)\u0001)\u0001)\u0001)\u0005)\u01f6\b)\n)\f)\u01f9"+
		"\t)\u0001*\u0001*\u0001*\u0001*\u0001*\u0001*\u0005*\u0201\b*\n*\f*\u0204"+
		"\t*\u0001+\u0001+\u0001+\u0001+\u0001+\u0001+\u0001+\u0001+\u0001+\u0001"+
		"+\u0001+\u0001+\u0001+\u0001+\u0001+\u0001+\u0001+\u0001+\u0001+\u0001"+
		"+\u0001+\u0001+\u0001+\u0001+\u0001+\u0001+\u0001+\u0001+\u0001+\u0001"+
		"+\u0001+\u0003+\u0225\b+\u0001,\u0001,\u0001-\u0001-\u0001-\u0003-\u022c"+
		"\b-\u0001-\u0000\u0005LNPRT.\u0000\u0002\u0004\u0006\b\n\f\u000e\u0010"+
		"\u0012\u0014\u0016\u0018\u001a\u001c\u001e \"$&(*,.02468:<>@BDFHJLNPR"+
		"TVXZ\u0000\u0006\u0001\u0000*+\u0001\u0000,1\u0001\u0000#$\u0001\u0000"+
		"%&\u0001\u0000\u0014\u0018\u0001\u0000#&\u024c\u0000\\\u0001\u0000\u0000"+
		"\u0000\u0002_\u0001\u0000\u0000\u0000\u0004\u0080\u0001\u0000\u0000\u0000"+
		"\u0006\u0082\u0001\u0000\u0000\u0000\b\u0087\u0001\u0000\u0000\u0000\n"+
		"\u008b\u0001\u0000\u0000\u0000\f\u0094\u0001\u0000\u0000\u0000\u000e\u0099"+
		"\u0001\u0000\u0000\u0000\u0010\u00b2\u0001\u0000\u0000\u0000\u0012\u00b4"+
		"\u0001\u0000\u0000\u0000\u0014\u00bc\u0001\u0000\u0000\u0000\u0016\u00c6"+
		"\u0001\u0000\u0000\u0000\u0018\u00d2\u0001\u0000\u0000\u0000\u001a\u00f0"+
		"\u0001\u0000\u0000\u0000\u001c\u00f3\u0001\u0000\u0000\u0000\u001e\u00f7"+
		"\u0001\u0000\u0000\u0000 \u00ff\u0001\u0000\u0000\u0000\"\u0110\u0001"+
		"\u0000\u0000\u0000$\u0114\u0001\u0000\u0000\u0000&\u0121\u0001\u0000\u0000"+
		"\u0000(\u0123\u0001\u0000\u0000\u0000*\u012c\u0001\u0000\u0000\u0000,"+
		"\u012e\u0001\u0000\u0000\u0000.\u0140\u0001\u0000\u0000\u00000\u0142\u0001"+
		"\u0000\u0000\u00002\u014b\u0001\u0000\u0000\u00004\u0151\u0001\u0000\u0000"+
		"\u00006\u015d\u0001\u0000\u0000\u00008\u0168\u0001\u0000\u0000\u0000:"+
		"\u0184\u0001\u0000\u0000\u0000<\u0197\u0001\u0000\u0000\u0000>\u019c\u0001"+
		"\u0000\u0000\u0000@\u01a0\u0001\u0000\u0000\u0000B\u01b1\u0001\u0000\u0000"+
		"\u0000D\u01b3\u0001\u0000\u0000\u0000F\u01b8\u0001\u0000\u0000\u0000H"+
		"\u01be\u0001\u0000\u0000\u0000J\u01c6\u0001\u0000\u0000\u0000L\u01ce\u0001"+
		"\u0000\u0000\u0000N\u01d9\u0001\u0000\u0000\u0000P\u01e4\u0001\u0000\u0000"+
		"\u0000R\u01ef\u0001\u0000\u0000\u0000T\u01fa\u0001\u0000\u0000\u0000V"+
		"\u0224\u0001\u0000\u0000\u0000X\u0226\u0001\u0000\u0000\u0000Z\u022b\u0001"+
		"\u0000\u0000\u0000\\]\u0003\u0002\u0001\u0000]^\u0005\u0000\u0000\u0001"+
		"^\u0001\u0001\u0000\u0000\u0000_`\u0005\u0001\u0000\u0000`a\u0005\u0002"+
		"\u0000\u0000ab\u0005\u001b\u0000\u0000bc\u0005\u001c\u0000\u0000cj\u0005"+
		"\u0019\u0000\u0000df\u0003\u0004\u0002\u0000eg\u0005\"\u0000\u0000fe\u0001"+
		"\u0000\u0000\u0000fg\u0001\u0000\u0000\u0000gi\u0001\u0000\u0000\u0000"+
		"hd\u0001\u0000\u0000\u0000il\u0001\u0000\u0000\u0000jh\u0001\u0000\u0000"+
		"\u0000jk\u0001\u0000\u0000\u0000km\u0001\u0000\u0000\u0000lj\u0001\u0000"+
		"\u0000\u0000mn\u0005\u001a\u0000\u0000n\u0003\u0001\u0000\u0000\u0000"+
		"o\u0081\u0003@ \u0000p\u0081\u0003B!\u0000q\u0081\u0003D\"\u0000r\u0081"+
		"\u0003F#\u0000s\u0081\u0003>\u001f\u0000t\u0081\u00038\u001c\u0000u\u0081"+
		"\u00030\u0018\u0000v\u0081\u0003&\u0013\u0000w\u0081\u0003.\u0017\u0000"+
		"x\u0081\u0003 \u0010\u0000y\u0081\u0003\"\u0011\u0000z\u0081\u0003\u0018"+
		"\f\u0000{\u0081\u0003\u001c\u000e\u0000|\u0081\u0003\u0010\b\u0000}\u0081"+
		"\u0003\u000e\u0007\u0000~\u0081\u0005\u000e\u0000\u0000\u007f\u0081\u0005"+
		"\r\u0000\u0000\u0080o\u0001\u0000\u0000\u0000\u0080p\u0001\u0000\u0000"+
		"\u0000\u0080q\u0001\u0000\u0000\u0000\u0080r\u0001\u0000\u0000\u0000\u0080"+
		"s\u0001\u0000\u0000\u0000\u0080t\u0001\u0000\u0000\u0000\u0080u\u0001"+
		"\u0000\u0000\u0000\u0080v\u0001\u0000\u0000\u0000\u0080w\u0001\u0000\u0000"+
		"\u0000\u0080x\u0001\u0000\u0000\u0000\u0080y\u0001\u0000\u0000\u0000\u0080"+
		"z\u0001\u0000\u0000\u0000\u0080{\u0001\u0000\u0000\u0000\u0080|\u0001"+
		"\u0000\u0000\u0000\u0080}\u0001\u0000\u0000\u0000\u0080~\u0001\u0000\u0000"+
		"\u0000\u0080\u007f\u0001\u0000\u0000\u0000\u0081\u0005\u0001\u0000\u0000"+
		"\u0000\u0082\u0083\u0005\u0010\u0000\u0000\u0083\u0084\u0005\u001b\u0000"+
		"\u0000\u0084\u0085\u0003L&\u0000\u0085\u0086\u0005\u001c\u0000\u0000\u0086"+
		"\u0007\u0001\u0000\u0000\u0000\u0087\u0088\u0005\u0011\u0000\u0000\u0088"+
		"\u0089\u0005\u001b\u0000\u0000\u0089\u008a\u0005\u001c\u0000\u0000\u008a"+
		"\t\u0001\u0000\u0000\u0000\u008b\u008c\u0005\u0012\u0000\u0000\u008c\u008d"+
		"\u0005\u001b\u0000\u0000\u008d\u008e\u0003L&\u0000\u008e\u008f\u0005\u001f"+
		"\u0000\u0000\u008f\u0090\u0003L&\u0000\u0090\u0091\u0005\u001f\u0000\u0000"+
		"\u0091\u0092\u0003L&\u0000\u0092\u0093\u0005\u001c\u0000\u0000\u0093\u000b"+
		"\u0001\u0000\u0000\u0000\u0094\u0095\u0005\u0013\u0000\u0000\u0095\u0096"+
		"\u0005\u001b\u0000\u0000\u0096\u0097\u00052\u0000\u0000\u0097\u0098\u0005"+
		"\u001c\u0000\u0000\u0098\r\u0001\u0000\u0000\u0000\u0099\u009a\u0005\u000f"+
		"\u0000\u0000\u009a\u009b\u0003H$\u0000\u009b\u000f\u0001\u0000\u0000\u0000"+
		"\u009c\u009d\u0005\u0001\u0000\u0000\u009d\u009e\u00052\u0000\u0000\u009e"+
		"\u00a0\u0005\u001b\u0000\u0000\u009f\u00a1\u0003\u0014\n\u0000\u00a0\u009f"+
		"\u0001\u0000\u0000\u0000\u00a0\u00a1\u0001\u0000\u0000\u0000\u00a1\u00a2"+
		"\u0001\u0000\u0000\u0000\u00a2\u00a3\u0005\u001c\u0000\u0000\u00a3\u00a4"+
		"\u0005\u001b\u0000\u0000\u00a4\u00a5\u0003\u0012\t\u0000\u00a5\u00a6\u0005"+
		"\u001c\u0000\u0000\u00a6\u00a7\u0003\u0016\u000b\u0000\u00a7\u00b3\u0001"+
		"\u0000\u0000\u0000\u00a8\u00a9\u0005\u0001\u0000\u0000\u00a9\u00aa\u0005"+
		"2\u0000\u0000\u00aa\u00ac\u0005\u001b\u0000\u0000\u00ab\u00ad\u0003\u0014"+
		"\n\u0000\u00ac\u00ab\u0001\u0000\u0000\u0000\u00ac\u00ad\u0001\u0000\u0000"+
		"\u0000\u00ad\u00ae\u0001\u0000\u0000\u0000\u00ae\u00af\u0005\u001c\u0000"+
		"\u0000\u00af\u00b0\u0003X,\u0000\u00b0\u00b1\u0003\u0016\u000b\u0000\u00b1"+
		"\u00b3\u0001\u0000\u0000\u0000\u00b2\u009c\u0001\u0000\u0000\u0000\u00b2"+
		"\u00a8\u0001\u0000\u0000\u0000\u00b3\u0011\u0001\u0000\u0000\u0000\u00b4"+
		"\u00b9\u0003X,\u0000\u00b5\u00b6\u0005\u001f\u0000\u0000\u00b6\u00b8\u0003"+
		"X,\u0000\u00b7\u00b5\u0001\u0000\u0000\u0000\u00b8\u00bb\u0001\u0000\u0000"+
		"\u0000\u00b9\u00b7\u0001\u0000\u0000\u0000\u00b9\u00ba\u0001\u0000\u0000"+
		"\u0000\u00ba\u0013\u0001\u0000\u0000\u0000\u00bb\u00b9\u0001\u0000\u0000"+
		"\u0000\u00bc\u00bd\u00052\u0000\u0000\u00bd\u00c3\u0003X,\u0000\u00be"+
		"\u00bf\u0005\u001f\u0000\u0000\u00bf\u00c0\u00052\u0000\u0000\u00c0\u00c2"+
		"\u0003X,\u0000\u00c1\u00be\u0001\u0000\u0000\u0000\u00c2\u00c5\u0001\u0000"+
		"\u0000\u0000\u00c3\u00c1\u0001\u0000\u0000\u0000\u00c3\u00c4\u0001\u0000"+
		"\u0000\u0000\u00c4\u0015\u0001\u0000\u0000\u0000\u00c5\u00c3\u0001\u0000"+
		"\u0000\u0000\u00c6\u00cd\u0005\u0019\u0000\u0000\u00c7\u00c9\u0003\u0004"+
		"\u0002\u0000\u00c8\u00ca\u0005\"\u0000\u0000\u00c9\u00c8\u0001\u0000\u0000"+
		"\u0000\u00c9\u00ca\u0001\u0000\u0000\u0000\u00ca\u00cc\u0001\u0000\u0000"+
		"\u0000\u00cb\u00c7\u0001\u0000\u0000\u0000\u00cc\u00cf\u0001\u0000\u0000"+
		"\u0000\u00cd\u00cb\u0001\u0000\u0000\u0000\u00cd\u00ce\u0001\u0000\u0000"+
		"\u0000\u00ce\u00d0\u0001\u0000\u0000\u0000\u00cf\u00cd\u0001\u0000\u0000"+
		"\u0000\u00d0\u00d1\u0005\u001a\u0000\u0000\u00d1\u0017\u0001\u0000\u0000"+
		"\u0000\u00d2\u00d3\u0005\u0003\u0000\u0000\u00d3\u00d4\u00052\u0000\u0000"+
		"\u00d4\u00d5\u0005\u001d\u0000\u0000\u00d5\u00d6\u0003L&\u0000\u00d6\u00d7"+
		"\u0005\u001e\u0000\u0000\u00d7\u00d8\u0005\u001d\u0000\u0000\u00d8\u00d9"+
		"\u0003L&\u0000\u00d9\u00da\u0005\u001e\u0000\u0000\u00da\u00e7\u0003X"+
		",\u0000\u00db\u00dc\u0005 \u0000\u0000\u00dc\u00dd\u0005\u001d\u0000\u0000"+
		"\u00dd\u00de\u0003L&\u0000\u00de\u00df\u0005\u001e\u0000\u0000\u00df\u00e0"+
		"\u0005\u001d\u0000\u0000\u00e0\u00e1\u0003L&\u0000\u00e1\u00e2\u0005\u001e"+
		"\u0000\u0000\u00e2\u00e3\u0003X,\u0000\u00e3\u00e4\u0005\u0019\u0000\u0000"+
		"\u00e4\u00e5\u0003\u001a\r\u0000\u00e5\u00e6\u0005\u001a\u0000\u0000\u00e6"+
		"\u00e8\u0001\u0000\u0000\u0000\u00e7\u00db\u0001\u0000\u0000\u0000\u00e7"+
		"\u00e8\u0001\u0000\u0000\u0000\u00e8\u0019\u0001\u0000\u0000\u0000\u00e9"+
		"\u00ea\u0005\u0019\u0000\u0000\u00ea\u00eb\u0003H$\u0000\u00eb\u00ec\u0005"+
		"\u001a\u0000\u0000\u00ec\u00ed\u0005\u001f\u0000\u0000\u00ed\u00ef\u0001"+
		"\u0000\u0000\u0000\u00ee\u00e9\u0001\u0000\u0000\u0000\u00ef\u00f2\u0001"+
		"\u0000\u0000\u0000\u00f0\u00ee\u0001\u0000\u0000\u0000\u00f0\u00f1\u0001"+
		"\u0000\u0000\u0000\u00f1\u001b\u0001\u0000\u0000\u0000\u00f2\u00f0\u0001"+
		"\u0000\u0000\u0000\u00f3\u00f4\u0003\u001e\u000f\u0000\u00f4\u00f5\u0005"+
		" \u0000\u0000\u00f5\u00f6\u0003L&\u0000\u00f6\u001d\u0001\u0000\u0000"+
		"\u0000\u00f7\u00f8\u00052\u0000\u0000\u00f8\u00f9\u0005\u001d\u0000\u0000"+
		"\u00f9\u00fa\u0003L&\u0000\u00fa\u00fb\u0005\u001e\u0000\u0000\u00fb\u00fc"+
		"\u0005\u001d\u0000\u0000\u00fc\u00fd\u0003L&\u0000\u00fd\u00fe\u0005\u001e"+
		"\u0000\u0000\u00fe\u001f\u0001\u0000\u0000\u0000\u00ff\u0100\u0005\u0003"+
		"\u0000\u0000\u0100\u0101\u00052\u0000\u0000\u0101\u0102\u0005\u001d\u0000"+
		"\u0000\u0102\u0103\u0003L&\u0000\u0103\u0104\u0005\u001e\u0000\u0000\u0104"+
		"\u010e\u0003X,\u0000\u0105\u0106\u0005 \u0000\u0000\u0106\u0107\u0005"+
		"\u001d\u0000\u0000\u0107\u0108\u0003L&\u0000\u0108\u0109\u0005\u001e\u0000"+
		"\u0000\u0109\u010a\u0003X,\u0000\u010a\u010b\u0005\u0019\u0000\u0000\u010b"+
		"\u010c\u0003H$\u0000\u010c\u010d\u0005\u001a\u0000\u0000\u010d\u010f\u0001"+
		"\u0000\u0000\u0000\u010e\u0105\u0001\u0000\u0000\u0000\u010e\u010f\u0001"+
		"\u0000\u0000\u0000\u010f!\u0001\u0000\u0000\u0000\u0110\u0111\u0003$\u0012"+
		"\u0000\u0111\u0112\u0005 \u0000\u0000\u0112\u0113\u0003L&\u0000\u0113"+
		"#\u0001\u0000\u0000\u0000\u0114\u0115\u00052\u0000\u0000\u0115\u0116\u0005"+
		"\u001d\u0000\u0000\u0116\u0117\u0003L&\u0000\u0117\u0118\u0005\u001e\u0000"+
		"\u0000\u0118%\u0001\u0000\u0000\u0000\u0119\u011a\u0005\f\u0000\u0000"+
		"\u011a\u0122\u0003(\u0014\u0000\u011b\u011c\u0005\f\u0000\u0000\u011c"+
		"\u011d\u0003L&\u0000\u011d\u011e\u0003,\u0016\u0000\u011e\u0122\u0001"+
		"\u0000\u0000\u0000\u011f\u0120\u0005\f\u0000\u0000\u0120\u0122\u0003,"+
		"\u0016\u0000\u0121\u0119\u0001\u0000\u0000\u0000\u0121\u011b\u0001\u0000"+
		"\u0000\u0000\u0121\u011f\u0001\u0000\u0000\u0000\u0122\'\u0001\u0000\u0000"+
		"\u0000\u0123\u0124\u0003D\"\u0000\u0124\u0125\u0005\"\u0000\u0000\u0125"+
		"\u0126\u0003L&\u0000\u0126\u0127\u0005\"\u0000\u0000\u0127\u0128\u0003"+
		"*\u0015\u0000\u0128\u0129\u0003,\u0016\u0000\u0129)\u0001\u0000\u0000"+
		"\u0000\u012a\u012d\u0003.\u0017\u0000\u012b\u012d\u0003>\u001f\u0000\u012c"+
		"\u012a\u0001\u0000\u0000\u0000\u012c\u012b\u0001\u0000\u0000\u0000\u012d"+
		"+\u0001\u0000\u0000\u0000\u012e\u0135\u0005\u0019\u0000\u0000\u012f\u0131"+
		"\u0003\u0004\u0002\u0000\u0130\u0132\u0005\"\u0000\u0000\u0131\u0130\u0001"+
		"\u0000\u0000\u0000\u0131\u0132\u0001\u0000\u0000\u0000\u0132\u0134\u0001"+
		"\u0000\u0000\u0000\u0133\u012f\u0001\u0000\u0000\u0000\u0134\u0137\u0001"+
		"\u0000\u0000\u0000\u0135\u0133\u0001\u0000\u0000\u0000\u0135\u0136\u0001"+
		"\u0000\u0000\u0000\u0136\u0138\u0001\u0000\u0000\u0000\u0137\u0135\u0001"+
		"\u0000\u0000\u0000\u0138\u0139\u0005\u001a\u0000\u0000\u0139-\u0001\u0000"+
		"\u0000\u0000\u013a\u013b\u00052\u0000\u0000\u013b\u013c\u0005#\u0000\u0000"+
		"\u013c\u0141\u0005#\u0000\u0000\u013d\u013e\u00052\u0000\u0000\u013e\u013f"+
		"\u0005$\u0000\u0000\u013f\u0141\u0005$\u0000\u0000\u0140\u013a\u0001\u0000"+
		"\u0000\u0000\u0140\u013d\u0001\u0000\u0000\u0000\u0141/\u0001\u0000\u0000"+
		"\u0000\u0142\u0143\u0005\t\u0000\u0000\u0143\u0144\u0003L&\u0000\u0144"+
		"\u0145\u0005\u0019\u0000\u0000\u0145\u0146\u00032\u0019\u0000\u0146\u0147"+
		"\u0005\u001a\u0000\u0000\u01471\u0001\u0000\u0000\u0000\u0148\u014a\u0003"+
		"4\u001a\u0000\u0149\u0148\u0001\u0000\u0000\u0000\u014a\u014d\u0001\u0000"+
		"\u0000\u0000\u014b\u0149\u0001\u0000\u0000\u0000\u014b\u014c\u0001\u0000"+
		"\u0000\u0000\u014c\u014f\u0001\u0000\u0000\u0000\u014d\u014b\u0001\u0000"+
		"\u0000\u0000\u014e\u0150\u00036\u001b\u0000\u014f\u014e\u0001\u0000\u0000"+
		"\u0000\u014f\u0150\u0001\u0000\u0000\u0000\u01503\u0001\u0000\u0000\u0000"+
		"\u0151\u0152\u0005\n\u0000\u0000\u0152\u0153\u0003H$\u0000\u0153\u015a"+
		"\u0005!\u0000\u0000\u0154\u0156\u0003\u0004\u0002\u0000\u0155\u0157\u0005"+
		"\"\u0000\u0000\u0156\u0155\u0001\u0000\u0000\u0000\u0156\u0157\u0001\u0000"+
		"\u0000\u0000\u0157\u0159\u0001\u0000\u0000\u0000\u0158\u0154\u0001\u0000"+
		"\u0000\u0000\u0159\u015c\u0001\u0000\u0000\u0000\u015a\u0158\u0001\u0000"+
		"\u0000\u0000\u015a\u015b\u0001\u0000\u0000\u0000\u015b5\u0001\u0000\u0000"+
		"\u0000\u015c\u015a\u0001\u0000\u0000\u0000\u015d\u015e\u0005\u000b\u0000"+
		"\u0000\u015e\u0165\u0005!\u0000\u0000\u015f\u0161\u0003\u0004\u0002\u0000"+
		"\u0160\u0162\u0005\"\u0000\u0000\u0161\u0160\u0001\u0000\u0000\u0000\u0161"+
		"\u0162\u0001\u0000\u0000\u0000\u0162\u0164\u0001\u0000\u0000\u0000\u0163"+
		"\u015f\u0001\u0000\u0000\u0000\u0164\u0167\u0001\u0000\u0000\u0000\u0165"+
		"\u0163\u0001\u0000\u0000\u0000\u0165\u0166\u0001\u0000\u0000\u0000\u0166"+
		"7\u0001\u0000\u0000\u0000\u0167\u0165\u0001\u0000\u0000\u0000\u0168\u0169"+
		"\u0005\u0007\u0000\u0000\u0169\u016a\u0003L&\u0000\u016a\u0171\u0005\u0019"+
		"\u0000\u0000\u016b\u016d\u0003\u0004\u0002\u0000\u016c\u016e\u0005\"\u0000"+
		"\u0000\u016d\u016c\u0001\u0000\u0000\u0000\u016d\u016e\u0001\u0000\u0000"+
		"\u0000\u016e\u0170\u0001\u0000\u0000\u0000\u016f\u016b\u0001\u0000\u0000"+
		"\u0000\u0170\u0173\u0001\u0000\u0000\u0000\u0171\u016f\u0001\u0000\u0000"+
		"\u0000\u0171\u0172\u0001\u0000\u0000\u0000\u0172\u0174\u0001\u0000\u0000"+
		"\u0000\u0173\u0171\u0001\u0000\u0000\u0000\u0174\u0175\u0005\u001a\u0000"+
		"\u0000\u0175\u0176\u0003<\u001e\u0000\u01769\u0001\u0000\u0000\u0000\u0177"+
		"\u0178\u0005\b\u0000\u0000\u0178\u017f\u0005\u0019\u0000\u0000\u0179\u017b"+
		"\u0003\u0004\u0002\u0000\u017a\u017c\u0005\"\u0000\u0000\u017b\u017a\u0001"+
		"\u0000\u0000\u0000\u017b\u017c\u0001\u0000\u0000\u0000\u017c\u017e\u0001"+
		"\u0000\u0000\u0000\u017d\u0179\u0001\u0000\u0000\u0000\u017e\u0181\u0001"+
		"\u0000\u0000\u0000\u017f\u017d\u0001\u0000\u0000\u0000\u017f\u0180\u0001"+
		"\u0000\u0000\u0000\u0180\u0182\u0001\u0000\u0000\u0000\u0181\u017f\u0001"+
		"\u0000\u0000\u0000\u0182\u0185\u0005\u001a\u0000\u0000\u0183\u0185\u0001"+
		"\u0000\u0000\u0000\u0184\u0177\u0001\u0000\u0000\u0000\u0184\u0183\u0001"+
		"\u0000\u0000\u0000\u0185;\u0001\u0000\u0000\u0000\u0186\u0187\u0005\b"+
		"\u0000\u0000\u0187\u0188\u0005\u0007\u0000\u0000\u0188\u0189\u0003L&\u0000"+
		"\u0189\u0190\u0005\u0019\u0000\u0000\u018a\u018c\u0003\u0004\u0002\u0000"+
		"\u018b\u018d\u0005\"\u0000\u0000\u018c\u018b\u0001\u0000\u0000\u0000\u018c"+
		"\u018d\u0001\u0000\u0000\u0000\u018d\u018f\u0001\u0000\u0000\u0000\u018e"+
		"\u018a\u0001\u0000\u0000\u0000\u018f\u0192\u0001\u0000\u0000\u0000\u0190"+
		"\u018e\u0001\u0000\u0000\u0000\u0190\u0191\u0001\u0000\u0000\u0000\u0191"+
		"\u0193\u0001\u0000\u0000\u0000\u0192\u0190\u0001\u0000\u0000\u0000\u0193"+
		"\u0194\u0005\u001a\u0000\u0000\u0194\u0196\u0001\u0000\u0000\u0000\u0195"+
		"\u0186\u0001\u0000\u0000\u0000\u0196\u0199\u0001\u0000\u0000\u0000\u0197"+
		"\u0195\u0001\u0000\u0000\u0000\u0197\u0198\u0001\u0000\u0000\u0000\u0198"+
		"\u019a\u0001\u0000\u0000\u0000\u0199\u0197\u0001\u0000\u0000\u0000\u019a"+
		"\u019b\u0003:\u001d\u0000\u019b=\u0001\u0000\u0000\u0000\u019c\u019d\u0005"+
		"2\u0000\u0000\u019d\u019e\u0003Z-\u0000\u019e\u019f\u0003P(\u0000\u019f"+
		"?\u0001\u0000\u0000\u0000\u01a0\u01a1\u0005\u0004\u0000\u0000\u01a1\u01a2"+
		"\u0005(\u0000\u0000\u01a2\u01a3\u0005\u0005\u0000\u0000\u01a3\u01a4\u0005"+
		"\u001b\u0000\u0000\u01a4\u01a5\u0003H$\u0000\u01a5\u01a6\u0005\u001c\u0000"+
		"\u0000\u01a6A\u0001\u0000\u0000\u0000\u01a7\u01a8\u0005\u0003\u0000\u0000"+
		"\u01a8\u01a9\u0003J%\u0000\u01a9\u01aa\u0003X,\u0000\u01aa\u01b2\u0001"+
		"\u0000\u0000\u0000\u01ab\u01ac\u0005\u0003\u0000\u0000\u01ac\u01ad\u0003"+
		"J%\u0000\u01ad\u01ae\u0003X,\u0000\u01ae\u01af\u0005 \u0000\u0000\u01af"+
		"\u01b0\u0003H$\u0000\u01b0\u01b2\u0001\u0000\u0000\u0000\u01b1\u01a7\u0001"+
		"\u0000\u0000\u0000\u01b1\u01ab\u0001\u0000\u0000\u0000\u01b2C\u0001\u0000"+
		"\u0000\u0000\u01b3\u01b4\u0003J%\u0000\u01b4\u01b5\u0005!\u0000\u0000"+
		"\u01b5\u01b6\u0005 \u0000\u0000\u01b6\u01b7\u0003H$\u0000\u01b7E\u0001"+
		"\u0000\u0000\u0000\u01b8\u01b9\u0005\u0006\u0000\u0000\u01b9\u01ba\u0005"+
		"2\u0000\u0000\u01ba\u01bb\u0003X,\u0000\u01bb\u01bc\u0005 \u0000\u0000"+
		"\u01bc\u01bd\u0003P(\u0000\u01bdG\u0001\u0000\u0000\u0000\u01be\u01c3"+
		"\u0003L&\u0000\u01bf\u01c0\u0005\u001f\u0000\u0000\u01c0\u01c2\u0003L"+
		"&\u0000\u01c1\u01bf\u0001\u0000\u0000\u0000\u01c2\u01c5\u0001\u0000\u0000"+
		"\u0000\u01c3\u01c1\u0001\u0000\u0000\u0000\u01c3\u01c4\u0001\u0000\u0000"+
		"\u0000\u01c4I\u0001\u0000\u0000\u0000\u01c5\u01c3\u0001\u0000\u0000\u0000"+
		"\u01c6\u01cb\u00052\u0000\u0000\u01c7\u01c8\u0005\u001f\u0000\u0000\u01c8"+
		"\u01ca\u00052\u0000\u0000\u01c9\u01c7\u0001\u0000\u0000\u0000\u01ca\u01cd"+
		"\u0001\u0000\u0000\u0000\u01cb\u01c9\u0001\u0000\u0000\u0000\u01cb\u01cc"+
		"\u0001\u0000\u0000\u0000\u01ccK\u0001\u0000\u0000\u0000\u01cd\u01cb\u0001"+
		"\u0000\u0000\u0000\u01ce\u01cf\u0006&\uffff\uffff\u0000\u01cf\u01d0\u0003"+
		"N\'\u0000\u01d0\u01d6\u0001\u0000\u0000\u0000\u01d1\u01d2\n\u0002\u0000"+
		"\u0000\u01d2\u01d3\u0007\u0000\u0000\u0000\u01d3\u01d5\u0003N\'\u0000"+
		"\u01d4\u01d1\u0001\u0000\u0000\u0000\u01d5\u01d8\u0001\u0000\u0000\u0000"+
		"\u01d6\u01d4\u0001\u0000\u0000\u0000\u01d6\u01d7\u0001\u0000\u0000\u0000"+
		"\u01d7M\u0001\u0000\u0000\u0000\u01d8\u01d6\u0001\u0000\u0000\u0000\u01d9"+
		"\u01da\u0006\'\uffff\uffff\u0000\u01da\u01db\u0003P(\u0000\u01db\u01e1"+
		"\u0001\u0000\u0000\u0000\u01dc\u01dd\n\u0002\u0000\u0000\u01dd\u01de\u0007"+
		"\u0001\u0000\u0000\u01de\u01e0\u0003P(\u0000\u01df\u01dc\u0001\u0000\u0000"+
		"\u0000\u01e0\u01e3\u0001\u0000\u0000\u0000\u01e1\u01df\u0001\u0000\u0000"+
		"\u0000\u01e1\u01e2\u0001\u0000\u0000\u0000\u01e2O\u0001\u0000\u0000\u0000"+
		"\u01e3\u01e1\u0001\u0000\u0000\u0000\u01e4\u01e5\u0006(\uffff\uffff\u0000"+
		"\u01e5\u01e6\u0003R)\u0000\u01e6\u01ec\u0001\u0000\u0000\u0000\u01e7\u01e8"+
		"\n\u0002\u0000\u0000\u01e8\u01e9\u0007\u0002\u0000\u0000\u01e9\u01eb\u0003"+
		"R)\u0000\u01ea\u01e7\u0001\u0000\u0000\u0000\u01eb\u01ee\u0001\u0000\u0000"+
		"\u0000\u01ec\u01ea\u0001\u0000\u0000\u0000\u01ec\u01ed\u0001\u0000\u0000"+
		"\u0000\u01edQ\u0001\u0000\u0000\u0000\u01ee\u01ec\u0001\u0000\u0000\u0000"+
		"\u01ef\u01f0\u0006)\uffff\uffff\u0000\u01f0\u01f1\u0003T*\u0000\u01f1"+
		"\u01f7\u0001\u0000\u0000\u0000\u01f2\u01f3\n\u0002\u0000\u0000\u01f3\u01f4"+
		"\u0007\u0003\u0000\u0000\u01f4\u01f6\u0003T*\u0000\u01f5\u01f2\u0001\u0000"+
		"\u0000\u0000\u01f6\u01f9\u0001\u0000\u0000\u0000\u01f7\u01f5\u0001\u0000"+
		"\u0000\u0000\u01f7\u01f8\u0001\u0000\u0000\u0000\u01f8S\u0001\u0000\u0000"+
		"\u0000\u01f9\u01f7\u0001\u0000\u0000\u0000\u01fa\u01fb\u0006*\uffff\uffff"+
		"\u0000\u01fb\u01fc\u0003V+\u0000\u01fc\u0202\u0001\u0000\u0000\u0000\u01fd"+
		"\u01fe\n\u0002\u0000\u0000\u01fe\u01ff\u0005\'\u0000\u0000\u01ff\u0201"+
		"\u0003V+\u0000\u0200\u01fd\u0001\u0000\u0000\u0000\u0201\u0204\u0001\u0000"+
		"\u0000\u0000\u0202\u0200\u0001\u0000\u0000\u0000\u0202\u0203\u0001\u0000"+
		"\u0000\u0000\u0203U\u0001\u0000\u0000\u0000\u0204\u0202\u0001\u0000\u0000"+
		"\u0000\u0205\u0206\u0005\u001b\u0000\u0000\u0206\u0207\u0003L&\u0000\u0207"+
		"\u0208\u0005\u001c\u0000\u0000\u0208\u0225\u0001\u0000\u0000\u0000\u0209"+
		"\u020a\u0005$\u0000\u0000\u020a\u0225\u0003V+\u0000\u020b\u0225\u0005"+
		"4\u0000\u0000\u020c\u0225\u00053\u0000\u0000\u020d\u0225\u00055\u0000"+
		"\u0000\u020e\u0225\u00057\u0000\u0000\u020f\u0225\u00056\u0000\u0000\u0210"+
		"\u0225\u00058\u0000\u0000\u0211\u0212\u0005)\u0000\u0000\u0212\u0225\u0005"+
		"2\u0000\u0000\u0213\u0214\u0005)\u0000\u0000\u0214\u0225\u0003$\u0012"+
		"\u0000\u0215\u0216\u0005)\u0000\u0000\u0216\u0225\u0003\u001e\u000f\u0000"+
		"\u0217\u0218\u0005%\u0000\u0000\u0218\u0225\u00052\u0000\u0000\u0219\u021a"+
		"\u0005%\u0000\u0000\u021a\u0225\u0003$\u0012\u0000\u021b\u021c\u0005%"+
		"\u0000\u0000\u021c\u0225\u0003\u001e\u000f\u0000\u021d\u0225\u00052\u0000"+
		"\u0000\u021e\u0225\u0003$\u0012\u0000\u021f\u0225\u0003\u001e\u000f\u0000"+
		"\u0220\u0225\u0003\b\u0004\u0000\u0221\u0225\u0003\u0006\u0003\u0000\u0222"+
		"\u0225\u0003\n\u0005\u0000\u0223\u0225\u0003\f\u0006\u0000\u0224\u0205"+
		"\u0001\u0000\u0000\u0000\u0224\u0209\u0001\u0000\u0000\u0000\u0224\u020b"+
		"\u0001\u0000\u0000\u0000\u0224\u020c\u0001\u0000\u0000\u0000\u0224\u020d"+
		"\u0001\u0000\u0000\u0000\u0224\u020e\u0001\u0000\u0000\u0000\u0224\u020f"+
		"\u0001\u0000\u0000\u0000\u0224\u0210\u0001\u0000\u0000\u0000\u0224\u0211"+
		"\u0001\u0000\u0000\u0000\u0224\u0213\u0001\u0000\u0000\u0000\u0224\u0215"+
		"\u0001\u0000\u0000\u0000\u0224\u0217\u0001\u0000\u0000\u0000\u0224\u0219"+
		"\u0001\u0000\u0000\u0000\u0224\u021b\u0001\u0000\u0000\u0000\u0224\u021d"+
		"\u0001\u0000\u0000\u0000\u0224\u021e\u0001\u0000\u0000\u0000\u0224\u021f"+
		"\u0001\u0000\u0000\u0000\u0224\u0220\u0001\u0000\u0000\u0000\u0224\u0221"+
		"\u0001\u0000\u0000\u0000\u0224\u0222\u0001\u0000\u0000\u0000\u0224\u0223"+
		"\u0001\u0000\u0000\u0000\u0225W\u0001\u0000\u0000\u0000\u0226\u0227\u0007"+
		"\u0004\u0000\u0000\u0227Y\u0001\u0000\u0000\u0000\u0228\u022c\u0005 \u0000"+
		"\u0000\u0229\u022a\u0007\u0005\u0000\u0000\u022a\u022c\u0005 \u0000\u0000"+
		"\u022b\u0228\u0001\u0000\u0000\u0000\u022b\u0229\u0001\u0000\u0000\u0000"+
		"\u022c[\u0001\u0000\u0000\u0000*fj\u0080\u00a0\u00ac\u00b2\u00b9\u00c3"+
		"\u00c9\u00cd\u00e7\u00f0\u010e\u0121\u012c\u0131\u0135\u0140\u014b\u014f"+
		"\u0156\u015a\u0161\u0165\u016d\u0171\u017b\u017f\u0184\u018c\u0190\u0197"+
		"\u01b1\u01c3\u01cb\u01d6\u01e1\u01ec\u01f7\u0202\u0224\u022b";
	public static final ATN _ATN =
		new ATNDeserializer().deserialize(_serializedATN.toCharArray());
	static {
		_decisionToDFA = new DFA[_ATN.getNumberOfDecisions()];
		for (int i = 0; i < _ATN.getNumberOfDecisions(); i++) {
			_decisionToDFA[i] = new DFA(_ATN.getDecisionState(i), i);
		}
	}
}
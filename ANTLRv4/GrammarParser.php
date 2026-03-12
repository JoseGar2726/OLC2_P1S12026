<?php

/*
 * Generated from Grammar.g4 by ANTLR 4.13.1
 */

namespace {
	use Antlr\Antlr4\Runtime\Atn\ATN;
	use Antlr\Antlr4\Runtime\Atn\ATNDeserializer;
	use Antlr\Antlr4\Runtime\Atn\ParserATNSimulator;
	use Antlr\Antlr4\Runtime\Dfa\DFA;
	use Antlr\Antlr4\Runtime\Error\Exceptions\FailedPredicateException;
	use Antlr\Antlr4\Runtime\Error\Exceptions\NoViableAltException;
	use Antlr\Antlr4\Runtime\PredictionContexts\PredictionContextCache;
	use Antlr\Antlr4\Runtime\Error\Exceptions\RecognitionException;
	use Antlr\Antlr4\Runtime\RuleContext;
	use Antlr\Antlr4\Runtime\Token;
	use Antlr\Antlr4\Runtime\TokenStream;
	use Antlr\Antlr4\Runtime\Vocabulary;
	use Antlr\Antlr4\Runtime\VocabularyImpl;
	use Antlr\Antlr4\Runtime\RuntimeMetaData;
	use Antlr\Antlr4\Runtime\Parser;

	final class GrammarParser extends Parser
	{
		public const FUNC = 1, MAIN = 2, VAR = 3, FMT = 4, PRINTLN = 5, CONST = 6, 
               IF = 7, ELSE = 8, SWITCH = 9, CASE = 10, DEFAULT = 11, FOR = 12, 
               BREAK = 13, CONTINUE = 14, RETURN = 15, LEN = 16, NOW = 17, 
               SUBSTR = 18, TYPEOF = 19, INT_T = 20, FLOAT_T = 21, BOOL_T = 22, 
               RUNE_T = 23, STRING_T = 24, LBRACE = 25, RBRACE = 26, LPAREN = 27, 
               RPAREN = 28, LCOR = 29, RCOR = 30, COMMA = 31, ASSIGN = 32, 
               COLON = 33, SEMICOLON = 34, PLUS = 35, MINUS = 36, NEG = 37, 
               MULT = 38, DIV = 39, MOD = 40, DOT = 41, REF = 42, ANDO = 43, 
               ORO = 44, LE = 45, GE = 46, EQUAL = 47, NEQUAL = 48, LESS = 49, 
               GREATER = 50, BOOL = 51, NIL = 52, ENTERO = 53, FLOAT = 54, 
               STR = 55, RUNE = 56, IDENTIFICADOR = 57, COMENTARIO_LINEA = 58, 
               COMENTARIO_BLOQUE = 59, WS = 60, ERROR = 61;

		public const RULE_programa = 0, RULE_topLevel = 1, RULE_mainFuncion = 2, 
               RULE_i = 3, RULE_funcLen = 4, RULE_funcNow = 5, RULE_funcSub = 6, 
               RULE_funcType = 7, RULE_llamadaFuncion = 8, RULE_argumento = 9, 
               RULE_retornar = 10, RULE_funcion = 11, RULE_listaRetorno = 12, 
               RULE_listaParametros = 13, RULE_parametro = 14, RULE_accesoArreglo = 15, 
               RULE_listaValores = 16, RULE_sentenciaFor = 17, RULE_forClasico = 18, 
               RULE_condFor = 19, RULE_expFor = 20, RULE_sentenciaSwitch = 21, 
               RULE_bloqueSwitch = 22, RULE_bloqueCase = 23, RULE_bloqueDefault = 24, 
               RULE_sentenciaIf = 25, RULE_bloque = 26, RULE_asignacion = 27, 
               RULE_imprimir = 28, RULE_declaracion = 29, RULE_declaracionCorta = 30, 
               RULE_declaracionConst = 31, RULE_listaExpr = 32, RULE_listaId = 33, 
               RULE_logExpr = 34, RULE_relExpr = 35, RULE_expr = 36, RULE_term = 37, 
               RULE_factor = 38, RULE_arrayLiteral = 39, RULE_arrayLiteral2D = 40, 
               RULE_tipos = 41, RULE_tipoArray = 42, RULE_tipoArray2D = 43, 
               RULE_tipoBase = 44, RULE_simboloAsignacion = 45;

		/**
		 * @var array<string>
		 */
		public const RULE_NAMES = [
			'programa', 'topLevel', 'mainFuncion', 'i', 'funcLen', 'funcNow', 'funcSub', 
			'funcType', 'llamadaFuncion', 'argumento', 'retornar', 'funcion', 'listaRetorno', 
			'listaParametros', 'parametro', 'accesoArreglo', 'listaValores', 'sentenciaFor', 
			'forClasico', 'condFor', 'expFor', 'sentenciaSwitch', 'bloqueSwitch', 
			'bloqueCase', 'bloqueDefault', 'sentenciaIf', 'bloque', 'asignacion', 
			'imprimir', 'declaracion', 'declaracionCorta', 'declaracionConst', 'listaExpr', 
			'listaId', 'logExpr', 'relExpr', 'expr', 'term', 'factor', 'arrayLiteral', 
			'arrayLiteral2D', 'tipos', 'tipoArray', 'tipoArray2D', 'tipoBase', 'simboloAsignacion'
		];

		/**
		 * @var array<string|null>
		 */
		private const LITERAL_NAMES = [
		    null, "'func'", "'main'", "'var'", "'fmt'", "'Println'", "'const'", 
		    "'if'", "'else'", "'switch'", "'case'", "'default'", "'for'", "'break'", 
		    "'continue'", "'return'", "'len'", "'now'", "'substr'", "'typeOf'", 
		    null, null, "'bool'", "'rune'", "'string'", "'{'", "'}'", "'('", "')'", 
		    "'['", "']'", "','", "'='", "':'", "';'", "'+'", "'-'", "'!'", "'*'", 
		    "'/'", "'%'", "'.'", "'&'", "'&&'", "'||'", "'<='", "'>='", "'=='", 
		    "'!='", "'<'", "'>'", null, "'nil'"
		];

		/**
		 * @var array<string>
		 */
		private const SYMBOLIC_NAMES = [
		    null, "FUNC", "MAIN", "VAR", "FMT", "PRINTLN", "CONST", "IF", "ELSE", 
		    "SWITCH", "CASE", "DEFAULT", "FOR", "BREAK", "CONTINUE", "RETURN", 
		    "LEN", "NOW", "SUBSTR", "TYPEOF", "INT_T", "FLOAT_T", "BOOL_T", "RUNE_T", 
		    "STRING_T", "LBRACE", "RBRACE", "LPAREN", "RPAREN", "LCOR", "RCOR", 
		    "COMMA", "ASSIGN", "COLON", "SEMICOLON", "PLUS", "MINUS", "NEG", "MULT", 
		    "DIV", "MOD", "DOT", "REF", "ANDO", "ORO", "LE", "GE", "EQUAL", "NEQUAL", 
		    "LESS", "GREATER", "BOOL", "NIL", "ENTERO", "FLOAT", "STR", "RUNE", 
		    "IDENTIFICADOR", "COMENTARIO_LINEA", "COMENTARIO_BLOQUE", "WS", "ERROR"
		];

		private const SERIALIZED_ATN =
			[4, 1, 61, 494, 2, 0, 7, 0, 2, 1, 7, 1, 2, 2, 7, 2, 2, 3, 7, 3, 2, 4, 
		    7, 4, 2, 5, 7, 5, 2, 6, 7, 6, 2, 7, 7, 7, 2, 8, 7, 8, 2, 9, 7, 9, 
		    2, 10, 7, 10, 2, 11, 7, 11, 2, 12, 7, 12, 2, 13, 7, 13, 2, 14, 7, 
		    14, 2, 15, 7, 15, 2, 16, 7, 16, 2, 17, 7, 17, 2, 18, 7, 18, 2, 19, 
		    7, 19, 2, 20, 7, 20, 2, 21, 7, 21, 2, 22, 7, 22, 2, 23, 7, 23, 2, 
		    24, 7, 24, 2, 25, 7, 25, 2, 26, 7, 26, 2, 27, 7, 27, 2, 28, 7, 28, 
		    2, 29, 7, 29, 2, 30, 7, 30, 2, 31, 7, 31, 2, 32, 7, 32, 2, 33, 7, 
		    33, 2, 34, 7, 34, 2, 35, 7, 35, 2, 36, 7, 36, 2, 37, 7, 37, 2, 38, 
		    7, 38, 2, 39, 7, 39, 2, 40, 7, 40, 2, 41, 7, 41, 2, 42, 7, 42, 2, 
		    43, 7, 43, 2, 44, 7, 44, 2, 45, 7, 45, 1, 0, 5, 0, 94, 8, 0, 10, 0, 
		    12, 0, 97, 9, 0, 1, 0, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 3, 1, 105, 8, 
		    1, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 3, 1, 3, 1, 3, 1, 3, 1, 
		    3, 1, 3, 1, 3, 1, 3, 1, 3, 1, 3, 1, 3, 1, 3, 1, 3, 1, 3, 1, 3, 3, 
		    3, 128, 8, 3, 1, 4, 1, 4, 1, 4, 1, 4, 1, 4, 1, 5, 1, 5, 1, 5, 1, 5, 
		    1, 6, 1, 6, 1, 6, 1, 6, 1, 6, 1, 6, 1, 6, 1, 6, 1, 6, 1, 7, 1, 7, 
		    1, 7, 1, 7, 1, 7, 1, 8, 1, 8, 1, 8, 3, 8, 156, 8, 8, 1, 8, 1, 8, 1, 
		    9, 3, 9, 161, 8, 9, 1, 9, 1, 9, 1, 10, 1, 10, 3, 10, 167, 8, 10, 1, 
		    11, 1, 11, 1, 11, 1, 11, 3, 11, 173, 8, 11, 1, 11, 1, 11, 1, 11, 1, 
		    11, 1, 11, 1, 11, 1, 11, 1, 11, 1, 11, 1, 11, 3, 11, 185, 8, 11, 1, 
		    11, 1, 11, 1, 11, 1, 11, 1, 11, 1, 11, 1, 11, 1, 11, 3, 11, 195, 8, 
		    11, 1, 11, 1, 11, 3, 11, 199, 8, 11, 1, 12, 1, 12, 1, 12, 5, 12, 204, 
		    8, 12, 10, 12, 12, 12, 207, 9, 12, 1, 13, 1, 13, 1, 13, 5, 13, 212, 
		    8, 13, 10, 13, 12, 13, 215, 9, 13, 1, 14, 1, 14, 3, 14, 219, 8, 14, 
		    1, 14, 1, 14, 1, 15, 1, 15, 1, 15, 1, 15, 1, 15, 1, 15, 1, 15, 1, 
		    15, 1, 15, 1, 15, 1, 15, 1, 15, 1, 15, 3, 15, 236, 8, 15, 1, 16, 1, 
		    16, 1, 16, 1, 16, 1, 16, 1, 16, 1, 16, 1, 16, 5, 16, 246, 8, 16, 10, 
		    16, 12, 16, 249, 9, 16, 1, 17, 1, 17, 1, 17, 1, 17, 1, 17, 1, 17, 
		    1, 17, 1, 17, 3, 17, 259, 8, 17, 1, 18, 1, 18, 1, 18, 1, 18, 1, 18, 
		    1, 18, 1, 18, 1, 19, 1, 19, 3, 19, 270, 8, 19, 1, 20, 1, 20, 1, 20, 
		    1, 20, 1, 20, 1, 20, 3, 20, 278, 8, 20, 1, 21, 1, 21, 1, 21, 1, 21, 
		    1, 21, 1, 21, 1, 22, 4, 22, 287, 8, 22, 11, 22, 12, 22, 288, 1, 22, 
		    3, 22, 292, 8, 22, 1, 23, 1, 23, 1, 23, 1, 23, 5, 23, 298, 8, 23, 
		    10, 23, 12, 23, 301, 9, 23, 1, 24, 1, 24, 1, 24, 5, 24, 306, 8, 24, 
		    10, 24, 12, 24, 309, 9, 24, 1, 25, 1, 25, 1, 25, 1, 25, 1, 25, 3, 
		    25, 316, 8, 25, 1, 26, 1, 26, 1, 26, 3, 26, 321, 8, 26, 5, 26, 323, 
		    8, 26, 10, 26, 12, 26, 326, 9, 26, 1, 26, 1, 26, 1, 27, 1, 27, 3, 
		    27, 332, 8, 27, 1, 27, 1, 27, 1, 27, 1, 28, 1, 28, 1, 28, 1, 28, 1, 
		    28, 1, 28, 1, 28, 1, 29, 1, 29, 1, 29, 1, 29, 1, 29, 1, 29, 1, 29, 
		    1, 29, 1, 29, 1, 29, 3, 29, 354, 8, 29, 1, 30, 1, 30, 1, 30, 1, 30, 
		    1, 30, 1, 31, 1, 31, 1, 31, 1, 31, 1, 31, 1, 31, 1, 32, 1, 32, 1, 
		    32, 5, 32, 370, 8, 32, 10, 32, 12, 32, 373, 9, 32, 1, 33, 1, 33, 1, 
		    33, 5, 33, 378, 8, 33, 10, 33, 12, 33, 381, 9, 33, 1, 34, 1, 34, 1, 
		    34, 1, 34, 1, 34, 1, 34, 5, 34, 389, 8, 34, 10, 34, 12, 34, 392, 9, 
		    34, 1, 35, 1, 35, 1, 35, 1, 35, 1, 35, 1, 35, 5, 35, 400, 8, 35, 10, 
		    35, 12, 35, 403, 9, 35, 1, 36, 1, 36, 1, 36, 1, 36, 1, 36, 1, 36, 
		    5, 36, 411, 8, 36, 10, 36, 12, 36, 414, 9, 36, 1, 37, 1, 37, 1, 37, 
		    1, 37, 1, 37, 1, 37, 5, 37, 422, 8, 37, 10, 37, 12, 37, 425, 9, 37, 
		    1, 38, 1, 38, 1, 38, 1, 38, 1, 38, 1, 38, 1, 38, 1, 38, 1, 38, 1, 
		    38, 1, 38, 1, 38, 1, 38, 1, 38, 1, 38, 1, 38, 1, 38, 1, 38, 1, 38, 
		    1, 38, 1, 38, 3, 38, 448, 8, 38, 1, 39, 1, 39, 1, 39, 1, 39, 1, 39, 
		    1, 39, 1, 39, 1, 39, 1, 40, 1, 40, 1, 40, 1, 40, 1, 40, 1, 40, 1, 
		    40, 1, 40, 1, 40, 1, 40, 1, 40, 1, 41, 1, 41, 1, 41, 3, 41, 472, 8, 
		    41, 1, 42, 1, 42, 1, 42, 1, 42, 1, 42, 1, 43, 1, 43, 1, 43, 1, 43, 
		    1, 43, 1, 43, 1, 43, 1, 43, 1, 44, 1, 44, 1, 45, 1, 45, 1, 45, 3, 
		    45, 492, 8, 45, 1, 45, 0, 4, 68, 70, 72, 74, 46, 0, 2, 4, 6, 8, 10, 
		    12, 14, 16, 18, 20, 22, 24, 26, 28, 30, 32, 34, 36, 38, 40, 42, 44, 
		    46, 48, 50, 52, 54, 56, 58, 60, 62, 64, 66, 68, 70, 72, 74, 76, 78, 
		    80, 82, 84, 86, 88, 90, 0, 7, 1, 0, 43, 44, 1, 0, 45, 50, 1, 0, 35, 
		    36, 1, 0, 38, 40, 1, 0, 36, 37, 1, 0, 20, 24, 2, 0, 35, 36, 38, 39, 
		    516, 0, 95, 1, 0, 0, 0, 2, 104, 1, 0, 0, 0, 4, 106, 1, 0, 0, 0, 6, 
		    127, 1, 0, 0, 0, 8, 129, 1, 0, 0, 0, 10, 134, 1, 0, 0, 0, 12, 138, 
		    1, 0, 0, 0, 14, 147, 1, 0, 0, 0, 16, 152, 1, 0, 0, 0, 18, 160, 1, 
		    0, 0, 0, 20, 164, 1, 0, 0, 0, 22, 198, 1, 0, 0, 0, 24, 200, 1, 0, 
		    0, 0, 26, 208, 1, 0, 0, 0, 28, 216, 1, 0, 0, 0, 30, 235, 1, 0, 0, 
		    0, 32, 237, 1, 0, 0, 0, 34, 258, 1, 0, 0, 0, 36, 260, 1, 0, 0, 0, 
		    38, 269, 1, 0, 0, 0, 40, 277, 1, 0, 0, 0, 42, 279, 1, 0, 0, 0, 44, 
		    286, 1, 0, 0, 0, 46, 293, 1, 0, 0, 0, 48, 302, 1, 0, 0, 0, 50, 310, 
		    1, 0, 0, 0, 52, 317, 1, 0, 0, 0, 54, 331, 1, 0, 0, 0, 56, 336, 1, 
		    0, 0, 0, 58, 353, 1, 0, 0, 0, 60, 355, 1, 0, 0, 0, 62, 360, 1, 0, 
		    0, 0, 64, 366, 1, 0, 0, 0, 66, 374, 1, 0, 0, 0, 68, 382, 1, 0, 0, 
		    0, 70, 393, 1, 0, 0, 0, 72, 404, 1, 0, 0, 0, 74, 415, 1, 0, 0, 0, 
		    76, 447, 1, 0, 0, 0, 78, 449, 1, 0, 0, 0, 80, 457, 1, 0, 0, 0, 82, 
		    471, 1, 0, 0, 0, 84, 473, 1, 0, 0, 0, 86, 478, 1, 0, 0, 0, 88, 486, 
		    1, 0, 0, 0, 90, 491, 1, 0, 0, 0, 92, 94, 3, 2, 1, 0, 93, 92, 1, 0, 
		    0, 0, 94, 97, 1, 0, 0, 0, 95, 93, 1, 0, 0, 0, 95, 96, 1, 0, 0, 0, 
		    96, 98, 1, 0, 0, 0, 97, 95, 1, 0, 0, 0, 98, 99, 5, 0, 0, 1, 99, 1, 
		    1, 0, 0, 0, 100, 105, 3, 22, 11, 0, 101, 105, 3, 4, 2, 0, 102, 105, 
		    3, 58, 29, 0, 103, 105, 3, 62, 31, 0, 104, 100, 1, 0, 0, 0, 104, 101, 
		    1, 0, 0, 0, 104, 102, 1, 0, 0, 0, 104, 103, 1, 0, 0, 0, 105, 3, 1, 
		    0, 0, 0, 106, 107, 5, 1, 0, 0, 107, 108, 5, 2, 0, 0, 108, 109, 5, 
		    27, 0, 0, 109, 110, 5, 28, 0, 0, 110, 111, 3, 52, 26, 0, 111, 5, 1, 
		    0, 0, 0, 112, 128, 3, 56, 28, 0, 113, 128, 3, 58, 29, 0, 114, 128, 
		    3, 60, 30, 0, 115, 128, 3, 62, 31, 0, 116, 128, 3, 54, 27, 0, 117, 
		    128, 3, 50, 25, 0, 118, 128, 3, 42, 21, 0, 119, 128, 3, 34, 17, 0, 
		    120, 128, 3, 40, 20, 0, 121, 128, 3, 22, 11, 0, 122, 128, 3, 20, 10, 
		    0, 123, 128, 3, 16, 8, 0, 124, 128, 3, 68, 34, 0, 125, 128, 5, 14, 
		    0, 0, 126, 128, 5, 13, 0, 0, 127, 112, 1, 0, 0, 0, 127, 113, 1, 0, 
		    0, 0, 127, 114, 1, 0, 0, 0, 127, 115, 1, 0, 0, 0, 127, 116, 1, 0, 
		    0, 0, 127, 117, 1, 0, 0, 0, 127, 118, 1, 0, 0, 0, 127, 119, 1, 0, 
		    0, 0, 127, 120, 1, 0, 0, 0, 127, 121, 1, 0, 0, 0, 127, 122, 1, 0, 
		    0, 0, 127, 123, 1, 0, 0, 0, 127, 124, 1, 0, 0, 0, 127, 125, 1, 0, 
		    0, 0, 127, 126, 1, 0, 0, 0, 128, 7, 1, 0, 0, 0, 129, 130, 5, 16, 0, 
		    0, 130, 131, 5, 27, 0, 0, 131, 132, 3, 68, 34, 0, 132, 133, 5, 28, 
		    0, 0, 133, 9, 1, 0, 0, 0, 134, 135, 5, 17, 0, 0, 135, 136, 5, 27, 
		    0, 0, 136, 137, 5, 28, 0, 0, 137, 11, 1, 0, 0, 0, 138, 139, 5, 18, 
		    0, 0, 139, 140, 5, 27, 0, 0, 140, 141, 3, 68, 34, 0, 141, 142, 5, 
		    31, 0, 0, 142, 143, 3, 68, 34, 0, 143, 144, 5, 31, 0, 0, 144, 145, 
		    3, 68, 34, 0, 145, 146, 5, 28, 0, 0, 146, 13, 1, 0, 0, 0, 147, 148, 
		    5, 19, 0, 0, 148, 149, 5, 27, 0, 0, 149, 150, 5, 57, 0, 0, 150, 151, 
		    5, 28, 0, 0, 151, 15, 1, 0, 0, 0, 152, 153, 5, 57, 0, 0, 153, 155, 
		    5, 27, 0, 0, 154, 156, 3, 64, 32, 0, 155, 154, 1, 0, 0, 0, 155, 156, 
		    1, 0, 0, 0, 156, 157, 1, 0, 0, 0, 157, 158, 5, 28, 0, 0, 158, 17, 
		    1, 0, 0, 0, 159, 161, 5, 42, 0, 0, 160, 159, 1, 0, 0, 0, 160, 161, 
		    1, 0, 0, 0, 161, 162, 1, 0, 0, 0, 162, 163, 3, 68, 34, 0, 163, 19, 
		    1, 0, 0, 0, 164, 166, 5, 15, 0, 0, 165, 167, 3, 64, 32, 0, 166, 165, 
		    1, 0, 0, 0, 166, 167, 1, 0, 0, 0, 167, 21, 1, 0, 0, 0, 168, 169, 5, 
		    1, 0, 0, 169, 170, 5, 57, 0, 0, 170, 172, 5, 27, 0, 0, 171, 173, 3, 
		    26, 13, 0, 172, 171, 1, 0, 0, 0, 172, 173, 1, 0, 0, 0, 173, 174, 1, 
		    0, 0, 0, 174, 175, 5, 28, 0, 0, 175, 176, 5, 27, 0, 0, 176, 177, 3, 
		    24, 12, 0, 177, 178, 5, 28, 0, 0, 178, 179, 3, 52, 26, 0, 179, 199, 
		    1, 0, 0, 0, 180, 181, 5, 1, 0, 0, 181, 182, 5, 57, 0, 0, 182, 184, 
		    5, 27, 0, 0, 183, 185, 3, 26, 13, 0, 184, 183, 1, 0, 0, 0, 184, 185, 
		    1, 0, 0, 0, 185, 186, 1, 0, 0, 0, 186, 187, 5, 28, 0, 0, 187, 188, 
		    3, 82, 41, 0, 188, 189, 3, 52, 26, 0, 189, 199, 1, 0, 0, 0, 190, 191, 
		    5, 1, 0, 0, 191, 192, 5, 57, 0, 0, 192, 194, 5, 27, 0, 0, 193, 195, 
		    3, 26, 13, 0, 194, 193, 1, 0, 0, 0, 194, 195, 1, 0, 0, 0, 195, 196, 
		    1, 0, 0, 0, 196, 197, 5, 28, 0, 0, 197, 199, 3, 52, 26, 0, 198, 168, 
		    1, 0, 0, 0, 198, 180, 1, 0, 0, 0, 198, 190, 1, 0, 0, 0, 199, 23, 1, 
		    0, 0, 0, 200, 205, 3, 82, 41, 0, 201, 202, 5, 31, 0, 0, 202, 204, 
		    3, 82, 41, 0, 203, 201, 1, 0, 0, 0, 204, 207, 1, 0, 0, 0, 205, 203, 
		    1, 0, 0, 0, 205, 206, 1, 0, 0, 0, 206, 25, 1, 0, 0, 0, 207, 205, 1, 
		    0, 0, 0, 208, 213, 3, 28, 14, 0, 209, 210, 5, 31, 0, 0, 210, 212, 
		    3, 28, 14, 0, 211, 209, 1, 0, 0, 0, 212, 215, 1, 0, 0, 0, 213, 211, 
		    1, 0, 0, 0, 213, 214, 1, 0, 0, 0, 214, 27, 1, 0, 0, 0, 215, 213, 1, 
		    0, 0, 0, 216, 218, 5, 57, 0, 0, 217, 219, 5, 38, 0, 0, 218, 217, 1, 
		    0, 0, 0, 218, 219, 1, 0, 0, 0, 219, 220, 1, 0, 0, 0, 220, 221, 3, 
		    82, 41, 0, 221, 29, 1, 0, 0, 0, 222, 223, 5, 57, 0, 0, 223, 224, 5, 
		    29, 0, 0, 224, 225, 3, 68, 34, 0, 225, 226, 5, 30, 0, 0, 226, 236, 
		    1, 0, 0, 0, 227, 228, 5, 57, 0, 0, 228, 229, 5, 29, 0, 0, 229, 230, 
		    3, 68, 34, 0, 230, 231, 5, 30, 0, 0, 231, 232, 5, 29, 0, 0, 232, 233, 
		    3, 68, 34, 0, 233, 234, 5, 30, 0, 0, 234, 236, 1, 0, 0, 0, 235, 222, 
		    1, 0, 0, 0, 235, 227, 1, 0, 0, 0, 236, 31, 1, 0, 0, 0, 237, 238, 5, 
		    25, 0, 0, 238, 239, 3, 64, 32, 0, 239, 247, 5, 26, 0, 0, 240, 241, 
		    5, 31, 0, 0, 241, 242, 5, 25, 0, 0, 242, 243, 3, 64, 32, 0, 243, 244, 
		    5, 26, 0, 0, 244, 246, 1, 0, 0, 0, 245, 240, 1, 0, 0, 0, 246, 249, 
		    1, 0, 0, 0, 247, 245, 1, 0, 0, 0, 247, 248, 1, 0, 0, 0, 248, 33, 1, 
		    0, 0, 0, 249, 247, 1, 0, 0, 0, 250, 251, 5, 12, 0, 0, 251, 259, 3, 
		    36, 18, 0, 252, 253, 5, 12, 0, 0, 253, 254, 3, 68, 34, 0, 254, 255, 
		    3, 52, 26, 0, 255, 259, 1, 0, 0, 0, 256, 257, 5, 12, 0, 0, 257, 259, 
		    3, 52, 26, 0, 258, 250, 1, 0, 0, 0, 258, 252, 1, 0, 0, 0, 258, 256, 
		    1, 0, 0, 0, 259, 35, 1, 0, 0, 0, 260, 261, 3, 60, 30, 0, 261, 262, 
		    5, 34, 0, 0, 262, 263, 3, 68, 34, 0, 263, 264, 5, 34, 0, 0, 264, 265, 
		    3, 38, 19, 0, 265, 266, 3, 52, 26, 0, 266, 37, 1, 0, 0, 0, 267, 270, 
		    3, 40, 20, 0, 268, 270, 3, 54, 27, 0, 269, 267, 1, 0, 0, 0, 269, 268, 
		    1, 0, 0, 0, 270, 39, 1, 0, 0, 0, 271, 272, 5, 57, 0, 0, 272, 273, 
		    5, 35, 0, 0, 273, 278, 5, 35, 0, 0, 274, 275, 5, 57, 0, 0, 275, 276, 
		    5, 36, 0, 0, 276, 278, 5, 36, 0, 0, 277, 271, 1, 0, 0, 0, 277, 274, 
		    1, 0, 0, 0, 278, 41, 1, 0, 0, 0, 279, 280, 5, 9, 0, 0, 280, 281, 3, 
		    68, 34, 0, 281, 282, 5, 25, 0, 0, 282, 283, 3, 44, 22, 0, 283, 284, 
		    5, 26, 0, 0, 284, 43, 1, 0, 0, 0, 285, 287, 3, 46, 23, 0, 286, 285, 
		    1, 0, 0, 0, 287, 288, 1, 0, 0, 0, 288, 286, 1, 0, 0, 0, 288, 289, 
		    1, 0, 0, 0, 289, 291, 1, 0, 0, 0, 290, 292, 3, 48, 24, 0, 291, 290, 
		    1, 0, 0, 0, 291, 292, 1, 0, 0, 0, 292, 45, 1, 0, 0, 0, 293, 294, 5, 
		    10, 0, 0, 294, 295, 3, 64, 32, 0, 295, 299, 5, 33, 0, 0, 296, 298, 
		    3, 6, 3, 0, 297, 296, 1, 0, 0, 0, 298, 301, 1, 0, 0, 0, 299, 297, 
		    1, 0, 0, 0, 299, 300, 1, 0, 0, 0, 300, 47, 1, 0, 0, 0, 301, 299, 1, 
		    0, 0, 0, 302, 303, 5, 11, 0, 0, 303, 307, 5, 33, 0, 0, 304, 306, 3, 
		    6, 3, 0, 305, 304, 1, 0, 0, 0, 306, 309, 1, 0, 0, 0, 307, 305, 1, 
		    0, 0, 0, 307, 308, 1, 0, 0, 0, 308, 49, 1, 0, 0, 0, 309, 307, 1, 0, 
		    0, 0, 310, 311, 5, 7, 0, 0, 311, 312, 3, 68, 34, 0, 312, 315, 3, 52, 
		    26, 0, 313, 314, 5, 8, 0, 0, 314, 316, 3, 52, 26, 0, 315, 313, 1, 
		    0, 0, 0, 315, 316, 1, 0, 0, 0, 316, 51, 1, 0, 0, 0, 317, 324, 5, 25, 
		    0, 0, 318, 320, 3, 6, 3, 0, 319, 321, 5, 34, 0, 0, 320, 319, 1, 0, 
		    0, 0, 320, 321, 1, 0, 0, 0, 321, 323, 1, 0, 0, 0, 322, 318, 1, 0, 
		    0, 0, 323, 326, 1, 0, 0, 0, 324, 322, 1, 0, 0, 0, 324, 325, 1, 0, 
		    0, 0, 325, 327, 1, 0, 0, 0, 326, 324, 1, 0, 0, 0, 327, 328, 5, 26, 
		    0, 0, 328, 53, 1, 0, 0, 0, 329, 332, 5, 57, 0, 0, 330, 332, 3, 30, 
		    15, 0, 331, 329, 1, 0, 0, 0, 331, 330, 1, 0, 0, 0, 332, 333, 1, 0, 
		    0, 0, 333, 334, 3, 90, 45, 0, 334, 335, 3, 68, 34, 0, 335, 55, 1, 
		    0, 0, 0, 336, 337, 5, 4, 0, 0, 337, 338, 5, 41, 0, 0, 338, 339, 5, 
		    5, 0, 0, 339, 340, 5, 27, 0, 0, 340, 341, 3, 64, 32, 0, 341, 342, 
		    5, 28, 0, 0, 342, 57, 1, 0, 0, 0, 343, 344, 5, 3, 0, 0, 344, 345, 
		    3, 66, 33, 0, 345, 346, 3, 82, 41, 0, 346, 354, 1, 0, 0, 0, 347, 348, 
		    5, 3, 0, 0, 348, 349, 3, 66, 33, 0, 349, 350, 3, 82, 41, 0, 350, 351, 
		    5, 32, 0, 0, 351, 352, 3, 64, 32, 0, 352, 354, 1, 0, 0, 0, 353, 343, 
		    1, 0, 0, 0, 353, 347, 1, 0, 0, 0, 354, 59, 1, 0, 0, 0, 355, 356, 3, 
		    66, 33, 0, 356, 357, 5, 33, 0, 0, 357, 358, 5, 32, 0, 0, 358, 359, 
		    3, 64, 32, 0, 359, 61, 1, 0, 0, 0, 360, 361, 5, 6, 0, 0, 361, 362, 
		    5, 57, 0, 0, 362, 363, 3, 82, 41, 0, 363, 364, 5, 32, 0, 0, 364, 365, 
		    3, 68, 34, 0, 365, 63, 1, 0, 0, 0, 366, 371, 3, 18, 9, 0, 367, 368, 
		    5, 31, 0, 0, 368, 370, 3, 18, 9, 0, 369, 367, 1, 0, 0, 0, 370, 373, 
		    1, 0, 0, 0, 371, 369, 1, 0, 0, 0, 371, 372, 1, 0, 0, 0, 372, 65, 1, 
		    0, 0, 0, 373, 371, 1, 0, 0, 0, 374, 379, 5, 57, 0, 0, 375, 376, 5, 
		    31, 0, 0, 376, 378, 5, 57, 0, 0, 377, 375, 1, 0, 0, 0, 378, 381, 1, 
		    0, 0, 0, 379, 377, 1, 0, 0, 0, 379, 380, 1, 0, 0, 0, 380, 67, 1, 0, 
		    0, 0, 381, 379, 1, 0, 0, 0, 382, 383, 6, 34, -1, 0, 383, 384, 3, 70, 
		    35, 0, 384, 390, 1, 0, 0, 0, 385, 386, 10, 2, 0, 0, 386, 387, 7, 0, 
		    0, 0, 387, 389, 3, 70, 35, 0, 388, 385, 1, 0, 0, 0, 389, 392, 1, 0, 
		    0, 0, 390, 388, 1, 0, 0, 0, 390, 391, 1, 0, 0, 0, 391, 69, 1, 0, 0, 
		    0, 392, 390, 1, 0, 0, 0, 393, 394, 6, 35, -1, 0, 394, 395, 3, 72, 
		    36, 0, 395, 401, 1, 0, 0, 0, 396, 397, 10, 2, 0, 0, 397, 398, 7, 1, 
		    0, 0, 398, 400, 3, 72, 36, 0, 399, 396, 1, 0, 0, 0, 400, 403, 1, 0, 
		    0, 0, 401, 399, 1, 0, 0, 0, 401, 402, 1, 0, 0, 0, 402, 71, 1, 0, 0, 
		    0, 403, 401, 1, 0, 0, 0, 404, 405, 6, 36, -1, 0, 405, 406, 3, 74, 
		    37, 0, 406, 412, 1, 0, 0, 0, 407, 408, 10, 2, 0, 0, 408, 409, 7, 2, 
		    0, 0, 409, 411, 3, 74, 37, 0, 410, 407, 1, 0, 0, 0, 411, 414, 1, 0, 
		    0, 0, 412, 410, 1, 0, 0, 0, 412, 413, 1, 0, 0, 0, 413, 73, 1, 0, 0, 
		    0, 414, 412, 1, 0, 0, 0, 415, 416, 6, 37, -1, 0, 416, 417, 3, 76, 
		    38, 0, 417, 423, 1, 0, 0, 0, 418, 419, 10, 2, 0, 0, 419, 420, 7, 3, 
		    0, 0, 420, 422, 3, 76, 38, 0, 421, 418, 1, 0, 0, 0, 422, 425, 1, 0, 
		    0, 0, 423, 421, 1, 0, 0, 0, 423, 424, 1, 0, 0, 0, 424, 75, 1, 0, 0, 
		    0, 425, 423, 1, 0, 0, 0, 426, 448, 3, 78, 39, 0, 427, 448, 3, 80, 
		    40, 0, 428, 448, 3, 30, 15, 0, 429, 430, 5, 27, 0, 0, 430, 431, 3, 
		    68, 34, 0, 431, 432, 5, 28, 0, 0, 432, 448, 1, 0, 0, 0, 433, 434, 
		    7, 4, 0, 0, 434, 448, 3, 76, 38, 0, 435, 448, 5, 54, 0, 0, 436, 448, 
		    5, 53, 0, 0, 437, 448, 5, 51, 0, 0, 438, 448, 5, 56, 0, 0, 439, 448, 
		    5, 55, 0, 0, 440, 448, 5, 52, 0, 0, 441, 448, 3, 10, 5, 0, 442, 448, 
		    3, 8, 4, 0, 443, 448, 3, 12, 6, 0, 444, 448, 3, 14, 7, 0, 445, 448, 
		    3, 16, 8, 0, 446, 448, 5, 57, 0, 0, 447, 426, 1, 0, 0, 0, 447, 427, 
		    1, 0, 0, 0, 447, 428, 1, 0, 0, 0, 447, 429, 1, 0, 0, 0, 447, 433, 
		    1, 0, 0, 0, 447, 435, 1, 0, 0, 0, 447, 436, 1, 0, 0, 0, 447, 437, 
		    1, 0, 0, 0, 447, 438, 1, 0, 0, 0, 447, 439, 1, 0, 0, 0, 447, 440, 
		    1, 0, 0, 0, 447, 441, 1, 0, 0, 0, 447, 442, 1, 0, 0, 0, 447, 443, 
		    1, 0, 0, 0, 447, 444, 1, 0, 0, 0, 447, 445, 1, 0, 0, 0, 447, 446, 
		    1, 0, 0, 0, 448, 77, 1, 0, 0, 0, 449, 450, 5, 29, 0, 0, 450, 451, 
		    3, 68, 34, 0, 451, 452, 5, 30, 0, 0, 452, 453, 3, 88, 44, 0, 453, 
		    454, 5, 25, 0, 0, 454, 455, 3, 64, 32, 0, 455, 456, 5, 26, 0, 0, 456, 
		    79, 1, 0, 0, 0, 457, 458, 5, 29, 0, 0, 458, 459, 3, 68, 34, 0, 459, 
		    460, 5, 30, 0, 0, 460, 461, 5, 29, 0, 0, 461, 462, 3, 68, 34, 0, 462, 
		    463, 5, 30, 0, 0, 463, 464, 3, 88, 44, 0, 464, 465, 5, 25, 0, 0, 465, 
		    466, 3, 32, 16, 0, 466, 467, 5, 26, 0, 0, 467, 81, 1, 0, 0, 0, 468, 
		    472, 3, 88, 44, 0, 469, 472, 3, 84, 42, 0, 470, 472, 3, 86, 43, 0, 
		    471, 468, 1, 0, 0, 0, 471, 469, 1, 0, 0, 0, 471, 470, 1, 0, 0, 0, 
		    472, 83, 1, 0, 0, 0, 473, 474, 5, 29, 0, 0, 474, 475, 3, 68, 34, 0, 
		    475, 476, 5, 30, 0, 0, 476, 477, 3, 88, 44, 0, 477, 85, 1, 0, 0, 0, 
		    478, 479, 5, 29, 0, 0, 479, 480, 3, 68, 34, 0, 480, 481, 5, 30, 0, 
		    0, 481, 482, 5, 29, 0, 0, 482, 483, 3, 68, 34, 0, 483, 484, 5, 30, 
		    0, 0, 484, 485, 3, 88, 44, 0, 485, 87, 1, 0, 0, 0, 486, 487, 7, 5, 
		    0, 0, 487, 89, 1, 0, 0, 0, 488, 492, 5, 32, 0, 0, 489, 490, 7, 6, 
		    0, 0, 490, 492, 5, 32, 0, 0, 491, 488, 1, 0, 0, 0, 491, 489, 1, 0, 
		    0, 0, 492, 91, 1, 0, 0, 0, 36, 95, 104, 127, 155, 160, 166, 172, 184, 
		    194, 198, 205, 213, 218, 235, 247, 258, 269, 277, 288, 291, 299, 307, 
		    315, 320, 324, 331, 353, 371, 379, 390, 401, 412, 423, 447, 471, 491];
		protected static $atn;
		protected static $decisionToDFA;
		protected static $sharedContextCache;

		public function __construct(TokenStream $input)
		{
			parent::__construct($input);

			self::initialize();

			$this->interp = new ParserATNSimulator($this, self::$atn, self::$decisionToDFA, self::$sharedContextCache);
		}

		private static function initialize(): void
		{
			if (self::$atn !== null) {
				return;
			}

			RuntimeMetaData::checkVersion('4.13.1', RuntimeMetaData::VERSION);

			$atn = (new ATNDeserializer())->deserialize(self::SERIALIZED_ATN);

			$decisionToDFA = [];
			for ($i = 0, $count = $atn->getNumberOfDecisions(); $i < $count; $i++) {
				$decisionToDFA[] = new DFA($atn->getDecisionState($i), $i);
			}

			self::$atn = $atn;
			self::$decisionToDFA = $decisionToDFA;
			self::$sharedContextCache = new PredictionContextCache();
		}

		public function getGrammarFileName(): string
		{
			return "Grammar.g4";
		}

		public function getRuleNames(): array
		{
			return self::RULE_NAMES;
		}

		public function getSerializedATN(): array
		{
			return self::SERIALIZED_ATN;
		}

		public function getATN(): ATN
		{
			return self::$atn;
		}

		public function getVocabulary(): Vocabulary
        {
            static $vocabulary;

			return $vocabulary = $vocabulary ?? new VocabularyImpl(self::LITERAL_NAMES, self::SYMBOLIC_NAMES);
        }

		/**
		 * @throws RecognitionException
		 */
		public function programa(): Context\ProgramaContext
		{
		    $localContext = new Context\ProgramaContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 0, self::RULE_programa);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(95);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 74) !== 0)) {
		        	$this->setState(92);
		        	$this->topLevel();
		        	$this->setState(97);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(98);
		        $this->match(self::EOF);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function topLevel(): Context\TopLevelContext
		{
		    $localContext = new Context\TopLevelContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 2, self::RULE_topLevel);

		    try {
		        $this->setState(104);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 1, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(100);
		        	    $this->funcion();
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(101);
		        	    $this->mainFuncion();
		        	break;

		        	case 3:
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(102);
		        	    $this->declaracion();
		        	break;

		        	case 4:
		        	    $this->enterOuterAlt($localContext, 4);
		        	    $this->setState(103);
		        	    $this->declaracionConst();
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function mainFuncion(): Context\MainFuncionContext
		{
		    $localContext = new Context\MainFuncionContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 4, self::RULE_mainFuncion);

		    try {
		        $localContext = new Context\BloqueMainContext($localContext);
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(106);
		        $this->match(self::FUNC);
		        $this->setState(107);
		        $this->match(self::MAIN);
		        $this->setState(108);
		        $this->match(self::LPAREN);
		        $this->setState(109);
		        $this->match(self::RPAREN);
		        $this->setState(110);
		        $this->bloque();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function i(): Context\IContext
		{
		    $localContext = new Context\IContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 6, self::RULE_i);

		    try {
		        $this->setState(127);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 2, $this->ctx)) {
		        	case 1:
		        	    $localContext = new Context\FuncionImprimirContext($localContext);
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(112);
		        	    $this->imprimir();
		        	break;

		        	case 2:
		        	    $localContext = new Context\DeclarationContext($localContext);
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(113);
		        	    $this->declaracion();
		        	break;

		        	case 3:
		        	    $localContext = new Context\ShortDeclarationContext($localContext);
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(114);
		        	    $this->declaracionCorta();
		        	break;

		        	case 4:
		        	    $localContext = new Context\ConstDeclarationContext($localContext);
		        	    $this->enterOuterAlt($localContext, 4);
		        	    $this->setState(115);
		        	    $this->declaracionConst();
		        	break;

		        	case 5:
		        	    $localContext = new Context\AsignationContext($localContext);
		        	    $this->enterOuterAlt($localContext, 5);
		        	    $this->setState(116);
		        	    $this->asignacion();
		        	break;

		        	case 6:
		        	    $localContext = new Context\IfSentenciaContext($localContext);
		        	    $this->enterOuterAlt($localContext, 6);
		        	    $this->setState(117);
		        	    $this->sentenciaIf();
		        	break;

		        	case 7:
		        	    $localContext = new Context\SwitchSentenciaContext($localContext);
		        	    $this->enterOuterAlt($localContext, 7);
		        	    $this->setState(118);
		        	    $this->sentenciaSwitch();
		        	break;

		        	case 8:
		        	    $localContext = new Context\ForSentenciaContext($localContext);
		        	    $this->enterOuterAlt($localContext, 8);
		        	    $this->setState(119);
		        	    $this->sentenciaFor();
		        	break;

		        	case 9:
		        	    $localContext = new Context\IncDecContext($localContext);
		        	    $this->enterOuterAlt($localContext, 9);
		        	    $this->setState(120);
		        	    $this->expFor();
		        	break;

		        	case 10:
		        	    $localContext = new Context\DFunctionContext($localContext);
		        	    $this->enterOuterAlt($localContext, 10);
		        	    $this->setState(121);
		        	    $this->funcion();
		        	break;

		        	case 11:
		        	    $localContext = new Context\SentenciaReturnContext($localContext);
		        	    $this->enterOuterAlt($localContext, 11);
		        	    $this->setState(122);
		        	    $this->retornar();
		        	break;

		        	case 12:
		        	    $localContext = new Context\LlamarFuncionContext($localContext);
		        	    $this->enterOuterAlt($localContext, 12);
		        	    $this->setState(123);
		        	    $this->llamadaFuncion();
		        	break;

		        	case 13:
		        	    $localContext = new Context\PruebaContext($localContext);
		        	    $this->enterOuterAlt($localContext, 13);
		        	    $this->setState(124);
		        	    $this->recursiveLogExpr(0);
		        	break;

		        	case 14:
		        	    $localContext = new Context\SentenciaContinueContext($localContext);
		        	    $this->enterOuterAlt($localContext, 14);
		        	    $this->setState(125);
		        	    $this->match(self::CONTINUE);
		        	break;

		        	case 15:
		        	    $localContext = new Context\SentenciaBreakContext($localContext);
		        	    $this->enterOuterAlt($localContext, 15);
		        	    $this->setState(126);
		        	    $this->match(self::BREAK);
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function funcLen(): Context\FuncLenContext
		{
		    $localContext = new Context\FuncLenContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 8, self::RULE_funcLen);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(129);
		        $this->match(self::LEN);
		        $this->setState(130);
		        $this->match(self::LPAREN);
		        $this->setState(131);
		        $this->recursiveLogExpr(0);
		        $this->setState(132);
		        $this->match(self::RPAREN);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function funcNow(): Context\FuncNowContext
		{
		    $localContext = new Context\FuncNowContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 10, self::RULE_funcNow);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(134);
		        $this->match(self::NOW);
		        $this->setState(135);
		        $this->match(self::LPAREN);
		        $this->setState(136);
		        $this->match(self::RPAREN);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function funcSub(): Context\FuncSubContext
		{
		    $localContext = new Context\FuncSubContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 12, self::RULE_funcSub);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(138);
		        $this->match(self::SUBSTR);
		        $this->setState(139);
		        $this->match(self::LPAREN);
		        $this->setState(140);
		        $this->recursiveLogExpr(0);
		        $this->setState(141);
		        $this->match(self::COMMA);
		        $this->setState(142);
		        $this->recursiveLogExpr(0);
		        $this->setState(143);
		        $this->match(self::COMMA);
		        $this->setState(144);
		        $this->recursiveLogExpr(0);
		        $this->setState(145);
		        $this->match(self::RPAREN);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function funcType(): Context\FuncTypeContext
		{
		    $localContext = new Context\FuncTypeContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 14, self::RULE_funcType);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(147);
		        $this->match(self::TYPEOF);
		        $this->setState(148);
		        $this->match(self::LPAREN);
		        $this->setState(149);
		        $this->match(self::IDENTIFICADOR);
		        $this->setState(150);
		        $this->match(self::RPAREN);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function llamadaFuncion(): Context\LlamadaFuncionContext
		{
		    $localContext = new Context\LlamadaFuncionContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 16, self::RULE_llamadaFuncion);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(152);
		        $this->match(self::IDENTIFICADOR);
		        $this->setState(153);
		        $this->match(self::LPAREN);
		        $this->setState(155);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 285983181215039488) !== 0)) {
		        	$this->setState(154);
		        	$this->listaExpr();
		        }
		        $this->setState(157);
		        $this->match(self::RPAREN);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function argumento(): Context\ArgumentoContext
		{
		    $localContext = new Context\ArgumentoContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 18, self::RULE_argumento);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(160);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::REF) {
		        	$this->setState(159);
		        	$this->match(self::REF);
		        }
		        $this->setState(162);
		        $this->recursiveLogExpr(0);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function retornar(): Context\RetornarContext
		{
		    $localContext = new Context\RetornarContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 20, self::RULE_retornar);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(164);
		        $this->match(self::RETURN);
		        $this->setState(166);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 5, $this->ctx)) {
		            case 1:
		        	    $this->setState(165);
		        	    $this->listaExpr();
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function funcion(): Context\FuncionContext
		{
		    $localContext = new Context\FuncionContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 22, self::RULE_funcion);

		    try {
		        $this->setState(198);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 9, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(168);
		        	    $this->match(self::FUNC);
		        	    $this->setState(169);
		        	    $this->match(self::IDENTIFICADOR);
		        	    $this->setState(170);
		        	    $this->match(self::LPAREN);
		        	    $this->setState(172);
		        	    $this->errorHandler->sync($this);
		        	    $_la = $this->input->LA(1);

		        	    if ($_la === self::IDENTIFICADOR) {
		        	    	$this->setState(171);
		        	    	$this->listaParametros();
		        	    }
		        	    $this->setState(174);
		        	    $this->match(self::RPAREN);
		        	    $this->setState(175);
		        	    $this->match(self::LPAREN);
		        	    $this->setState(176);
		        	    $this->listaRetorno();
		        	    $this->setState(177);
		        	    $this->match(self::RPAREN);
		        	    $this->setState(178);
		        	    $this->bloque();
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(180);
		        	    $this->match(self::FUNC);
		        	    $this->setState(181);
		        	    $this->match(self::IDENTIFICADOR);
		        	    $this->setState(182);
		        	    $this->match(self::LPAREN);
		        	    $this->setState(184);
		        	    $this->errorHandler->sync($this);
		        	    $_la = $this->input->LA(1);

		        	    if ($_la === self::IDENTIFICADOR) {
		        	    	$this->setState(183);
		        	    	$this->listaParametros();
		        	    }
		        	    $this->setState(186);
		        	    $this->match(self::RPAREN);
		        	    $this->setState(187);
		        	    $this->tipos();
		        	    $this->setState(188);
		        	    $this->bloque();
		        	break;

		        	case 3:
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(190);
		        	    $this->match(self::FUNC);
		        	    $this->setState(191);
		        	    $this->match(self::IDENTIFICADOR);
		        	    $this->setState(192);
		        	    $this->match(self::LPAREN);
		        	    $this->setState(194);
		        	    $this->errorHandler->sync($this);
		        	    $_la = $this->input->LA(1);

		        	    if ($_la === self::IDENTIFICADOR) {
		        	    	$this->setState(193);
		        	    	$this->listaParametros();
		        	    }
		        	    $this->setState(196);
		        	    $this->match(self::RPAREN);
		        	    $this->setState(197);
		        	    $this->bloque();
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function listaRetorno(): Context\ListaRetornoContext
		{
		    $localContext = new Context\ListaRetornoContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 24, self::RULE_listaRetorno);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(200);
		        $this->tipos();
		        $this->setState(205);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::COMMA) {
		        	$this->setState(201);
		        	$this->match(self::COMMA);
		        	$this->setState(202);
		        	$this->tipos();
		        	$this->setState(207);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function listaParametros(): Context\ListaParametrosContext
		{
		    $localContext = new Context\ListaParametrosContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 26, self::RULE_listaParametros);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(208);
		        $this->parametro();
		        $this->setState(213);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::COMMA) {
		        	$this->setState(209);
		        	$this->match(self::COMMA);
		        	$this->setState(210);
		        	$this->parametro();
		        	$this->setState(215);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function parametro(): Context\ParametroContext
		{
		    $localContext = new Context\ParametroContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 28, self::RULE_parametro);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(216);
		        $this->match(self::IDENTIFICADOR);
		        $this->setState(218);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::MULT) {
		        	$this->setState(217);
		        	$this->match(self::MULT);
		        }
		        $this->setState(220);
		        $this->tipos();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function accesoArreglo(): Context\AccesoArregloContext
		{
		    $localContext = new Context\AccesoArregloContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 30, self::RULE_accesoArreglo);

		    try {
		        $this->setState(235);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 13, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(222);
		        	    $this->match(self::IDENTIFICADOR);
		        	    $this->setState(223);
		        	    $this->match(self::LCOR);
		        	    $this->setState(224);
		        	    $this->recursiveLogExpr(0);
		        	    $this->setState(225);
		        	    $this->match(self::RCOR);
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(227);
		        	    $this->match(self::IDENTIFICADOR);
		        	    $this->setState(228);
		        	    $this->match(self::LCOR);
		        	    $this->setState(229);
		        	    $this->recursiveLogExpr(0);
		        	    $this->setState(230);
		        	    $this->match(self::RCOR);
		        	    $this->setState(231);
		        	    $this->match(self::LCOR);
		        	    $this->setState(232);
		        	    $this->recursiveLogExpr(0);
		        	    $this->setState(233);
		        	    $this->match(self::RCOR);
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function listaValores(): Context\ListaValoresContext
		{
		    $localContext = new Context\ListaValoresContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 32, self::RULE_listaValores);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(237);
		        $this->match(self::LBRACE);
		        $this->setState(238);
		        $this->listaExpr();
		        $this->setState(239);
		        $this->match(self::RBRACE);
		        $this->setState(247);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::COMMA) {
		        	$this->setState(240);
		        	$this->match(self::COMMA);
		        	$this->setState(241);
		        	$this->match(self::LBRACE);
		        	$this->setState(242);
		        	$this->listaExpr();
		        	$this->setState(243);
		        	$this->match(self::RBRACE);
		        	$this->setState(249);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function sentenciaFor(): Context\SentenciaForContext
		{
		    $localContext = new Context\SentenciaForContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 34, self::RULE_sentenciaFor);

		    try {
		        $this->setState(258);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 15, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(250);
		        	    $this->match(self::FOR);
		        	    $this->setState(251);
		        	    $this->forClasico();
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(252);
		        	    $this->match(self::FOR);
		        	    $this->setState(253);
		        	    $this->recursiveLogExpr(0);
		        	    $this->setState(254);
		        	    $this->bloque();
		        	break;

		        	case 3:
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(256);
		        	    $this->match(self::FOR);
		        	    $this->setState(257);
		        	    $this->bloque();
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function forClasico(): Context\ForClasicoContext
		{
		    $localContext = new Context\ForClasicoContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 36, self::RULE_forClasico);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(260);
		        $this->declaracionCorta();
		        $this->setState(261);
		        $this->match(self::SEMICOLON);
		        $this->setState(262);
		        $this->recursiveLogExpr(0);
		        $this->setState(263);
		        $this->match(self::SEMICOLON);
		        $this->setState(264);
		        $this->condFor();
		        $this->setState(265);
		        $this->bloque();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function condFor(): Context\CondForContext
		{
		    $localContext = new Context\CondForContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 38, self::RULE_condFor);

		    try {
		        $this->setState(269);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 16, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(267);
		        	    $this->expFor();
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(268);
		        	    $this->asignacion();
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function expFor(): Context\ExpForContext
		{
		    $localContext = new Context\ExpForContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 40, self::RULE_expFor);

		    try {
		        $this->setState(277);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 17, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(271);
		        	    $this->match(self::IDENTIFICADOR);
		        	    $this->setState(272);
		        	    $this->match(self::PLUS);
		        	    $this->setState(273);
		        	    $this->match(self::PLUS);
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(274);
		        	    $this->match(self::IDENTIFICADOR);
		        	    $this->setState(275);
		        	    $this->match(self::MINUS);
		        	    $this->setState(276);
		        	    $this->match(self::MINUS);
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function sentenciaSwitch(): Context\SentenciaSwitchContext
		{
		    $localContext = new Context\SentenciaSwitchContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 42, self::RULE_sentenciaSwitch);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(279);
		        $this->match(self::SWITCH);
		        $this->setState(280);
		        $this->recursiveLogExpr(0);
		        $this->setState(281);
		        $this->match(self::LBRACE);
		        $this->setState(282);
		        $this->bloqueSwitch();
		        $this->setState(283);
		        $this->match(self::RBRACE);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function bloqueSwitch(): Context\BloqueSwitchContext
		{
		    $localContext = new Context\BloqueSwitchContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 44, self::RULE_bloqueSwitch);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(286); 
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        do {
		        	$this->setState(285);
		        	$this->bloqueCase();
		        	$this->setState(288); 
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        } while ($_la === self::CASE);
		        $this->setState(291);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::DEFAULT) {
		        	$this->setState(290);
		        	$this->bloqueDefault();
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function bloqueCase(): Context\BloqueCaseContext
		{
		    $localContext = new Context\BloqueCaseContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 46, self::RULE_bloqueCase);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(293);
		        $this->match(self::CASE);
		        $this->setState(294);
		        $this->listaExpr();
		        $this->setState(295);
		        $this->match(self::COLON);
		        $this->setState(299);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 285978783168590554) !== 0)) {
		        	$this->setState(296);
		        	$this->i();
		        	$this->setState(301);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function bloqueDefault(): Context\BloqueDefaultContext
		{
		    $localContext = new Context\BloqueDefaultContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 48, self::RULE_bloqueDefault);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(302);
		        $this->match(self::DEFAULT);
		        $this->setState(303);
		        $this->match(self::COLON);
		        $this->setState(307);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 285978783168590554) !== 0)) {
		        	$this->setState(304);
		        	$this->i();
		        	$this->setState(309);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function sentenciaIf(): Context\SentenciaIfContext
		{
		    $localContext = new Context\SentenciaIfContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 50, self::RULE_sentenciaIf);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(310);
		        $this->match(self::IF);
		        $this->setState(311);
		        $this->recursiveLogExpr(0);
		        $this->setState(312);
		        $this->bloque();
		        $this->setState(315);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::ELSE) {
		        	$this->setState(313);
		        	$this->match(self::ELSE);
		        	$this->setState(314);
		        	$this->bloque();
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function bloque(): Context\BloqueContext
		{
		    $localContext = new Context\BloqueContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 52, self::RULE_bloque);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(317);
		        $this->match(self::LBRACE);
		        $this->setState(324);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 285978783168590554) !== 0)) {
		        	$this->setState(318);
		        	$this->i();
		        	$this->setState(320);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);

		        	if ($_la === self::SEMICOLON) {
		        		$this->setState(319);
		        		$this->match(self::SEMICOLON);
		        	}
		        	$this->setState(326);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(327);
		        $this->match(self::RBRACE);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function asignacion(): Context\AsignacionContext
		{
		    $localContext = new Context\AsignacionContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 54, self::RULE_asignacion);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(331);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 25, $this->ctx)) {
		        	case 1:
		        	    $this->setState(329);
		        	    $this->match(self::IDENTIFICADOR);
		        	break;

		        	case 2:
		        	    $this->setState(330);
		        	    $this->accesoArreglo();
		        	break;
		        }
		        $this->setState(333);
		        $this->simboloAsignacion();
		        $this->setState(334);
		        $this->recursiveLogExpr(0);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function imprimir(): Context\ImprimirContext
		{
		    $localContext = new Context\ImprimirContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 56, self::RULE_imprimir);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(336);
		        $this->match(self::FMT);
		        $this->setState(337);
		        $this->match(self::DOT);
		        $this->setState(338);
		        $this->match(self::PRINTLN);
		        $this->setState(339);
		        $this->match(self::LPAREN);
		        $this->setState(340);
		        $this->listaExpr();
		        $this->setState(341);
		        $this->match(self::RPAREN);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function declaracion(): Context\DeclaracionContext
		{
		    $localContext = new Context\DeclaracionContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 58, self::RULE_declaracion);

		    try {
		        $this->setState(353);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 26, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(343);
		        	    $this->match(self::VAR);
		        	    $this->setState(344);
		        	    $this->listaId();
		        	    $this->setState(345);
		        	    $this->tipos();
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(347);
		        	    $this->match(self::VAR);
		        	    $this->setState(348);
		        	    $this->listaId();
		        	    $this->setState(349);
		        	    $this->tipos();
		        	    $this->setState(350);
		        	    $this->match(self::ASSIGN);
		        	    $this->setState(351);
		        	    $this->listaExpr();
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function declaracionCorta(): Context\DeclaracionCortaContext
		{
		    $localContext = new Context\DeclaracionCortaContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 60, self::RULE_declaracionCorta);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(355);
		        $this->listaId();
		        $this->setState(356);
		        $this->match(self::COLON);
		        $this->setState(357);
		        $this->match(self::ASSIGN);
		        $this->setState(358);
		        $this->listaExpr();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function declaracionConst(): Context\DeclaracionConstContext
		{
		    $localContext = new Context\DeclaracionConstContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 62, self::RULE_declaracionConst);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(360);
		        $this->match(self::CONST);
		        $this->setState(361);
		        $this->match(self::IDENTIFICADOR);
		        $this->setState(362);
		        $this->tipos();
		        $this->setState(363);
		        $this->match(self::ASSIGN);
		        $this->setState(364);
		        $this->recursiveLogExpr(0);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function listaExpr(): Context\ListaExprContext
		{
		    $localContext = new Context\ListaExprContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 64, self::RULE_listaExpr);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(366);
		        $this->argumento();
		        $this->setState(371);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::COMMA) {
		        	$this->setState(367);
		        	$this->match(self::COMMA);
		        	$this->setState(368);
		        	$this->argumento();
		        	$this->setState(373);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function listaId(): Context\ListaIdContext
		{
		    $localContext = new Context\ListaIdContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 66, self::RULE_listaId);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(374);
		        $this->match(self::IDENTIFICADOR);
		        $this->setState(379);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::COMMA) {
		        	$this->setState(375);
		        	$this->match(self::COMMA);
		        	$this->setState(376);
		        	$this->match(self::IDENTIFICADOR);
		        	$this->setState(381);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function logExpr(): Context\LogExprContext
		{
			return $this->recursiveLogExpr(0);
		}

		/**
		 * @throws RecognitionException
		 */
		private function recursiveLogExpr(int $precedence): Context\LogExprContext
		{
			$parentContext = $this->ctx;
			$parentState = $this->getState();
			$localContext = new Context\LogExprContext($this->ctx, $parentState);
			$previousContext = $localContext;
			$startState = 68;
			$this->enterRecursionRule($localContext, 68, self::RULE_logExpr, $precedence);

			try {
				$this->enterOuterAlt($localContext, 1);
				$localContext = new Context\ToRelExprContext($localContext);
				$this->ctx = $localContext;
				$previousContext = $localContext;

				$this->setState(383);
				$this->recursiveRelExpr(0);
				$this->ctx->stop = $this->input->LT(-1);
				$this->setState(390);
				$this->errorHandler->sync($this);

				$alt = $this->getInterpreter()->adaptivePredict($this->input, 29, $this->ctx);

				while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
					if ($alt === 1) {
						if ($this->getParseListeners() !== null) {
						    $this->triggerExitRuleEvent();
						}

						$previousContext = $localContext;
						$localContext = new Context\LogicalExpressionContext(new Context\LogExprContext($parentContext, $parentState));
						$this->pushNewRecursionContext($localContext, $startState, self::RULE_logExpr);
						$this->setState(385);

						if (!($this->precpred($this->ctx, 2))) {
						    throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 2)");
						}
						$this->setState(386);

						$localContext->op = $this->input->LT(1);
						$_la = $this->input->LA(1);

						if (!($_la === self::ANDO || $_la === self::ORO)) {
							    $localContext->op = $this->errorHandler->recoverInline($this);
						} else {
							if ($this->input->LA(1) === Token::EOF) {
							    $this->matchedEOF = true;
						    }

							$this->errorHandler->reportMatch($this);
							$this->consume();
						}
						$this->setState(387);
						$this->recursiveRelExpr(0); 
					}

					$this->setState(392);
					$this->errorHandler->sync($this);

					$alt = $this->getInterpreter()->adaptivePredict($this->input, 29, $this->ctx);
				}
			} catch (RecognitionException $exception) {
				$localContext->exception = $exception;
				$this->errorHandler->reportError($this, $exception);
				$this->errorHandler->recover($this, $exception);
			} finally {
				$this->unrollRecursionContexts($parentContext);
			}

			return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function relExpr(): Context\RelExprContext
		{
			return $this->recursiveRelExpr(0);
		}

		/**
		 * @throws RecognitionException
		 */
		private function recursiveRelExpr(int $precedence): Context\RelExprContext
		{
			$parentContext = $this->ctx;
			$parentState = $this->getState();
			$localContext = new Context\RelExprContext($this->ctx, $parentState);
			$previousContext = $localContext;
			$startState = 70;
			$this->enterRecursionRule($localContext, 70, self::RULE_relExpr, $precedence);

			try {
				$this->enterOuterAlt($localContext, 1);
				$localContext = new Context\ToExprContext($localContext);
				$this->ctx = $localContext;
				$previousContext = $localContext;

				$this->setState(394);
				$this->recursiveExpr(0);
				$this->ctx->stop = $this->input->LT(-1);
				$this->setState(401);
				$this->errorHandler->sync($this);

				$alt = $this->getInterpreter()->adaptivePredict($this->input, 30, $this->ctx);

				while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
					if ($alt === 1) {
						if ($this->getParseListeners() !== null) {
						    $this->triggerExitRuleEvent();
						}

						$previousContext = $localContext;
						$localContext = new Context\RelationalExpresionContext(new Context\RelExprContext($parentContext, $parentState));
						$this->pushNewRecursionContext($localContext, $startState, self::RULE_relExpr);
						$this->setState(396);

						if (!($this->precpred($this->ctx, 2))) {
						    throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 2)");
						}
						$this->setState(397);

						$localContext->op = $this->input->LT(1);
						$_la = $this->input->LA(1);

						if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & 2216615441596416) !== 0))) {
							    $localContext->op = $this->errorHandler->recoverInline($this);
						} else {
							if ($this->input->LA(1) === Token::EOF) {
							    $this->matchedEOF = true;
						    }

							$this->errorHandler->reportMatch($this);
							$this->consume();
						}
						$this->setState(398);
						$this->recursiveExpr(0); 
					}

					$this->setState(403);
					$this->errorHandler->sync($this);

					$alt = $this->getInterpreter()->adaptivePredict($this->input, 30, $this->ctx);
				}
			} catch (RecognitionException $exception) {
				$localContext->exception = $exception;
				$this->errorHandler->reportError($this, $exception);
				$this->errorHandler->recover($this, $exception);
			} finally {
				$this->unrollRecursionContexts($parentContext);
			}

			return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function expr(): Context\ExprContext
		{
			return $this->recursiveExpr(0);
		}

		/**
		 * @throws RecognitionException
		 */
		private function recursiveExpr(int $precedence): Context\ExprContext
		{
			$parentContext = $this->ctx;
			$parentState = $this->getState();
			$localContext = new Context\ExprContext($this->ctx, $parentState);
			$previousContext = $localContext;
			$startState = 72;
			$this->enterRecursionRule($localContext, 72, self::RULE_expr, $precedence);

			try {
				$this->enterOuterAlt($localContext, 1);
				$localContext = new Context\ToTermContext($localContext);
				$this->ctx = $localContext;
				$previousContext = $localContext;

				$this->setState(405);
				$this->recursiveTerm(0);
				$this->ctx->stop = $this->input->LT(-1);
				$this->setState(412);
				$this->errorHandler->sync($this);

				$alt = $this->getInterpreter()->adaptivePredict($this->input, 31, $this->ctx);

				while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
					if ($alt === 1) {
						if ($this->getParseListeners() !== null) {
						    $this->triggerExitRuleEvent();
						}

						$previousContext = $localContext;
						$localContext = new Context\BinaryExpressionTContext(new Context\ExprContext($parentContext, $parentState));
						$this->pushNewRecursionContext($localContext, $startState, self::RULE_expr);
						$this->setState(407);

						if (!($this->precpred($this->ctx, 2))) {
						    throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 2)");
						}
						$this->setState(408);

						$localContext->op = $this->input->LT(1);
						$_la = $this->input->LA(1);

						if (!($_la === self::PLUS || $_la === self::MINUS)) {
							    $localContext->op = $this->errorHandler->recoverInline($this);
						} else {
							if ($this->input->LA(1) === Token::EOF) {
							    $this->matchedEOF = true;
						    }

							$this->errorHandler->reportMatch($this);
							$this->consume();
						}
						$this->setState(409);
						$this->recursiveTerm(0); 
					}

					$this->setState(414);
					$this->errorHandler->sync($this);

					$alt = $this->getInterpreter()->adaptivePredict($this->input, 31, $this->ctx);
				}
			} catch (RecognitionException $exception) {
				$localContext->exception = $exception;
				$this->errorHandler->reportError($this, $exception);
				$this->errorHandler->recover($this, $exception);
			} finally {
				$this->unrollRecursionContexts($parentContext);
			}

			return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function term(): Context\TermContext
		{
			return $this->recursiveTerm(0);
		}

		/**
		 * @throws RecognitionException
		 */
		private function recursiveTerm(int $precedence): Context\TermContext
		{
			$parentContext = $this->ctx;
			$parentState = $this->getState();
			$localContext = new Context\TermContext($this->ctx, $parentState);
			$previousContext = $localContext;
			$startState = 74;
			$this->enterRecursionRule($localContext, 74, self::RULE_term, $precedence);

			try {
				$this->enterOuterAlt($localContext, 1);
				$localContext = new Context\ToFactorContext($localContext);
				$this->ctx = $localContext;
				$previousContext = $localContext;

				$this->setState(416);
				$this->factor();
				$this->ctx->stop = $this->input->LT(-1);
				$this->setState(423);
				$this->errorHandler->sync($this);

				$alt = $this->getInterpreter()->adaptivePredict($this->input, 32, $this->ctx);

				while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
					if ($alt === 1) {
						if ($this->getParseListeners() !== null) {
						    $this->triggerExitRuleEvent();
						}

						$previousContext = $localContext;
						$localContext = new Context\BinaryExpressionSContext(new Context\TermContext($parentContext, $parentState));
						$this->pushNewRecursionContext($localContext, $startState, self::RULE_term);
						$this->setState(418);

						if (!($this->precpred($this->ctx, 2))) {
						    throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 2)");
						}
						$this->setState(419);

						$localContext->op = $this->input->LT(1);
						$_la = $this->input->LA(1);

						if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & 1924145348608) !== 0))) {
							    $localContext->op = $this->errorHandler->recoverInline($this);
						} else {
							if ($this->input->LA(1) === Token::EOF) {
							    $this->matchedEOF = true;
						    }

							$this->errorHandler->reportMatch($this);
							$this->consume();
						}
						$this->setState(420);
						$this->factor(); 
					}

					$this->setState(425);
					$this->errorHandler->sync($this);

					$alt = $this->getInterpreter()->adaptivePredict($this->input, 32, $this->ctx);
				}
			} catch (RecognitionException $exception) {
				$localContext->exception = $exception;
				$this->errorHandler->reportError($this, $exception);
				$this->errorHandler->recover($this, $exception);
			} finally {
				$this->unrollRecursionContexts($parentContext);
			}

			return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function factor(): Context\FactorContext
		{
		    $localContext = new Context\FactorContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 76, self::RULE_factor);

		    try {
		        $this->setState(447);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 33, $this->ctx)) {
		        	case 1:
		        	    $localContext = new Context\ArrayLitContext($localContext);
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(426);
		        	    $this->arrayLiteral();
		        	break;

		        	case 2:
		        	    $localContext = new Context\ArrayLit2DContext($localContext);
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(427);
		        	    $this->arrayLiteral2D();
		        	break;

		        	case 3:
		        	    $localContext = new Context\ArregloAccesoContext($localContext);
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(428);
		        	    $this->accesoArreglo();
		        	break;

		        	case 4:
		        	    $localContext = new Context\GroupedExpressionContext($localContext);
		        	    $this->enterOuterAlt($localContext, 4);
		        	    $this->setState(429);
		        	    $this->match(self::LPAREN);
		        	    $this->setState(430);
		        	    $this->recursiveLogExpr(0);
		        	    $this->setState(431);
		        	    $this->match(self::RPAREN);
		        	break;

		        	case 5:
		        	    $localContext = new Context\UnaryExpressionContext($localContext);
		        	    $this->enterOuterAlt($localContext, 5);
		        	    $this->setState(433);

		        	    $localContext->op = $this->input->LT(1);
		        	    $_la = $this->input->LA(1);

		        	    if (!($_la === self::MINUS || $_la === self::NEG)) {
		        	    	    $localContext->op = $this->errorHandler->recoverInline($this);
		        	    } else {
		        	    	if ($this->input->LA(1) === Token::EOF) {
		        	    	    $this->matchedEOF = true;
		        	        }

		        	    	$this->errorHandler->reportMatch($this);
		        	    	$this->consume();
		        	    }
		        	    $this->setState(434);
		        	    $this->factor();
		        	break;

		        	case 6:
		        	    $localContext = new Context\FloatLitContext($localContext);
		        	    $this->enterOuterAlt($localContext, 6);
		        	    $this->setState(435);
		        	    $this->match(self::FLOAT);
		        	break;

		        	case 7:
		        	    $localContext = new Context\EnteroLitContext($localContext);
		        	    $this->enterOuterAlt($localContext, 7);
		        	    $this->setState(436);
		        	    $this->match(self::ENTERO);
		        	break;

		        	case 8:
		        	    $localContext = new Context\BoolLitContext($localContext);
		        	    $this->enterOuterAlt($localContext, 8);
		        	    $this->setState(437);
		        	    $this->match(self::BOOL);
		        	break;

		        	case 9:
		        	    $localContext = new Context\RuneLitContext($localContext);
		        	    $this->enterOuterAlt($localContext, 9);
		        	    $this->setState(438);
		        	    $this->match(self::RUNE);
		        	break;

		        	case 10:
		        	    $localContext = new Context\StrLitContext($localContext);
		        	    $this->enterOuterAlt($localContext, 10);
		        	    $this->setState(439);
		        	    $this->match(self::STR);
		        	break;

		        	case 11:
		        	    $localContext = new Context\NilLitContext($localContext);
		        	    $this->enterOuterAlt($localContext, 11);
		        	    $this->setState(440);
		        	    $this->match(self::NIL);
		        	break;

		        	case 12:
		        	    $localContext = new Context\NowFuncContext($localContext);
		        	    $this->enterOuterAlt($localContext, 12);
		        	    $this->setState(441);
		        	    $this->funcNow();
		        	break;

		        	case 13:
		        	    $localContext = new Context\LenFuncContext($localContext);
		        	    $this->enterOuterAlt($localContext, 13);
		        	    $this->setState(442);
		        	    $this->funcLen();
		        	break;

		        	case 14:
		        	    $localContext = new Context\SubFuncContext($localContext);
		        	    $this->enterOuterAlt($localContext, 14);
		        	    $this->setState(443);
		        	    $this->funcSub();
		        	break;

		        	case 15:
		        	    $localContext = new Context\TypeFuncContext($localContext);
		        	    $this->enterOuterAlt($localContext, 15);
		        	    $this->setState(444);
		        	    $this->funcType();
		        	break;

		        	case 16:
		        	    $localContext = new Context\LlamarFuncionFContext($localContext);
		        	    $this->enterOuterAlt($localContext, 16);
		        	    $this->setState(445);
		        	    $this->llamadaFuncion();
		        	break;

		        	case 17:
		        	    $localContext = new Context\IdentifierContext($localContext);
		        	    $this->enterOuterAlt($localContext, 17);
		        	    $this->setState(446);
		        	    $this->match(self::IDENTIFICADOR);
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function arrayLiteral(): Context\ArrayLiteralContext
		{
		    $localContext = new Context\ArrayLiteralContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 78, self::RULE_arrayLiteral);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(449);
		        $this->match(self::LCOR);
		        $this->setState(450);
		        $this->recursiveLogExpr(0);
		        $this->setState(451);
		        $this->match(self::RCOR);
		        $this->setState(452);
		        $this->tipoBase();
		        $this->setState(453);
		        $this->match(self::LBRACE);
		        $this->setState(454);
		        $this->listaExpr();
		        $this->setState(455);
		        $this->match(self::RBRACE);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function arrayLiteral2D(): Context\ArrayLiteral2DContext
		{
		    $localContext = new Context\ArrayLiteral2DContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 80, self::RULE_arrayLiteral2D);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(457);
		        $this->match(self::LCOR);
		        $this->setState(458);
		        $this->recursiveLogExpr(0);
		        $this->setState(459);
		        $this->match(self::RCOR);
		        $this->setState(460);
		        $this->match(self::LCOR);
		        $this->setState(461);
		        $this->recursiveLogExpr(0);
		        $this->setState(462);
		        $this->match(self::RCOR);
		        $this->setState(463);
		        $this->tipoBase();
		        $this->setState(464);
		        $this->match(self::LBRACE);
		        $this->setState(465);
		        $this->listaValores();
		        $this->setState(466);
		        $this->match(self::RBRACE);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function tipos(): Context\TiposContext
		{
		    $localContext = new Context\TiposContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 82, self::RULE_tipos);

		    try {
		        $this->setState(471);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 34, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(468);
		        	    $this->tipoBase();
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(469);
		        	    $this->tipoArray();
		        	break;

		        	case 3:
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(470);
		        	    $this->tipoArray2D();
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function tipoArray(): Context\TipoArrayContext
		{
		    $localContext = new Context\TipoArrayContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 84, self::RULE_tipoArray);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(473);
		        $this->match(self::LCOR);
		        $this->setState(474);
		        $this->recursiveLogExpr(0);
		        $this->setState(475);
		        $this->match(self::RCOR);
		        $this->setState(476);
		        $this->tipoBase();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function tipoArray2D(): Context\TipoArray2DContext
		{
		    $localContext = new Context\TipoArray2DContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 86, self::RULE_tipoArray2D);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(478);
		        $this->match(self::LCOR);
		        $this->setState(479);
		        $this->recursiveLogExpr(0);
		        $this->setState(480);
		        $this->match(self::RCOR);
		        $this->setState(481);
		        $this->match(self::LCOR);
		        $this->setState(482);
		        $this->recursiveLogExpr(0);
		        $this->setState(483);
		        $this->match(self::RCOR);
		        $this->setState(484);
		        $this->tipoBase();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function tipoBase(): Context\TipoBaseContext
		{
		    $localContext = new Context\TipoBaseContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 88, self::RULE_tipoBase);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(486);

		        $_la = $this->input->LA(1);

		        if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & 32505856) !== 0))) {
		        $this->errorHandler->recoverInline($this);
		        } else {
		        	if ($this->input->LA(1) === Token::EOF) {
		        	    $this->matchedEOF = true;
		            }

		        	$this->errorHandler->reportMatch($this);
		        	$this->consume();
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function simboloAsignacion(): Context\SimboloAsignacionContext
		{
		    $localContext = new Context\SimboloAsignacionContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 90, self::RULE_simboloAsignacion);

		    try {
		        $this->setState(491);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::ASSIGN:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(488);
		            	$this->match(self::ASSIGN);
		            	break;

		            case self::PLUS:
		            case self::MINUS:
		            case self::MULT:
		            case self::DIV:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(489);

		            	$localContext->op = $this->input->LT(1);
		            	$_la = $this->input->LA(1);

		            	if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & 927712935936) !== 0))) {
		            		    $localContext->op = $this->errorHandler->recoverInline($this);
		            	} else {
		            		if ($this->input->LA(1) === Token::EOF) {
		            		    $this->matchedEOF = true;
		            	    }

		            		$this->errorHandler->reportMatch($this);
		            		$this->consume();
		            	}
		            	$this->setState(490);
		            	$this->match(self::ASSIGN);
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		public function sempred(?RuleContext $localContext, int $ruleIndex, int $predicateIndex): bool
		{
			switch ($ruleIndex) {
					case 34:
						return $this->sempredLogExpr($localContext, $predicateIndex);

					case 35:
						return $this->sempredRelExpr($localContext, $predicateIndex);

					case 36:
						return $this->sempredExpr($localContext, $predicateIndex);

					case 37:
						return $this->sempredTerm($localContext, $predicateIndex);

				default:
					return true;
				}
		}

		private function sempredLogExpr(?Context\LogExprContext $localContext, int $predicateIndex): bool
		{
			switch ($predicateIndex) {
			    case 0:
			        return $this->precpred($this->ctx, 2);
			}

			return true;
		}

		private function sempredRelExpr(?Context\RelExprContext $localContext, int $predicateIndex): bool
		{
			switch ($predicateIndex) {
			    case 1:
			        return $this->precpred($this->ctx, 2);
			}

			return true;
		}

		private function sempredExpr(?Context\ExprContext $localContext, int $predicateIndex): bool
		{
			switch ($predicateIndex) {
			    case 2:
			        return $this->precpred($this->ctx, 2);
			}

			return true;
		}

		private function sempredTerm(?Context\TermContext $localContext, int $predicateIndex): bool
		{
			switch ($predicateIndex) {
			    case 3:
			        return $this->precpred($this->ctx, 2);
			}

			return true;
		}
	}
}

namespace Context {
	use Antlr\Antlr4\Runtime\ParserRuleContext;
	use Antlr\Antlr4\Runtime\Token;
	use Antlr\Antlr4\Runtime\Tree\ParseTreeVisitor;
	use Antlr\Antlr4\Runtime\Tree\TerminalNode;
	use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
	use GrammarParser;
	use GrammarVisitor;
	use GrammarListener;

	class ProgramaContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_programa;
	    }

	    public function EOF(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::EOF, 0);
	    }

	    /**
	     * @return array<TopLevelContext>|TopLevelContext|null
	     */
	    public function topLevel(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(TopLevelContext::class);
	    	}

	        return $this->getTypedRuleContext(TopLevelContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterPrograma($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitPrograma($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitPrograma($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class TopLevelContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_topLevel;
	    }

	    public function funcion(): ?FuncionContext
	    {
	    	return $this->getTypedRuleContext(FuncionContext::class, 0);
	    }

	    public function mainFuncion(): ?MainFuncionContext
	    {
	    	return $this->getTypedRuleContext(MainFuncionContext::class, 0);
	    }

	    public function declaracion(): ?DeclaracionContext
	    {
	    	return $this->getTypedRuleContext(DeclaracionContext::class, 0);
	    }

	    public function declaracionConst(): ?DeclaracionConstContext
	    {
	    	return $this->getTypedRuleContext(DeclaracionConstContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterTopLevel($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitTopLevel($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitTopLevel($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class MainFuncionContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_mainFuncion;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class BloqueMainContext extends MainFuncionContext
	{
		public function __construct(MainFuncionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function FUNC(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::FUNC, 0);
	    }

	    public function MAIN(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::MAIN, 0);
	    }

	    public function LPAREN(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::LPAREN, 0);
	    }

	    public function RPAREN(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::RPAREN, 0);
	    }

	    public function bloque(): ?BloqueContext
	    {
	    	return $this->getTypedRuleContext(BloqueContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterBloqueMain($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitBloqueMain($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitBloqueMain($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class IContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_i;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class IncDecContext extends IContext
	{
		public function __construct(IContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function expFor(): ?ExpForContext
	    {
	    	return $this->getTypedRuleContext(ExpForContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterIncDec($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitIncDec($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitIncDec($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class PruebaContext extends IContext
	{
		public function __construct(IContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function logExpr(): ?LogExprContext
	    {
	    	return $this->getTypedRuleContext(LogExprContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterPrueba($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitPrueba($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitPrueba($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class FuncionImprimirContext extends IContext
	{
		public function __construct(IContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function imprimir(): ?ImprimirContext
	    {
	    	return $this->getTypedRuleContext(ImprimirContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterFuncionImprimir($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitFuncionImprimir($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitFuncionImprimir($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ForSentenciaContext extends IContext
	{
		public function __construct(IContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function sentenciaFor(): ?SentenciaForContext
	    {
	    	return $this->getTypedRuleContext(SentenciaForContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterForSentencia($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitForSentencia($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitForSentencia($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class DFunctionContext extends IContext
	{
		public function __construct(IContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function funcion(): ?FuncionContext
	    {
	    	return $this->getTypedRuleContext(FuncionContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterDFunction($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitDFunction($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitDFunction($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class SwitchSentenciaContext extends IContext
	{
		public function __construct(IContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function sentenciaSwitch(): ?SentenciaSwitchContext
	    {
	    	return $this->getTypedRuleContext(SentenciaSwitchContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterSwitchSentencia($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitSwitchSentencia($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitSwitchSentencia($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ShortDeclarationContext extends IContext
	{
		public function __construct(IContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function declaracionCorta(): ?DeclaracionCortaContext
	    {
	    	return $this->getTypedRuleContext(DeclaracionCortaContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterShortDeclaration($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitShortDeclaration($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitShortDeclaration($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ConstDeclarationContext extends IContext
	{
		public function __construct(IContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function declaracionConst(): ?DeclaracionConstContext
	    {
	    	return $this->getTypedRuleContext(DeclaracionConstContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterConstDeclaration($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitConstDeclaration($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitConstDeclaration($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class SentenciaReturnContext extends IContext
	{
		public function __construct(IContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function retornar(): ?RetornarContext
	    {
	    	return $this->getTypedRuleContext(RetornarContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterSentenciaReturn($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitSentenciaReturn($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitSentenciaReturn($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class AsignationContext extends IContext
	{
		public function __construct(IContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function asignacion(): ?AsignacionContext
	    {
	    	return $this->getTypedRuleContext(AsignacionContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterAsignation($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitAsignation($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitAsignation($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class SentenciaBreakContext extends IContext
	{
		public function __construct(IContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function BREAK(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::BREAK, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterSentenciaBreak($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitSentenciaBreak($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitSentenciaBreak($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class SentenciaContinueContext extends IContext
	{
		public function __construct(IContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function CONTINUE(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::CONTINUE, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterSentenciaContinue($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitSentenciaContinue($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitSentenciaContinue($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class LlamarFuncionContext extends IContext
	{
		public function __construct(IContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function llamadaFuncion(): ?LlamadaFuncionContext
	    {
	    	return $this->getTypedRuleContext(LlamadaFuncionContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterLlamarFuncion($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitLlamarFuncion($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitLlamarFuncion($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class DeclarationContext extends IContext
	{
		public function __construct(IContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function declaracion(): ?DeclaracionContext
	    {
	    	return $this->getTypedRuleContext(DeclaracionContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterDeclaration($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitDeclaration($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitDeclaration($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class IfSentenciaContext extends IContext
	{
		public function __construct(IContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function sentenciaIf(): ?SentenciaIfContext
	    {
	    	return $this->getTypedRuleContext(SentenciaIfContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterIfSentencia($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitIfSentencia($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitIfSentencia($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class FuncLenContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_funcLen;
	    }

	    public function LEN(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::LEN, 0);
	    }

	    public function LPAREN(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::LPAREN, 0);
	    }

	    public function logExpr(): ?LogExprContext
	    {
	    	return $this->getTypedRuleContext(LogExprContext::class, 0);
	    }

	    public function RPAREN(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::RPAREN, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterFuncLen($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitFuncLen($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitFuncLen($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class FuncNowContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_funcNow;
	    }

	    public function NOW(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::NOW, 0);
	    }

	    public function LPAREN(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::LPAREN, 0);
	    }

	    public function RPAREN(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::RPAREN, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterFuncNow($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitFuncNow($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitFuncNow($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class FuncSubContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_funcSub;
	    }

	    public function SUBSTR(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::SUBSTR, 0);
	    }

	    public function LPAREN(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::LPAREN, 0);
	    }

	    /**
	     * @return array<LogExprContext>|LogExprContext|null
	     */
	    public function logExpr(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(LogExprContext::class);
	    	}

	        return $this->getTypedRuleContext(LogExprContext::class, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function COMMA(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(GrammarParser::COMMA);
	    	}

	        return $this->getToken(GrammarParser::COMMA, $index);
	    }

	    public function RPAREN(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::RPAREN, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterFuncSub($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitFuncSub($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitFuncSub($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class FuncTypeContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_funcType;
	    }

	    public function TYPEOF(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::TYPEOF, 0);
	    }

	    public function LPAREN(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::LPAREN, 0);
	    }

	    public function IDENTIFICADOR(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::IDENTIFICADOR, 0);
	    }

	    public function RPAREN(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::RPAREN, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterFuncType($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitFuncType($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitFuncType($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class LlamadaFuncionContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_llamadaFuncion;
	    }

	    public function IDENTIFICADOR(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::IDENTIFICADOR, 0);
	    }

	    public function LPAREN(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::LPAREN, 0);
	    }

	    public function RPAREN(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::RPAREN, 0);
	    }

	    public function listaExpr(): ?ListaExprContext
	    {
	    	return $this->getTypedRuleContext(ListaExprContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterLlamadaFuncion($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitLlamadaFuncion($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitLlamadaFuncion($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ArgumentoContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_argumento;
	    }

	    public function logExpr(): ?LogExprContext
	    {
	    	return $this->getTypedRuleContext(LogExprContext::class, 0);
	    }

	    public function REF(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::REF, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterArgumento($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitArgumento($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitArgumento($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class RetornarContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_retornar;
	    }

	    public function RETURN(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::RETURN, 0);
	    }

	    public function listaExpr(): ?ListaExprContext
	    {
	    	return $this->getTypedRuleContext(ListaExprContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterRetornar($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitRetornar($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitRetornar($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class FuncionContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_funcion;
	    }

	    public function FUNC(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::FUNC, 0);
	    }

	    public function IDENTIFICADOR(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::IDENTIFICADOR, 0);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function LPAREN(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(GrammarParser::LPAREN);
	    	}

	        return $this->getToken(GrammarParser::LPAREN, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function RPAREN(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(GrammarParser::RPAREN);
	    	}

	        return $this->getToken(GrammarParser::RPAREN, $index);
	    }

	    public function listaRetorno(): ?ListaRetornoContext
	    {
	    	return $this->getTypedRuleContext(ListaRetornoContext::class, 0);
	    }

	    public function bloque(): ?BloqueContext
	    {
	    	return $this->getTypedRuleContext(BloqueContext::class, 0);
	    }

	    public function listaParametros(): ?ListaParametrosContext
	    {
	    	return $this->getTypedRuleContext(ListaParametrosContext::class, 0);
	    }

	    public function tipos(): ?TiposContext
	    {
	    	return $this->getTypedRuleContext(TiposContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterFuncion($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitFuncion($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitFuncion($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ListaRetornoContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_listaRetorno;
	    }

	    /**
	     * @return array<TiposContext>|TiposContext|null
	     */
	    public function tipos(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(TiposContext::class);
	    	}

	        return $this->getTypedRuleContext(TiposContext::class, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function COMMA(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(GrammarParser::COMMA);
	    	}

	        return $this->getToken(GrammarParser::COMMA, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterListaRetorno($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitListaRetorno($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitListaRetorno($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ListaParametrosContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_listaParametros;
	    }

	    /**
	     * @return array<ParametroContext>|ParametroContext|null
	     */
	    public function parametro(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ParametroContext::class);
	    	}

	        return $this->getTypedRuleContext(ParametroContext::class, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function COMMA(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(GrammarParser::COMMA);
	    	}

	        return $this->getToken(GrammarParser::COMMA, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterListaParametros($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitListaParametros($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitListaParametros($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ParametroContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_parametro;
	    }

	    public function IDENTIFICADOR(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::IDENTIFICADOR, 0);
	    }

	    public function tipos(): ?TiposContext
	    {
	    	return $this->getTypedRuleContext(TiposContext::class, 0);
	    }

	    public function MULT(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::MULT, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterParametro($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitParametro($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitParametro($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class AccesoArregloContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_accesoArreglo;
	    }

	    public function IDENTIFICADOR(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::IDENTIFICADOR, 0);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function LCOR(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(GrammarParser::LCOR);
	    	}

	        return $this->getToken(GrammarParser::LCOR, $index);
	    }

	    /**
	     * @return array<LogExprContext>|LogExprContext|null
	     */
	    public function logExpr(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(LogExprContext::class);
	    	}

	        return $this->getTypedRuleContext(LogExprContext::class, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function RCOR(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(GrammarParser::RCOR);
	    	}

	        return $this->getToken(GrammarParser::RCOR, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterAccesoArreglo($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitAccesoArreglo($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitAccesoArreglo($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ListaValoresContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_listaValores;
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function LBRACE(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(GrammarParser::LBRACE);
	    	}

	        return $this->getToken(GrammarParser::LBRACE, $index);
	    }

	    /**
	     * @return array<ListaExprContext>|ListaExprContext|null
	     */
	    public function listaExpr(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ListaExprContext::class);
	    	}

	        return $this->getTypedRuleContext(ListaExprContext::class, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function RBRACE(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(GrammarParser::RBRACE);
	    	}

	        return $this->getToken(GrammarParser::RBRACE, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function COMMA(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(GrammarParser::COMMA);
	    	}

	        return $this->getToken(GrammarParser::COMMA, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterListaValores($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitListaValores($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitListaValores($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class SentenciaForContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_sentenciaFor;
	    }

	    public function FOR(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::FOR, 0);
	    }

	    public function forClasico(): ?ForClasicoContext
	    {
	    	return $this->getTypedRuleContext(ForClasicoContext::class, 0);
	    }

	    public function logExpr(): ?LogExprContext
	    {
	    	return $this->getTypedRuleContext(LogExprContext::class, 0);
	    }

	    public function bloque(): ?BloqueContext
	    {
	    	return $this->getTypedRuleContext(BloqueContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterSentenciaFor($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitSentenciaFor($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitSentenciaFor($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ForClasicoContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_forClasico;
	    }

	    public function declaracionCorta(): ?DeclaracionCortaContext
	    {
	    	return $this->getTypedRuleContext(DeclaracionCortaContext::class, 0);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function SEMICOLON(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(GrammarParser::SEMICOLON);
	    	}

	        return $this->getToken(GrammarParser::SEMICOLON, $index);
	    }

	    public function logExpr(): ?LogExprContext
	    {
	    	return $this->getTypedRuleContext(LogExprContext::class, 0);
	    }

	    public function condFor(): ?CondForContext
	    {
	    	return $this->getTypedRuleContext(CondForContext::class, 0);
	    }

	    public function bloque(): ?BloqueContext
	    {
	    	return $this->getTypedRuleContext(BloqueContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterForClasico($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitForClasico($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitForClasico($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class CondForContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_condFor;
	    }

	    public function expFor(): ?ExpForContext
	    {
	    	return $this->getTypedRuleContext(ExpForContext::class, 0);
	    }

	    public function asignacion(): ?AsignacionContext
	    {
	    	return $this->getTypedRuleContext(AsignacionContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterCondFor($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitCondFor($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitCondFor($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ExpForContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_expFor;
	    }

	    public function IDENTIFICADOR(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::IDENTIFICADOR, 0);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function PLUS(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(GrammarParser::PLUS);
	    	}

	        return $this->getToken(GrammarParser::PLUS, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function MINUS(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(GrammarParser::MINUS);
	    	}

	        return $this->getToken(GrammarParser::MINUS, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterExpFor($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitExpFor($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitExpFor($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class SentenciaSwitchContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_sentenciaSwitch;
	    }

	    public function SWITCH(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::SWITCH, 0);
	    }

	    public function logExpr(): ?LogExprContext
	    {
	    	return $this->getTypedRuleContext(LogExprContext::class, 0);
	    }

	    public function LBRACE(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::LBRACE, 0);
	    }

	    public function bloqueSwitch(): ?BloqueSwitchContext
	    {
	    	return $this->getTypedRuleContext(BloqueSwitchContext::class, 0);
	    }

	    public function RBRACE(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::RBRACE, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterSentenciaSwitch($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitSentenciaSwitch($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitSentenciaSwitch($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class BloqueSwitchContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_bloqueSwitch;
	    }

	    /**
	     * @return array<BloqueCaseContext>|BloqueCaseContext|null
	     */
	    public function bloqueCase(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(BloqueCaseContext::class);
	    	}

	        return $this->getTypedRuleContext(BloqueCaseContext::class, $index);
	    }

	    public function bloqueDefault(): ?BloqueDefaultContext
	    {
	    	return $this->getTypedRuleContext(BloqueDefaultContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterBloqueSwitch($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitBloqueSwitch($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitBloqueSwitch($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class BloqueCaseContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_bloqueCase;
	    }

	    public function CASE(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::CASE, 0);
	    }

	    public function listaExpr(): ?ListaExprContext
	    {
	    	return $this->getTypedRuleContext(ListaExprContext::class, 0);
	    }

	    public function COLON(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::COLON, 0);
	    }

	    /**
	     * @return array<IContext>|IContext|null
	     */
	    public function i(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(IContext::class);
	    	}

	        return $this->getTypedRuleContext(IContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterBloqueCase($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitBloqueCase($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitBloqueCase($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class BloqueDefaultContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_bloqueDefault;
	    }

	    public function DEFAULT(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::DEFAULT, 0);
	    }

	    public function COLON(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::COLON, 0);
	    }

	    /**
	     * @return array<IContext>|IContext|null
	     */
	    public function i(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(IContext::class);
	    	}

	        return $this->getTypedRuleContext(IContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterBloqueDefault($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitBloqueDefault($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitBloqueDefault($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class SentenciaIfContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_sentenciaIf;
	    }

	    public function IF(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::IF, 0);
	    }

	    public function logExpr(): ?LogExprContext
	    {
	    	return $this->getTypedRuleContext(LogExprContext::class, 0);
	    }

	    /**
	     * @return array<BloqueContext>|BloqueContext|null
	     */
	    public function bloque(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(BloqueContext::class);
	    	}

	        return $this->getTypedRuleContext(BloqueContext::class, $index);
	    }

	    public function ELSE(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::ELSE, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterSentenciaIf($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitSentenciaIf($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitSentenciaIf($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class BloqueContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_bloque;
	    }

	    public function LBRACE(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::LBRACE, 0);
	    }

	    public function RBRACE(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::RBRACE, 0);
	    }

	    /**
	     * @return array<IContext>|IContext|null
	     */
	    public function i(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(IContext::class);
	    	}

	        return $this->getTypedRuleContext(IContext::class, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function SEMICOLON(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(GrammarParser::SEMICOLON);
	    	}

	        return $this->getToken(GrammarParser::SEMICOLON, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterBloque($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitBloque($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitBloque($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class AsignacionContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_asignacion;
	    }

	    public function simboloAsignacion(): ?SimboloAsignacionContext
	    {
	    	return $this->getTypedRuleContext(SimboloAsignacionContext::class, 0);
	    }

	    public function logExpr(): ?LogExprContext
	    {
	    	return $this->getTypedRuleContext(LogExprContext::class, 0);
	    }

	    public function IDENTIFICADOR(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::IDENTIFICADOR, 0);
	    }

	    public function accesoArreglo(): ?AccesoArregloContext
	    {
	    	return $this->getTypedRuleContext(AccesoArregloContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterAsignacion($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitAsignacion($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitAsignacion($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ImprimirContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_imprimir;
	    }

	    public function FMT(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::FMT, 0);
	    }

	    public function DOT(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::DOT, 0);
	    }

	    public function PRINTLN(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::PRINTLN, 0);
	    }

	    public function LPAREN(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::LPAREN, 0);
	    }

	    public function listaExpr(): ?ListaExprContext
	    {
	    	return $this->getTypedRuleContext(ListaExprContext::class, 0);
	    }

	    public function RPAREN(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::RPAREN, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterImprimir($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitImprimir($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitImprimir($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class DeclaracionContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_declaracion;
	    }

	    public function VAR(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::VAR, 0);
	    }

	    public function listaId(): ?ListaIdContext
	    {
	    	return $this->getTypedRuleContext(ListaIdContext::class, 0);
	    }

	    public function tipos(): ?TiposContext
	    {
	    	return $this->getTypedRuleContext(TiposContext::class, 0);
	    }

	    public function ASSIGN(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::ASSIGN, 0);
	    }

	    public function listaExpr(): ?ListaExprContext
	    {
	    	return $this->getTypedRuleContext(ListaExprContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterDeclaracion($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitDeclaracion($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitDeclaracion($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class DeclaracionCortaContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_declaracionCorta;
	    }

	    public function listaId(): ?ListaIdContext
	    {
	    	return $this->getTypedRuleContext(ListaIdContext::class, 0);
	    }

	    public function COLON(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::COLON, 0);
	    }

	    public function ASSIGN(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::ASSIGN, 0);
	    }

	    public function listaExpr(): ?ListaExprContext
	    {
	    	return $this->getTypedRuleContext(ListaExprContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterDeclaracionCorta($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitDeclaracionCorta($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitDeclaracionCorta($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class DeclaracionConstContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_declaracionConst;
	    }

	    public function CONST(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::CONST, 0);
	    }

	    public function IDENTIFICADOR(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::IDENTIFICADOR, 0);
	    }

	    public function tipos(): ?TiposContext
	    {
	    	return $this->getTypedRuleContext(TiposContext::class, 0);
	    }

	    public function ASSIGN(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::ASSIGN, 0);
	    }

	    public function logExpr(): ?LogExprContext
	    {
	    	return $this->getTypedRuleContext(LogExprContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterDeclaracionConst($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitDeclaracionConst($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitDeclaracionConst($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ListaExprContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_listaExpr;
	    }

	    /**
	     * @return array<ArgumentoContext>|ArgumentoContext|null
	     */
	    public function argumento(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ArgumentoContext::class);
	    	}

	        return $this->getTypedRuleContext(ArgumentoContext::class, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function COMMA(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(GrammarParser::COMMA);
	    	}

	        return $this->getToken(GrammarParser::COMMA, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterListaExpr($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitListaExpr($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitListaExpr($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ListaIdContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_listaId;
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function IDENTIFICADOR(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(GrammarParser::IDENTIFICADOR);
	    	}

	        return $this->getToken(GrammarParser::IDENTIFICADOR, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function COMMA(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(GrammarParser::COMMA);
	    	}

	        return $this->getToken(GrammarParser::COMMA, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterListaId($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitListaId($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitListaId($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class LogExprContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_logExpr;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class LogicalExpressionContext extends LogExprContext
	{
		/**
		 * @var Token|null $op
		 */
		public $op;

		public function __construct(LogExprContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function logExpr(): ?LogExprContext
	    {
	    	return $this->getTypedRuleContext(LogExprContext::class, 0);
	    }

	    public function relExpr(): ?RelExprContext
	    {
	    	return $this->getTypedRuleContext(RelExprContext::class, 0);
	    }

	    public function ORO(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::ORO, 0);
	    }

	    public function ANDO(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::ANDO, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterLogicalExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitLogicalExpression($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitLogicalExpression($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ToRelExprContext extends LogExprContext
	{
		public function __construct(LogExprContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function relExpr(): ?RelExprContext
	    {
	    	return $this->getTypedRuleContext(RelExprContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterToRelExpr($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitToRelExpr($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitToRelExpr($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class RelExprContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_relExpr;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class ToExprContext extends RelExprContext
	{
		public function __construct(RelExprContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function expr(): ?ExprContext
	    {
	    	return $this->getTypedRuleContext(ExprContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterToExpr($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitToExpr($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitToExpr($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class RelationalExpresionContext extends RelExprContext
	{
		/**
		 * @var Token|null $op
		 */
		public $op;

		public function __construct(RelExprContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function relExpr(): ?RelExprContext
	    {
	    	return $this->getTypedRuleContext(RelExprContext::class, 0);
	    }

	    public function expr(): ?ExprContext
	    {
	    	return $this->getTypedRuleContext(ExprContext::class, 0);
	    }

	    public function LE(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::LE, 0);
	    }

	    public function GE(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::GE, 0);
	    }

	    public function EQUAL(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::EQUAL, 0);
	    }

	    public function NEQUAL(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::NEQUAL, 0);
	    }

	    public function LESS(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::LESS, 0);
	    }

	    public function GREATER(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::GREATER, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterRelationalExpresion($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitRelationalExpresion($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitRelationalExpresion($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ExprContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_expr;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class ToTermContext extends ExprContext
	{
		public function __construct(ExprContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function term(): ?TermContext
	    {
	    	return $this->getTypedRuleContext(TermContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterToTerm($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitToTerm($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitToTerm($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class BinaryExpressionTContext extends ExprContext
	{
		/**
		 * @var Token|null $op
		 */
		public $op;

		public function __construct(ExprContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function expr(): ?ExprContext
	    {
	    	return $this->getTypedRuleContext(ExprContext::class, 0);
	    }

	    public function term(): ?TermContext
	    {
	    	return $this->getTypedRuleContext(TermContext::class, 0);
	    }

	    public function PLUS(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::PLUS, 0);
	    }

	    public function MINUS(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::MINUS, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterBinaryExpressionT($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitBinaryExpressionT($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitBinaryExpressionT($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class TermContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_term;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class BinaryExpressionSContext extends TermContext
	{
		/**
		 * @var Token|null $op
		 */
		public $op;

		public function __construct(TermContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function term(): ?TermContext
	    {
	    	return $this->getTypedRuleContext(TermContext::class, 0);
	    }

	    public function factor(): ?FactorContext
	    {
	    	return $this->getTypedRuleContext(FactorContext::class, 0);
	    }

	    public function MULT(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::MULT, 0);
	    }

	    public function DIV(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::DIV, 0);
	    }

	    public function MOD(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::MOD, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterBinaryExpressionS($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitBinaryExpressionS($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitBinaryExpressionS($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ToFactorContext extends TermContext
	{
		public function __construct(TermContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function factor(): ?FactorContext
	    {
	    	return $this->getTypedRuleContext(FactorContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterToFactor($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitToFactor($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitToFactor($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class FactorContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_factor;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class NowFuncContext extends FactorContext
	{
		public function __construct(FactorContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function funcNow(): ?FuncNowContext
	    {
	    	return $this->getTypedRuleContext(FuncNowContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterNowFunc($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitNowFunc($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitNowFunc($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class UnaryExpressionContext extends FactorContext
	{
		/**
		 * @var Token|null $op
		 */
		public $op;

		public function __construct(FactorContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function factor(): ?FactorContext
	    {
	    	return $this->getTypedRuleContext(FactorContext::class, 0);
	    }

	    public function MINUS(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::MINUS, 0);
	    }

	    public function NEG(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::NEG, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterUnaryExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitUnaryExpression($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitUnaryExpression($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class GroupedExpressionContext extends FactorContext
	{
		public function __construct(FactorContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function LPAREN(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::LPAREN, 0);
	    }

	    public function logExpr(): ?LogExprContext
	    {
	    	return $this->getTypedRuleContext(LogExprContext::class, 0);
	    }

	    public function RPAREN(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::RPAREN, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterGroupedExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitGroupedExpression($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitGroupedExpression($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ArrayLit2DContext extends FactorContext
	{
		public function __construct(FactorContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function arrayLiteral2D(): ?ArrayLiteral2DContext
	    {
	    	return $this->getTypedRuleContext(ArrayLiteral2DContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterArrayLit2D($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitArrayLit2D($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitArrayLit2D($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class FloatLitContext extends FactorContext
	{
		public function __construct(FactorContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function FLOAT(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::FLOAT, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterFloatLit($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitFloatLit($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitFloatLit($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class IdentifierContext extends FactorContext
	{
		public function __construct(FactorContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function IDENTIFICADOR(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::IDENTIFICADOR, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterIdentifier($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitIdentifier($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitIdentifier($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ArrayLitContext extends FactorContext
	{
		public function __construct(FactorContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function arrayLiteral(): ?ArrayLiteralContext
	    {
	    	return $this->getTypedRuleContext(ArrayLiteralContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterArrayLit($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitArrayLit($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitArrayLit($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class NilLitContext extends FactorContext
	{
		public function __construct(FactorContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function NIL(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::NIL, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterNilLit($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitNilLit($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitNilLit($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class SubFuncContext extends FactorContext
	{
		public function __construct(FactorContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function funcSub(): ?FuncSubContext
	    {
	    	return $this->getTypedRuleContext(FuncSubContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterSubFunc($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitSubFunc($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitSubFunc($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class EnteroLitContext extends FactorContext
	{
		public function __construct(FactorContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function ENTERO(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::ENTERO, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterEnteroLit($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitEnteroLit($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitEnteroLit($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class TypeFuncContext extends FactorContext
	{
		public function __construct(FactorContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function funcType(): ?FuncTypeContext
	    {
	    	return $this->getTypedRuleContext(FuncTypeContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterTypeFunc($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitTypeFunc($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitTypeFunc($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class LenFuncContext extends FactorContext
	{
		public function __construct(FactorContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function funcLen(): ?FuncLenContext
	    {
	    	return $this->getTypedRuleContext(FuncLenContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterLenFunc($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitLenFunc($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitLenFunc($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class BoolLitContext extends FactorContext
	{
		public function __construct(FactorContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function BOOL(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::BOOL, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterBoolLit($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitBoolLit($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitBoolLit($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class RuneLitContext extends FactorContext
	{
		public function __construct(FactorContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function RUNE(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::RUNE, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterRuneLit($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitRuneLit($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitRuneLit($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ArregloAccesoContext extends FactorContext
	{
		public function __construct(FactorContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function accesoArreglo(): ?AccesoArregloContext
	    {
	    	return $this->getTypedRuleContext(AccesoArregloContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterArregloAcceso($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitArregloAcceso($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitArregloAcceso($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class StrLitContext extends FactorContext
	{
		public function __construct(FactorContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function STR(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::STR, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterStrLit($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitStrLit($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitStrLit($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class LlamarFuncionFContext extends FactorContext
	{
		public function __construct(FactorContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function llamadaFuncion(): ?LlamadaFuncionContext
	    {
	    	return $this->getTypedRuleContext(LlamadaFuncionContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterLlamarFuncionF($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitLlamarFuncionF($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitLlamarFuncionF($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ArrayLiteralContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_arrayLiteral;
	    }

	    public function LCOR(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::LCOR, 0);
	    }

	    public function logExpr(): ?LogExprContext
	    {
	    	return $this->getTypedRuleContext(LogExprContext::class, 0);
	    }

	    public function RCOR(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::RCOR, 0);
	    }

	    public function tipoBase(): ?TipoBaseContext
	    {
	    	return $this->getTypedRuleContext(TipoBaseContext::class, 0);
	    }

	    public function LBRACE(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::LBRACE, 0);
	    }

	    public function listaExpr(): ?ListaExprContext
	    {
	    	return $this->getTypedRuleContext(ListaExprContext::class, 0);
	    }

	    public function RBRACE(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::RBRACE, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterArrayLiteral($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitArrayLiteral($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitArrayLiteral($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ArrayLiteral2DContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_arrayLiteral2D;
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function LCOR(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(GrammarParser::LCOR);
	    	}

	        return $this->getToken(GrammarParser::LCOR, $index);
	    }

	    /**
	     * @return array<LogExprContext>|LogExprContext|null
	     */
	    public function logExpr(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(LogExprContext::class);
	    	}

	        return $this->getTypedRuleContext(LogExprContext::class, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function RCOR(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(GrammarParser::RCOR);
	    	}

	        return $this->getToken(GrammarParser::RCOR, $index);
	    }

	    public function tipoBase(): ?TipoBaseContext
	    {
	    	return $this->getTypedRuleContext(TipoBaseContext::class, 0);
	    }

	    public function LBRACE(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::LBRACE, 0);
	    }

	    public function listaValores(): ?ListaValoresContext
	    {
	    	return $this->getTypedRuleContext(ListaValoresContext::class, 0);
	    }

	    public function RBRACE(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::RBRACE, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterArrayLiteral2D($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitArrayLiteral2D($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitArrayLiteral2D($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class TiposContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_tipos;
	    }

	    public function tipoBase(): ?TipoBaseContext
	    {
	    	return $this->getTypedRuleContext(TipoBaseContext::class, 0);
	    }

	    public function tipoArray(): ?TipoArrayContext
	    {
	    	return $this->getTypedRuleContext(TipoArrayContext::class, 0);
	    }

	    public function tipoArray2D(): ?TipoArray2DContext
	    {
	    	return $this->getTypedRuleContext(TipoArray2DContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterTipos($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitTipos($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitTipos($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class TipoArrayContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_tipoArray;
	    }

	    public function LCOR(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::LCOR, 0);
	    }

	    public function logExpr(): ?LogExprContext
	    {
	    	return $this->getTypedRuleContext(LogExprContext::class, 0);
	    }

	    public function RCOR(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::RCOR, 0);
	    }

	    public function tipoBase(): ?TipoBaseContext
	    {
	    	return $this->getTypedRuleContext(TipoBaseContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterTipoArray($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitTipoArray($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitTipoArray($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class TipoArray2DContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_tipoArray2D;
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function LCOR(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(GrammarParser::LCOR);
	    	}

	        return $this->getToken(GrammarParser::LCOR, $index);
	    }

	    /**
	     * @return array<LogExprContext>|LogExprContext|null
	     */
	    public function logExpr(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(LogExprContext::class);
	    	}

	        return $this->getTypedRuleContext(LogExprContext::class, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function RCOR(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(GrammarParser::RCOR);
	    	}

	        return $this->getToken(GrammarParser::RCOR, $index);
	    }

	    public function tipoBase(): ?TipoBaseContext
	    {
	    	return $this->getTypedRuleContext(TipoBaseContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterTipoArray2D($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitTipoArray2D($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitTipoArray2D($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class TipoBaseContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_tipoBase;
	    }

	    public function INT_T(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::INT_T, 0);
	    }

	    public function FLOAT_T(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::FLOAT_T, 0);
	    }

	    public function BOOL_T(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::BOOL_T, 0);
	    }

	    public function RUNE_T(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::RUNE_T, 0);
	    }

	    public function STRING_T(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::STRING_T, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterTipoBase($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitTipoBase($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitTipoBase($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class SimboloAsignacionContext extends ParserRuleContext
	{
		/**
		 * @var Token|null $op
		 */
		public $op;

		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_simboloAsignacion;
	    }

	    public function ASSIGN(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::ASSIGN, 0);
	    }

	    public function PLUS(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::PLUS, 0);
	    }

	    public function MINUS(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::MINUS, 0);
	    }

	    public function MULT(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::MULT, 0);
	    }

	    public function DIV(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::DIV, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterSimboloAsignacion($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitSimboloAsignacion($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitSimboloAsignacion($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 
}
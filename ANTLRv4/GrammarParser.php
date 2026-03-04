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
               COLON = 33, SEMICOLON = 34, PLUS = 35, MINUS = 36, MULT = 37, 
               DIV = 38, MOD = 39, DOT = 40, REF = 41, ANDO = 42, ORO = 43, 
               LE = 44, GE = 45, EQUAL = 46, NEQUAL = 47, LESS = 48, GREATER = 49, 
               BOOL = 50, NIL = 51, ENTERO = 52, FLOAT = 53, STR = 54, RUNE = 55, 
               IDENTIFICADOR = 56, COMENTARIO_LINEA = 57, COMENTARIO_BLOQUE = 58, 
               WS = 59, ERROR = 60;

		public const RULE_p = 0, RULE_bMain = 1, RULE_i = 2, RULE_funcLen = 3, 
               RULE_funcNow = 4, RULE_funcSub = 5, RULE_funcType = 6, RULE_retornar = 7, 
               RULE_funcion = 8, RULE_listaRetorno = 9, RULE_listaParametros = 10, 
               RULE_bloqueFuncion = 11, RULE_declaracionArreglosD = 12, 
               RULE_listaValores = 13, RULE_asignacionArreglosD = 14, RULE_accesoArreglosD = 15, 
               RULE_declaracionArreglos = 16, RULE_asignacionArreglos = 17, 
               RULE_accesoArreglos = 18, RULE_sentenciaFor = 19, RULE_forClasico = 20, 
               RULE_condFor = 21, RULE_expFor = 22, RULE_sentenciaSwitch = 23, 
               RULE_bloqueSwitch = 24, RULE_bloqueCase = 25, RULE_bloqueDefault = 26, 
               RULE_sentenciaIf = 27, RULE_bloque = 28, RULE_asignacion = 29, 
               RULE_imprimir = 30, RULE_declaracion = 31, RULE_declaracionCorta = 32, 
               RULE_declaracionConst = 33, RULE_listaExpr = 34, RULE_listaId = 35, 
               RULE_logExpr = 36, RULE_relExpr = 37, RULE_expr = 38, RULE_term = 39, 
               RULE_factor = 40, RULE_tipos = 41, RULE_simboloAsignacion = 42;

		/**
		 * @var array<string>
		 */
		public const RULE_NAMES = [
			'p', 'bMain', 'i', 'funcLen', 'funcNow', 'funcSub', 'funcType', 'retornar', 
			'funcion', 'listaRetorno', 'listaParametros', 'bloqueFuncion', 'declaracionArreglosD', 
			'listaValores', 'asignacionArreglosD', 'accesoArreglosD', 'declaracionArreglos', 
			'asignacionArreglos', 'accesoArreglos', 'sentenciaFor', 'forClasico', 
			'condFor', 'expFor', 'sentenciaSwitch', 'bloqueSwitch', 'bloqueCase', 
			'bloqueDefault', 'sentenciaIf', 'bloque', 'asignacion', 'imprimir', 'declaracion', 
			'declaracionCorta', 'declaracionConst', 'listaExpr', 'listaId', 'logExpr', 
			'relExpr', 'expr', 'term', 'factor', 'tipos', 'simboloAsignacion'
		];

		/**
		 * @var array<string|null>
		 */
		private const LITERAL_NAMES = [
		    null, "'func'", "'main'", "'var'", "'fmt'", "'Println'", "'const'", 
		    "'if'", "'else'", "'switch'", "'case'", "'default'", "'for'", "'break'", 
		    "'continue'", "'return'", "'len'", "'now'", "'substr'", "'typeOf'", 
		    "'int'", "'float'", "'bool'", "'rune'", "'string'", "'{'", "'}'", 
		    "'('", "')'", "'['", "']'", "','", "'='", "':'", "';'", "'+'", "'-'", 
		    "'*'", "'/'", "'%'", "'.'", "'&'", "'&&'", "'||'", "'<='", "'>='", 
		    "'=='", "'!='", "'<'", "'>'", null, "'nil'"
		];

		/**
		 * @var array<string>
		 */
		private const SYMBOLIC_NAMES = [
		    null, "FUNC", "MAIN", "VAR", "FMT", "PRINTLN", "CONST", "IF", "ELSE", 
		    "SWITCH", "CASE", "DEFAULT", "FOR", "BREAK", "CONTINUE", "RETURN", 
		    "LEN", "NOW", "SUBSTR", "TYPEOF", "INT_T", "FLOAT_T", "BOOL_T", "RUNE_T", 
		    "STRING_T", "LBRACE", "RBRACE", "LPAREN", "RPAREN", "LCOR", "RCOR", 
		    "COMMA", "ASSIGN", "COLON", "SEMICOLON", "PLUS", "MINUS", "MULT", 
		    "DIV", "MOD", "DOT", "REF", "ANDO", "ORO", "LE", "GE", "EQUAL", "NEQUAL", 
		    "LESS", "GREATER", "BOOL", "NIL", "ENTERO", "FLOAT", "STR", "RUNE", 
		    "IDENTIFICADOR", "COMENTARIO_LINEA", "COMENTARIO_BLOQUE", "WS", "ERROR"
		];

		private const SERIALIZED_ATN =
			[4, 1, 60, 481, 2, 0, 7, 0, 2, 1, 7, 1, 2, 2, 7, 2, 2, 3, 7, 3, 2, 4, 
		    7, 4, 2, 5, 7, 5, 2, 6, 7, 6, 2, 7, 7, 7, 2, 8, 7, 8, 2, 9, 7, 9, 
		    2, 10, 7, 10, 2, 11, 7, 11, 2, 12, 7, 12, 2, 13, 7, 13, 2, 14, 7, 
		    14, 2, 15, 7, 15, 2, 16, 7, 16, 2, 17, 7, 17, 2, 18, 7, 18, 2, 19, 
		    7, 19, 2, 20, 7, 20, 2, 21, 7, 21, 2, 22, 7, 22, 2, 23, 7, 23, 2, 
		    24, 7, 24, 2, 25, 7, 25, 2, 26, 7, 26, 2, 27, 7, 27, 2, 28, 7, 28, 
		    2, 29, 7, 29, 2, 30, 7, 30, 2, 31, 7, 31, 2, 32, 7, 32, 2, 33, 7, 
		    33, 2, 34, 7, 34, 2, 35, 7, 35, 2, 36, 7, 36, 2, 37, 7, 37, 2, 38, 
		    7, 38, 2, 39, 7, 39, 2, 40, 7, 40, 2, 41, 7, 41, 2, 42, 7, 42, 1, 
		    0, 1, 0, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2, 1, 2, 1, 
		    2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 
		    2, 1, 2, 1, 2, 1, 2, 3, 2, 113, 8, 2, 1, 3, 1, 3, 1, 3, 1, 3, 1, 3, 
		    1, 4, 1, 4, 1, 4, 1, 4, 1, 5, 1, 5, 1, 5, 1, 5, 1, 5, 1, 5, 1, 5, 
		    1, 5, 1, 5, 1, 6, 1, 6, 1, 6, 1, 6, 1, 6, 1, 7, 1, 7, 1, 7, 1, 8, 
		    1, 8, 1, 8, 1, 8, 3, 8, 145, 8, 8, 1, 8, 1, 8, 1, 8, 1, 8, 1, 8, 1, 
		    8, 1, 8, 1, 8, 1, 8, 1, 8, 3, 8, 157, 8, 8, 1, 8, 1, 8, 1, 8, 1, 8, 
		    3, 8, 163, 8, 8, 1, 9, 1, 9, 1, 9, 5, 9, 168, 8, 9, 10, 9, 12, 9, 
		    171, 9, 9, 1, 10, 1, 10, 1, 10, 1, 10, 1, 10, 5, 10, 178, 8, 10, 10, 
		    10, 12, 10, 181, 9, 10, 1, 11, 1, 11, 1, 11, 3, 11, 186, 8, 11, 5, 
		    11, 188, 8, 11, 10, 11, 12, 11, 191, 9, 11, 1, 11, 1, 11, 1, 12, 1, 
		    12, 1, 12, 1, 12, 1, 12, 1, 12, 1, 12, 1, 12, 1, 12, 1, 12, 1, 12, 
		    1, 12, 1, 12, 1, 12, 1, 12, 1, 12, 1, 12, 1, 12, 1, 12, 1, 12, 1, 
		    12, 3, 12, 216, 8, 12, 1, 13, 1, 13, 1, 13, 1, 13, 1, 13, 5, 13, 223, 
		    8, 13, 10, 13, 12, 13, 226, 9, 13, 1, 14, 1, 14, 1, 14, 1, 14, 1, 
		    15, 1, 15, 1, 15, 1, 15, 1, 15, 1, 15, 1, 15, 1, 15, 1, 16, 1, 16, 
		    1, 16, 1, 16, 1, 16, 1, 16, 1, 16, 1, 16, 1, 16, 1, 16, 1, 16, 1, 
		    16, 1, 16, 1, 16, 1, 16, 3, 16, 255, 8, 16, 1, 17, 1, 17, 1, 17, 1, 
		    17, 1, 18, 1, 18, 1, 18, 1, 18, 1, 18, 1, 19, 1, 19, 1, 19, 1, 19, 
		    1, 19, 1, 19, 1, 19, 1, 19, 3, 19, 274, 8, 19, 1, 20, 1, 20, 1, 20, 
		    1, 20, 1, 20, 1, 20, 1, 20, 1, 21, 1, 21, 3, 21, 285, 8, 21, 1, 22, 
		    1, 22, 1, 22, 1, 22, 1, 22, 1, 22, 3, 22, 293, 8, 22, 1, 23, 1, 23, 
		    1, 23, 1, 23, 1, 23, 1, 23, 1, 24, 4, 24, 302, 8, 24, 11, 24, 12, 
		    24, 303, 1, 24, 3, 24, 307, 8, 24, 1, 25, 1, 25, 1, 25, 1, 25, 1, 
		    25, 1, 26, 1, 26, 1, 26, 1, 26, 1, 27, 1, 27, 1, 27, 1, 27, 1, 27, 
		    1, 27, 1, 27, 1, 27, 5, 27, 326, 8, 27, 10, 27, 12, 27, 329, 9, 27, 
		    1, 27, 1, 27, 3, 27, 333, 8, 27, 1, 28, 1, 28, 1, 28, 3, 28, 338, 
		    8, 28, 5, 28, 340, 8, 28, 10, 28, 12, 28, 343, 9, 28, 1, 28, 1, 28, 
		    1, 29, 1, 29, 1, 29, 1, 29, 1, 30, 1, 30, 1, 30, 1, 30, 1, 30, 1, 
		    30, 1, 30, 1, 31, 1, 31, 1, 31, 1, 31, 1, 31, 1, 31, 1, 31, 1, 31, 
		    1, 31, 1, 31, 3, 31, 368, 8, 31, 1, 32, 1, 32, 1, 32, 1, 32, 1, 32, 
		    1, 33, 1, 33, 1, 33, 1, 33, 1, 33, 1, 33, 1, 34, 1, 34, 1, 34, 5, 
		    34, 384, 8, 34, 10, 34, 12, 34, 387, 9, 34, 1, 35, 1, 35, 1, 35, 5, 
		    35, 392, 8, 35, 10, 35, 12, 35, 395, 9, 35, 1, 36, 1, 36, 1, 36, 1, 
		    36, 1, 36, 1, 36, 5, 36, 403, 8, 36, 10, 36, 12, 36, 406, 9, 36, 1, 
		    37, 1, 37, 1, 37, 1, 37, 1, 37, 1, 37, 5, 37, 414, 8, 37, 10, 37, 
		    12, 37, 417, 9, 37, 1, 38, 1, 38, 1, 38, 1, 38, 1, 38, 1, 38, 5, 38, 
		    425, 8, 38, 10, 38, 12, 38, 428, 9, 38, 1, 39, 1, 39, 1, 39, 1, 39, 
		    1, 39, 1, 39, 5, 39, 436, 8, 39, 10, 39, 12, 39, 439, 9, 39, 1, 40, 
		    1, 40, 1, 40, 1, 40, 1, 40, 1, 40, 1, 40, 1, 40, 1, 40, 1, 40, 1, 
		    40, 1, 40, 1, 40, 1, 40, 1, 40, 1, 40, 1, 40, 1, 40, 1, 40, 1, 40, 
		    1, 40, 1, 40, 1, 40, 1, 40, 1, 40, 1, 40, 1, 40, 1, 40, 1, 40, 1, 
		    40, 1, 40, 3, 40, 472, 8, 40, 1, 41, 1, 41, 1, 42, 1, 42, 1, 42, 3, 
		    42, 479, 8, 42, 1, 42, 0, 4, 72, 74, 76, 78, 43, 0, 2, 4, 6, 8, 10, 
		    12, 14, 16, 18, 20, 22, 24, 26, 28, 30, 32, 34, 36, 38, 40, 42, 44, 
		    46, 48, 50, 52, 54, 56, 58, 60, 62, 64, 66, 68, 70, 72, 74, 76, 78, 
		    80, 82, 84, 0, 6, 1, 0, 42, 43, 1, 0, 44, 49, 1, 0, 35, 36, 1, 0, 
		    37, 39, 1, 0, 20, 24, 1, 0, 35, 38, 501, 0, 86, 1, 0, 0, 0, 2, 89, 
		    1, 0, 0, 0, 4, 112, 1, 0, 0, 0, 6, 114, 1, 0, 0, 0, 8, 119, 1, 0, 
		    0, 0, 10, 123, 1, 0, 0, 0, 12, 132, 1, 0, 0, 0, 14, 137, 1, 0, 0, 
		    0, 16, 162, 1, 0, 0, 0, 18, 164, 1, 0, 0, 0, 20, 172, 1, 0, 0, 0, 
		    22, 182, 1, 0, 0, 0, 24, 194, 1, 0, 0, 0, 26, 224, 1, 0, 0, 0, 28, 
		    227, 1, 0, 0, 0, 30, 231, 1, 0, 0, 0, 32, 239, 1, 0, 0, 0, 34, 256, 
		    1, 0, 0, 0, 36, 260, 1, 0, 0, 0, 38, 273, 1, 0, 0, 0, 40, 275, 1, 
		    0, 0, 0, 42, 284, 1, 0, 0, 0, 44, 292, 1, 0, 0, 0, 46, 294, 1, 0, 
		    0, 0, 48, 301, 1, 0, 0, 0, 50, 308, 1, 0, 0, 0, 52, 313, 1, 0, 0, 
		    0, 54, 317, 1, 0, 0, 0, 56, 334, 1, 0, 0, 0, 58, 346, 1, 0, 0, 0, 
		    60, 350, 1, 0, 0, 0, 62, 367, 1, 0, 0, 0, 64, 369, 1, 0, 0, 0, 66, 
		    374, 1, 0, 0, 0, 68, 380, 1, 0, 0, 0, 70, 388, 1, 0, 0, 0, 72, 396, 
		    1, 0, 0, 0, 74, 407, 1, 0, 0, 0, 76, 418, 1, 0, 0, 0, 78, 429, 1, 
		    0, 0, 0, 80, 471, 1, 0, 0, 0, 82, 473, 1, 0, 0, 0, 84, 478, 1, 0, 
		    0, 0, 86, 87, 3, 2, 1, 0, 87, 88, 5, 0, 0, 1, 88, 1, 1, 0, 0, 0, 89, 
		    90, 5, 1, 0, 0, 90, 91, 5, 2, 0, 0, 91, 92, 5, 27, 0, 0, 92, 93, 5, 
		    28, 0, 0, 93, 94, 3, 56, 28, 0, 94, 3, 1, 0, 0, 0, 95, 113, 3, 60, 
		    30, 0, 96, 113, 3, 62, 31, 0, 97, 113, 3, 64, 32, 0, 98, 113, 3, 66, 
		    33, 0, 99, 113, 3, 58, 29, 0, 100, 113, 3, 54, 27, 0, 101, 113, 3, 
		    46, 23, 0, 102, 113, 3, 38, 19, 0, 103, 113, 3, 44, 22, 0, 104, 113, 
		    3, 32, 16, 0, 105, 113, 3, 34, 17, 0, 106, 113, 3, 24, 12, 0, 107, 
		    113, 3, 28, 14, 0, 108, 113, 3, 16, 8, 0, 109, 113, 3, 14, 7, 0, 110, 
		    113, 5, 14, 0, 0, 111, 113, 5, 13, 0, 0, 112, 95, 1, 0, 0, 0, 112, 
		    96, 1, 0, 0, 0, 112, 97, 1, 0, 0, 0, 112, 98, 1, 0, 0, 0, 112, 99, 
		    1, 0, 0, 0, 112, 100, 1, 0, 0, 0, 112, 101, 1, 0, 0, 0, 112, 102, 
		    1, 0, 0, 0, 112, 103, 1, 0, 0, 0, 112, 104, 1, 0, 0, 0, 112, 105, 
		    1, 0, 0, 0, 112, 106, 1, 0, 0, 0, 112, 107, 1, 0, 0, 0, 112, 108, 
		    1, 0, 0, 0, 112, 109, 1, 0, 0, 0, 112, 110, 1, 0, 0, 0, 112, 111, 
		    1, 0, 0, 0, 113, 5, 1, 0, 0, 0, 114, 115, 5, 16, 0, 0, 115, 116, 5, 
		    27, 0, 0, 116, 117, 3, 72, 36, 0, 117, 118, 5, 28, 0, 0, 118, 7, 1, 
		    0, 0, 0, 119, 120, 5, 17, 0, 0, 120, 121, 5, 27, 0, 0, 121, 122, 5, 
		    28, 0, 0, 122, 9, 1, 0, 0, 0, 123, 124, 5, 18, 0, 0, 124, 125, 5, 
		    27, 0, 0, 125, 126, 3, 72, 36, 0, 126, 127, 5, 31, 0, 0, 127, 128, 
		    3, 72, 36, 0, 128, 129, 5, 31, 0, 0, 129, 130, 3, 72, 36, 0, 130, 
		    131, 5, 28, 0, 0, 131, 11, 1, 0, 0, 0, 132, 133, 5, 19, 0, 0, 133, 
		    134, 5, 27, 0, 0, 134, 135, 5, 56, 0, 0, 135, 136, 5, 28, 0, 0, 136, 
		    13, 1, 0, 0, 0, 137, 138, 5, 15, 0, 0, 138, 139, 3, 68, 34, 0, 139, 
		    15, 1, 0, 0, 0, 140, 141, 5, 1, 0, 0, 141, 142, 5, 56, 0, 0, 142, 
		    144, 5, 27, 0, 0, 143, 145, 3, 20, 10, 0, 144, 143, 1, 0, 0, 0, 144, 
		    145, 1, 0, 0, 0, 145, 146, 1, 0, 0, 0, 146, 147, 5, 28, 0, 0, 147, 
		    148, 5, 27, 0, 0, 148, 149, 3, 18, 9, 0, 149, 150, 5, 28, 0, 0, 150, 
		    151, 3, 22, 11, 0, 151, 163, 1, 0, 0, 0, 152, 153, 5, 1, 0, 0, 153, 
		    154, 5, 56, 0, 0, 154, 156, 5, 27, 0, 0, 155, 157, 3, 20, 10, 0, 156, 
		    155, 1, 0, 0, 0, 156, 157, 1, 0, 0, 0, 157, 158, 1, 0, 0, 0, 158, 
		    159, 5, 28, 0, 0, 159, 160, 3, 82, 41, 0, 160, 161, 3, 22, 11, 0, 
		    161, 163, 1, 0, 0, 0, 162, 140, 1, 0, 0, 0, 162, 152, 1, 0, 0, 0, 
		    163, 17, 1, 0, 0, 0, 164, 169, 3, 82, 41, 0, 165, 166, 5, 31, 0, 0, 
		    166, 168, 3, 82, 41, 0, 167, 165, 1, 0, 0, 0, 168, 171, 1, 0, 0, 0, 
		    169, 167, 1, 0, 0, 0, 169, 170, 1, 0, 0, 0, 170, 19, 1, 0, 0, 0, 171, 
		    169, 1, 0, 0, 0, 172, 173, 5, 56, 0, 0, 173, 179, 3, 82, 41, 0, 174, 
		    175, 5, 31, 0, 0, 175, 176, 5, 56, 0, 0, 176, 178, 3, 82, 41, 0, 177, 
		    174, 1, 0, 0, 0, 178, 181, 1, 0, 0, 0, 179, 177, 1, 0, 0, 0, 179, 
		    180, 1, 0, 0, 0, 180, 21, 1, 0, 0, 0, 181, 179, 1, 0, 0, 0, 182, 189, 
		    5, 25, 0, 0, 183, 185, 3, 4, 2, 0, 184, 186, 5, 34, 0, 0, 185, 184, 
		    1, 0, 0, 0, 185, 186, 1, 0, 0, 0, 186, 188, 1, 0, 0, 0, 187, 183, 
		    1, 0, 0, 0, 188, 191, 1, 0, 0, 0, 189, 187, 1, 0, 0, 0, 189, 190, 
		    1, 0, 0, 0, 190, 192, 1, 0, 0, 0, 191, 189, 1, 0, 0, 0, 192, 193, 
		    5, 26, 0, 0, 193, 23, 1, 0, 0, 0, 194, 195, 5, 3, 0, 0, 195, 196, 
		    5, 56, 0, 0, 196, 197, 5, 29, 0, 0, 197, 198, 3, 72, 36, 0, 198, 199, 
		    5, 30, 0, 0, 199, 200, 5, 29, 0, 0, 200, 201, 3, 72, 36, 0, 201, 202, 
		    5, 30, 0, 0, 202, 215, 3, 82, 41, 0, 203, 204, 5, 32, 0, 0, 204, 205, 
		    5, 29, 0, 0, 205, 206, 3, 72, 36, 0, 206, 207, 5, 30, 0, 0, 207, 208, 
		    5, 29, 0, 0, 208, 209, 3, 72, 36, 0, 209, 210, 5, 30, 0, 0, 210, 211, 
		    3, 82, 41, 0, 211, 212, 5, 25, 0, 0, 212, 213, 3, 26, 13, 0, 213, 
		    214, 5, 26, 0, 0, 214, 216, 1, 0, 0, 0, 215, 203, 1, 0, 0, 0, 215, 
		    216, 1, 0, 0, 0, 216, 25, 1, 0, 0, 0, 217, 218, 5, 25, 0, 0, 218, 
		    219, 3, 68, 34, 0, 219, 220, 5, 26, 0, 0, 220, 221, 5, 31, 0, 0, 221, 
		    223, 1, 0, 0, 0, 222, 217, 1, 0, 0, 0, 223, 226, 1, 0, 0, 0, 224, 
		    222, 1, 0, 0, 0, 224, 225, 1, 0, 0, 0, 225, 27, 1, 0, 0, 0, 226, 224, 
		    1, 0, 0, 0, 227, 228, 3, 30, 15, 0, 228, 229, 5, 32, 0, 0, 229, 230, 
		    3, 72, 36, 0, 230, 29, 1, 0, 0, 0, 231, 232, 5, 56, 0, 0, 232, 233, 
		    5, 29, 0, 0, 233, 234, 3, 72, 36, 0, 234, 235, 5, 30, 0, 0, 235, 236, 
		    5, 29, 0, 0, 236, 237, 3, 72, 36, 0, 237, 238, 5, 30, 0, 0, 238, 31, 
		    1, 0, 0, 0, 239, 240, 5, 3, 0, 0, 240, 241, 5, 56, 0, 0, 241, 242, 
		    5, 29, 0, 0, 242, 243, 3, 72, 36, 0, 243, 244, 5, 30, 0, 0, 244, 254, 
		    3, 82, 41, 0, 245, 246, 5, 32, 0, 0, 246, 247, 5, 29, 0, 0, 247, 248, 
		    3, 72, 36, 0, 248, 249, 5, 30, 0, 0, 249, 250, 3, 82, 41, 0, 250, 
		    251, 5, 25, 0, 0, 251, 252, 3, 68, 34, 0, 252, 253, 5, 26, 0, 0, 253, 
		    255, 1, 0, 0, 0, 254, 245, 1, 0, 0, 0, 254, 255, 1, 0, 0, 0, 255, 
		    33, 1, 0, 0, 0, 256, 257, 3, 36, 18, 0, 257, 258, 5, 32, 0, 0, 258, 
		    259, 3, 72, 36, 0, 259, 35, 1, 0, 0, 0, 260, 261, 5, 56, 0, 0, 261, 
		    262, 5, 29, 0, 0, 262, 263, 3, 72, 36, 0, 263, 264, 5, 30, 0, 0, 264, 
		    37, 1, 0, 0, 0, 265, 266, 5, 12, 0, 0, 266, 274, 3, 40, 20, 0, 267, 
		    268, 5, 12, 0, 0, 268, 269, 3, 72, 36, 0, 269, 270, 3, 56, 28, 0, 
		    270, 274, 1, 0, 0, 0, 271, 272, 5, 12, 0, 0, 272, 274, 3, 56, 28, 
		    0, 273, 265, 1, 0, 0, 0, 273, 267, 1, 0, 0, 0, 273, 271, 1, 0, 0, 
		    0, 274, 39, 1, 0, 0, 0, 275, 276, 3, 64, 32, 0, 276, 277, 5, 34, 0, 
		    0, 277, 278, 3, 72, 36, 0, 278, 279, 5, 34, 0, 0, 279, 280, 3, 42, 
		    21, 0, 280, 281, 3, 56, 28, 0, 281, 41, 1, 0, 0, 0, 282, 285, 3, 44, 
		    22, 0, 283, 285, 3, 58, 29, 0, 284, 282, 1, 0, 0, 0, 284, 283, 1, 
		    0, 0, 0, 285, 43, 1, 0, 0, 0, 286, 287, 5, 56, 0, 0, 287, 288, 5, 
		    35, 0, 0, 288, 293, 5, 35, 0, 0, 289, 290, 5, 56, 0, 0, 290, 291, 
		    5, 36, 0, 0, 291, 293, 5, 36, 0, 0, 292, 286, 1, 0, 0, 0, 292, 289, 
		    1, 0, 0, 0, 293, 45, 1, 0, 0, 0, 294, 295, 5, 9, 0, 0, 295, 296, 3, 
		    72, 36, 0, 296, 297, 5, 25, 0, 0, 297, 298, 3, 48, 24, 0, 298, 299, 
		    5, 26, 0, 0, 299, 47, 1, 0, 0, 0, 300, 302, 3, 50, 25, 0, 301, 300, 
		    1, 0, 0, 0, 302, 303, 1, 0, 0, 0, 303, 301, 1, 0, 0, 0, 303, 304, 
		    1, 0, 0, 0, 304, 306, 1, 0, 0, 0, 305, 307, 3, 52, 26, 0, 306, 305, 
		    1, 0, 0, 0, 306, 307, 1, 0, 0, 0, 307, 49, 1, 0, 0, 0, 308, 309, 5, 
		    10, 0, 0, 309, 310, 3, 68, 34, 0, 310, 311, 5, 33, 0, 0, 311, 312, 
		    3, 56, 28, 0, 312, 51, 1, 0, 0, 0, 313, 314, 5, 11, 0, 0, 314, 315, 
		    5, 33, 0, 0, 315, 316, 3, 56, 28, 0, 316, 53, 1, 0, 0, 0, 317, 318, 
		    5, 7, 0, 0, 318, 319, 3, 72, 36, 0, 319, 327, 3, 56, 28, 0, 320, 321, 
		    5, 8, 0, 0, 321, 322, 5, 7, 0, 0, 322, 323, 3, 72, 36, 0, 323, 324, 
		    3, 56, 28, 0, 324, 326, 1, 0, 0, 0, 325, 320, 1, 0, 0, 0, 326, 329, 
		    1, 0, 0, 0, 327, 325, 1, 0, 0, 0, 327, 328, 1, 0, 0, 0, 328, 332, 
		    1, 0, 0, 0, 329, 327, 1, 0, 0, 0, 330, 331, 5, 8, 0, 0, 331, 333, 
		    3, 56, 28, 0, 332, 330, 1, 0, 0, 0, 332, 333, 1, 0, 0, 0, 333, 55, 
		    1, 0, 0, 0, 334, 341, 5, 25, 0, 0, 335, 337, 3, 4, 2, 0, 336, 338, 
		    5, 34, 0, 0, 337, 336, 1, 0, 0, 0, 337, 338, 1, 0, 0, 0, 338, 340, 
		    1, 0, 0, 0, 339, 335, 1, 0, 0, 0, 340, 343, 1, 0, 0, 0, 341, 339, 
		    1, 0, 0, 0, 341, 342, 1, 0, 0, 0, 342, 344, 1, 0, 0, 0, 343, 341, 
		    1, 0, 0, 0, 344, 345, 5, 26, 0, 0, 345, 57, 1, 0, 0, 0, 346, 347, 
		    5, 56, 0, 0, 347, 348, 3, 84, 42, 0, 348, 349, 3, 72, 36, 0, 349, 
		    59, 1, 0, 0, 0, 350, 351, 5, 4, 0, 0, 351, 352, 5, 40, 0, 0, 352, 
		    353, 5, 5, 0, 0, 353, 354, 5, 27, 0, 0, 354, 355, 3, 68, 34, 0, 355, 
		    356, 5, 28, 0, 0, 356, 61, 1, 0, 0, 0, 357, 358, 5, 3, 0, 0, 358, 
		    359, 3, 70, 35, 0, 359, 360, 3, 82, 41, 0, 360, 368, 1, 0, 0, 0, 361, 
		    362, 5, 3, 0, 0, 362, 363, 3, 70, 35, 0, 363, 364, 3, 82, 41, 0, 364, 
		    365, 5, 32, 0, 0, 365, 366, 3, 68, 34, 0, 366, 368, 1, 0, 0, 0, 367, 
		    357, 1, 0, 0, 0, 367, 361, 1, 0, 0, 0, 368, 63, 1, 0, 0, 0, 369, 370, 
		    3, 70, 35, 0, 370, 371, 5, 33, 0, 0, 371, 372, 5, 32, 0, 0, 372, 373, 
		    3, 68, 34, 0, 373, 65, 1, 0, 0, 0, 374, 375, 5, 6, 0, 0, 375, 376, 
		    5, 56, 0, 0, 376, 377, 3, 82, 41, 0, 377, 378, 5, 32, 0, 0, 378, 379, 
		    3, 72, 36, 0, 379, 67, 1, 0, 0, 0, 380, 385, 3, 72, 36, 0, 381, 382, 
		    5, 31, 0, 0, 382, 384, 3, 72, 36, 0, 383, 381, 1, 0, 0, 0, 384, 387, 
		    1, 0, 0, 0, 385, 383, 1, 0, 0, 0, 385, 386, 1, 0, 0, 0, 386, 69, 1, 
		    0, 0, 0, 387, 385, 1, 0, 0, 0, 388, 393, 5, 56, 0, 0, 389, 390, 5, 
		    31, 0, 0, 390, 392, 5, 56, 0, 0, 391, 389, 1, 0, 0, 0, 392, 395, 1, 
		    0, 0, 0, 393, 391, 1, 0, 0, 0, 393, 394, 1, 0, 0, 0, 394, 71, 1, 0, 
		    0, 0, 395, 393, 1, 0, 0, 0, 396, 397, 6, 36, -1, 0, 397, 398, 3, 74, 
		    37, 0, 398, 404, 1, 0, 0, 0, 399, 400, 10, 2, 0, 0, 400, 401, 7, 0, 
		    0, 0, 401, 403, 3, 74, 37, 0, 402, 399, 1, 0, 0, 0, 403, 406, 1, 0, 
		    0, 0, 404, 402, 1, 0, 0, 0, 404, 405, 1, 0, 0, 0, 405, 73, 1, 0, 0, 
		    0, 406, 404, 1, 0, 0, 0, 407, 408, 6, 37, -1, 0, 408, 409, 3, 76, 
		    38, 0, 409, 415, 1, 0, 0, 0, 410, 411, 10, 2, 0, 0, 411, 412, 7, 1, 
		    0, 0, 412, 414, 3, 76, 38, 0, 413, 410, 1, 0, 0, 0, 414, 417, 1, 0, 
		    0, 0, 415, 413, 1, 0, 0, 0, 415, 416, 1, 0, 0, 0, 416, 75, 1, 0, 0, 
		    0, 417, 415, 1, 0, 0, 0, 418, 419, 6, 38, -1, 0, 419, 420, 3, 78, 
		    39, 0, 420, 426, 1, 0, 0, 0, 421, 422, 10, 2, 0, 0, 422, 423, 7, 2, 
		    0, 0, 423, 425, 3, 78, 39, 0, 424, 421, 1, 0, 0, 0, 425, 428, 1, 0, 
		    0, 0, 426, 424, 1, 0, 0, 0, 426, 427, 1, 0, 0, 0, 427, 77, 1, 0, 0, 
		    0, 428, 426, 1, 0, 0, 0, 429, 430, 6, 39, -1, 0, 430, 431, 3, 80, 
		    40, 0, 431, 437, 1, 0, 0, 0, 432, 433, 10, 2, 0, 0, 433, 434, 7, 3, 
		    0, 0, 434, 436, 3, 80, 40, 0, 435, 432, 1, 0, 0, 0, 436, 439, 1, 0, 
		    0, 0, 437, 435, 1, 0, 0, 0, 437, 438, 1, 0, 0, 0, 438, 79, 1, 0, 0, 
		    0, 439, 437, 1, 0, 0, 0, 440, 441, 5, 27, 0, 0, 441, 442, 3, 72, 36, 
		    0, 442, 443, 5, 28, 0, 0, 443, 472, 1, 0, 0, 0, 444, 445, 5, 36, 0, 
		    0, 445, 472, 3, 80, 40, 0, 446, 472, 5, 53, 0, 0, 447, 472, 5, 52, 
		    0, 0, 448, 472, 5, 50, 0, 0, 449, 472, 5, 55, 0, 0, 450, 472, 5, 54, 
		    0, 0, 451, 472, 5, 51, 0, 0, 452, 453, 5, 41, 0, 0, 453, 472, 5, 56, 
		    0, 0, 454, 455, 5, 41, 0, 0, 455, 472, 3, 36, 18, 0, 456, 457, 5, 
		    41, 0, 0, 457, 472, 3, 30, 15, 0, 458, 459, 5, 37, 0, 0, 459, 472, 
		    5, 56, 0, 0, 460, 461, 5, 37, 0, 0, 461, 472, 3, 36, 18, 0, 462, 463, 
		    5, 37, 0, 0, 463, 472, 3, 30, 15, 0, 464, 472, 5, 56, 0, 0, 465, 472, 
		    3, 36, 18, 0, 466, 472, 3, 30, 15, 0, 467, 472, 3, 8, 4, 0, 468, 472, 
		    3, 6, 3, 0, 469, 472, 3, 10, 5, 0, 470, 472, 3, 12, 6, 0, 471, 440, 
		    1, 0, 0, 0, 471, 444, 1, 0, 0, 0, 471, 446, 1, 0, 0, 0, 471, 447, 
		    1, 0, 0, 0, 471, 448, 1, 0, 0, 0, 471, 449, 1, 0, 0, 0, 471, 450, 
		    1, 0, 0, 0, 471, 451, 1, 0, 0, 0, 471, 452, 1, 0, 0, 0, 471, 454, 
		    1, 0, 0, 0, 471, 456, 1, 0, 0, 0, 471, 458, 1, 0, 0, 0, 471, 460, 
		    1, 0, 0, 0, 471, 462, 1, 0, 0, 0, 471, 464, 1, 0, 0, 0, 471, 465, 
		    1, 0, 0, 0, 471, 466, 1, 0, 0, 0, 471, 467, 1, 0, 0, 0, 471, 468, 
		    1, 0, 0, 0, 471, 469, 1, 0, 0, 0, 471, 470, 1, 0, 0, 0, 472, 81, 1, 
		    0, 0, 0, 473, 474, 7, 4, 0, 0, 474, 83, 1, 0, 0, 0, 475, 479, 5, 32, 
		    0, 0, 476, 477, 7, 5, 0, 0, 477, 479, 5, 32, 0, 0, 478, 475, 1, 0, 
		    0, 0, 478, 476, 1, 0, 0, 0, 479, 85, 1, 0, 0, 0, 29, 112, 144, 156, 
		    162, 169, 179, 185, 189, 215, 224, 254, 273, 284, 292, 303, 306, 327, 
		    332, 337, 341, 367, 385, 393, 404, 415, 426, 437, 471, 478];
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
		public function p(): Context\PContext
		{
		    $localContext = new Context\PContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 0, self::RULE_p);

		    try {
		        $localContext = new Context\ProgramaContext($localContext);
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(86);
		        $this->bMain();
		        $this->setState(87);
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
		public function bMain(): Context\BMainContext
		{
		    $localContext = new Context\BMainContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 2, self::RULE_bMain);

		    try {
		        $localContext = new Context\BloqueMainContext($localContext);
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(89);
		        $this->match(self::FUNC);
		        $this->setState(90);
		        $this->match(self::MAIN);
		        $this->setState(91);
		        $this->match(self::LPAREN);
		        $this->setState(92);
		        $this->match(self::RPAREN);
		        $this->setState(93);
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

		    $this->enterRule($localContext, 4, self::RULE_i);

		    try {
		        $this->setState(112);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 0, $this->ctx)) {
		        	case 1:
		        	    $localContext = new Context\FuncionImprimirContext($localContext);
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(95);
		        	    $this->imprimir();
		        	break;

		        	case 2:
		        	    $localContext = new Context\DeclarationContext($localContext);
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(96);
		        	    $this->declaracion();
		        	break;

		        	case 3:
		        	    $localContext = new Context\ShortDeclarationContext($localContext);
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(97);
		        	    $this->declaracionCorta();
		        	break;

		        	case 4:
		        	    $localContext = new Context\ConstDeclarationContext($localContext);
		        	    $this->enterOuterAlt($localContext, 4);
		        	    $this->setState(98);
		        	    $this->declaracionConst();
		        	break;

		        	case 5:
		        	    $localContext = new Context\AsignationContext($localContext);
		        	    $this->enterOuterAlt($localContext, 5);
		        	    $this->setState(99);
		        	    $this->asignacion();
		        	break;

		        	case 6:
		        	    $localContext = new Context\IfSentenciaContext($localContext);
		        	    $this->enterOuterAlt($localContext, 6);
		        	    $this->setState(100);
		        	    $this->sentenciaIf();
		        	break;

		        	case 7:
		        	    $localContext = new Context\SwitchSentenciaContext($localContext);
		        	    $this->enterOuterAlt($localContext, 7);
		        	    $this->setState(101);
		        	    $this->sentenciaSwitch();
		        	break;

		        	case 8:
		        	    $localContext = new Context\ForSentenciaContext($localContext);
		        	    $this->enterOuterAlt($localContext, 8);
		        	    $this->setState(102);
		        	    $this->sentenciaFor();
		        	break;

		        	case 9:
		        	    $localContext = new Context\IncDecContext($localContext);
		        	    $this->enterOuterAlt($localContext, 9);
		        	    $this->setState(103);
		        	    $this->expFor();
		        	break;

		        	case 10:
		        	    $localContext = new Context\ArreglosDeclarationContext($localContext);
		        	    $this->enterOuterAlt($localContext, 10);
		        	    $this->setState(104);
		        	    $this->declaracionArreglos();
		        	break;

		        	case 11:
		        	    $localContext = new Context\ArreglosAsignationContext($localContext);
		        	    $this->enterOuterAlt($localContext, 11);
		        	    $this->setState(105);
		        	    $this->asignacionArreglos();
		        	break;

		        	case 12:
		        	    $localContext = new Context\ArreglosDeclarationDContext($localContext);
		        	    $this->enterOuterAlt($localContext, 12);
		        	    $this->setState(106);
		        	    $this->declaracionArreglosD();
		        	break;

		        	case 13:
		        	    $localContext = new Context\ArreglosAsignationDContext($localContext);
		        	    $this->enterOuterAlt($localContext, 13);
		        	    $this->setState(107);
		        	    $this->asignacionArreglosD();
		        	break;

		        	case 14:
		        	    $localContext = new Context\DFunctionContext($localContext);
		        	    $this->enterOuterAlt($localContext, 14);
		        	    $this->setState(108);
		        	    $this->funcion();
		        	break;

		        	case 15:
		        	    $localContext = new Context\SentenciaReturnContext($localContext);
		        	    $this->enterOuterAlt($localContext, 15);
		        	    $this->setState(109);
		        	    $this->retornar();
		        	break;

		        	case 16:
		        	    $localContext = new Context\SentenciaContinueContext($localContext);
		        	    $this->enterOuterAlt($localContext, 16);
		        	    $this->setState(110);
		        	    $this->match(self::CONTINUE);
		        	break;

		        	case 17:
		        	    $localContext = new Context\SentenciaBreakContext($localContext);
		        	    $this->enterOuterAlt($localContext, 17);
		        	    $this->setState(111);
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

		    $this->enterRule($localContext, 6, self::RULE_funcLen);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(114);
		        $this->match(self::LEN);
		        $this->setState(115);
		        $this->match(self::LPAREN);
		        $this->setState(116);
		        $this->recursiveLogExpr(0);
		        $this->setState(117);
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

		    $this->enterRule($localContext, 8, self::RULE_funcNow);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(119);
		        $this->match(self::NOW);
		        $this->setState(120);
		        $this->match(self::LPAREN);
		        $this->setState(121);
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

		    $this->enterRule($localContext, 10, self::RULE_funcSub);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(123);
		        $this->match(self::SUBSTR);
		        $this->setState(124);
		        $this->match(self::LPAREN);
		        $this->setState(125);
		        $this->recursiveLogExpr(0);
		        $this->setState(126);
		        $this->match(self::COMMA);
		        $this->setState(127);
		        $this->recursiveLogExpr(0);
		        $this->setState(128);
		        $this->match(self::COMMA);
		        $this->setState(129);
		        $this->recursiveLogExpr(0);
		        $this->setState(130);
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

		    $this->enterRule($localContext, 12, self::RULE_funcType);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(132);
		        $this->match(self::TYPEOF);
		        $this->setState(133);
		        $this->match(self::LPAREN);
		        $this->setState(134);
		        $this->match(self::IDENTIFICADOR);
		        $this->setState(135);
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
		public function retornar(): Context\RetornarContext
		{
		    $localContext = new Context\RetornarContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 14, self::RULE_retornar);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(137);
		        $this->match(self::RETURN);
		        $this->setState(138);
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
		public function funcion(): Context\FuncionContext
		{
		    $localContext = new Context\FuncionContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 16, self::RULE_funcion);

		    try {
		        $this->setState(162);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 3, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(140);
		        	    $this->match(self::FUNC);
		        	    $this->setState(141);
		        	    $this->match(self::IDENTIFICADOR);
		        	    $this->setState(142);
		        	    $this->match(self::LPAREN);
		        	    $this->setState(144);
		        	    $this->errorHandler->sync($this);
		        	    $_la = $this->input->LA(1);

		        	    if ($_la === self::IDENTIFICADOR) {
		        	    	$this->setState(143);
		        	    	$this->listaParametros();
		        	    }
		        	    $this->setState(146);
		        	    $this->match(self::RPAREN);
		        	    $this->setState(147);
		        	    $this->match(self::LPAREN);
		        	    $this->setState(148);
		        	    $this->listaRetorno();
		        	    $this->setState(149);
		        	    $this->match(self::RPAREN);
		        	    $this->setState(150);
		        	    $this->bloqueFuncion();
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(152);
		        	    $this->match(self::FUNC);
		        	    $this->setState(153);
		        	    $this->match(self::IDENTIFICADOR);
		        	    $this->setState(154);
		        	    $this->match(self::LPAREN);
		        	    $this->setState(156);
		        	    $this->errorHandler->sync($this);
		        	    $_la = $this->input->LA(1);

		        	    if ($_la === self::IDENTIFICADOR) {
		        	    	$this->setState(155);
		        	    	$this->listaParametros();
		        	    }
		        	    $this->setState(158);
		        	    $this->match(self::RPAREN);
		        	    $this->setState(159);
		        	    $this->tipos();
		        	    $this->setState(160);
		        	    $this->bloqueFuncion();
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

		    $this->enterRule($localContext, 18, self::RULE_listaRetorno);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(164);
		        $this->tipos();
		        $this->setState(169);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::COMMA) {
		        	$this->setState(165);
		        	$this->match(self::COMMA);
		        	$this->setState(166);
		        	$this->tipos();
		        	$this->setState(171);
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

		    $this->enterRule($localContext, 20, self::RULE_listaParametros);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(172);
		        $this->match(self::IDENTIFICADOR);
		        $this->setState(173);
		        $this->tipos();
		        $this->setState(179);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::COMMA) {
		        	$this->setState(174);
		        	$this->match(self::COMMA);
		        	$this->setState(175);
		        	$this->match(self::IDENTIFICADOR);
		        	$this->setState(176);
		        	$this->tipos();
		        	$this->setState(181);
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
		public function bloqueFuncion(): Context\BloqueFuncionContext
		{
		    $localContext = new Context\BloqueFuncionContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 22, self::RULE_bloqueFuncion);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(182);
		        $this->match(self::LBRACE);
		        $this->setState(189);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 72057594037990106) !== 0)) {
		        	$this->setState(183);
		        	$this->i();
		        	$this->setState(185);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);

		        	if ($_la === self::SEMICOLON) {
		        		$this->setState(184);
		        		$this->match(self::SEMICOLON);
		        	}
		        	$this->setState(191);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(192);
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
		public function declaracionArreglosD(): Context\DeclaracionArreglosDContext
		{
		    $localContext = new Context\DeclaracionArreglosDContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 24, self::RULE_declaracionArreglosD);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(194);
		        $this->match(self::VAR);
		        $this->setState(195);
		        $this->match(self::IDENTIFICADOR);
		        $this->setState(196);
		        $this->match(self::LCOR);
		        $this->setState(197);
		        $this->recursiveLogExpr(0);
		        $this->setState(198);
		        $this->match(self::RCOR);
		        $this->setState(199);
		        $this->match(self::LCOR);
		        $this->setState(200);
		        $this->recursiveLogExpr(0);
		        $this->setState(201);
		        $this->match(self::RCOR);
		        $this->setState(202);
		        $this->tipos();
		        $this->setState(215);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::ASSIGN) {
		        	$this->setState(203);
		        	$this->match(self::ASSIGN);
		        	$this->setState(204);
		        	$this->match(self::LCOR);
		        	$this->setState(205);
		        	$this->recursiveLogExpr(0);
		        	$this->setState(206);
		        	$this->match(self::RCOR);
		        	$this->setState(207);
		        	$this->match(self::LCOR);
		        	$this->setState(208);
		        	$this->recursiveLogExpr(0);
		        	$this->setState(209);
		        	$this->match(self::RCOR);
		        	$this->setState(210);
		        	$this->tipos();
		        	$this->setState(211);
		        	$this->match(self::LBRACE);
		        	$this->setState(212);
		        	$this->listaValores();
		        	$this->setState(213);
		        	$this->match(self::RBRACE);
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

		    $this->enterRule($localContext, 26, self::RULE_listaValores);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(224);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::LBRACE) {
		        	$this->setState(217);
		        	$this->match(self::LBRACE);
		        	$this->setState(218);
		        	$this->listaExpr();
		        	$this->setState(219);
		        	$this->match(self::RBRACE);
		        	$this->setState(220);
		        	$this->match(self::COMMA);
		        	$this->setState(226);
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
		public function asignacionArreglosD(): Context\AsignacionArreglosDContext
		{
		    $localContext = new Context\AsignacionArreglosDContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 28, self::RULE_asignacionArreglosD);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(227);
		        $this->accesoArreglosD();
		        $this->setState(228);
		        $this->match(self::ASSIGN);
		        $this->setState(229);
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
		public function accesoArreglosD(): Context\AccesoArreglosDContext
		{
		    $localContext = new Context\AccesoArreglosDContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 30, self::RULE_accesoArreglosD);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(231);
		        $this->match(self::IDENTIFICADOR);
		        $this->setState(232);
		        $this->match(self::LCOR);
		        $this->setState(233);
		        $this->recursiveLogExpr(0);
		        $this->setState(234);
		        $this->match(self::RCOR);
		        $this->setState(235);
		        $this->match(self::LCOR);
		        $this->setState(236);
		        $this->recursiveLogExpr(0);
		        $this->setState(237);
		        $this->match(self::RCOR);
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
		public function declaracionArreglos(): Context\DeclaracionArreglosContext
		{
		    $localContext = new Context\DeclaracionArreglosContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 32, self::RULE_declaracionArreglos);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(239);
		        $this->match(self::VAR);
		        $this->setState(240);
		        $this->match(self::IDENTIFICADOR);
		        $this->setState(241);
		        $this->match(self::LCOR);
		        $this->setState(242);
		        $this->recursiveLogExpr(0);
		        $this->setState(243);
		        $this->match(self::RCOR);
		        $this->setState(244);
		        $this->tipos();
		        $this->setState(254);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::ASSIGN) {
		        	$this->setState(245);
		        	$this->match(self::ASSIGN);
		        	$this->setState(246);
		        	$this->match(self::LCOR);
		        	$this->setState(247);
		        	$this->recursiveLogExpr(0);
		        	$this->setState(248);
		        	$this->match(self::RCOR);
		        	$this->setState(249);
		        	$this->tipos();
		        	$this->setState(250);
		        	$this->match(self::LBRACE);
		        	$this->setState(251);
		        	$this->listaExpr();
		        	$this->setState(252);
		        	$this->match(self::RBRACE);
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
		public function asignacionArreglos(): Context\AsignacionArreglosContext
		{
		    $localContext = new Context\AsignacionArreglosContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 34, self::RULE_asignacionArreglos);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(256);
		        $this->accesoArreglos();
		        $this->setState(257);
		        $this->match(self::ASSIGN);
		        $this->setState(258);
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
		public function accesoArreglos(): Context\AccesoArreglosContext
		{
		    $localContext = new Context\AccesoArreglosContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 36, self::RULE_accesoArreglos);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(260);
		        $this->match(self::IDENTIFICADOR);
		        $this->setState(261);
		        $this->match(self::LCOR);
		        $this->setState(262);
		        $this->recursiveLogExpr(0);
		        $this->setState(263);
		        $this->match(self::RCOR);
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

		    $this->enterRule($localContext, 38, self::RULE_sentenciaFor);

		    try {
		        $this->setState(273);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 11, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(265);
		        	    $this->match(self::FOR);
		        	    $this->setState(266);
		        	    $this->forClasico();
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(267);
		        	    $this->match(self::FOR);
		        	    $this->setState(268);
		        	    $this->recursiveLogExpr(0);
		        	    $this->setState(269);
		        	    $this->bloque();
		        	break;

		        	case 3:
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(271);
		        	    $this->match(self::FOR);
		        	    $this->setState(272);
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

		    $this->enterRule($localContext, 40, self::RULE_forClasico);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(275);
		        $this->declaracionCorta();
		        $this->setState(276);
		        $this->match(self::SEMICOLON);
		        $this->setState(277);
		        $this->recursiveLogExpr(0);
		        $this->setState(278);
		        $this->match(self::SEMICOLON);
		        $this->setState(279);
		        $this->condFor();
		        $this->setState(280);
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

		    $this->enterRule($localContext, 42, self::RULE_condFor);

		    try {
		        $this->setState(284);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 12, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(282);
		        	    $this->expFor();
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(283);
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

		    $this->enterRule($localContext, 44, self::RULE_expFor);

		    try {
		        $this->setState(292);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 13, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(286);
		        	    $this->match(self::IDENTIFICADOR);
		        	    $this->setState(287);
		        	    $this->match(self::PLUS);
		        	    $this->setState(288);
		        	    $this->match(self::PLUS);
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(289);
		        	    $this->match(self::IDENTIFICADOR);
		        	    $this->setState(290);
		        	    $this->match(self::MINUS);
		        	    $this->setState(291);
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

		    $this->enterRule($localContext, 46, self::RULE_sentenciaSwitch);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(294);
		        $this->match(self::SWITCH);
		        $this->setState(295);
		        $this->recursiveLogExpr(0);
		        $this->setState(296);
		        $this->match(self::LBRACE);
		        $this->setState(297);
		        $this->bloqueSwitch();
		        $this->setState(298);
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

		    $this->enterRule($localContext, 48, self::RULE_bloqueSwitch);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(301); 
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        do {
		        	$this->setState(300);
		        	$this->bloqueCase();
		        	$this->setState(303); 
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        } while ($_la === self::CASE);
		        $this->setState(306);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::DEFAULT) {
		        	$this->setState(305);
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

		    $this->enterRule($localContext, 50, self::RULE_bloqueCase);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(308);
		        $this->match(self::CASE);
		        $this->setState(309);
		        $this->listaExpr();
		        $this->setState(310);
		        $this->match(self::COLON);
		        $this->setState(311);
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
		public function bloqueDefault(): Context\BloqueDefaultContext
		{
		    $localContext = new Context\BloqueDefaultContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 52, self::RULE_bloqueDefault);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(313);
		        $this->match(self::DEFAULT);
		        $this->setState(314);
		        $this->match(self::COLON);
		        $this->setState(315);
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
		public function sentenciaIf(): Context\SentenciaIfContext
		{
		    $localContext = new Context\SentenciaIfContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 54, self::RULE_sentenciaIf);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(317);
		        $this->match(self::IF);
		        $this->setState(318);
		        $this->recursiveLogExpr(0);
		        $this->setState(319);
		        $this->bloque();
		        $this->setState(327);
		        $this->errorHandler->sync($this);

		        $alt = $this->getInterpreter()->adaptivePredict($this->input, 16, $this->ctx);

		        while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
		        	if ($alt === 1) {
		        		$this->setState(320);
		        		$this->match(self::ELSE);
		        		$this->setState(321);
		        		$this->match(self::IF);
		        		$this->setState(322);
		        		$this->recursiveLogExpr(0);
		        		$this->setState(323);
		        		$this->bloque(); 
		        	}

		        	$this->setState(329);
		        	$this->errorHandler->sync($this);

		        	$alt = $this->getInterpreter()->adaptivePredict($this->input, 16, $this->ctx);
		        }
		        $this->setState(332);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::ELSE) {
		        	$this->setState(330);
		        	$this->match(self::ELSE);
		        	$this->setState(331);
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

		    $this->enterRule($localContext, 56, self::RULE_bloque);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(334);
		        $this->match(self::LBRACE);
		        $this->setState(341);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 72057594037990106) !== 0)) {
		        	$this->setState(335);
		        	$this->i();
		        	$this->setState(337);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);

		        	if ($_la === self::SEMICOLON) {
		        		$this->setState(336);
		        		$this->match(self::SEMICOLON);
		        	}
		        	$this->setState(343);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(344);
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

		    $this->enterRule($localContext, 58, self::RULE_asignacion);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(346);
		        $this->match(self::IDENTIFICADOR);
		        $this->setState(347);
		        $this->simboloAsignacion();
		        $this->setState(348);
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

		    $this->enterRule($localContext, 60, self::RULE_imprimir);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(350);
		        $this->match(self::FMT);
		        $this->setState(351);
		        $this->match(self::DOT);
		        $this->setState(352);
		        $this->match(self::PRINTLN);
		        $this->setState(353);
		        $this->match(self::LPAREN);
		        $this->setState(354);
		        $this->listaExpr();
		        $this->setState(355);
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

		    $this->enterRule($localContext, 62, self::RULE_declaracion);

		    try {
		        $this->setState(367);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 20, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(357);
		        	    $this->match(self::VAR);
		        	    $this->setState(358);
		        	    $this->listaId();
		        	    $this->setState(359);
		        	    $this->tipos();
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(361);
		        	    $this->match(self::VAR);
		        	    $this->setState(362);
		        	    $this->listaId();
		        	    $this->setState(363);
		        	    $this->tipos();
		        	    $this->setState(364);
		        	    $this->match(self::ASSIGN);
		        	    $this->setState(365);
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

		    $this->enterRule($localContext, 64, self::RULE_declaracionCorta);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(369);
		        $this->listaId();
		        $this->setState(370);
		        $this->match(self::COLON);
		        $this->setState(371);
		        $this->match(self::ASSIGN);
		        $this->setState(372);
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

		    $this->enterRule($localContext, 66, self::RULE_declaracionConst);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(374);
		        $this->match(self::CONST);
		        $this->setState(375);
		        $this->match(self::IDENTIFICADOR);
		        $this->setState(376);
		        $this->tipos();
		        $this->setState(377);
		        $this->match(self::ASSIGN);
		        $this->setState(378);
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

		    $this->enterRule($localContext, 68, self::RULE_listaExpr);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(380);
		        $this->recursiveLogExpr(0);
		        $this->setState(385);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::COMMA) {
		        	$this->setState(381);
		        	$this->match(self::COMMA);
		        	$this->setState(382);
		        	$this->recursiveLogExpr(0);
		        	$this->setState(387);
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

		    $this->enterRule($localContext, 70, self::RULE_listaId);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(388);
		        $this->match(self::IDENTIFICADOR);
		        $this->setState(393);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::COMMA) {
		        	$this->setState(389);
		        	$this->match(self::COMMA);
		        	$this->setState(390);
		        	$this->match(self::IDENTIFICADOR);
		        	$this->setState(395);
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
			$startState = 72;
			$this->enterRecursionRule($localContext, 72, self::RULE_logExpr, $precedence);

			try {
				$this->enterOuterAlt($localContext, 1);
				$localContext = new Context\ToRelExprContext($localContext);
				$this->ctx = $localContext;
				$previousContext = $localContext;

				$this->setState(397);
				$this->recursiveRelExpr(0);
				$this->ctx->stop = $this->input->LT(-1);
				$this->setState(404);
				$this->errorHandler->sync($this);

				$alt = $this->getInterpreter()->adaptivePredict($this->input, 23, $this->ctx);

				while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
					if ($alt === 1) {
						if ($this->getParseListeners() !== null) {
						    $this->triggerExitRuleEvent();
						}

						$previousContext = $localContext;
						$localContext = new Context\LogicalExpressionContext(new Context\LogExprContext($parentContext, $parentState));
						$this->pushNewRecursionContext($localContext, $startState, self::RULE_logExpr);
						$this->setState(399);

						if (!($this->precpred($this->ctx, 2))) {
						    throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 2)");
						}
						$this->setState(400);

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
						$this->setState(401);
						$this->recursiveRelExpr(0); 
					}

					$this->setState(406);
					$this->errorHandler->sync($this);

					$alt = $this->getInterpreter()->adaptivePredict($this->input, 23, $this->ctx);
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
			$startState = 74;
			$this->enterRecursionRule($localContext, 74, self::RULE_relExpr, $precedence);

			try {
				$this->enterOuterAlt($localContext, 1);
				$localContext = new Context\ToExprContext($localContext);
				$this->ctx = $localContext;
				$previousContext = $localContext;

				$this->setState(408);
				$this->recursiveExpr(0);
				$this->ctx->stop = $this->input->LT(-1);
				$this->setState(415);
				$this->errorHandler->sync($this);

				$alt = $this->getInterpreter()->adaptivePredict($this->input, 24, $this->ctx);

				while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
					if ($alt === 1) {
						if ($this->getParseListeners() !== null) {
						    $this->triggerExitRuleEvent();
						}

						$previousContext = $localContext;
						$localContext = new Context\RelationalExpresionContext(new Context\RelExprContext($parentContext, $parentState));
						$this->pushNewRecursionContext($localContext, $startState, self::RULE_relExpr);
						$this->setState(410);

						if (!($this->precpred($this->ctx, 2))) {
						    throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 2)");
						}
						$this->setState(411);

						$localContext->op = $this->input->LT(1);
						$_la = $this->input->LA(1);

						if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & 1108307720798208) !== 0))) {
							    $localContext->op = $this->errorHandler->recoverInline($this);
						} else {
							if ($this->input->LA(1) === Token::EOF) {
							    $this->matchedEOF = true;
						    }

							$this->errorHandler->reportMatch($this);
							$this->consume();
						}
						$this->setState(412);
						$this->recursiveExpr(0); 
					}

					$this->setState(417);
					$this->errorHandler->sync($this);

					$alt = $this->getInterpreter()->adaptivePredict($this->input, 24, $this->ctx);
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
			$startState = 76;
			$this->enterRecursionRule($localContext, 76, self::RULE_expr, $precedence);

			try {
				$this->enterOuterAlt($localContext, 1);
				$localContext = new Context\ToTermContext($localContext);
				$this->ctx = $localContext;
				$previousContext = $localContext;

				$this->setState(419);
				$this->recursiveTerm(0);
				$this->ctx->stop = $this->input->LT(-1);
				$this->setState(426);
				$this->errorHandler->sync($this);

				$alt = $this->getInterpreter()->adaptivePredict($this->input, 25, $this->ctx);

				while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
					if ($alt === 1) {
						if ($this->getParseListeners() !== null) {
						    $this->triggerExitRuleEvent();
						}

						$previousContext = $localContext;
						$localContext = new Context\BinaryExpressionTContext(new Context\ExprContext($parentContext, $parentState));
						$this->pushNewRecursionContext($localContext, $startState, self::RULE_expr);
						$this->setState(421);

						if (!($this->precpred($this->ctx, 2))) {
						    throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 2)");
						}
						$this->setState(422);

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
						$this->setState(423);
						$this->recursiveTerm(0); 
					}

					$this->setState(428);
					$this->errorHandler->sync($this);

					$alt = $this->getInterpreter()->adaptivePredict($this->input, 25, $this->ctx);
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
			$startState = 78;
			$this->enterRecursionRule($localContext, 78, self::RULE_term, $precedence);

			try {
				$this->enterOuterAlt($localContext, 1);
				$localContext = new Context\ToFactorContext($localContext);
				$this->ctx = $localContext;
				$previousContext = $localContext;

				$this->setState(430);
				$this->factor();
				$this->ctx->stop = $this->input->LT(-1);
				$this->setState(437);
				$this->errorHandler->sync($this);

				$alt = $this->getInterpreter()->adaptivePredict($this->input, 26, $this->ctx);

				while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
					if ($alt === 1) {
						if ($this->getParseListeners() !== null) {
						    $this->triggerExitRuleEvent();
						}

						$previousContext = $localContext;
						$localContext = new Context\BinaryExpressionSContext(new Context\TermContext($parentContext, $parentState));
						$this->pushNewRecursionContext($localContext, $startState, self::RULE_term);
						$this->setState(432);

						if (!($this->precpred($this->ctx, 2))) {
						    throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 2)");
						}
						$this->setState(433);

						$localContext->op = $this->input->LT(1);
						$_la = $this->input->LA(1);

						if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & 962072674304) !== 0))) {
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
					}

					$this->setState(439);
					$this->errorHandler->sync($this);

					$alt = $this->getInterpreter()->adaptivePredict($this->input, 26, $this->ctx);
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

		    $this->enterRule($localContext, 80, self::RULE_factor);

		    try {
		        $this->setState(471);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 27, $this->ctx)) {
		        	case 1:
		        	    $localContext = new Context\GroupedExpressionContext($localContext);
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(440);
		        	    $this->match(self::LPAREN);
		        	    $this->setState(441);
		        	    $this->recursiveLogExpr(0);
		        	    $this->setState(442);
		        	    $this->match(self::RPAREN);
		        	break;

		        	case 2:
		        	    $localContext = new Context\UnaryExpressionContext($localContext);
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(444);
		        	    $this->match(self::MINUS);
		        	    $this->setState(445);
		        	    $this->factor();
		        	break;

		        	case 3:
		        	    $localContext = new Context\FloatLitContext($localContext);
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(446);
		        	    $this->match(self::FLOAT);
		        	break;

		        	case 4:
		        	    $localContext = new Context\EnteroLitContext($localContext);
		        	    $this->enterOuterAlt($localContext, 4);
		        	    $this->setState(447);
		        	    $this->match(self::ENTERO);
		        	break;

		        	case 5:
		        	    $localContext = new Context\BoolLitContext($localContext);
		        	    $this->enterOuterAlt($localContext, 5);
		        	    $this->setState(448);
		        	    $this->match(self::BOOL);
		        	break;

		        	case 6:
		        	    $localContext = new Context\RuneLitContext($localContext);
		        	    $this->enterOuterAlt($localContext, 6);
		        	    $this->setState(449);
		        	    $this->match(self::RUNE);
		        	break;

		        	case 7:
		        	    $localContext = new Context\StrLitContext($localContext);
		        	    $this->enterOuterAlt($localContext, 7);
		        	    $this->setState(450);
		        	    $this->match(self::STR);
		        	break;

		        	case 8:
		        	    $localContext = new Context\NilLitContext($localContext);
		        	    $this->enterOuterAlt($localContext, 8);
		        	    $this->setState(451);
		        	    $this->match(self::NIL);
		        	break;

		        	case 9:
		        	    $localContext = new Context\IdentifierRContext($localContext);
		        	    $this->enterOuterAlt($localContext, 9);
		        	    $this->setState(452);
		        	    $this->match(self::REF);
		        	    $this->setState(453);
		        	    $this->match(self::IDENTIFICADOR);
		        	break;

		        	case 10:
		        	    $localContext = new Context\ArregloAccesoRContext($localContext);
		        	    $this->enterOuterAlt($localContext, 10);
		        	    $this->setState(454);
		        	    $this->match(self::REF);
		        	    $this->setState(455);
		        	    $this->accesoArreglos();
		        	break;

		        	case 11:
		        	    $localContext = new Context\ArregloAccesoDRContext($localContext);
		        	    $this->enterOuterAlt($localContext, 11);
		        	    $this->setState(456);
		        	    $this->match(self::REF);
		        	    $this->setState(457);
		        	    $this->accesoArreglosD();
		        	break;

		        	case 12:
		        	    $localContext = new Context\IdentifierDContext($localContext);
		        	    $this->enterOuterAlt($localContext, 12);
		        	    $this->setState(458);
		        	    $this->match(self::MULT);
		        	    $this->setState(459);
		        	    $this->match(self::IDENTIFICADOR);
		        	break;

		        	case 13:
		        	    $localContext = new Context\ArregloAccesoDContext($localContext);
		        	    $this->enterOuterAlt($localContext, 13);
		        	    $this->setState(460);
		        	    $this->match(self::MULT);
		        	    $this->setState(461);
		        	    $this->accesoArreglos();
		        	break;

		        	case 14:
		        	    $localContext = new Context\ArregloAccesoDDContext($localContext);
		        	    $this->enterOuterAlt($localContext, 14);
		        	    $this->setState(462);
		        	    $this->match(self::MULT);
		        	    $this->setState(463);
		        	    $this->accesoArreglosD();
		        	break;

		        	case 15:
		        	    $localContext = new Context\IdentifierContext($localContext);
		        	    $this->enterOuterAlt($localContext, 15);
		        	    $this->setState(464);
		        	    $this->match(self::IDENTIFICADOR);
		        	break;

		        	case 16:
		        	    $localContext = new Context\ArregloAccesoContext($localContext);
		        	    $this->enterOuterAlt($localContext, 16);
		        	    $this->setState(465);
		        	    $this->accesoArreglos();
		        	break;

		        	case 17:
		        	    $localContext = new Context\ArregloAccesoDContext($localContext);
		        	    $this->enterOuterAlt($localContext, 17);
		        	    $this->setState(466);
		        	    $this->accesoArreglosD();
		        	break;

		        	case 18:
		        	    $localContext = new Context\NowFuncContext($localContext);
		        	    $this->enterOuterAlt($localContext, 18);
		        	    $this->setState(467);
		        	    $this->funcNow();
		        	break;

		        	case 19:
		        	    $localContext = new Context\LenFuncContext($localContext);
		        	    $this->enterOuterAlt($localContext, 19);
		        	    $this->setState(468);
		        	    $this->funcLen();
		        	break;

		        	case 20:
		        	    $localContext = new Context\SubFuncContext($localContext);
		        	    $this->enterOuterAlt($localContext, 20);
		        	    $this->setState(469);
		        	    $this->funcSub();
		        	break;

		        	case 21:
		        	    $localContext = new Context\TypeFuncContext($localContext);
		        	    $this->enterOuterAlt($localContext, 21);
		        	    $this->setState(470);
		        	    $this->funcType();
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
		public function tipos(): Context\TiposContext
		{
		    $localContext = new Context\TiposContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 82, self::RULE_tipos);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(473);

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

		    $this->enterRule($localContext, 84, self::RULE_simboloAsignacion);

		    try {
		        $this->setState(478);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::ASSIGN:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(475);
		            	$this->match(self::ASSIGN);
		            	break;

		            case self::PLUS:
		            case self::MINUS:
		            case self::MULT:
		            case self::DIV:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(476);

		            	$localContext->op = $this->input->LT(1);
		            	$_la = $this->input->LA(1);

		            	if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & 515396075520) !== 0))) {
		            		    $localContext->op = $this->errorHandler->recoverInline($this);
		            	} else {
		            		if ($this->input->LA(1) === Token::EOF) {
		            		    $this->matchedEOF = true;
		            	    }

		            		$this->errorHandler->reportMatch($this);
		            		$this->consume();
		            	}
		            	$this->setState(477);
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
					case 36:
						return $this->sempredLogExpr($localContext, $predicateIndex);

					case 37:
						return $this->sempredRelExpr($localContext, $predicateIndex);

					case 38:
						return $this->sempredExpr($localContext, $predicateIndex);

					case 39:
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

	class PContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_p;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class ProgramaContext extends PContext
	{
		public function __construct(PContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function bMain(): ?BMainContext
	    {
	    	return $this->getTypedRuleContext(BMainContext::class, 0);
	    }

	    public function EOF(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::EOF, 0);
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

	class BMainContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_bMain;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class BloqueMainContext extends BMainContext
	{
		public function __construct(BMainContext $context)
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

	class ArreglosAsignationDContext extends IContext
	{
		public function __construct(IContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function asignacionArreglosD(): ?AsignacionArreglosDContext
	    {
	    	return $this->getTypedRuleContext(AsignacionArreglosDContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterArreglosAsignationD($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitArreglosAsignationD($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitArreglosAsignationD($this);
		    }

			return $visitor->visitChildren($this);
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

	class ArreglosDeclarationDContext extends IContext
	{
		public function __construct(IContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function declaracionArreglosD(): ?DeclaracionArreglosDContext
	    {
	    	return $this->getTypedRuleContext(DeclaracionArreglosDContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterArreglosDeclarationD($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitArreglosDeclarationD($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitArreglosDeclarationD($this);
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

	class ArreglosDeclarationContext extends IContext
	{
		public function __construct(IContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function declaracionArreglos(): ?DeclaracionArreglosContext
	    {
	    	return $this->getTypedRuleContext(DeclaracionArreglosContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterArreglosDeclaration($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitArreglosDeclaration($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitArreglosDeclaration($this);
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

	class ArreglosAsignationContext extends IContext
	{
		public function __construct(IContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function asignacionArreglos(): ?AsignacionArreglosContext
	    {
	    	return $this->getTypedRuleContext(AsignacionArreglosContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterArreglosAsignation($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitArreglosAsignation($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitArreglosAsignation($this);
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

	    public function bloqueFuncion(): ?BloqueFuncionContext
	    {
	    	return $this->getTypedRuleContext(BloqueFuncionContext::class, 0);
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

	class BloqueFuncionContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_bloqueFuncion;
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
			    $listener->enterBloqueFuncion($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitBloqueFuncion($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitBloqueFuncion($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class DeclaracionArreglosDContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_declaracionArreglosD;
	    }

	    public function VAR(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::VAR, 0);
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

	    public function ASSIGN(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::ASSIGN, 0);
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
			    $listener->enterDeclaracionArreglosD($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitDeclaracionArreglosD($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitDeclaracionArreglosD($this);
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

	class AsignacionArreglosDContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_asignacionArreglosD;
	    }

	    public function accesoArreglosD(): ?AccesoArreglosDContext
	    {
	    	return $this->getTypedRuleContext(AccesoArreglosDContext::class, 0);
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
			    $listener->enterAsignacionArreglosD($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitAsignacionArreglosD($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitAsignacionArreglosD($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class AccesoArreglosDContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_accesoArreglosD;
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
			    $listener->enterAccesoArreglosD($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitAccesoArreglosD($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitAccesoArreglosD($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class DeclaracionArreglosContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_declaracionArreglos;
	    }

	    public function VAR(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::VAR, 0);
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

	    public function ASSIGN(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::ASSIGN, 0);
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
			    $listener->enterDeclaracionArreglos($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitDeclaracionArreglos($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitDeclaracionArreglos($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class AsignacionArreglosContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_asignacionArreglos;
	    }

	    public function accesoArreglos(): ?AccesoArreglosContext
	    {
	    	return $this->getTypedRuleContext(AccesoArreglosContext::class, 0);
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
			    $listener->enterAsignacionArreglos($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitAsignacionArreglos($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitAsignacionArreglos($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class AccesoArreglosContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_accesoArreglos;
	    }

	    public function IDENTIFICADOR(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::IDENTIFICADOR, 0);
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

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterAccesoArreglos($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitAccesoArreglos($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitAccesoArreglos($this);
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

	    public function bloque(): ?BloqueContext
	    {
	    	return $this->getTypedRuleContext(BloqueContext::class, 0);
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

	    public function bloque(): ?BloqueContext
	    {
	    	return $this->getTypedRuleContext(BloqueContext::class, 0);
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

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function IF(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(GrammarParser::IF);
	    	}

	        return $this->getToken(GrammarParser::IF, $index);
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
	     * @return array<BloqueContext>|BloqueContext|null
	     */
	    public function bloque(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(BloqueContext::class);
	    	}

	        return $this->getTypedRuleContext(BloqueContext::class, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function ELSE(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(GrammarParser::ELSE);
	    	}

	        return $this->getToken(GrammarParser::ELSE, $index);
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

	    public function IDENTIFICADOR(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::IDENTIFICADOR, 0);
	    }

	    public function simboloAsignacion(): ?SimboloAsignacionContext
	    {
	    	return $this->getTypedRuleContext(SimboloAsignacionContext::class, 0);
	    }

	    public function logExpr(): ?LogExprContext
	    {
	    	return $this->getTypedRuleContext(LogExprContext::class, 0);
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
		public function __construct(FactorContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function MINUS(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::MINUS, 0);
	    }

	    public function factor(): ?FactorContext
	    {
	    	return $this->getTypedRuleContext(FactorContext::class, 0);
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

	class ArregloAccesoDRContext extends FactorContext
	{
		public function __construct(FactorContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function REF(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::REF, 0);
	    }

	    public function accesoArreglosD(): ?AccesoArreglosDContext
	    {
	    	return $this->getTypedRuleContext(AccesoArreglosDContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterArregloAccesoDR($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitArregloAccesoDR($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitArregloAccesoDR($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ArregloAccesoDContext extends FactorContext
	{
		public function __construct(FactorContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function MULT(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::MULT, 0);
	    }

	    public function accesoArreglos(): ?AccesoArreglosContext
	    {
	    	return $this->getTypedRuleContext(AccesoArreglosContext::class, 0);
	    }

	    public function accesoArreglosD(): ?AccesoArreglosDContext
	    {
	    	return $this->getTypedRuleContext(AccesoArreglosDContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterArregloAccesoD($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitArregloAccesoD($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitArregloAccesoD($this);
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

	class IdentifierDContext extends FactorContext
	{
		public function __construct(FactorContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function MULT(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::MULT, 0);
	    }

	    public function IDENTIFICADOR(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::IDENTIFICADOR, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterIdentifierD($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitIdentifierD($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitIdentifierD($this);
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

	class ArregloAccesoRContext extends FactorContext
	{
		public function __construct(FactorContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function REF(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::REF, 0);
	    }

	    public function accesoArreglos(): ?AccesoArreglosContext
	    {
	    	return $this->getTypedRuleContext(AccesoArreglosContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterArregloAccesoR($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitArregloAccesoR($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitArregloAccesoR($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ArregloAccesoDDContext extends FactorContext
	{
		public function __construct(FactorContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function MULT(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::MULT, 0);
	    }

	    public function accesoArreglosD(): ?AccesoArreglosDContext
	    {
	    	return $this->getTypedRuleContext(AccesoArreglosDContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterArregloAccesoDD($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitArregloAccesoDD($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitArregloAccesoDD($this);
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

	class IdentifierRContext extends FactorContext
	{
		public function __construct(FactorContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function REF(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::REF, 0);
	    }

	    public function IDENTIFICADOR(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::IDENTIFICADOR, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterIdentifierR($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitIdentifierR($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitIdentifierR($this);
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

	    public function accesoArreglos(): ?AccesoArreglosContext
	    {
	    	return $this->getTypedRuleContext(AccesoArreglosContext::class, 0);
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
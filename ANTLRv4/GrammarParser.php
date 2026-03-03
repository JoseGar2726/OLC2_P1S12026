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
               IDENTIFICADOR = 50, ENTERO = 51, FLOAT = 52, BOOL = 53, STR = 54, 
               RUNE = 55, NIL = 56, COMENTARIO_LINEA = 57, COMENTARIO_BLOQUE = 58, 
               WS = 59, ERROR = 60;

		public const RULE_p = 0, RULE_bMain = 1, RULE_i = 2, RULE_funcLen = 3, 
               RULE_funcNow = 4, RULE_funcSub = 5, RULE_funcType = 6, RULE_retornar = 7, 
               RULE_funcion = 8, RULE_listaRetorno = 9, RULE_listaParametros = 10, 
               RULE_bloqueFuncion = 11, RULE_declaracionArreglosD = 12, 
               RULE_listaValores = 13, RULE_asignacionArreglosD = 14, RULE_accesoArreglosD = 15, 
               RULE_declaracionArreglos = 16, RULE_asignacionArreglos = 17, 
               RULE_accesoArreglos = 18, RULE_sentenciaFor = 19, RULE_forClasico = 20, 
               RULE_condFor = 21, RULE_bloqueFor = 22, RULE_expFor = 23, 
               RULE_sentenciaSwitch = 24, RULE_bloqueSwitch = 25, RULE_bloqueCase = 26, 
               RULE_bloqueDefault = 27, RULE_sentenciaIf = 28, RULE_bloqueElse = 29, 
               RULE_bloqueElseIf = 30, RULE_asignacion = 31, RULE_imprimir = 32, 
               RULE_declaracion = 33, RULE_declaracionCorta = 34, RULE_declaracionConst = 35, 
               RULE_listaExpr = 36, RULE_listaId = 37, RULE_logExpr = 38, 
               RULE_relExpr = 39, RULE_expr = 40, RULE_term = 41, RULE_modterm = 42, 
               RULE_factor = 43, RULE_tipos = 44, RULE_simboloAsignacion = 45;

		/**
		 * @var array<string>
		 */
		public const RULE_NAMES = [
			'p', 'bMain', 'i', 'funcLen', 'funcNow', 'funcSub', 'funcType', 'retornar', 
			'funcion', 'listaRetorno', 'listaParametros', 'bloqueFuncion', 'declaracionArreglosD', 
			'listaValores', 'asignacionArreglosD', 'accesoArreglosD', 'declaracionArreglos', 
			'asignacionArreglos', 'accesoArreglos', 'sentenciaFor', 'forClasico', 
			'condFor', 'bloqueFor', 'expFor', 'sentenciaSwitch', 'bloqueSwitch', 
			'bloqueCase', 'bloqueDefault', 'sentenciaIf', 'bloqueElse', 'bloqueElseIf', 
			'asignacion', 'imprimir', 'declaracion', 'declaracionCorta', 'declaracionConst', 
			'listaExpr', 'listaId', 'logExpr', 'relExpr', 'expr', 'term', 'modterm', 
			'factor', 'tipos', 'simboloAsignacion'
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
		    "'=='", "'!='", "'<'", "'>'", null, null, null, null, null, null, 
		    "'nil'"
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
		    "LESS", "GREATER", "IDENTIFICADOR", "ENTERO", "FLOAT", "BOOL", "STR", 
		    "RUNE", "NIL", "COMENTARIO_LINEA", "COMENTARIO_BLOQUE", "WS", "ERROR"
		];

		private const SERIALIZED_ATN =
			[4, 1, 60, 558, 2, 0, 7, 0, 2, 1, 7, 1, 2, 2, 7, 2, 2, 3, 7, 3, 2, 4, 
		    7, 4, 2, 5, 7, 5, 2, 6, 7, 6, 2, 7, 7, 7, 2, 8, 7, 8, 2, 9, 7, 9, 
		    2, 10, 7, 10, 2, 11, 7, 11, 2, 12, 7, 12, 2, 13, 7, 13, 2, 14, 7, 
		    14, 2, 15, 7, 15, 2, 16, 7, 16, 2, 17, 7, 17, 2, 18, 7, 18, 2, 19, 
		    7, 19, 2, 20, 7, 20, 2, 21, 7, 21, 2, 22, 7, 22, 2, 23, 7, 23, 2, 
		    24, 7, 24, 2, 25, 7, 25, 2, 26, 7, 26, 2, 27, 7, 27, 2, 28, 7, 28, 
		    2, 29, 7, 29, 2, 30, 7, 30, 2, 31, 7, 31, 2, 32, 7, 32, 2, 33, 7, 
		    33, 2, 34, 7, 34, 2, 35, 7, 35, 2, 36, 7, 36, 2, 37, 7, 37, 2, 38, 
		    7, 38, 2, 39, 7, 39, 2, 40, 7, 40, 2, 41, 7, 41, 2, 42, 7, 42, 2, 
		    43, 7, 43, 2, 44, 7, 44, 2, 45, 7, 45, 1, 0, 1, 0, 1, 0, 1, 1, 1, 
		    1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 3, 1, 103, 8, 1, 5, 1, 105, 8, 1, 
		    10, 1, 12, 1, 108, 9, 1, 1, 1, 1, 1, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 
		    1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 
		    1, 2, 3, 2, 129, 8, 2, 1, 3, 1, 3, 1, 3, 1, 3, 1, 3, 1, 4, 1, 4, 1, 
		    4, 1, 4, 1, 5, 1, 5, 1, 5, 1, 5, 1, 5, 1, 5, 1, 5, 1, 5, 1, 5, 1, 
		    6, 1, 6, 1, 6, 1, 6, 1, 6, 1, 7, 1, 7, 1, 7, 1, 8, 1, 8, 1, 8, 1, 
		    8, 3, 8, 161, 8, 8, 1, 8, 1, 8, 1, 8, 1, 8, 1, 8, 1, 8, 1, 8, 1, 8, 
		    1, 8, 1, 8, 3, 8, 173, 8, 8, 1, 8, 1, 8, 1, 8, 1, 8, 3, 8, 179, 8, 
		    8, 1, 9, 1, 9, 1, 9, 5, 9, 184, 8, 9, 10, 9, 12, 9, 187, 9, 9, 1, 
		    10, 1, 10, 1, 10, 1, 10, 1, 10, 5, 10, 194, 8, 10, 10, 10, 12, 10, 
		    197, 9, 10, 1, 11, 1, 11, 1, 11, 3, 11, 202, 8, 11, 5, 11, 204, 8, 
		    11, 10, 11, 12, 11, 207, 9, 11, 1, 11, 1, 11, 1, 12, 1, 12, 1, 12, 
		    1, 12, 1, 12, 1, 12, 1, 12, 1, 12, 1, 12, 1, 12, 1, 12, 1, 12, 1, 
		    12, 1, 12, 1, 12, 1, 12, 1, 12, 1, 12, 1, 12, 1, 12, 1, 12, 3, 12, 
		    232, 8, 12, 1, 13, 1, 13, 1, 13, 1, 13, 1, 13, 5, 13, 239, 8, 13, 
		    10, 13, 12, 13, 242, 9, 13, 1, 14, 1, 14, 1, 14, 1, 14, 1, 15, 1, 
		    15, 1, 15, 1, 15, 1, 15, 1, 15, 1, 15, 1, 15, 1, 16, 1, 16, 1, 16, 
		    1, 16, 1, 16, 1, 16, 1, 16, 1, 16, 1, 16, 1, 16, 1, 16, 1, 16, 1, 
		    16, 1, 16, 1, 16, 3, 16, 271, 8, 16, 1, 17, 1, 17, 1, 17, 1, 17, 1, 
		    18, 1, 18, 1, 18, 1, 18, 1, 18, 1, 19, 1, 19, 1, 19, 1, 19, 1, 19, 
		    1, 19, 1, 19, 1, 19, 3, 19, 290, 8, 19, 1, 20, 1, 20, 1, 20, 1, 20, 
		    1, 20, 1, 20, 1, 20, 1, 21, 1, 21, 3, 21, 301, 8, 21, 1, 22, 1, 22, 
		    1, 22, 3, 22, 306, 8, 22, 5, 22, 308, 8, 22, 10, 22, 12, 22, 311, 
		    9, 22, 1, 22, 1, 22, 1, 23, 1, 23, 1, 23, 1, 23, 1, 23, 1, 23, 3, 
		    23, 321, 8, 23, 1, 24, 1, 24, 1, 24, 1, 24, 1, 24, 1, 24, 1, 25, 5, 
		    25, 330, 8, 25, 10, 25, 12, 25, 333, 9, 25, 1, 25, 3, 25, 336, 8, 
		    25, 1, 26, 1, 26, 1, 26, 1, 26, 1, 26, 3, 26, 343, 8, 26, 5, 26, 345, 
		    8, 26, 10, 26, 12, 26, 348, 9, 26, 1, 27, 1, 27, 1, 27, 1, 27, 3, 
		    27, 354, 8, 27, 5, 27, 356, 8, 27, 10, 27, 12, 27, 359, 9, 27, 1, 
		    28, 1, 28, 1, 28, 1, 28, 1, 28, 3, 28, 366, 8, 28, 5, 28, 368, 8, 
		    28, 10, 28, 12, 28, 371, 9, 28, 1, 28, 1, 28, 1, 28, 1, 29, 1, 29, 
		    1, 29, 1, 29, 3, 29, 380, 8, 29, 5, 29, 382, 8, 29, 10, 29, 12, 29, 
		    385, 9, 29, 1, 29, 1, 29, 3, 29, 389, 8, 29, 1, 30, 1, 30, 1, 30, 
		    1, 30, 1, 30, 1, 30, 3, 30, 397, 8, 30, 5, 30, 399, 8, 30, 10, 30, 
		    12, 30, 402, 9, 30, 1, 30, 1, 30, 5, 30, 406, 8, 30, 10, 30, 12, 30, 
		    409, 9, 30, 1, 30, 1, 30, 1, 31, 1, 31, 1, 31, 1, 31, 1, 32, 1, 32, 
		    1, 32, 1, 32, 1, 32, 1, 32, 1, 32, 1, 33, 1, 33, 1, 33, 1, 33, 1, 
		    33, 1, 33, 1, 33, 1, 33, 1, 33, 1, 33, 3, 33, 434, 8, 33, 1, 34, 1, 
		    34, 1, 34, 1, 34, 1, 34, 1, 35, 1, 35, 1, 35, 1, 35, 1, 35, 1, 35, 
		    1, 36, 1, 36, 1, 36, 5, 36, 450, 8, 36, 10, 36, 12, 36, 453, 9, 36, 
		    1, 37, 1, 37, 1, 37, 5, 37, 458, 8, 37, 10, 37, 12, 37, 461, 9, 37, 
		    1, 38, 1, 38, 1, 38, 1, 38, 1, 38, 1, 38, 5, 38, 469, 8, 38, 10, 38, 
		    12, 38, 472, 9, 38, 1, 39, 1, 39, 1, 39, 1, 39, 1, 39, 1, 39, 5, 39, 
		    480, 8, 39, 10, 39, 12, 39, 483, 9, 39, 1, 40, 1, 40, 1, 40, 1, 40, 
		    1, 40, 1, 40, 5, 40, 491, 8, 40, 10, 40, 12, 40, 494, 9, 40, 1, 41, 
		    1, 41, 1, 41, 1, 41, 1, 41, 1, 41, 5, 41, 502, 8, 41, 10, 41, 12, 
		    41, 505, 9, 41, 1, 42, 1, 42, 1, 42, 1, 42, 1, 42, 1, 42, 5, 42, 513, 
		    8, 42, 10, 42, 12, 42, 516, 9, 42, 1, 43, 1, 43, 1, 43, 1, 43, 1, 
		    43, 1, 43, 1, 43, 1, 43, 1, 43, 1, 43, 1, 43, 1, 43, 1, 43, 1, 43, 
		    1, 43, 1, 43, 1, 43, 1, 43, 1, 43, 1, 43, 1, 43, 1, 43, 1, 43, 1, 
		    43, 1, 43, 1, 43, 1, 43, 1, 43, 1, 43, 1, 43, 1, 43, 3, 43, 549, 8, 
		    43, 1, 44, 1, 44, 1, 45, 1, 45, 1, 45, 3, 45, 556, 8, 45, 1, 45, 0, 
		    5, 76, 78, 80, 82, 84, 46, 0, 2, 4, 6, 8, 10, 12, 14, 16, 18, 20, 
		    22, 24, 26, 28, 30, 32, 34, 36, 38, 40, 42, 44, 46, 48, 50, 52, 54, 
		    56, 58, 60, 62, 64, 66, 68, 70, 72, 74, 76, 78, 80, 82, 84, 86, 88, 
		    90, 0, 6, 1, 0, 42, 43, 1, 0, 44, 49, 1, 0, 35, 36, 1, 0, 37, 38, 
		    1, 0, 20, 24, 1, 0, 35, 38, 588, 0, 92, 1, 0, 0, 0, 2, 95, 1, 0, 0, 
		    0, 4, 128, 1, 0, 0, 0, 6, 130, 1, 0, 0, 0, 8, 135, 1, 0, 0, 0, 10, 
		    139, 1, 0, 0, 0, 12, 148, 1, 0, 0, 0, 14, 153, 1, 0, 0, 0, 16, 178, 
		    1, 0, 0, 0, 18, 180, 1, 0, 0, 0, 20, 188, 1, 0, 0, 0, 22, 198, 1, 
		    0, 0, 0, 24, 210, 1, 0, 0, 0, 26, 240, 1, 0, 0, 0, 28, 243, 1, 0, 
		    0, 0, 30, 247, 1, 0, 0, 0, 32, 255, 1, 0, 0, 0, 34, 272, 1, 0, 0, 
		    0, 36, 276, 1, 0, 0, 0, 38, 289, 1, 0, 0, 0, 40, 291, 1, 0, 0, 0, 
		    42, 300, 1, 0, 0, 0, 44, 302, 1, 0, 0, 0, 46, 320, 1, 0, 0, 0, 48, 
		    322, 1, 0, 0, 0, 50, 331, 1, 0, 0, 0, 52, 337, 1, 0, 0, 0, 54, 349, 
		    1, 0, 0, 0, 56, 360, 1, 0, 0, 0, 58, 388, 1, 0, 0, 0, 60, 407, 1, 
		    0, 0, 0, 62, 412, 1, 0, 0, 0, 64, 416, 1, 0, 0, 0, 66, 433, 1, 0, 
		    0, 0, 68, 435, 1, 0, 0, 0, 70, 440, 1, 0, 0, 0, 72, 446, 1, 0, 0, 
		    0, 74, 454, 1, 0, 0, 0, 76, 462, 1, 0, 0, 0, 78, 473, 1, 0, 0, 0, 
		    80, 484, 1, 0, 0, 0, 82, 495, 1, 0, 0, 0, 84, 506, 1, 0, 0, 0, 86, 
		    548, 1, 0, 0, 0, 88, 550, 1, 0, 0, 0, 90, 555, 1, 0, 0, 0, 92, 93, 
		    3, 2, 1, 0, 93, 94, 5, 0, 0, 1, 94, 1, 1, 0, 0, 0, 95, 96, 5, 1, 0, 
		    0, 96, 97, 5, 2, 0, 0, 97, 98, 5, 27, 0, 0, 98, 99, 5, 28, 0, 0, 99, 
		    106, 5, 25, 0, 0, 100, 102, 3, 4, 2, 0, 101, 103, 5, 34, 0, 0, 102, 
		    101, 1, 0, 0, 0, 102, 103, 1, 0, 0, 0, 103, 105, 1, 0, 0, 0, 104, 
		    100, 1, 0, 0, 0, 105, 108, 1, 0, 0, 0, 106, 104, 1, 0, 0, 0, 106, 
		    107, 1, 0, 0, 0, 107, 109, 1, 0, 0, 0, 108, 106, 1, 0, 0, 0, 109, 
		    110, 5, 26, 0, 0, 110, 3, 1, 0, 0, 0, 111, 129, 3, 64, 32, 0, 112, 
		    129, 3, 66, 33, 0, 113, 129, 3, 68, 34, 0, 114, 129, 3, 70, 35, 0, 
		    115, 129, 3, 62, 31, 0, 116, 129, 3, 56, 28, 0, 117, 129, 3, 48, 24, 
		    0, 118, 129, 3, 38, 19, 0, 119, 129, 3, 46, 23, 0, 120, 129, 3, 32, 
		    16, 0, 121, 129, 3, 34, 17, 0, 122, 129, 3, 24, 12, 0, 123, 129, 3, 
		    28, 14, 0, 124, 129, 3, 16, 8, 0, 125, 129, 3, 14, 7, 0, 126, 129, 
		    5, 14, 0, 0, 127, 129, 5, 13, 0, 0, 128, 111, 1, 0, 0, 0, 128, 112, 
		    1, 0, 0, 0, 128, 113, 1, 0, 0, 0, 128, 114, 1, 0, 0, 0, 128, 115, 
		    1, 0, 0, 0, 128, 116, 1, 0, 0, 0, 128, 117, 1, 0, 0, 0, 128, 118, 
		    1, 0, 0, 0, 128, 119, 1, 0, 0, 0, 128, 120, 1, 0, 0, 0, 128, 121, 
		    1, 0, 0, 0, 128, 122, 1, 0, 0, 0, 128, 123, 1, 0, 0, 0, 128, 124, 
		    1, 0, 0, 0, 128, 125, 1, 0, 0, 0, 128, 126, 1, 0, 0, 0, 128, 127, 
		    1, 0, 0, 0, 129, 5, 1, 0, 0, 0, 130, 131, 5, 16, 0, 0, 131, 132, 5, 
		    27, 0, 0, 132, 133, 3, 76, 38, 0, 133, 134, 5, 28, 0, 0, 134, 7, 1, 
		    0, 0, 0, 135, 136, 5, 17, 0, 0, 136, 137, 5, 27, 0, 0, 137, 138, 5, 
		    28, 0, 0, 138, 9, 1, 0, 0, 0, 139, 140, 5, 18, 0, 0, 140, 141, 5, 
		    27, 0, 0, 141, 142, 3, 76, 38, 0, 142, 143, 5, 31, 0, 0, 143, 144, 
		    3, 76, 38, 0, 144, 145, 5, 31, 0, 0, 145, 146, 3, 76, 38, 0, 146, 
		    147, 5, 28, 0, 0, 147, 11, 1, 0, 0, 0, 148, 149, 5, 19, 0, 0, 149, 
		    150, 5, 27, 0, 0, 150, 151, 5, 50, 0, 0, 151, 152, 5, 28, 0, 0, 152, 
		    13, 1, 0, 0, 0, 153, 154, 5, 15, 0, 0, 154, 155, 3, 72, 36, 0, 155, 
		    15, 1, 0, 0, 0, 156, 157, 5, 1, 0, 0, 157, 158, 5, 50, 0, 0, 158, 
		    160, 5, 27, 0, 0, 159, 161, 3, 20, 10, 0, 160, 159, 1, 0, 0, 0, 160, 
		    161, 1, 0, 0, 0, 161, 162, 1, 0, 0, 0, 162, 163, 5, 28, 0, 0, 163, 
		    164, 5, 27, 0, 0, 164, 165, 3, 18, 9, 0, 165, 166, 5, 28, 0, 0, 166, 
		    167, 3, 22, 11, 0, 167, 179, 1, 0, 0, 0, 168, 169, 5, 1, 0, 0, 169, 
		    170, 5, 50, 0, 0, 170, 172, 5, 27, 0, 0, 171, 173, 3, 20, 10, 0, 172, 
		    171, 1, 0, 0, 0, 172, 173, 1, 0, 0, 0, 173, 174, 1, 0, 0, 0, 174, 
		    175, 5, 28, 0, 0, 175, 176, 3, 88, 44, 0, 176, 177, 3, 22, 11, 0, 
		    177, 179, 1, 0, 0, 0, 178, 156, 1, 0, 0, 0, 178, 168, 1, 0, 0, 0, 
		    179, 17, 1, 0, 0, 0, 180, 185, 3, 88, 44, 0, 181, 182, 5, 31, 0, 0, 
		    182, 184, 3, 88, 44, 0, 183, 181, 1, 0, 0, 0, 184, 187, 1, 0, 0, 0, 
		    185, 183, 1, 0, 0, 0, 185, 186, 1, 0, 0, 0, 186, 19, 1, 0, 0, 0, 187, 
		    185, 1, 0, 0, 0, 188, 189, 5, 50, 0, 0, 189, 195, 3, 88, 44, 0, 190, 
		    191, 5, 31, 0, 0, 191, 192, 5, 50, 0, 0, 192, 194, 3, 88, 44, 0, 193, 
		    190, 1, 0, 0, 0, 194, 197, 1, 0, 0, 0, 195, 193, 1, 0, 0, 0, 195, 
		    196, 1, 0, 0, 0, 196, 21, 1, 0, 0, 0, 197, 195, 1, 0, 0, 0, 198, 205, 
		    5, 25, 0, 0, 199, 201, 3, 4, 2, 0, 200, 202, 5, 34, 0, 0, 201, 200, 
		    1, 0, 0, 0, 201, 202, 1, 0, 0, 0, 202, 204, 1, 0, 0, 0, 203, 199, 
		    1, 0, 0, 0, 204, 207, 1, 0, 0, 0, 205, 203, 1, 0, 0, 0, 205, 206, 
		    1, 0, 0, 0, 206, 208, 1, 0, 0, 0, 207, 205, 1, 0, 0, 0, 208, 209, 
		    5, 26, 0, 0, 209, 23, 1, 0, 0, 0, 210, 211, 5, 3, 0, 0, 211, 212, 
		    5, 50, 0, 0, 212, 213, 5, 29, 0, 0, 213, 214, 3, 76, 38, 0, 214, 215, 
		    5, 30, 0, 0, 215, 216, 5, 29, 0, 0, 216, 217, 3, 76, 38, 0, 217, 218, 
		    5, 30, 0, 0, 218, 231, 3, 88, 44, 0, 219, 220, 5, 32, 0, 0, 220, 221, 
		    5, 29, 0, 0, 221, 222, 3, 76, 38, 0, 222, 223, 5, 30, 0, 0, 223, 224, 
		    5, 29, 0, 0, 224, 225, 3, 76, 38, 0, 225, 226, 5, 30, 0, 0, 226, 227, 
		    3, 88, 44, 0, 227, 228, 5, 25, 0, 0, 228, 229, 3, 26, 13, 0, 229, 
		    230, 5, 26, 0, 0, 230, 232, 1, 0, 0, 0, 231, 219, 1, 0, 0, 0, 231, 
		    232, 1, 0, 0, 0, 232, 25, 1, 0, 0, 0, 233, 234, 5, 25, 0, 0, 234, 
		    235, 3, 72, 36, 0, 235, 236, 5, 26, 0, 0, 236, 237, 5, 31, 0, 0, 237, 
		    239, 1, 0, 0, 0, 238, 233, 1, 0, 0, 0, 239, 242, 1, 0, 0, 0, 240, 
		    238, 1, 0, 0, 0, 240, 241, 1, 0, 0, 0, 241, 27, 1, 0, 0, 0, 242, 240, 
		    1, 0, 0, 0, 243, 244, 3, 30, 15, 0, 244, 245, 5, 32, 0, 0, 245, 246, 
		    3, 76, 38, 0, 246, 29, 1, 0, 0, 0, 247, 248, 5, 50, 0, 0, 248, 249, 
		    5, 29, 0, 0, 249, 250, 3, 76, 38, 0, 250, 251, 5, 30, 0, 0, 251, 252, 
		    5, 29, 0, 0, 252, 253, 3, 76, 38, 0, 253, 254, 5, 30, 0, 0, 254, 31, 
		    1, 0, 0, 0, 255, 256, 5, 3, 0, 0, 256, 257, 5, 50, 0, 0, 257, 258, 
		    5, 29, 0, 0, 258, 259, 3, 76, 38, 0, 259, 260, 5, 30, 0, 0, 260, 270, 
		    3, 88, 44, 0, 261, 262, 5, 32, 0, 0, 262, 263, 5, 29, 0, 0, 263, 264, 
		    3, 76, 38, 0, 264, 265, 5, 30, 0, 0, 265, 266, 3, 88, 44, 0, 266, 
		    267, 5, 25, 0, 0, 267, 268, 3, 72, 36, 0, 268, 269, 5, 26, 0, 0, 269, 
		    271, 1, 0, 0, 0, 270, 261, 1, 0, 0, 0, 270, 271, 1, 0, 0, 0, 271, 
		    33, 1, 0, 0, 0, 272, 273, 3, 36, 18, 0, 273, 274, 5, 32, 0, 0, 274, 
		    275, 3, 76, 38, 0, 275, 35, 1, 0, 0, 0, 276, 277, 5, 50, 0, 0, 277, 
		    278, 5, 29, 0, 0, 278, 279, 3, 76, 38, 0, 279, 280, 5, 30, 0, 0, 280, 
		    37, 1, 0, 0, 0, 281, 282, 5, 12, 0, 0, 282, 290, 3, 40, 20, 0, 283, 
		    284, 5, 12, 0, 0, 284, 285, 3, 76, 38, 0, 285, 286, 3, 44, 22, 0, 
		    286, 290, 1, 0, 0, 0, 287, 288, 5, 12, 0, 0, 288, 290, 3, 44, 22, 
		    0, 289, 281, 1, 0, 0, 0, 289, 283, 1, 0, 0, 0, 289, 287, 1, 0, 0, 
		    0, 290, 39, 1, 0, 0, 0, 291, 292, 3, 68, 34, 0, 292, 293, 5, 34, 0, 
		    0, 293, 294, 3, 76, 38, 0, 294, 295, 5, 34, 0, 0, 295, 296, 3, 42, 
		    21, 0, 296, 297, 3, 44, 22, 0, 297, 41, 1, 0, 0, 0, 298, 301, 3, 46, 
		    23, 0, 299, 301, 3, 62, 31, 0, 300, 298, 1, 0, 0, 0, 300, 299, 1, 
		    0, 0, 0, 301, 43, 1, 0, 0, 0, 302, 309, 5, 25, 0, 0, 303, 305, 3, 
		    4, 2, 0, 304, 306, 5, 34, 0, 0, 305, 304, 1, 0, 0, 0, 305, 306, 1, 
		    0, 0, 0, 306, 308, 1, 0, 0, 0, 307, 303, 1, 0, 0, 0, 308, 311, 1, 
		    0, 0, 0, 309, 307, 1, 0, 0, 0, 309, 310, 1, 0, 0, 0, 310, 312, 1, 
		    0, 0, 0, 311, 309, 1, 0, 0, 0, 312, 313, 5, 26, 0, 0, 313, 45, 1, 
		    0, 0, 0, 314, 315, 5, 50, 0, 0, 315, 316, 5, 35, 0, 0, 316, 321, 5, 
		    35, 0, 0, 317, 318, 5, 50, 0, 0, 318, 319, 5, 36, 0, 0, 319, 321, 
		    5, 36, 0, 0, 320, 314, 1, 0, 0, 0, 320, 317, 1, 0, 0, 0, 321, 47, 
		    1, 0, 0, 0, 322, 323, 5, 9, 0, 0, 323, 324, 3, 76, 38, 0, 324, 325, 
		    5, 25, 0, 0, 325, 326, 3, 50, 25, 0, 326, 327, 5, 26, 0, 0, 327, 49, 
		    1, 0, 0, 0, 328, 330, 3, 52, 26, 0, 329, 328, 1, 0, 0, 0, 330, 333, 
		    1, 0, 0, 0, 331, 329, 1, 0, 0, 0, 331, 332, 1, 0, 0, 0, 332, 335, 
		    1, 0, 0, 0, 333, 331, 1, 0, 0, 0, 334, 336, 3, 54, 27, 0, 335, 334, 
		    1, 0, 0, 0, 335, 336, 1, 0, 0, 0, 336, 51, 1, 0, 0, 0, 337, 338, 5, 
		    10, 0, 0, 338, 339, 3, 72, 36, 0, 339, 346, 5, 33, 0, 0, 340, 342, 
		    3, 4, 2, 0, 341, 343, 5, 34, 0, 0, 342, 341, 1, 0, 0, 0, 342, 343, 
		    1, 0, 0, 0, 343, 345, 1, 0, 0, 0, 344, 340, 1, 0, 0, 0, 345, 348, 
		    1, 0, 0, 0, 346, 344, 1, 0, 0, 0, 346, 347, 1, 0, 0, 0, 347, 53, 1, 
		    0, 0, 0, 348, 346, 1, 0, 0, 0, 349, 350, 5, 11, 0, 0, 350, 357, 5, 
		    33, 0, 0, 351, 353, 3, 4, 2, 0, 352, 354, 5, 34, 0, 0, 353, 352, 1, 
		    0, 0, 0, 353, 354, 1, 0, 0, 0, 354, 356, 1, 0, 0, 0, 355, 351, 1, 
		    0, 0, 0, 356, 359, 1, 0, 0, 0, 357, 355, 1, 0, 0, 0, 357, 358, 1, 
		    0, 0, 0, 358, 55, 1, 0, 0, 0, 359, 357, 1, 0, 0, 0, 360, 361, 5, 7, 
		    0, 0, 361, 362, 3, 76, 38, 0, 362, 369, 5, 25, 0, 0, 363, 365, 3, 
		    4, 2, 0, 364, 366, 5, 34, 0, 0, 365, 364, 1, 0, 0, 0, 365, 366, 1, 
		    0, 0, 0, 366, 368, 1, 0, 0, 0, 367, 363, 1, 0, 0, 0, 368, 371, 1, 
		    0, 0, 0, 369, 367, 1, 0, 0, 0, 369, 370, 1, 0, 0, 0, 370, 372, 1, 
		    0, 0, 0, 371, 369, 1, 0, 0, 0, 372, 373, 5, 26, 0, 0, 373, 374, 3, 
		    60, 30, 0, 374, 57, 1, 0, 0, 0, 375, 376, 5, 8, 0, 0, 376, 383, 5, 
		    25, 0, 0, 377, 379, 3, 4, 2, 0, 378, 380, 5, 34, 0, 0, 379, 378, 1, 
		    0, 0, 0, 379, 380, 1, 0, 0, 0, 380, 382, 1, 0, 0, 0, 381, 377, 1, 
		    0, 0, 0, 382, 385, 1, 0, 0, 0, 383, 381, 1, 0, 0, 0, 383, 384, 1, 
		    0, 0, 0, 384, 386, 1, 0, 0, 0, 385, 383, 1, 0, 0, 0, 386, 389, 5, 
		    26, 0, 0, 387, 389, 1, 0, 0, 0, 388, 375, 1, 0, 0, 0, 388, 387, 1, 
		    0, 0, 0, 389, 59, 1, 0, 0, 0, 390, 391, 5, 8, 0, 0, 391, 392, 5, 7, 
		    0, 0, 392, 393, 3, 76, 38, 0, 393, 400, 5, 25, 0, 0, 394, 396, 3, 
		    4, 2, 0, 395, 397, 5, 34, 0, 0, 396, 395, 1, 0, 0, 0, 396, 397, 1, 
		    0, 0, 0, 397, 399, 1, 0, 0, 0, 398, 394, 1, 0, 0, 0, 399, 402, 1, 
		    0, 0, 0, 400, 398, 1, 0, 0, 0, 400, 401, 1, 0, 0, 0, 401, 403, 1, 
		    0, 0, 0, 402, 400, 1, 0, 0, 0, 403, 404, 5, 26, 0, 0, 404, 406, 1, 
		    0, 0, 0, 405, 390, 1, 0, 0, 0, 406, 409, 1, 0, 0, 0, 407, 405, 1, 
		    0, 0, 0, 407, 408, 1, 0, 0, 0, 408, 410, 1, 0, 0, 0, 409, 407, 1, 
		    0, 0, 0, 410, 411, 3, 58, 29, 0, 411, 61, 1, 0, 0, 0, 412, 413, 5, 
		    50, 0, 0, 413, 414, 3, 90, 45, 0, 414, 415, 3, 80, 40, 0, 415, 63, 
		    1, 0, 0, 0, 416, 417, 5, 4, 0, 0, 417, 418, 5, 40, 0, 0, 418, 419, 
		    5, 5, 0, 0, 419, 420, 5, 27, 0, 0, 420, 421, 3, 72, 36, 0, 421, 422, 
		    5, 28, 0, 0, 422, 65, 1, 0, 0, 0, 423, 424, 5, 3, 0, 0, 424, 425, 
		    3, 74, 37, 0, 425, 426, 3, 88, 44, 0, 426, 434, 1, 0, 0, 0, 427, 428, 
		    5, 3, 0, 0, 428, 429, 3, 74, 37, 0, 429, 430, 3, 88, 44, 0, 430, 431, 
		    5, 32, 0, 0, 431, 432, 3, 72, 36, 0, 432, 434, 1, 0, 0, 0, 433, 423, 
		    1, 0, 0, 0, 433, 427, 1, 0, 0, 0, 434, 67, 1, 0, 0, 0, 435, 436, 3, 
		    74, 37, 0, 436, 437, 5, 33, 0, 0, 437, 438, 5, 32, 0, 0, 438, 439, 
		    3, 72, 36, 0, 439, 69, 1, 0, 0, 0, 440, 441, 5, 6, 0, 0, 441, 442, 
		    5, 50, 0, 0, 442, 443, 3, 88, 44, 0, 443, 444, 5, 32, 0, 0, 444, 445, 
		    3, 80, 40, 0, 445, 71, 1, 0, 0, 0, 446, 451, 3, 76, 38, 0, 447, 448, 
		    5, 31, 0, 0, 448, 450, 3, 76, 38, 0, 449, 447, 1, 0, 0, 0, 450, 453, 
		    1, 0, 0, 0, 451, 449, 1, 0, 0, 0, 451, 452, 1, 0, 0, 0, 452, 73, 1, 
		    0, 0, 0, 453, 451, 1, 0, 0, 0, 454, 459, 5, 50, 0, 0, 455, 456, 5, 
		    31, 0, 0, 456, 458, 5, 50, 0, 0, 457, 455, 1, 0, 0, 0, 458, 461, 1, 
		    0, 0, 0, 459, 457, 1, 0, 0, 0, 459, 460, 1, 0, 0, 0, 460, 75, 1, 0, 
		    0, 0, 461, 459, 1, 0, 0, 0, 462, 463, 6, 38, -1, 0, 463, 464, 3, 78, 
		    39, 0, 464, 470, 1, 0, 0, 0, 465, 466, 10, 2, 0, 0, 466, 467, 7, 0, 
		    0, 0, 467, 469, 3, 78, 39, 0, 468, 465, 1, 0, 0, 0, 469, 472, 1, 0, 
		    0, 0, 470, 468, 1, 0, 0, 0, 470, 471, 1, 0, 0, 0, 471, 77, 1, 0, 0, 
		    0, 472, 470, 1, 0, 0, 0, 473, 474, 6, 39, -1, 0, 474, 475, 3, 80, 
		    40, 0, 475, 481, 1, 0, 0, 0, 476, 477, 10, 2, 0, 0, 477, 478, 7, 1, 
		    0, 0, 478, 480, 3, 80, 40, 0, 479, 476, 1, 0, 0, 0, 480, 483, 1, 0, 
		    0, 0, 481, 479, 1, 0, 0, 0, 481, 482, 1, 0, 0, 0, 482, 79, 1, 0, 0, 
		    0, 483, 481, 1, 0, 0, 0, 484, 485, 6, 40, -1, 0, 485, 486, 3, 82, 
		    41, 0, 486, 492, 1, 0, 0, 0, 487, 488, 10, 2, 0, 0, 488, 489, 7, 2, 
		    0, 0, 489, 491, 3, 82, 41, 0, 490, 487, 1, 0, 0, 0, 491, 494, 1, 0, 
		    0, 0, 492, 490, 1, 0, 0, 0, 492, 493, 1, 0, 0, 0, 493, 81, 1, 0, 0, 
		    0, 494, 492, 1, 0, 0, 0, 495, 496, 6, 41, -1, 0, 496, 497, 3, 84, 
		    42, 0, 497, 503, 1, 0, 0, 0, 498, 499, 10, 2, 0, 0, 499, 500, 7, 3, 
		    0, 0, 500, 502, 3, 84, 42, 0, 501, 498, 1, 0, 0, 0, 502, 505, 1, 0, 
		    0, 0, 503, 501, 1, 0, 0, 0, 503, 504, 1, 0, 0, 0, 504, 83, 1, 0, 0, 
		    0, 505, 503, 1, 0, 0, 0, 506, 507, 6, 42, -1, 0, 507, 508, 3, 86, 
		    43, 0, 508, 514, 1, 0, 0, 0, 509, 510, 10, 2, 0, 0, 510, 511, 5, 39, 
		    0, 0, 511, 513, 3, 86, 43, 0, 512, 509, 1, 0, 0, 0, 513, 516, 1, 0, 
		    0, 0, 514, 512, 1, 0, 0, 0, 514, 515, 1, 0, 0, 0, 515, 85, 1, 0, 0, 
		    0, 516, 514, 1, 0, 0, 0, 517, 518, 5, 27, 0, 0, 518, 519, 3, 76, 38, 
		    0, 519, 520, 5, 28, 0, 0, 520, 549, 1, 0, 0, 0, 521, 522, 5, 36, 0, 
		    0, 522, 549, 3, 86, 43, 0, 523, 549, 5, 52, 0, 0, 524, 549, 5, 51, 
		    0, 0, 525, 549, 5, 53, 0, 0, 526, 549, 5, 55, 0, 0, 527, 549, 5, 54, 
		    0, 0, 528, 549, 5, 56, 0, 0, 529, 530, 5, 41, 0, 0, 530, 549, 5, 50, 
		    0, 0, 531, 532, 5, 41, 0, 0, 532, 549, 3, 36, 18, 0, 533, 534, 5, 
		    41, 0, 0, 534, 549, 3, 30, 15, 0, 535, 536, 5, 37, 0, 0, 536, 549, 
		    5, 50, 0, 0, 537, 538, 5, 37, 0, 0, 538, 549, 3, 36, 18, 0, 539, 540, 
		    5, 37, 0, 0, 540, 549, 3, 30, 15, 0, 541, 549, 5, 50, 0, 0, 542, 549, 
		    3, 36, 18, 0, 543, 549, 3, 30, 15, 0, 544, 549, 3, 8, 4, 0, 545, 549, 
		    3, 6, 3, 0, 546, 549, 3, 10, 5, 0, 547, 549, 3, 12, 6, 0, 548, 517, 
		    1, 0, 0, 0, 548, 521, 1, 0, 0, 0, 548, 523, 1, 0, 0, 0, 548, 524, 
		    1, 0, 0, 0, 548, 525, 1, 0, 0, 0, 548, 526, 1, 0, 0, 0, 548, 527, 
		    1, 0, 0, 0, 548, 528, 1, 0, 0, 0, 548, 529, 1, 0, 0, 0, 548, 531, 
		    1, 0, 0, 0, 548, 533, 1, 0, 0, 0, 548, 535, 1, 0, 0, 0, 548, 537, 
		    1, 0, 0, 0, 548, 539, 1, 0, 0, 0, 548, 541, 1, 0, 0, 0, 548, 542, 
		    1, 0, 0, 0, 548, 543, 1, 0, 0, 0, 548, 544, 1, 0, 0, 0, 548, 545, 
		    1, 0, 0, 0, 548, 546, 1, 0, 0, 0, 548, 547, 1, 0, 0, 0, 549, 87, 1, 
		    0, 0, 0, 550, 551, 7, 4, 0, 0, 551, 89, 1, 0, 0, 0, 552, 556, 5, 32, 
		    0, 0, 553, 554, 7, 5, 0, 0, 554, 556, 5, 32, 0, 0, 555, 552, 1, 0, 
		    0, 0, 555, 553, 1, 0, 0, 0, 556, 91, 1, 0, 0, 0, 42, 102, 106, 128, 
		    160, 172, 178, 185, 195, 201, 205, 231, 240, 270, 289, 300, 305, 309, 
		    320, 331, 335, 342, 346, 353, 357, 365, 369, 379, 383, 388, 396, 400, 
		    407, 433, 451, 459, 470, 481, 492, 503, 514, 548, 555];
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
		        $this->setState(92);
		        $this->bMain();
		        $this->setState(93);
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
		        $this->setState(95);
		        $this->match(self::FUNC);
		        $this->setState(96);
		        $this->match(self::MAIN);
		        $this->setState(97);
		        $this->match(self::LPAREN);
		        $this->setState(98);
		        $this->match(self::RPAREN);
		        $this->setState(99);
		        $this->match(self::LBRACE);
		        $this->setState(106);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 1125899906904794) !== 0)) {
		        	$this->setState(100);
		        	$this->i();
		        	$this->setState(102);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);

		        	if ($_la === self::SEMICOLON) {
		        		$this->setState(101);
		        		$this->match(self::SEMICOLON);
		        	}
		        	$this->setState(108);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(109);
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
		public function i(): Context\IContext
		{
		    $localContext = new Context\IContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 4, self::RULE_i);

		    try {
		        $this->setState(128);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 2, $this->ctx)) {
		        	case 1:
		        	    $localContext = new Context\FuncionImprimirContext($localContext);
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(111);
		        	    $this->imprimir();
		        	break;

		        	case 2:
		        	    $localContext = new Context\DeclarationContext($localContext);
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(112);
		        	    $this->declaracion();
		        	break;

		        	case 3:
		        	    $localContext = new Context\ShortDeclarationContext($localContext);
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(113);
		        	    $this->declaracionCorta();
		        	break;

		        	case 4:
		        	    $localContext = new Context\ConstDeclarationContext($localContext);
		        	    $this->enterOuterAlt($localContext, 4);
		        	    $this->setState(114);
		        	    $this->declaracionConst();
		        	break;

		        	case 5:
		        	    $localContext = new Context\AsignationContext($localContext);
		        	    $this->enterOuterAlt($localContext, 5);
		        	    $this->setState(115);
		        	    $this->asignacion();
		        	break;

		        	case 6:
		        	    $localContext = new Context\IfSentenciaContext($localContext);
		        	    $this->enterOuterAlt($localContext, 6);
		        	    $this->setState(116);
		        	    $this->sentenciaIf();
		        	break;

		        	case 7:
		        	    $localContext = new Context\SwitchSentenciaContext($localContext);
		        	    $this->enterOuterAlt($localContext, 7);
		        	    $this->setState(117);
		        	    $this->sentenciaSwitch();
		        	break;

		        	case 8:
		        	    $localContext = new Context\ForSentenciaContext($localContext);
		        	    $this->enterOuterAlt($localContext, 8);
		        	    $this->setState(118);
		        	    $this->sentenciaFor();
		        	break;

		        	case 9:
		        	    $localContext = new Context\IncDecContext($localContext);
		        	    $this->enterOuterAlt($localContext, 9);
		        	    $this->setState(119);
		        	    $this->expFor();
		        	break;

		        	case 10:
		        	    $localContext = new Context\ArreglosDeclarationContext($localContext);
		        	    $this->enterOuterAlt($localContext, 10);
		        	    $this->setState(120);
		        	    $this->declaracionArreglos();
		        	break;

		        	case 11:
		        	    $localContext = new Context\ArreglosAsignationContext($localContext);
		        	    $this->enterOuterAlt($localContext, 11);
		        	    $this->setState(121);
		        	    $this->asignacionArreglos();
		        	break;

		        	case 12:
		        	    $localContext = new Context\ArreglosDeclarationDContext($localContext);
		        	    $this->enterOuterAlt($localContext, 12);
		        	    $this->setState(122);
		        	    $this->declaracionArreglosD();
		        	break;

		        	case 13:
		        	    $localContext = new Context\ArreglosAsignationDContext($localContext);
		        	    $this->enterOuterAlt($localContext, 13);
		        	    $this->setState(123);
		        	    $this->asignacionArreglosD();
		        	break;

		        	case 14:
		        	    $localContext = new Context\DFunctionContext($localContext);
		        	    $this->enterOuterAlt($localContext, 14);
		        	    $this->setState(124);
		        	    $this->funcion();
		        	break;

		        	case 15:
		        	    $localContext = new Context\SentenciaReturnContext($localContext);
		        	    $this->enterOuterAlt($localContext, 15);
		        	    $this->setState(125);
		        	    $this->retornar();
		        	break;

		        	case 16:
		        	    $localContext = new Context\SentenciaContinueContext($localContext);
		        	    $this->enterOuterAlt($localContext, 16);
		        	    $this->setState(126);
		        	    $this->match(self::CONTINUE);
		        	break;

		        	case 17:
		        	    $localContext = new Context\SentenciaBreakContext($localContext);
		        	    $this->enterOuterAlt($localContext, 17);
		        	    $this->setState(127);
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
		        $this->setState(130);
		        $this->match(self::LEN);
		        $this->setState(131);
		        $this->match(self::LPAREN);
		        $this->setState(132);
		        $this->recursiveLogExpr(0);
		        $this->setState(133);
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
		        $this->setState(135);
		        $this->match(self::NOW);
		        $this->setState(136);
		        $this->match(self::LPAREN);
		        $this->setState(137);
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
		        $this->setState(139);
		        $this->match(self::SUBSTR);
		        $this->setState(140);
		        $this->match(self::LPAREN);
		        $this->setState(141);
		        $this->recursiveLogExpr(0);
		        $this->setState(142);
		        $this->match(self::COMMA);
		        $this->setState(143);
		        $this->recursiveLogExpr(0);
		        $this->setState(144);
		        $this->match(self::COMMA);
		        $this->setState(145);
		        $this->recursiveLogExpr(0);
		        $this->setState(146);
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
		        $this->setState(148);
		        $this->match(self::TYPEOF);
		        $this->setState(149);
		        $this->match(self::LPAREN);
		        $this->setState(150);
		        $this->match(self::IDENTIFICADOR);
		        $this->setState(151);
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
		        $this->setState(153);
		        $this->match(self::RETURN);
		        $this->setState(154);
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
		        $this->setState(178);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 5, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(156);
		        	    $this->match(self::FUNC);
		        	    $this->setState(157);
		        	    $this->match(self::IDENTIFICADOR);
		        	    $this->setState(158);
		        	    $this->match(self::LPAREN);
		        	    $this->setState(160);
		        	    $this->errorHandler->sync($this);
		        	    $_la = $this->input->LA(1);

		        	    if ($_la === self::IDENTIFICADOR) {
		        	    	$this->setState(159);
		        	    	$this->listaParametros();
		        	    }
		        	    $this->setState(162);
		        	    $this->match(self::RPAREN);
		        	    $this->setState(163);
		        	    $this->match(self::LPAREN);
		        	    $this->setState(164);
		        	    $this->listaRetorno();
		        	    $this->setState(165);
		        	    $this->match(self::RPAREN);
		        	    $this->setState(166);
		        	    $this->bloqueFuncion();
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
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
		        	    $this->tipos();
		        	    $this->setState(176);
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
		        $this->setState(180);
		        $this->tipos();
		        $this->setState(185);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::COMMA) {
		        	$this->setState(181);
		        	$this->match(self::COMMA);
		        	$this->setState(182);
		        	$this->tipos();
		        	$this->setState(187);
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
		        $this->setState(188);
		        $this->match(self::IDENTIFICADOR);
		        $this->setState(189);
		        $this->tipos();
		        $this->setState(195);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::COMMA) {
		        	$this->setState(190);
		        	$this->match(self::COMMA);
		        	$this->setState(191);
		        	$this->match(self::IDENTIFICADOR);
		        	$this->setState(192);
		        	$this->tipos();
		        	$this->setState(197);
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
		        $this->setState(198);
		        $this->match(self::LBRACE);
		        $this->setState(205);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 1125899906904794) !== 0)) {
		        	$this->setState(199);
		        	$this->i();
		        	$this->setState(201);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);

		        	if ($_la === self::SEMICOLON) {
		        		$this->setState(200);
		        		$this->match(self::SEMICOLON);
		        	}
		        	$this->setState(207);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(208);
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
		        $this->setState(210);
		        $this->match(self::VAR);
		        $this->setState(211);
		        $this->match(self::IDENTIFICADOR);
		        $this->setState(212);
		        $this->match(self::LCOR);
		        $this->setState(213);
		        $this->recursiveLogExpr(0);
		        $this->setState(214);
		        $this->match(self::RCOR);
		        $this->setState(215);
		        $this->match(self::LCOR);
		        $this->setState(216);
		        $this->recursiveLogExpr(0);
		        $this->setState(217);
		        $this->match(self::RCOR);
		        $this->setState(218);
		        $this->tipos();
		        $this->setState(231);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::ASSIGN) {
		        	$this->setState(219);
		        	$this->match(self::ASSIGN);
		        	$this->setState(220);
		        	$this->match(self::LCOR);
		        	$this->setState(221);
		        	$this->recursiveLogExpr(0);
		        	$this->setState(222);
		        	$this->match(self::RCOR);
		        	$this->setState(223);
		        	$this->match(self::LCOR);
		        	$this->setState(224);
		        	$this->recursiveLogExpr(0);
		        	$this->setState(225);
		        	$this->match(self::RCOR);
		        	$this->setState(226);
		        	$this->tipos();
		        	$this->setState(227);
		        	$this->match(self::LBRACE);
		        	$this->setState(228);
		        	$this->listaValores();
		        	$this->setState(229);
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
		        $this->setState(240);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::LBRACE) {
		        	$this->setState(233);
		        	$this->match(self::LBRACE);
		        	$this->setState(234);
		        	$this->listaExpr();
		        	$this->setState(235);
		        	$this->match(self::RBRACE);
		        	$this->setState(236);
		        	$this->match(self::COMMA);
		        	$this->setState(242);
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
		        $this->setState(243);
		        $this->accesoArreglosD();
		        $this->setState(244);
		        $this->match(self::ASSIGN);
		        $this->setState(245);
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
		        $this->setState(247);
		        $this->match(self::IDENTIFICADOR);
		        $this->setState(248);
		        $this->match(self::LCOR);
		        $this->setState(249);
		        $this->recursiveLogExpr(0);
		        $this->setState(250);
		        $this->match(self::RCOR);
		        $this->setState(251);
		        $this->match(self::LCOR);
		        $this->setState(252);
		        $this->recursiveLogExpr(0);
		        $this->setState(253);
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
		        $this->setState(255);
		        $this->match(self::VAR);
		        $this->setState(256);
		        $this->match(self::IDENTIFICADOR);
		        $this->setState(257);
		        $this->match(self::LCOR);
		        $this->setState(258);
		        $this->recursiveLogExpr(0);
		        $this->setState(259);
		        $this->match(self::RCOR);
		        $this->setState(260);
		        $this->tipos();
		        $this->setState(270);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::ASSIGN) {
		        	$this->setState(261);
		        	$this->match(self::ASSIGN);
		        	$this->setState(262);
		        	$this->match(self::LCOR);
		        	$this->setState(263);
		        	$this->recursiveLogExpr(0);
		        	$this->setState(264);
		        	$this->match(self::RCOR);
		        	$this->setState(265);
		        	$this->tipos();
		        	$this->setState(266);
		        	$this->match(self::LBRACE);
		        	$this->setState(267);
		        	$this->listaExpr();
		        	$this->setState(268);
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
		        $this->setState(272);
		        $this->accesoArreglos();
		        $this->setState(273);
		        $this->match(self::ASSIGN);
		        $this->setState(274);
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
		        $this->setState(276);
		        $this->match(self::IDENTIFICADOR);
		        $this->setState(277);
		        $this->match(self::LCOR);
		        $this->setState(278);
		        $this->recursiveLogExpr(0);
		        $this->setState(279);
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
		        $this->setState(289);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 13, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(281);
		        	    $this->match(self::FOR);
		        	    $this->setState(282);
		        	    $this->forClasico();
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(283);
		        	    $this->match(self::FOR);
		        	    $this->setState(284);
		        	    $this->recursiveLogExpr(0);
		        	    $this->setState(285);
		        	    $this->bloqueFor();
		        	break;

		        	case 3:
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(287);
		        	    $this->match(self::FOR);
		        	    $this->setState(288);
		        	    $this->bloqueFor();
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
		        $this->setState(291);
		        $this->declaracionCorta();
		        $this->setState(292);
		        $this->match(self::SEMICOLON);
		        $this->setState(293);
		        $this->recursiveLogExpr(0);
		        $this->setState(294);
		        $this->match(self::SEMICOLON);
		        $this->setState(295);
		        $this->condFor();
		        $this->setState(296);
		        $this->bloqueFor();
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
		        $this->setState(300);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 14, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(298);
		        	    $this->expFor();
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(299);
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
		public function bloqueFor(): Context\BloqueForContext
		{
		    $localContext = new Context\BloqueForContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 44, self::RULE_bloqueFor);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(302);
		        $this->match(self::LBRACE);
		        $this->setState(309);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 1125899906904794) !== 0)) {
		        	$this->setState(303);
		        	$this->i();
		        	$this->setState(305);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);

		        	if ($_la === self::SEMICOLON) {
		        		$this->setState(304);
		        		$this->match(self::SEMICOLON);
		        	}
		        	$this->setState(311);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(312);
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
		public function expFor(): Context\ExpForContext
		{
		    $localContext = new Context\ExpForContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 46, self::RULE_expFor);

		    try {
		        $this->setState(320);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 17, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(314);
		        	    $this->match(self::IDENTIFICADOR);
		        	    $this->setState(315);
		        	    $this->match(self::PLUS);
		        	    $this->setState(316);
		        	    $this->match(self::PLUS);
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(317);
		        	    $this->match(self::IDENTIFICADOR);
		        	    $this->setState(318);
		        	    $this->match(self::MINUS);
		        	    $this->setState(319);
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

		    $this->enterRule($localContext, 48, self::RULE_sentenciaSwitch);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(322);
		        $this->match(self::SWITCH);
		        $this->setState(323);
		        $this->recursiveLogExpr(0);
		        $this->setState(324);
		        $this->match(self::LBRACE);
		        $this->setState(325);
		        $this->bloqueSwitch();
		        $this->setState(326);
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

		    $this->enterRule($localContext, 50, self::RULE_bloqueSwitch);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(331);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::CASE) {
		        	$this->setState(328);
		        	$this->bloqueCase();
		        	$this->setState(333);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(335);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::DEFAULT) {
		        	$this->setState(334);
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

		    $this->enterRule($localContext, 52, self::RULE_bloqueCase);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(337);
		        $this->match(self::CASE);
		        $this->setState(338);
		        $this->listaExpr();
		        $this->setState(339);
		        $this->match(self::COLON);
		        $this->setState(346);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 1125899906904794) !== 0)) {
		        	$this->setState(340);
		        	$this->i();
		        	$this->setState(342);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);

		        	if ($_la === self::SEMICOLON) {
		        		$this->setState(341);
		        		$this->match(self::SEMICOLON);
		        	}
		        	$this->setState(348);
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

		    $this->enterRule($localContext, 54, self::RULE_bloqueDefault);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(349);
		        $this->match(self::DEFAULT);
		        $this->setState(350);
		        $this->match(self::COLON);
		        $this->setState(357);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 1125899906904794) !== 0)) {
		        	$this->setState(351);
		        	$this->i();
		        	$this->setState(353);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);

		        	if ($_la === self::SEMICOLON) {
		        		$this->setState(352);
		        		$this->match(self::SEMICOLON);
		        	}
		        	$this->setState(359);
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

		    $this->enterRule($localContext, 56, self::RULE_sentenciaIf);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(360);
		        $this->match(self::IF);
		        $this->setState(361);
		        $this->recursiveLogExpr(0);
		        $this->setState(362);
		        $this->match(self::LBRACE);
		        $this->setState(369);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 1125899906904794) !== 0)) {
		        	$this->setState(363);
		        	$this->i();
		        	$this->setState(365);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);

		        	if ($_la === self::SEMICOLON) {
		        		$this->setState(364);
		        		$this->match(self::SEMICOLON);
		        	}
		        	$this->setState(371);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(372);
		        $this->match(self::RBRACE);
		        $this->setState(373);
		        $this->bloqueElseIf();
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
		public function bloqueElse(): Context\BloqueElseContext
		{
		    $localContext = new Context\BloqueElseContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 58, self::RULE_bloqueElse);

		    try {
		        $this->setState(388);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::ELSE:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(375);
		            	$this->match(self::ELSE);
		            	$this->setState(376);
		            	$this->match(self::LBRACE);
		            	$this->setState(383);
		            	$this->errorHandler->sync($this);

		            	$_la = $this->input->LA(1);
		            	while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 1125899906904794) !== 0)) {
		            		$this->setState(377);
		            		$this->i();
		            		$this->setState(379);
		            		$this->errorHandler->sync($this);
		            		$_la = $this->input->LA(1);

		            		if ($_la === self::SEMICOLON) {
		            			$this->setState(378);
		            			$this->match(self::SEMICOLON);
		            		}
		            		$this->setState(385);
		            		$this->errorHandler->sync($this);
		            		$_la = $this->input->LA(1);
		            	}
		            	$this->setState(386);
		            	$this->match(self::RBRACE);
		            	break;

		            case self::FUNC:
		            case self::VAR:
		            case self::FMT:
		            case self::CONST:
		            case self::IF:
		            case self::SWITCH:
		            case self::CASE:
		            case self::DEFAULT:
		            case self::FOR:
		            case self::BREAK:
		            case self::CONTINUE:
		            case self::RETURN:
		            case self::RBRACE:
		            case self::SEMICOLON:
		            case self::IDENTIFICADOR:
		            	$this->enterOuterAlt($localContext, 2);

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

		/**
		 * @throws RecognitionException
		 */
		public function bloqueElseIf(): Context\BloqueElseIfContext
		{
		    $localContext = new Context\BloqueElseIfContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 60, self::RULE_bloqueElseIf);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(407);
		        $this->errorHandler->sync($this);

		        $alt = $this->getInterpreter()->adaptivePredict($this->input, 31, $this->ctx);

		        while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
		        	if ($alt === 1) {
		        		$this->setState(390);
		        		$this->match(self::ELSE);
		        		$this->setState(391);
		        		$this->match(self::IF);
		        		$this->setState(392);
		        		$this->recursiveLogExpr(0);
		        		$this->setState(393);
		        		$this->match(self::LBRACE);
		        		$this->setState(400);
		        		$this->errorHandler->sync($this);

		        		$_la = $this->input->LA(1);
		        		while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 1125899906904794) !== 0)) {
		        			$this->setState(394);
		        			$this->i();
		        			$this->setState(396);
		        			$this->errorHandler->sync($this);
		        			$_la = $this->input->LA(1);

		        			if ($_la === self::SEMICOLON) {
		        				$this->setState(395);
		        				$this->match(self::SEMICOLON);
		        			}
		        			$this->setState(402);
		        			$this->errorHandler->sync($this);
		        			$_la = $this->input->LA(1);
		        		}
		        		$this->setState(403);
		        		$this->match(self::RBRACE); 
		        	}

		        	$this->setState(409);
		        	$this->errorHandler->sync($this);

		        	$alt = $this->getInterpreter()->adaptivePredict($this->input, 31, $this->ctx);
		        }
		        $this->setState(410);
		        $this->bloqueElse();
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

		    $this->enterRule($localContext, 62, self::RULE_asignacion);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(412);
		        $this->match(self::IDENTIFICADOR);
		        $this->setState(413);
		        $this->simboloAsignacion();
		        $this->setState(414);
		        $this->recursiveExpr(0);
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

		    $this->enterRule($localContext, 64, self::RULE_imprimir);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(416);
		        $this->match(self::FMT);
		        $this->setState(417);
		        $this->match(self::DOT);
		        $this->setState(418);
		        $this->match(self::PRINTLN);
		        $this->setState(419);
		        $this->match(self::LPAREN);
		        $this->setState(420);
		        $this->listaExpr();
		        $this->setState(421);
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

		    $this->enterRule($localContext, 66, self::RULE_declaracion);

		    try {
		        $this->setState(433);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 32, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(423);
		        	    $this->match(self::VAR);
		        	    $this->setState(424);
		        	    $this->listaId();
		        	    $this->setState(425);
		        	    $this->tipos();
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(427);
		        	    $this->match(self::VAR);
		        	    $this->setState(428);
		        	    $this->listaId();
		        	    $this->setState(429);
		        	    $this->tipos();
		        	    $this->setState(430);
		        	    $this->match(self::ASSIGN);
		        	    $this->setState(431);
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

		    $this->enterRule($localContext, 68, self::RULE_declaracionCorta);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(435);
		        $this->listaId();
		        $this->setState(436);
		        $this->match(self::COLON);
		        $this->setState(437);
		        $this->match(self::ASSIGN);
		        $this->setState(438);
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

		    $this->enterRule($localContext, 70, self::RULE_declaracionConst);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(440);
		        $this->match(self::CONST);
		        $this->setState(441);
		        $this->match(self::IDENTIFICADOR);
		        $this->setState(442);
		        $this->tipos();
		        $this->setState(443);
		        $this->match(self::ASSIGN);
		        $this->setState(444);
		        $this->recursiveExpr(0);
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

		    $this->enterRule($localContext, 72, self::RULE_listaExpr);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(446);
		        $this->recursiveLogExpr(0);
		        $this->setState(451);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::COMMA) {
		        	$this->setState(447);
		        	$this->match(self::COMMA);
		        	$this->setState(448);
		        	$this->recursiveLogExpr(0);
		        	$this->setState(453);
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

		    $this->enterRule($localContext, 74, self::RULE_listaId);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(454);
		        $this->match(self::IDENTIFICADOR);
		        $this->setState(459);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::COMMA) {
		        	$this->setState(455);
		        	$this->match(self::COMMA);
		        	$this->setState(456);
		        	$this->match(self::IDENTIFICADOR);
		        	$this->setState(461);
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
			$startState = 76;
			$this->enterRecursionRule($localContext, 76, self::RULE_logExpr, $precedence);

			try {
				$this->enterOuterAlt($localContext, 1);
				$localContext = new Context\ToRelExprContext($localContext);
				$this->ctx = $localContext;
				$previousContext = $localContext;

				$this->setState(463);
				$this->recursiveRelExpr(0);
				$this->ctx->stop = $this->input->LT(-1);
				$this->setState(470);
				$this->errorHandler->sync($this);

				$alt = $this->getInterpreter()->adaptivePredict($this->input, 35, $this->ctx);

				while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
					if ($alt === 1) {
						if ($this->getParseListeners() !== null) {
						    $this->triggerExitRuleEvent();
						}

						$previousContext = $localContext;
						$localContext = new Context\LogicalExpressionContext(new Context\LogExprContext($parentContext, $parentState));
						$this->pushNewRecursionContext($localContext, $startState, self::RULE_logExpr);
						$this->setState(465);

						if (!($this->precpred($this->ctx, 2))) {
						    throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 2)");
						}
						$this->setState(466);

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
						$this->setState(467);
						$this->recursiveRelExpr(0); 
					}

					$this->setState(472);
					$this->errorHandler->sync($this);

					$alt = $this->getInterpreter()->adaptivePredict($this->input, 35, $this->ctx);
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
			$startState = 78;
			$this->enterRecursionRule($localContext, 78, self::RULE_relExpr, $precedence);

			try {
				$this->enterOuterAlt($localContext, 1);
				$localContext = new Context\ToExprContext($localContext);
				$this->ctx = $localContext;
				$previousContext = $localContext;

				$this->setState(474);
				$this->recursiveExpr(0);
				$this->ctx->stop = $this->input->LT(-1);
				$this->setState(481);
				$this->errorHandler->sync($this);

				$alt = $this->getInterpreter()->adaptivePredict($this->input, 36, $this->ctx);

				while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
					if ($alt === 1) {
						if ($this->getParseListeners() !== null) {
						    $this->triggerExitRuleEvent();
						}

						$previousContext = $localContext;
						$localContext = new Context\RelationalExpresionContext(new Context\RelExprContext($parentContext, $parentState));
						$this->pushNewRecursionContext($localContext, $startState, self::RULE_relExpr);
						$this->setState(476);

						if (!($this->precpred($this->ctx, 2))) {
						    throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 2)");
						}
						$this->setState(477);

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
						$this->setState(478);
						$this->recursiveExpr(0); 
					}

					$this->setState(483);
					$this->errorHandler->sync($this);

					$alt = $this->getInterpreter()->adaptivePredict($this->input, 36, $this->ctx);
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
			$startState = 80;
			$this->enterRecursionRule($localContext, 80, self::RULE_expr, $precedence);

			try {
				$this->enterOuterAlt($localContext, 1);
				$localContext = new Context\ToTermContext($localContext);
				$this->ctx = $localContext;
				$previousContext = $localContext;

				$this->setState(485);
				$this->recursiveTerm(0);
				$this->ctx->stop = $this->input->LT(-1);
				$this->setState(492);
				$this->errorHandler->sync($this);

				$alt = $this->getInterpreter()->adaptivePredict($this->input, 37, $this->ctx);

				while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
					if ($alt === 1) {
						if ($this->getParseListeners() !== null) {
						    $this->triggerExitRuleEvent();
						}

						$previousContext = $localContext;
						$localContext = new Context\BinaryExpressionTContext(new Context\ExprContext($parentContext, $parentState));
						$this->pushNewRecursionContext($localContext, $startState, self::RULE_expr);
						$this->setState(487);

						if (!($this->precpred($this->ctx, 2))) {
						    throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 2)");
						}
						$this->setState(488);

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
						$this->setState(489);
						$this->recursiveTerm(0); 
					}

					$this->setState(494);
					$this->errorHandler->sync($this);

					$alt = $this->getInterpreter()->adaptivePredict($this->input, 37, $this->ctx);
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
			$startState = 82;
			$this->enterRecursionRule($localContext, 82, self::RULE_term, $precedence);

			try {
				$this->enterOuterAlt($localContext, 1);
				$localContext = new Context\ToModTermContext($localContext);
				$this->ctx = $localContext;
				$previousContext = $localContext;

				$this->setState(496);
				$this->recursiveModterm(0);
				$this->ctx->stop = $this->input->LT(-1);
				$this->setState(503);
				$this->errorHandler->sync($this);

				$alt = $this->getInterpreter()->adaptivePredict($this->input, 38, $this->ctx);

				while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
					if ($alt === 1) {
						if ($this->getParseListeners() !== null) {
						    $this->triggerExitRuleEvent();
						}

						$previousContext = $localContext;
						$localContext = new Context\BinaryExpressionSContext(new Context\TermContext($parentContext, $parentState));
						$this->pushNewRecursionContext($localContext, $startState, self::RULE_term);
						$this->setState(498);

						if (!($this->precpred($this->ctx, 2))) {
						    throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 2)");
						}
						$this->setState(499);

						$localContext->op = $this->input->LT(1);
						$_la = $this->input->LA(1);

						if (!($_la === self::MULT || $_la === self::DIV)) {
							    $localContext->op = $this->errorHandler->recoverInline($this);
						} else {
							if ($this->input->LA(1) === Token::EOF) {
							    $this->matchedEOF = true;
						    }

							$this->errorHandler->reportMatch($this);
							$this->consume();
						}
						$this->setState(500);
						$this->recursiveModterm(0); 
					}

					$this->setState(505);
					$this->errorHandler->sync($this);

					$alt = $this->getInterpreter()->adaptivePredict($this->input, 38, $this->ctx);
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
		public function modterm(): Context\ModtermContext
		{
			return $this->recursiveModterm(0);
		}

		/**
		 * @throws RecognitionException
		 */
		private function recursiveModterm(int $precedence): Context\ModtermContext
		{
			$parentContext = $this->ctx;
			$parentState = $this->getState();
			$localContext = new Context\ModtermContext($this->ctx, $parentState);
			$previousContext = $localContext;
			$startState = 84;
			$this->enterRecursionRule($localContext, 84, self::RULE_modterm, $precedence);

			try {
				$this->enterOuterAlt($localContext, 1);
				$localContext = new Context\ToFactorContext($localContext);
				$this->ctx = $localContext;
				$previousContext = $localContext;

				$this->setState(507);
				$this->factor();
				$this->ctx->stop = $this->input->LT(-1);
				$this->setState(514);
				$this->errorHandler->sync($this);

				$alt = $this->getInterpreter()->adaptivePredict($this->input, 39, $this->ctx);

				while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
					if ($alt === 1) {
						if ($this->getParseListeners() !== null) {
						    $this->triggerExitRuleEvent();
						}

						$previousContext = $localContext;
						$localContext = new Context\BinaryExpressionFContext(new Context\ModtermContext($parentContext, $parentState));
						$this->pushNewRecursionContext($localContext, $startState, self::RULE_modterm);
						$this->setState(509);

						if (!($this->precpred($this->ctx, 2))) {
						    throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 2)");
						}
						$this->setState(510);
						$this->match(self::MOD);
						$this->setState(511);
						$this->factor(); 
					}

					$this->setState(516);
					$this->errorHandler->sync($this);

					$alt = $this->getInterpreter()->adaptivePredict($this->input, 39, $this->ctx);
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

		    $this->enterRule($localContext, 86, self::RULE_factor);

		    try {
		        $this->setState(548);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 40, $this->ctx)) {
		        	case 1:
		        	    $localContext = new Context\GroupedExpressionContext($localContext);
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(517);
		        	    $this->match(self::LPAREN);
		        	    $this->setState(518);
		        	    $this->recursiveLogExpr(0);
		        	    $this->setState(519);
		        	    $this->match(self::RPAREN);
		        	break;

		        	case 2:
		        	    $localContext = new Context\UnaryExpressionContext($localContext);
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(521);
		        	    $this->match(self::MINUS);
		        	    $this->setState(522);
		        	    $this->factor();
		        	break;

		        	case 3:
		        	    $localContext = new Context\FloatLitContext($localContext);
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(523);
		        	    $this->match(self::FLOAT);
		        	break;

		        	case 4:
		        	    $localContext = new Context\EnteroLitContext($localContext);
		        	    $this->enterOuterAlt($localContext, 4);
		        	    $this->setState(524);
		        	    $this->match(self::ENTERO);
		        	break;

		        	case 5:
		        	    $localContext = new Context\BoolLitContext($localContext);
		        	    $this->enterOuterAlt($localContext, 5);
		        	    $this->setState(525);
		        	    $this->match(self::BOOL);
		        	break;

		        	case 6:
		        	    $localContext = new Context\RuneLitContext($localContext);
		        	    $this->enterOuterAlt($localContext, 6);
		        	    $this->setState(526);
		        	    $this->match(self::RUNE);
		        	break;

		        	case 7:
		        	    $localContext = new Context\StrLitContext($localContext);
		        	    $this->enterOuterAlt($localContext, 7);
		        	    $this->setState(527);
		        	    $this->match(self::STR);
		        	break;

		        	case 8:
		        	    $localContext = new Context\NilLitContext($localContext);
		        	    $this->enterOuterAlt($localContext, 8);
		        	    $this->setState(528);
		        	    $this->match(self::NIL);
		        	break;

		        	case 9:
		        	    $localContext = new Context\IdentifierRContext($localContext);
		        	    $this->enterOuterAlt($localContext, 9);
		        	    $this->setState(529);
		        	    $this->match(self::REF);
		        	    $this->setState(530);
		        	    $this->match(self::IDENTIFICADOR);
		        	break;

		        	case 10:
		        	    $localContext = new Context\ArregloAccesoRContext($localContext);
		        	    $this->enterOuterAlt($localContext, 10);
		        	    $this->setState(531);
		        	    $this->match(self::REF);
		        	    $this->setState(532);
		        	    $this->accesoArreglos();
		        	break;

		        	case 11:
		        	    $localContext = new Context\ArregloAccesoDRContext($localContext);
		        	    $this->enterOuterAlt($localContext, 11);
		        	    $this->setState(533);
		        	    $this->match(self::REF);
		        	    $this->setState(534);
		        	    $this->accesoArreglosD();
		        	break;

		        	case 12:
		        	    $localContext = new Context\IdentifierDContext($localContext);
		        	    $this->enterOuterAlt($localContext, 12);
		        	    $this->setState(535);
		        	    $this->match(self::MULT);
		        	    $this->setState(536);
		        	    $this->match(self::IDENTIFICADOR);
		        	break;

		        	case 13:
		        	    $localContext = new Context\ArregloAccesoDContext($localContext);
		        	    $this->enterOuterAlt($localContext, 13);
		        	    $this->setState(537);
		        	    $this->match(self::MULT);
		        	    $this->setState(538);
		        	    $this->accesoArreglos();
		        	break;

		        	case 14:
		        	    $localContext = new Context\ArregloAccesoDDContext($localContext);
		        	    $this->enterOuterAlt($localContext, 14);
		        	    $this->setState(539);
		        	    $this->match(self::MULT);
		        	    $this->setState(540);
		        	    $this->accesoArreglosD();
		        	break;

		        	case 15:
		        	    $localContext = new Context\IdentifierContext($localContext);
		        	    $this->enterOuterAlt($localContext, 15);
		        	    $this->setState(541);
		        	    $this->match(self::IDENTIFICADOR);
		        	break;

		        	case 16:
		        	    $localContext = new Context\ArregloAccesoContext($localContext);
		        	    $this->enterOuterAlt($localContext, 16);
		        	    $this->setState(542);
		        	    $this->accesoArreglos();
		        	break;

		        	case 17:
		        	    $localContext = new Context\ArregloAccesoDContext($localContext);
		        	    $this->enterOuterAlt($localContext, 17);
		        	    $this->setState(543);
		        	    $this->accesoArreglosD();
		        	break;

		        	case 18:
		        	    $localContext = new Context\NowFuncContext($localContext);
		        	    $this->enterOuterAlt($localContext, 18);
		        	    $this->setState(544);
		        	    $this->funcNow();
		        	break;

		        	case 19:
		        	    $localContext = new Context\LenFuncContext($localContext);
		        	    $this->enterOuterAlt($localContext, 19);
		        	    $this->setState(545);
		        	    $this->funcLen();
		        	break;

		        	case 20:
		        	    $localContext = new Context\SubFuncContext($localContext);
		        	    $this->enterOuterAlt($localContext, 20);
		        	    $this->setState(546);
		        	    $this->funcSub();
		        	break;

		        	case 21:
		        	    $localContext = new Context\TypeFuncContext($localContext);
		        	    $this->enterOuterAlt($localContext, 21);
		        	    $this->setState(547);
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

		    $this->enterRule($localContext, 88, self::RULE_tipos);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(550);

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
		        $this->setState(555);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::ASSIGN:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(552);
		            	$this->match(self::ASSIGN);
		            	break;

		            case self::PLUS:
		            case self::MINUS:
		            case self::MULT:
		            case self::DIV:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(553);

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
		            	$this->setState(554);
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
					case 38:
						return $this->sempredLogExpr($localContext, $predicateIndex);

					case 39:
						return $this->sempredRelExpr($localContext, $predicateIndex);

					case 40:
						return $this->sempredExpr($localContext, $predicateIndex);

					case 41:
						return $this->sempredTerm($localContext, $predicateIndex);

					case 42:
						return $this->sempredModterm($localContext, $predicateIndex);

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

		private function sempredModterm(?Context\ModtermContext $localContext, int $predicateIndex): bool
		{
			switch ($predicateIndex) {
			    case 4:
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

	    public function bloqueFor(): ?BloqueForContext
	    {
	    	return $this->getTypedRuleContext(BloqueForContext::class, 0);
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

	    public function bloqueFor(): ?BloqueForContext
	    {
	    	return $this->getTypedRuleContext(BloqueForContext::class, 0);
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

	class BloqueForContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_bloqueFor;
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
			    $listener->enterBloqueFor($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitBloqueFor($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitBloqueFor($this);
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

	    public function LBRACE(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::LBRACE, 0);
	    }

	    public function RBRACE(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::RBRACE, 0);
	    }

	    public function bloqueElseIf(): ?BloqueElseIfContext
	    {
	    	return $this->getTypedRuleContext(BloqueElseIfContext::class, 0);
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

	class BloqueElseContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_bloqueElse;
	    }

	    public function ELSE(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::ELSE, 0);
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
			    $listener->enterBloqueElse($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitBloqueElse($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitBloqueElse($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class BloqueElseIfContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_bloqueElseIf;
	    }

	    public function bloqueElse(): ?BloqueElseContext
	    {
	    	return $this->getTypedRuleContext(BloqueElseContext::class, 0);
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
			    $listener->enterBloqueElseIf($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitBloqueElseIf($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitBloqueElseIf($this);
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

	    public function expr(): ?ExprContext
	    {
	    	return $this->getTypedRuleContext(ExprContext::class, 0);
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

	    public function expr(): ?ExprContext
	    {
	    	return $this->getTypedRuleContext(ExprContext::class, 0);
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

	class ToModTermContext extends TermContext
	{
		public function __construct(TermContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function modterm(): ?ModtermContext
	    {
	    	return $this->getTypedRuleContext(ModtermContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterToModTerm($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitToModTerm($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitToModTerm($this);
		    }

			return $visitor->visitChildren($this);
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

	    public function modterm(): ?ModtermContext
	    {
	    	return $this->getTypedRuleContext(ModtermContext::class, 0);
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

	class ModtermContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_modterm;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class BinaryExpressionFContext extends ModtermContext
	{
		public function __construct(ModtermContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function modterm(): ?ModtermContext
	    {
	    	return $this->getTypedRuleContext(ModtermContext::class, 0);
	    }

	    public function MOD(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::MOD, 0);
	    }

	    public function factor(): ?FactorContext
	    {
	    	return $this->getTypedRuleContext(FactorContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterBinaryExpressionF($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitBinaryExpressionF($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitBinaryExpressionF($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ToFactorContext extends ModtermContext
	{
		public function __construct(ModtermContext $context)
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
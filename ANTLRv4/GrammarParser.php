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
               RULE_funcType = 7, RULE_llamadaFuncion = 8, RULE_retornar = 9, 
               RULE_funcion = 10, RULE_listaRetorno = 11, RULE_listaParametros = 12, 
               RULE_accesoArreglo = 13, RULE_listaValores = 14, RULE_sentenciaFor = 15, 
               RULE_forClasico = 16, RULE_condFor = 17, RULE_expFor = 18, 
               RULE_sentenciaSwitch = 19, RULE_bloqueSwitch = 20, RULE_bloqueCase = 21, 
               RULE_bloqueDefault = 22, RULE_sentenciaIf = 23, RULE_bloque = 24, 
               RULE_asignacion = 25, RULE_imprimir = 26, RULE_declaracion = 27, 
               RULE_declaracionCorta = 28, RULE_declaracionConst = 29, RULE_listaExpr = 30, 
               RULE_listaId = 31, RULE_logExpr = 32, RULE_relExpr = 33, 
               RULE_expr = 34, RULE_term = 35, RULE_factor = 36, RULE_arrayLiteral = 37, 
               RULE_arrayLiteral2D = 38, RULE_tipos = 39, RULE_tipoArray = 40, 
               RULE_tipoArray2D = 41, RULE_tipoBase = 42, RULE_simboloAsignacion = 43;

		/**
		 * @var array<string>
		 */
		public const RULE_NAMES = [
			'programa', 'topLevel', 'mainFuncion', 'i', 'funcLen', 'funcNow', 'funcSub', 
			'funcType', 'llamadaFuncion', 'retornar', 'funcion', 'listaRetorno', 
			'listaParametros', 'accesoArreglo', 'listaValores', 'sentenciaFor', 'forClasico', 
			'condFor', 'expFor', 'sentenciaSwitch', 'bloqueSwitch', 'bloqueCase', 
			'bloqueDefault', 'sentenciaIf', 'bloque', 'asignacion', 'imprimir', 'declaracion', 
			'declaracionCorta', 'declaracionConst', 'listaExpr', 'listaId', 'logExpr', 
			'relExpr', 'expr', 'term', 'factor', 'arrayLiteral', 'arrayLiteral2D', 
			'tipos', 'tipoArray', 'tipoArray2D', 'tipoBase', 'simboloAsignacion'
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
			[4, 1, 61, 482, 2, 0, 7, 0, 2, 1, 7, 1, 2, 2, 7, 2, 2, 3, 7, 3, 2, 4, 
		    7, 4, 2, 5, 7, 5, 2, 6, 7, 6, 2, 7, 7, 7, 2, 8, 7, 8, 2, 9, 7, 9, 
		    2, 10, 7, 10, 2, 11, 7, 11, 2, 12, 7, 12, 2, 13, 7, 13, 2, 14, 7, 
		    14, 2, 15, 7, 15, 2, 16, 7, 16, 2, 17, 7, 17, 2, 18, 7, 18, 2, 19, 
		    7, 19, 2, 20, 7, 20, 2, 21, 7, 21, 2, 22, 7, 22, 2, 23, 7, 23, 2, 
		    24, 7, 24, 2, 25, 7, 25, 2, 26, 7, 26, 2, 27, 7, 27, 2, 28, 7, 28, 
		    2, 29, 7, 29, 2, 30, 7, 30, 2, 31, 7, 31, 2, 32, 7, 32, 2, 33, 7, 
		    33, 2, 34, 7, 34, 2, 35, 7, 35, 2, 36, 7, 36, 2, 37, 7, 37, 2, 38, 
		    7, 38, 2, 39, 7, 39, 2, 40, 7, 40, 2, 41, 7, 41, 2, 42, 7, 42, 2, 
		    43, 7, 43, 1, 0, 5, 0, 90, 8, 0, 10, 0, 12, 0, 93, 9, 0, 1, 0, 1, 
		    0, 1, 1, 1, 1, 1, 1, 1, 1, 3, 1, 101, 8, 1, 1, 2, 1, 2, 1, 2, 1, 2, 
		    1, 2, 1, 2, 1, 3, 1, 3, 1, 3, 1, 3, 1, 3, 1, 3, 1, 3, 1, 3, 1, 3, 
		    1, 3, 1, 3, 1, 3, 1, 3, 1, 3, 3, 3, 123, 8, 3, 1, 4, 1, 4, 1, 4, 1, 
		    4, 1, 4, 1, 5, 1, 5, 1, 5, 1, 5, 1, 6, 1, 6, 1, 6, 1, 6, 1, 6, 1, 
		    6, 1, 6, 1, 6, 1, 6, 1, 7, 1, 7, 1, 7, 1, 7, 1, 7, 1, 8, 1, 8, 1, 
		    8, 3, 8, 151, 8, 8, 1, 8, 1, 8, 1, 9, 1, 9, 3, 9, 157, 8, 9, 1, 10, 
		    1, 10, 1, 10, 1, 10, 3, 10, 163, 8, 10, 1, 10, 1, 10, 1, 10, 1, 10, 
		    1, 10, 1, 10, 1, 10, 1, 10, 1, 10, 1, 10, 3, 10, 175, 8, 10, 1, 10, 
		    1, 10, 1, 10, 1, 10, 1, 10, 1, 10, 1, 10, 1, 10, 3, 10, 185, 8, 10, 
		    1, 10, 1, 10, 3, 10, 189, 8, 10, 1, 11, 1, 11, 1, 11, 5, 11, 194, 
		    8, 11, 10, 11, 12, 11, 197, 9, 11, 1, 12, 1, 12, 1, 12, 1, 12, 1, 
		    12, 5, 12, 204, 8, 12, 10, 12, 12, 12, 207, 9, 12, 1, 13, 1, 13, 1, 
		    13, 1, 13, 1, 13, 1, 13, 1, 13, 1, 13, 1, 13, 1, 13, 1, 13, 1, 13, 
		    1, 13, 3, 13, 222, 8, 13, 1, 14, 1, 14, 1, 14, 1, 14, 1, 14, 1, 14, 
		    1, 14, 1, 14, 5, 14, 232, 8, 14, 10, 14, 12, 14, 235, 9, 14, 1, 15, 
		    1, 15, 1, 15, 1, 15, 1, 15, 1, 15, 1, 15, 1, 15, 3, 15, 245, 8, 15, 
		    1, 16, 1, 16, 1, 16, 1, 16, 1, 16, 1, 16, 1, 16, 1, 17, 1, 17, 3, 
		    17, 256, 8, 17, 1, 18, 1, 18, 1, 18, 1, 18, 1, 18, 1, 18, 3, 18, 264, 
		    8, 18, 1, 19, 1, 19, 1, 19, 1, 19, 1, 19, 1, 19, 1, 20, 4, 20, 273, 
		    8, 20, 11, 20, 12, 20, 274, 1, 20, 3, 20, 278, 8, 20, 1, 21, 1, 21, 
		    1, 21, 1, 21, 1, 21, 1, 22, 1, 22, 1, 22, 1, 22, 1, 23, 1, 23, 1, 
		    23, 1, 23, 1, 23, 1, 23, 1, 23, 1, 23, 5, 23, 297, 8, 23, 10, 23, 
		    12, 23, 300, 9, 23, 1, 23, 1, 23, 3, 23, 304, 8, 23, 1, 24, 1, 24, 
		    1, 24, 3, 24, 309, 8, 24, 5, 24, 311, 8, 24, 10, 24, 12, 24, 314, 
		    9, 24, 1, 24, 1, 24, 1, 25, 1, 25, 3, 25, 320, 8, 25, 1, 25, 1, 25, 
		    1, 25, 1, 26, 1, 26, 1, 26, 1, 26, 1, 26, 1, 26, 1, 26, 1, 27, 1, 
		    27, 1, 27, 1, 27, 1, 27, 1, 27, 1, 27, 1, 27, 1, 27, 1, 27, 3, 27, 
		    342, 8, 27, 1, 28, 1, 28, 1, 28, 1, 28, 1, 28, 1, 29, 1, 29, 1, 29, 
		    1, 29, 1, 29, 1, 29, 1, 30, 1, 30, 1, 30, 5, 30, 358, 8, 30, 10, 30, 
		    12, 30, 361, 9, 30, 1, 31, 1, 31, 1, 31, 5, 31, 366, 8, 31, 10, 31, 
		    12, 31, 369, 9, 31, 1, 32, 1, 32, 1, 32, 1, 32, 1, 32, 1, 32, 5, 32, 
		    377, 8, 32, 10, 32, 12, 32, 380, 9, 32, 1, 33, 1, 33, 1, 33, 1, 33, 
		    1, 33, 1, 33, 5, 33, 388, 8, 33, 10, 33, 12, 33, 391, 9, 33, 1, 34, 
		    1, 34, 1, 34, 1, 34, 1, 34, 1, 34, 5, 34, 399, 8, 34, 10, 34, 12, 
		    34, 402, 9, 34, 1, 35, 1, 35, 1, 35, 1, 35, 1, 35, 1, 35, 5, 35, 410, 
		    8, 35, 10, 35, 12, 35, 413, 9, 35, 1, 36, 1, 36, 1, 36, 1, 36, 1, 
		    36, 1, 36, 1, 36, 1, 36, 1, 36, 1, 36, 1, 36, 1, 36, 1, 36, 1, 36, 
		    1, 36, 1, 36, 1, 36, 1, 36, 1, 36, 1, 36, 1, 36, 3, 36, 436, 8, 36, 
		    1, 37, 1, 37, 1, 37, 1, 37, 1, 37, 1, 37, 1, 37, 1, 37, 1, 38, 1, 
		    38, 1, 38, 1, 38, 1, 38, 1, 38, 1, 38, 1, 38, 1, 38, 1, 38, 1, 38, 
		    1, 39, 1, 39, 1, 39, 3, 39, 460, 8, 39, 1, 40, 1, 40, 1, 40, 1, 40, 
		    1, 40, 1, 41, 1, 41, 1, 41, 1, 41, 1, 41, 1, 41, 1, 41, 1, 41, 1, 
		    42, 1, 42, 1, 43, 1, 43, 1, 43, 3, 43, 480, 8, 43, 1, 43, 0, 4, 64, 
		    66, 68, 70, 44, 0, 2, 4, 6, 8, 10, 12, 14, 16, 18, 20, 22, 24, 26, 
		    28, 30, 32, 34, 36, 38, 40, 42, 44, 46, 48, 50, 52, 54, 56, 58, 60, 
		    62, 64, 66, 68, 70, 72, 74, 76, 78, 80, 82, 84, 86, 0, 7, 1, 0, 43, 
		    44, 1, 0, 45, 50, 1, 0, 35, 36, 1, 0, 38, 40, 1, 0, 36, 37, 1, 0, 
		    20, 24, 2, 0, 35, 36, 38, 39, 502, 0, 91, 1, 0, 0, 0, 2, 100, 1, 0, 
		    0, 0, 4, 102, 1, 0, 0, 0, 6, 122, 1, 0, 0, 0, 8, 124, 1, 0, 0, 0, 
		    10, 129, 1, 0, 0, 0, 12, 133, 1, 0, 0, 0, 14, 142, 1, 0, 0, 0, 16, 
		    147, 1, 0, 0, 0, 18, 154, 1, 0, 0, 0, 20, 188, 1, 0, 0, 0, 22, 190, 
		    1, 0, 0, 0, 24, 198, 1, 0, 0, 0, 26, 221, 1, 0, 0, 0, 28, 223, 1, 
		    0, 0, 0, 30, 244, 1, 0, 0, 0, 32, 246, 1, 0, 0, 0, 34, 255, 1, 0, 
		    0, 0, 36, 263, 1, 0, 0, 0, 38, 265, 1, 0, 0, 0, 40, 272, 1, 0, 0, 
		    0, 42, 279, 1, 0, 0, 0, 44, 284, 1, 0, 0, 0, 46, 288, 1, 0, 0, 0, 
		    48, 305, 1, 0, 0, 0, 50, 319, 1, 0, 0, 0, 52, 324, 1, 0, 0, 0, 54, 
		    341, 1, 0, 0, 0, 56, 343, 1, 0, 0, 0, 58, 348, 1, 0, 0, 0, 60, 354, 
		    1, 0, 0, 0, 62, 362, 1, 0, 0, 0, 64, 370, 1, 0, 0, 0, 66, 381, 1, 
		    0, 0, 0, 68, 392, 1, 0, 0, 0, 70, 403, 1, 0, 0, 0, 72, 435, 1, 0, 
		    0, 0, 74, 437, 1, 0, 0, 0, 76, 445, 1, 0, 0, 0, 78, 459, 1, 0, 0, 
		    0, 80, 461, 1, 0, 0, 0, 82, 466, 1, 0, 0, 0, 84, 474, 1, 0, 0, 0, 
		    86, 479, 1, 0, 0, 0, 88, 90, 3, 2, 1, 0, 89, 88, 1, 0, 0, 0, 90, 93, 
		    1, 0, 0, 0, 91, 89, 1, 0, 0, 0, 91, 92, 1, 0, 0, 0, 92, 94, 1, 0, 
		    0, 0, 93, 91, 1, 0, 0, 0, 94, 95, 5, 0, 0, 1, 95, 1, 1, 0, 0, 0, 96, 
		    101, 3, 20, 10, 0, 97, 101, 3, 4, 2, 0, 98, 101, 3, 54, 27, 0, 99, 
		    101, 3, 58, 29, 0, 100, 96, 1, 0, 0, 0, 100, 97, 1, 0, 0, 0, 100, 
		    98, 1, 0, 0, 0, 100, 99, 1, 0, 0, 0, 101, 3, 1, 0, 0, 0, 102, 103, 
		    5, 1, 0, 0, 103, 104, 5, 2, 0, 0, 104, 105, 5, 27, 0, 0, 105, 106, 
		    5, 28, 0, 0, 106, 107, 3, 48, 24, 0, 107, 5, 1, 0, 0, 0, 108, 123, 
		    3, 52, 26, 0, 109, 123, 3, 54, 27, 0, 110, 123, 3, 56, 28, 0, 111, 
		    123, 3, 58, 29, 0, 112, 123, 3, 50, 25, 0, 113, 123, 3, 46, 23, 0, 
		    114, 123, 3, 38, 19, 0, 115, 123, 3, 30, 15, 0, 116, 123, 3, 36, 18, 
		    0, 117, 123, 3, 20, 10, 0, 118, 123, 3, 18, 9, 0, 119, 123, 3, 16, 
		    8, 0, 120, 123, 5, 14, 0, 0, 121, 123, 5, 13, 0, 0, 122, 108, 1, 0, 
		    0, 0, 122, 109, 1, 0, 0, 0, 122, 110, 1, 0, 0, 0, 122, 111, 1, 0, 
		    0, 0, 122, 112, 1, 0, 0, 0, 122, 113, 1, 0, 0, 0, 122, 114, 1, 0, 
		    0, 0, 122, 115, 1, 0, 0, 0, 122, 116, 1, 0, 0, 0, 122, 117, 1, 0, 
		    0, 0, 122, 118, 1, 0, 0, 0, 122, 119, 1, 0, 0, 0, 122, 120, 1, 0, 
		    0, 0, 122, 121, 1, 0, 0, 0, 123, 7, 1, 0, 0, 0, 124, 125, 5, 16, 0, 
		    0, 125, 126, 5, 27, 0, 0, 126, 127, 3, 64, 32, 0, 127, 128, 5, 28, 
		    0, 0, 128, 9, 1, 0, 0, 0, 129, 130, 5, 17, 0, 0, 130, 131, 5, 27, 
		    0, 0, 131, 132, 5, 28, 0, 0, 132, 11, 1, 0, 0, 0, 133, 134, 5, 18, 
		    0, 0, 134, 135, 5, 27, 0, 0, 135, 136, 3, 64, 32, 0, 136, 137, 5, 
		    31, 0, 0, 137, 138, 3, 64, 32, 0, 138, 139, 5, 31, 0, 0, 139, 140, 
		    3, 64, 32, 0, 140, 141, 5, 28, 0, 0, 141, 13, 1, 0, 0, 0, 142, 143, 
		    5, 19, 0, 0, 143, 144, 5, 27, 0, 0, 144, 145, 5, 57, 0, 0, 145, 146, 
		    5, 28, 0, 0, 146, 15, 1, 0, 0, 0, 147, 148, 5, 57, 0, 0, 148, 150, 
		    5, 27, 0, 0, 149, 151, 3, 60, 30, 0, 150, 149, 1, 0, 0, 0, 150, 151, 
		    1, 0, 0, 0, 151, 152, 1, 0, 0, 0, 152, 153, 5, 28, 0, 0, 153, 17, 
		    1, 0, 0, 0, 154, 156, 5, 15, 0, 0, 155, 157, 3, 60, 30, 0, 156, 155, 
		    1, 0, 0, 0, 156, 157, 1, 0, 0, 0, 157, 19, 1, 0, 0, 0, 158, 159, 5, 
		    1, 0, 0, 159, 160, 5, 57, 0, 0, 160, 162, 5, 27, 0, 0, 161, 163, 3, 
		    24, 12, 0, 162, 161, 1, 0, 0, 0, 162, 163, 1, 0, 0, 0, 163, 164, 1, 
		    0, 0, 0, 164, 165, 5, 28, 0, 0, 165, 166, 5, 27, 0, 0, 166, 167, 3, 
		    22, 11, 0, 167, 168, 5, 28, 0, 0, 168, 169, 3, 48, 24, 0, 169, 189, 
		    1, 0, 0, 0, 170, 171, 5, 1, 0, 0, 171, 172, 5, 57, 0, 0, 172, 174, 
		    5, 27, 0, 0, 173, 175, 3, 24, 12, 0, 174, 173, 1, 0, 0, 0, 174, 175, 
		    1, 0, 0, 0, 175, 176, 1, 0, 0, 0, 176, 177, 5, 28, 0, 0, 177, 178, 
		    3, 78, 39, 0, 178, 179, 3, 48, 24, 0, 179, 189, 1, 0, 0, 0, 180, 181, 
		    5, 1, 0, 0, 181, 182, 5, 57, 0, 0, 182, 184, 5, 27, 0, 0, 183, 185, 
		    3, 24, 12, 0, 184, 183, 1, 0, 0, 0, 184, 185, 1, 0, 0, 0, 185, 186, 
		    1, 0, 0, 0, 186, 187, 5, 28, 0, 0, 187, 189, 3, 48, 24, 0, 188, 158, 
		    1, 0, 0, 0, 188, 170, 1, 0, 0, 0, 188, 180, 1, 0, 0, 0, 189, 21, 1, 
		    0, 0, 0, 190, 195, 3, 78, 39, 0, 191, 192, 5, 31, 0, 0, 192, 194, 
		    3, 78, 39, 0, 193, 191, 1, 0, 0, 0, 194, 197, 1, 0, 0, 0, 195, 193, 
		    1, 0, 0, 0, 195, 196, 1, 0, 0, 0, 196, 23, 1, 0, 0, 0, 197, 195, 1, 
		    0, 0, 0, 198, 199, 5, 57, 0, 0, 199, 205, 3, 78, 39, 0, 200, 201, 
		    5, 31, 0, 0, 201, 202, 5, 57, 0, 0, 202, 204, 3, 78, 39, 0, 203, 200, 
		    1, 0, 0, 0, 204, 207, 1, 0, 0, 0, 205, 203, 1, 0, 0, 0, 205, 206, 
		    1, 0, 0, 0, 206, 25, 1, 0, 0, 0, 207, 205, 1, 0, 0, 0, 208, 209, 5, 
		    57, 0, 0, 209, 210, 5, 29, 0, 0, 210, 211, 3, 64, 32, 0, 211, 212, 
		    5, 30, 0, 0, 212, 222, 1, 0, 0, 0, 213, 214, 5, 57, 0, 0, 214, 215, 
		    5, 29, 0, 0, 215, 216, 3, 64, 32, 0, 216, 217, 5, 30, 0, 0, 217, 218, 
		    5, 29, 0, 0, 218, 219, 3, 64, 32, 0, 219, 220, 5, 30, 0, 0, 220, 222, 
		    1, 0, 0, 0, 221, 208, 1, 0, 0, 0, 221, 213, 1, 0, 0, 0, 222, 27, 1, 
		    0, 0, 0, 223, 224, 5, 25, 0, 0, 224, 225, 3, 60, 30, 0, 225, 233, 
		    5, 26, 0, 0, 226, 227, 5, 31, 0, 0, 227, 228, 5, 25, 0, 0, 228, 229, 
		    3, 60, 30, 0, 229, 230, 5, 26, 0, 0, 230, 232, 1, 0, 0, 0, 231, 226, 
		    1, 0, 0, 0, 232, 235, 1, 0, 0, 0, 233, 231, 1, 0, 0, 0, 233, 234, 
		    1, 0, 0, 0, 234, 29, 1, 0, 0, 0, 235, 233, 1, 0, 0, 0, 236, 237, 5, 
		    12, 0, 0, 237, 245, 3, 32, 16, 0, 238, 239, 5, 12, 0, 0, 239, 240, 
		    3, 64, 32, 0, 240, 241, 3, 48, 24, 0, 241, 245, 1, 0, 0, 0, 242, 243, 
		    5, 12, 0, 0, 243, 245, 3, 48, 24, 0, 244, 236, 1, 0, 0, 0, 244, 238, 
		    1, 0, 0, 0, 244, 242, 1, 0, 0, 0, 245, 31, 1, 0, 0, 0, 246, 247, 3, 
		    56, 28, 0, 247, 248, 5, 34, 0, 0, 248, 249, 3, 64, 32, 0, 249, 250, 
		    5, 34, 0, 0, 250, 251, 3, 34, 17, 0, 251, 252, 3, 48, 24, 0, 252, 
		    33, 1, 0, 0, 0, 253, 256, 3, 36, 18, 0, 254, 256, 3, 50, 25, 0, 255, 
		    253, 1, 0, 0, 0, 255, 254, 1, 0, 0, 0, 256, 35, 1, 0, 0, 0, 257, 258, 
		    5, 57, 0, 0, 258, 259, 5, 35, 0, 0, 259, 264, 5, 35, 0, 0, 260, 261, 
		    5, 57, 0, 0, 261, 262, 5, 36, 0, 0, 262, 264, 5, 36, 0, 0, 263, 257, 
		    1, 0, 0, 0, 263, 260, 1, 0, 0, 0, 264, 37, 1, 0, 0, 0, 265, 266, 5, 
		    9, 0, 0, 266, 267, 3, 64, 32, 0, 267, 268, 5, 25, 0, 0, 268, 269, 
		    3, 40, 20, 0, 269, 270, 5, 26, 0, 0, 270, 39, 1, 0, 0, 0, 271, 273, 
		    3, 42, 21, 0, 272, 271, 1, 0, 0, 0, 273, 274, 1, 0, 0, 0, 274, 272, 
		    1, 0, 0, 0, 274, 275, 1, 0, 0, 0, 275, 277, 1, 0, 0, 0, 276, 278, 
		    3, 44, 22, 0, 277, 276, 1, 0, 0, 0, 277, 278, 1, 0, 0, 0, 278, 41, 
		    1, 0, 0, 0, 279, 280, 5, 10, 0, 0, 280, 281, 3, 60, 30, 0, 281, 282, 
		    5, 33, 0, 0, 282, 283, 3, 48, 24, 0, 283, 43, 1, 0, 0, 0, 284, 285, 
		    5, 11, 0, 0, 285, 286, 5, 33, 0, 0, 286, 287, 3, 48, 24, 0, 287, 45, 
		    1, 0, 0, 0, 288, 289, 5, 7, 0, 0, 289, 290, 3, 64, 32, 0, 290, 298, 
		    3, 48, 24, 0, 291, 292, 5, 8, 0, 0, 292, 293, 5, 7, 0, 0, 293, 294, 
		    3, 64, 32, 0, 294, 295, 3, 48, 24, 0, 295, 297, 1, 0, 0, 0, 296, 291, 
		    1, 0, 0, 0, 297, 300, 1, 0, 0, 0, 298, 296, 1, 0, 0, 0, 298, 299, 
		    1, 0, 0, 0, 299, 303, 1, 0, 0, 0, 300, 298, 1, 0, 0, 0, 301, 302, 
		    5, 8, 0, 0, 302, 304, 3, 48, 24, 0, 303, 301, 1, 0, 0, 0, 303, 304, 
		    1, 0, 0, 0, 304, 47, 1, 0, 0, 0, 305, 312, 5, 25, 0, 0, 306, 308, 
		    3, 6, 3, 0, 307, 309, 5, 34, 0, 0, 308, 307, 1, 0, 0, 0, 308, 309, 
		    1, 0, 0, 0, 309, 311, 1, 0, 0, 0, 310, 306, 1, 0, 0, 0, 311, 314, 
		    1, 0, 0, 0, 312, 310, 1, 0, 0, 0, 312, 313, 1, 0, 0, 0, 313, 315, 
		    1, 0, 0, 0, 314, 312, 1, 0, 0, 0, 315, 316, 5, 26, 0, 0, 316, 49, 
		    1, 0, 0, 0, 317, 320, 5, 57, 0, 0, 318, 320, 3, 26, 13, 0, 319, 317, 
		    1, 0, 0, 0, 319, 318, 1, 0, 0, 0, 320, 321, 1, 0, 0, 0, 321, 322, 
		    3, 86, 43, 0, 322, 323, 3, 64, 32, 0, 323, 51, 1, 0, 0, 0, 324, 325, 
		    5, 4, 0, 0, 325, 326, 5, 41, 0, 0, 326, 327, 5, 5, 0, 0, 327, 328, 
		    5, 27, 0, 0, 328, 329, 3, 60, 30, 0, 329, 330, 5, 28, 0, 0, 330, 53, 
		    1, 0, 0, 0, 331, 332, 5, 3, 0, 0, 332, 333, 3, 62, 31, 0, 333, 334, 
		    3, 78, 39, 0, 334, 342, 1, 0, 0, 0, 335, 336, 5, 3, 0, 0, 336, 337, 
		    3, 62, 31, 0, 337, 338, 3, 78, 39, 0, 338, 339, 5, 32, 0, 0, 339, 
		    340, 3, 60, 30, 0, 340, 342, 1, 0, 0, 0, 341, 331, 1, 0, 0, 0, 341, 
		    335, 1, 0, 0, 0, 342, 55, 1, 0, 0, 0, 343, 344, 3, 62, 31, 0, 344, 
		    345, 5, 33, 0, 0, 345, 346, 5, 32, 0, 0, 346, 347, 3, 60, 30, 0, 347, 
		    57, 1, 0, 0, 0, 348, 349, 5, 6, 0, 0, 349, 350, 5, 57, 0, 0, 350, 
		    351, 3, 78, 39, 0, 351, 352, 5, 32, 0, 0, 352, 353, 3, 64, 32, 0, 
		    353, 59, 1, 0, 0, 0, 354, 359, 3, 64, 32, 0, 355, 356, 5, 31, 0, 0, 
		    356, 358, 3, 64, 32, 0, 357, 355, 1, 0, 0, 0, 358, 361, 1, 0, 0, 0, 
		    359, 357, 1, 0, 0, 0, 359, 360, 1, 0, 0, 0, 360, 61, 1, 0, 0, 0, 361, 
		    359, 1, 0, 0, 0, 362, 367, 5, 57, 0, 0, 363, 364, 5, 31, 0, 0, 364, 
		    366, 5, 57, 0, 0, 365, 363, 1, 0, 0, 0, 366, 369, 1, 0, 0, 0, 367, 
		    365, 1, 0, 0, 0, 367, 368, 1, 0, 0, 0, 368, 63, 1, 0, 0, 0, 369, 367, 
		    1, 0, 0, 0, 370, 371, 6, 32, -1, 0, 371, 372, 3, 66, 33, 0, 372, 378, 
		    1, 0, 0, 0, 373, 374, 10, 2, 0, 0, 374, 375, 7, 0, 0, 0, 375, 377, 
		    3, 66, 33, 0, 376, 373, 1, 0, 0, 0, 377, 380, 1, 0, 0, 0, 378, 376, 
		    1, 0, 0, 0, 378, 379, 1, 0, 0, 0, 379, 65, 1, 0, 0, 0, 380, 378, 1, 
		    0, 0, 0, 381, 382, 6, 33, -1, 0, 382, 383, 3, 68, 34, 0, 383, 389, 
		    1, 0, 0, 0, 384, 385, 10, 2, 0, 0, 385, 386, 7, 1, 0, 0, 386, 388, 
		    3, 68, 34, 0, 387, 384, 1, 0, 0, 0, 388, 391, 1, 0, 0, 0, 389, 387, 
		    1, 0, 0, 0, 389, 390, 1, 0, 0, 0, 390, 67, 1, 0, 0, 0, 391, 389, 1, 
		    0, 0, 0, 392, 393, 6, 34, -1, 0, 393, 394, 3, 70, 35, 0, 394, 400, 
		    1, 0, 0, 0, 395, 396, 10, 2, 0, 0, 396, 397, 7, 2, 0, 0, 397, 399, 
		    3, 70, 35, 0, 398, 395, 1, 0, 0, 0, 399, 402, 1, 0, 0, 0, 400, 398, 
		    1, 0, 0, 0, 400, 401, 1, 0, 0, 0, 401, 69, 1, 0, 0, 0, 402, 400, 1, 
		    0, 0, 0, 403, 404, 6, 35, -1, 0, 404, 405, 3, 72, 36, 0, 405, 411, 
		    1, 0, 0, 0, 406, 407, 10, 2, 0, 0, 407, 408, 7, 3, 0, 0, 408, 410, 
		    3, 72, 36, 0, 409, 406, 1, 0, 0, 0, 410, 413, 1, 0, 0, 0, 411, 409, 
		    1, 0, 0, 0, 411, 412, 1, 0, 0, 0, 412, 71, 1, 0, 0, 0, 413, 411, 1, 
		    0, 0, 0, 414, 436, 3, 74, 37, 0, 415, 436, 3, 76, 38, 0, 416, 436, 
		    3, 26, 13, 0, 417, 418, 5, 27, 0, 0, 418, 419, 3, 64, 32, 0, 419, 
		    420, 5, 28, 0, 0, 420, 436, 1, 0, 0, 0, 421, 422, 7, 4, 0, 0, 422, 
		    436, 3, 72, 36, 0, 423, 436, 5, 54, 0, 0, 424, 436, 5, 53, 0, 0, 425, 
		    436, 5, 51, 0, 0, 426, 436, 5, 56, 0, 0, 427, 436, 5, 55, 0, 0, 428, 
		    436, 5, 52, 0, 0, 429, 436, 3, 10, 5, 0, 430, 436, 3, 8, 4, 0, 431, 
		    436, 3, 12, 6, 0, 432, 436, 3, 14, 7, 0, 433, 436, 3, 16, 8, 0, 434, 
		    436, 5, 57, 0, 0, 435, 414, 1, 0, 0, 0, 435, 415, 1, 0, 0, 0, 435, 
		    416, 1, 0, 0, 0, 435, 417, 1, 0, 0, 0, 435, 421, 1, 0, 0, 0, 435, 
		    423, 1, 0, 0, 0, 435, 424, 1, 0, 0, 0, 435, 425, 1, 0, 0, 0, 435, 
		    426, 1, 0, 0, 0, 435, 427, 1, 0, 0, 0, 435, 428, 1, 0, 0, 0, 435, 
		    429, 1, 0, 0, 0, 435, 430, 1, 0, 0, 0, 435, 431, 1, 0, 0, 0, 435, 
		    432, 1, 0, 0, 0, 435, 433, 1, 0, 0, 0, 435, 434, 1, 0, 0, 0, 436, 
		    73, 1, 0, 0, 0, 437, 438, 5, 29, 0, 0, 438, 439, 3, 64, 32, 0, 439, 
		    440, 5, 30, 0, 0, 440, 441, 3, 84, 42, 0, 441, 442, 5, 25, 0, 0, 442, 
		    443, 3, 60, 30, 0, 443, 444, 5, 26, 0, 0, 444, 75, 1, 0, 0, 0, 445, 
		    446, 5, 29, 0, 0, 446, 447, 3, 64, 32, 0, 447, 448, 5, 30, 0, 0, 448, 
		    449, 5, 29, 0, 0, 449, 450, 3, 64, 32, 0, 450, 451, 5, 30, 0, 0, 451, 
		    452, 3, 84, 42, 0, 452, 453, 5, 25, 0, 0, 453, 454, 3, 28, 14, 0, 
		    454, 455, 5, 26, 0, 0, 455, 77, 1, 0, 0, 0, 456, 460, 3, 84, 42, 0, 
		    457, 460, 3, 80, 40, 0, 458, 460, 3, 82, 41, 0, 459, 456, 1, 0, 0, 
		    0, 459, 457, 1, 0, 0, 0, 459, 458, 1, 0, 0, 0, 460, 79, 1, 0, 0, 0, 
		    461, 462, 5, 29, 0, 0, 462, 463, 3, 64, 32, 0, 463, 464, 5, 30, 0, 
		    0, 464, 465, 3, 84, 42, 0, 465, 81, 1, 0, 0, 0, 466, 467, 5, 29, 0, 
		    0, 467, 468, 3, 64, 32, 0, 468, 469, 5, 30, 0, 0, 469, 470, 5, 29, 
		    0, 0, 470, 471, 3, 64, 32, 0, 471, 472, 5, 30, 0, 0, 472, 473, 3, 
		    84, 42, 0, 473, 83, 1, 0, 0, 0, 474, 475, 7, 5, 0, 0, 475, 85, 1, 
		    0, 0, 0, 476, 480, 5, 32, 0, 0, 477, 478, 7, 6, 0, 0, 478, 480, 5, 
		    32, 0, 0, 479, 476, 1, 0, 0, 0, 479, 477, 1, 0, 0, 0, 480, 87, 1, 
		    0, 0, 0, 33, 91, 100, 122, 150, 156, 162, 174, 184, 188, 195, 205, 
		    221, 233, 244, 255, 263, 274, 277, 298, 303, 308, 312, 319, 341, 359, 
		    367, 378, 389, 400, 411, 435, 459, 479];
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
		        $this->setState(91);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 74) !== 0)) {
		        	$this->setState(88);
		        	$this->topLevel();
		        	$this->setState(93);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(94);
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
		        $this->setState(100);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 1, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(96);
		        	    $this->funcion();
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(97);
		        	    $this->mainFuncion();
		        	break;

		        	case 3:
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(98);
		        	    $this->declaracion();
		        	break;

		        	case 4:
		        	    $this->enterOuterAlt($localContext, 4);
		        	    $this->setState(99);
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
		        $this->setState(102);
		        $this->match(self::FUNC);
		        $this->setState(103);
		        $this->match(self::MAIN);
		        $this->setState(104);
		        $this->match(self::LPAREN);
		        $this->setState(105);
		        $this->match(self::RPAREN);
		        $this->setState(106);
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
		        $this->setState(122);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 2, $this->ctx)) {
		        	case 1:
		        	    $localContext = new Context\FuncionImprimirContext($localContext);
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(108);
		        	    $this->imprimir();
		        	break;

		        	case 2:
		        	    $localContext = new Context\DeclarationContext($localContext);
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(109);
		        	    $this->declaracion();
		        	break;

		        	case 3:
		        	    $localContext = new Context\ShortDeclarationContext($localContext);
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(110);
		        	    $this->declaracionCorta();
		        	break;

		        	case 4:
		        	    $localContext = new Context\ConstDeclarationContext($localContext);
		        	    $this->enterOuterAlt($localContext, 4);
		        	    $this->setState(111);
		        	    $this->declaracionConst();
		        	break;

		        	case 5:
		        	    $localContext = new Context\AsignationContext($localContext);
		        	    $this->enterOuterAlt($localContext, 5);
		        	    $this->setState(112);
		        	    $this->asignacion();
		        	break;

		        	case 6:
		        	    $localContext = new Context\IfSentenciaContext($localContext);
		        	    $this->enterOuterAlt($localContext, 6);
		        	    $this->setState(113);
		        	    $this->sentenciaIf();
		        	break;

		        	case 7:
		        	    $localContext = new Context\SwitchSentenciaContext($localContext);
		        	    $this->enterOuterAlt($localContext, 7);
		        	    $this->setState(114);
		        	    $this->sentenciaSwitch();
		        	break;

		        	case 8:
		        	    $localContext = new Context\ForSentenciaContext($localContext);
		        	    $this->enterOuterAlt($localContext, 8);
		        	    $this->setState(115);
		        	    $this->sentenciaFor();
		        	break;

		        	case 9:
		        	    $localContext = new Context\IncDecContext($localContext);
		        	    $this->enterOuterAlt($localContext, 9);
		        	    $this->setState(116);
		        	    $this->expFor();
		        	break;

		        	case 10:
		        	    $localContext = new Context\DFunctionContext($localContext);
		        	    $this->enterOuterAlt($localContext, 10);
		        	    $this->setState(117);
		        	    $this->funcion();
		        	break;

		        	case 11:
		        	    $localContext = new Context\SentenciaReturnContext($localContext);
		        	    $this->enterOuterAlt($localContext, 11);
		        	    $this->setState(118);
		        	    $this->retornar();
		        	break;

		        	case 12:
		        	    $localContext = new Context\LlamarFuncionContext($localContext);
		        	    $this->enterOuterAlt($localContext, 12);
		        	    $this->setState(119);
		        	    $this->llamadaFuncion();
		        	break;

		        	case 13:
		        	    $localContext = new Context\SentenciaContinueContext($localContext);
		        	    $this->enterOuterAlt($localContext, 13);
		        	    $this->setState(120);
		        	    $this->match(self::CONTINUE);
		        	break;

		        	case 14:
		        	    $localContext = new Context\SentenciaBreakContext($localContext);
		        	    $this->enterOuterAlt($localContext, 14);
		        	    $this->setState(121);
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
		        $this->setState(124);
		        $this->match(self::LEN);
		        $this->setState(125);
		        $this->match(self::LPAREN);
		        $this->setState(126);
		        $this->recursiveLogExpr(0);
		        $this->setState(127);
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
		        $this->setState(129);
		        $this->match(self::NOW);
		        $this->setState(130);
		        $this->match(self::LPAREN);
		        $this->setState(131);
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
		        $this->setState(133);
		        $this->match(self::SUBSTR);
		        $this->setState(134);
		        $this->match(self::LPAREN);
		        $this->setState(135);
		        $this->recursiveLogExpr(0);
		        $this->setState(136);
		        $this->match(self::COMMA);
		        $this->setState(137);
		        $this->recursiveLogExpr(0);
		        $this->setState(138);
		        $this->match(self::COMMA);
		        $this->setState(139);
		        $this->recursiveLogExpr(0);
		        $this->setState(140);
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
		        $this->setState(142);
		        $this->match(self::TYPEOF);
		        $this->setState(143);
		        $this->match(self::LPAREN);
		        $this->setState(144);
		        $this->match(self::IDENTIFICADOR);
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
		public function llamadaFuncion(): Context\LlamadaFuncionContext
		{
		    $localContext = new Context\LlamadaFuncionContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 16, self::RULE_llamadaFuncion);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(147);
		        $this->match(self::IDENTIFICADOR);
		        $this->setState(148);
		        $this->match(self::LPAREN);
		        $this->setState(150);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 285978783168528384) !== 0)) {
		        	$this->setState(149);
		        	$this->listaExpr();
		        }
		        $this->setState(152);
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

		    $this->enterRule($localContext, 18, self::RULE_retornar);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(154);
		        $this->match(self::RETURN);
		        $this->setState(156);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 4, $this->ctx)) {
		            case 1:
		        	    $this->setState(155);
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

		    $this->enterRule($localContext, 20, self::RULE_funcion);

		    try {
		        $this->setState(188);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 8, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(158);
		        	    $this->match(self::FUNC);
		        	    $this->setState(159);
		        	    $this->match(self::IDENTIFICADOR);
		        	    $this->setState(160);
		        	    $this->match(self::LPAREN);
		        	    $this->setState(162);
		        	    $this->errorHandler->sync($this);
		        	    $_la = $this->input->LA(1);

		        	    if ($_la === self::IDENTIFICADOR) {
		        	    	$this->setState(161);
		        	    	$this->listaParametros();
		        	    }
		        	    $this->setState(164);
		        	    $this->match(self::RPAREN);
		        	    $this->setState(165);
		        	    $this->match(self::LPAREN);
		        	    $this->setState(166);
		        	    $this->listaRetorno();
		        	    $this->setState(167);
		        	    $this->match(self::RPAREN);
		        	    $this->setState(168);
		        	    $this->bloque();
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(170);
		        	    $this->match(self::FUNC);
		        	    $this->setState(171);
		        	    $this->match(self::IDENTIFICADOR);
		        	    $this->setState(172);
		        	    $this->match(self::LPAREN);
		        	    $this->setState(174);
		        	    $this->errorHandler->sync($this);
		        	    $_la = $this->input->LA(1);

		        	    if ($_la === self::IDENTIFICADOR) {
		        	    	$this->setState(173);
		        	    	$this->listaParametros();
		        	    }
		        	    $this->setState(176);
		        	    $this->match(self::RPAREN);
		        	    $this->setState(177);
		        	    $this->tipos();
		        	    $this->setState(178);
		        	    $this->bloque();
		        	break;

		        	case 3:
		        	    $this->enterOuterAlt($localContext, 3);
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

		    $this->enterRule($localContext, 22, self::RULE_listaRetorno);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(190);
		        $this->tipos();
		        $this->setState(195);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::COMMA) {
		        	$this->setState(191);
		        	$this->match(self::COMMA);
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
		public function listaParametros(): Context\ListaParametrosContext
		{
		    $localContext = new Context\ListaParametrosContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 24, self::RULE_listaParametros);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(198);
		        $this->match(self::IDENTIFICADOR);
		        $this->setState(199);
		        $this->tipos();
		        $this->setState(205);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::COMMA) {
		        	$this->setState(200);
		        	$this->match(self::COMMA);
		        	$this->setState(201);
		        	$this->match(self::IDENTIFICADOR);
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
		public function accesoArreglo(): Context\AccesoArregloContext
		{
		    $localContext = new Context\AccesoArregloContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 26, self::RULE_accesoArreglo);

		    try {
		        $this->setState(221);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 11, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(208);
		        	    $this->match(self::IDENTIFICADOR);
		        	    $this->setState(209);
		        	    $this->match(self::LCOR);
		        	    $this->setState(210);
		        	    $this->recursiveLogExpr(0);
		        	    $this->setState(211);
		        	    $this->match(self::RCOR);
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(213);
		        	    $this->match(self::IDENTIFICADOR);
		        	    $this->setState(214);
		        	    $this->match(self::LCOR);
		        	    $this->setState(215);
		        	    $this->recursiveLogExpr(0);
		        	    $this->setState(216);
		        	    $this->match(self::RCOR);
		        	    $this->setState(217);
		        	    $this->match(self::LCOR);
		        	    $this->setState(218);
		        	    $this->recursiveLogExpr(0);
		        	    $this->setState(219);
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

		    $this->enterRule($localContext, 28, self::RULE_listaValores);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(223);
		        $this->match(self::LBRACE);
		        $this->setState(224);
		        $this->listaExpr();
		        $this->setState(225);
		        $this->match(self::RBRACE);
		        $this->setState(233);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::COMMA) {
		        	$this->setState(226);
		        	$this->match(self::COMMA);
		        	$this->setState(227);
		        	$this->match(self::LBRACE);
		        	$this->setState(228);
		        	$this->listaExpr();
		        	$this->setState(229);
		        	$this->match(self::RBRACE);
		        	$this->setState(235);
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

		    $this->enterRule($localContext, 30, self::RULE_sentenciaFor);

		    try {
		        $this->setState(244);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 13, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(236);
		        	    $this->match(self::FOR);
		        	    $this->setState(237);
		        	    $this->forClasico();
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(238);
		        	    $this->match(self::FOR);
		        	    $this->setState(239);
		        	    $this->recursiveLogExpr(0);
		        	    $this->setState(240);
		        	    $this->bloque();
		        	break;

		        	case 3:
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(242);
		        	    $this->match(self::FOR);
		        	    $this->setState(243);
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

		    $this->enterRule($localContext, 32, self::RULE_forClasico);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(246);
		        $this->declaracionCorta();
		        $this->setState(247);
		        $this->match(self::SEMICOLON);
		        $this->setState(248);
		        $this->recursiveLogExpr(0);
		        $this->setState(249);
		        $this->match(self::SEMICOLON);
		        $this->setState(250);
		        $this->condFor();
		        $this->setState(251);
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

		    $this->enterRule($localContext, 34, self::RULE_condFor);

		    try {
		        $this->setState(255);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 14, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(253);
		        	    $this->expFor();
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(254);
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

		    $this->enterRule($localContext, 36, self::RULE_expFor);

		    try {
		        $this->setState(263);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 15, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(257);
		        	    $this->match(self::IDENTIFICADOR);
		        	    $this->setState(258);
		        	    $this->match(self::PLUS);
		        	    $this->setState(259);
		        	    $this->match(self::PLUS);
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(260);
		        	    $this->match(self::IDENTIFICADOR);
		        	    $this->setState(261);
		        	    $this->match(self::MINUS);
		        	    $this->setState(262);
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

		    $this->enterRule($localContext, 38, self::RULE_sentenciaSwitch);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(265);
		        $this->match(self::SWITCH);
		        $this->setState(266);
		        $this->recursiveLogExpr(0);
		        $this->setState(267);
		        $this->match(self::LBRACE);
		        $this->setState(268);
		        $this->bloqueSwitch();
		        $this->setState(269);
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

		    $this->enterRule($localContext, 40, self::RULE_bloqueSwitch);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(272); 
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        do {
		        	$this->setState(271);
		        	$this->bloqueCase();
		        	$this->setState(274); 
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        } while ($_la === self::CASE);
		        $this->setState(277);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::DEFAULT) {
		        	$this->setState(276);
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

		    $this->enterRule($localContext, 42, self::RULE_bloqueCase);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(279);
		        $this->match(self::CASE);
		        $this->setState(280);
		        $this->listaExpr();
		        $this->setState(281);
		        $this->match(self::COLON);
		        $this->setState(282);
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

		    $this->enterRule($localContext, 44, self::RULE_bloqueDefault);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(284);
		        $this->match(self::DEFAULT);
		        $this->setState(285);
		        $this->match(self::COLON);
		        $this->setState(286);
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

		    $this->enterRule($localContext, 46, self::RULE_sentenciaIf);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(288);
		        $this->match(self::IF);
		        $this->setState(289);
		        $this->recursiveLogExpr(0);
		        $this->setState(290);
		        $this->bloque();
		        $this->setState(298);
		        $this->errorHandler->sync($this);

		        $alt = $this->getInterpreter()->adaptivePredict($this->input, 18, $this->ctx);

		        while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
		        	if ($alt === 1) {
		        		$this->setState(291);
		        		$this->match(self::ELSE);
		        		$this->setState(292);
		        		$this->match(self::IF);
		        		$this->setState(293);
		        		$this->recursiveLogExpr(0);
		        		$this->setState(294);
		        		$this->bloque(); 
		        	}

		        	$this->setState(300);
		        	$this->errorHandler->sync($this);

		        	$alt = $this->getInterpreter()->adaptivePredict($this->input, 18, $this->ctx);
		        }
		        $this->setState(303);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::ELSE) {
		        	$this->setState(301);
		        	$this->match(self::ELSE);
		        	$this->setState(302);
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

		    $this->enterRule($localContext, 48, self::RULE_bloque);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(305);
		        $this->match(self::LBRACE);
		        $this->setState(312);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 144115188075918042) !== 0)) {
		        	$this->setState(306);
		        	$this->i();
		        	$this->setState(308);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);

		        	if ($_la === self::SEMICOLON) {
		        		$this->setState(307);
		        		$this->match(self::SEMICOLON);
		        	}
		        	$this->setState(314);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(315);
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

		    $this->enterRule($localContext, 50, self::RULE_asignacion);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(319);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 22, $this->ctx)) {
		        	case 1:
		        	    $this->setState(317);
		        	    $this->match(self::IDENTIFICADOR);
		        	break;

		        	case 2:
		        	    $this->setState(318);
		        	    $this->accesoArreglo();
		        	break;
		        }
		        $this->setState(321);
		        $this->simboloAsignacion();
		        $this->setState(322);
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

		    $this->enterRule($localContext, 52, self::RULE_imprimir);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(324);
		        $this->match(self::FMT);
		        $this->setState(325);
		        $this->match(self::DOT);
		        $this->setState(326);
		        $this->match(self::PRINTLN);
		        $this->setState(327);
		        $this->match(self::LPAREN);
		        $this->setState(328);
		        $this->listaExpr();
		        $this->setState(329);
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

		    $this->enterRule($localContext, 54, self::RULE_declaracion);

		    try {
		        $this->setState(341);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 23, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(331);
		        	    $this->match(self::VAR);
		        	    $this->setState(332);
		        	    $this->listaId();
		        	    $this->setState(333);
		        	    $this->tipos();
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(335);
		        	    $this->match(self::VAR);
		        	    $this->setState(336);
		        	    $this->listaId();
		        	    $this->setState(337);
		        	    $this->tipos();
		        	    $this->setState(338);
		        	    $this->match(self::ASSIGN);
		        	    $this->setState(339);
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

		    $this->enterRule($localContext, 56, self::RULE_declaracionCorta);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(343);
		        $this->listaId();
		        $this->setState(344);
		        $this->match(self::COLON);
		        $this->setState(345);
		        $this->match(self::ASSIGN);
		        $this->setState(346);
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

		    $this->enterRule($localContext, 58, self::RULE_declaracionConst);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(348);
		        $this->match(self::CONST);
		        $this->setState(349);
		        $this->match(self::IDENTIFICADOR);
		        $this->setState(350);
		        $this->tipos();
		        $this->setState(351);
		        $this->match(self::ASSIGN);
		        $this->setState(352);
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

		    $this->enterRule($localContext, 60, self::RULE_listaExpr);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(354);
		        $this->recursiveLogExpr(0);
		        $this->setState(359);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::COMMA) {
		        	$this->setState(355);
		        	$this->match(self::COMMA);
		        	$this->setState(356);
		        	$this->recursiveLogExpr(0);
		        	$this->setState(361);
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

		    $this->enterRule($localContext, 62, self::RULE_listaId);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(362);
		        $this->match(self::IDENTIFICADOR);
		        $this->setState(367);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::COMMA) {
		        	$this->setState(363);
		        	$this->match(self::COMMA);
		        	$this->setState(364);
		        	$this->match(self::IDENTIFICADOR);
		        	$this->setState(369);
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
			$startState = 64;
			$this->enterRecursionRule($localContext, 64, self::RULE_logExpr, $precedence);

			try {
				$this->enterOuterAlt($localContext, 1);
				$localContext = new Context\ToRelExprContext($localContext);
				$this->ctx = $localContext;
				$previousContext = $localContext;

				$this->setState(371);
				$this->recursiveRelExpr(0);
				$this->ctx->stop = $this->input->LT(-1);
				$this->setState(378);
				$this->errorHandler->sync($this);

				$alt = $this->getInterpreter()->adaptivePredict($this->input, 26, $this->ctx);

				while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
					if ($alt === 1) {
						if ($this->getParseListeners() !== null) {
						    $this->triggerExitRuleEvent();
						}

						$previousContext = $localContext;
						$localContext = new Context\LogicalExpressionContext(new Context\LogExprContext($parentContext, $parentState));
						$this->pushNewRecursionContext($localContext, $startState, self::RULE_logExpr);
						$this->setState(373);

						if (!($this->precpred($this->ctx, 2))) {
						    throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 2)");
						}
						$this->setState(374);

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
						$this->setState(375);
						$this->recursiveRelExpr(0); 
					}

					$this->setState(380);
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
			$startState = 66;
			$this->enterRecursionRule($localContext, 66, self::RULE_relExpr, $precedence);

			try {
				$this->enterOuterAlt($localContext, 1);
				$localContext = new Context\ToExprContext($localContext);
				$this->ctx = $localContext;
				$previousContext = $localContext;

				$this->setState(382);
				$this->recursiveExpr(0);
				$this->ctx->stop = $this->input->LT(-1);
				$this->setState(389);
				$this->errorHandler->sync($this);

				$alt = $this->getInterpreter()->adaptivePredict($this->input, 27, $this->ctx);

				while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
					if ($alt === 1) {
						if ($this->getParseListeners() !== null) {
						    $this->triggerExitRuleEvent();
						}

						$previousContext = $localContext;
						$localContext = new Context\RelationalExpresionContext(new Context\RelExprContext($parentContext, $parentState));
						$this->pushNewRecursionContext($localContext, $startState, self::RULE_relExpr);
						$this->setState(384);

						if (!($this->precpred($this->ctx, 2))) {
						    throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 2)");
						}
						$this->setState(385);

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
						$this->setState(386);
						$this->recursiveExpr(0); 
					}

					$this->setState(391);
					$this->errorHandler->sync($this);

					$alt = $this->getInterpreter()->adaptivePredict($this->input, 27, $this->ctx);
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
			$startState = 68;
			$this->enterRecursionRule($localContext, 68, self::RULE_expr, $precedence);

			try {
				$this->enterOuterAlt($localContext, 1);
				$localContext = new Context\ToTermContext($localContext);
				$this->ctx = $localContext;
				$previousContext = $localContext;

				$this->setState(393);
				$this->recursiveTerm(0);
				$this->ctx->stop = $this->input->LT(-1);
				$this->setState(400);
				$this->errorHandler->sync($this);

				$alt = $this->getInterpreter()->adaptivePredict($this->input, 28, $this->ctx);

				while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
					if ($alt === 1) {
						if ($this->getParseListeners() !== null) {
						    $this->triggerExitRuleEvent();
						}

						$previousContext = $localContext;
						$localContext = new Context\BinaryExpressionTContext(new Context\ExprContext($parentContext, $parentState));
						$this->pushNewRecursionContext($localContext, $startState, self::RULE_expr);
						$this->setState(395);

						if (!($this->precpred($this->ctx, 2))) {
						    throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 2)");
						}
						$this->setState(396);

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
						$this->setState(397);
						$this->recursiveTerm(0); 
					}

					$this->setState(402);
					$this->errorHandler->sync($this);

					$alt = $this->getInterpreter()->adaptivePredict($this->input, 28, $this->ctx);
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
			$startState = 70;
			$this->enterRecursionRule($localContext, 70, self::RULE_term, $precedence);

			try {
				$this->enterOuterAlt($localContext, 1);
				$localContext = new Context\ToFactorContext($localContext);
				$this->ctx = $localContext;
				$previousContext = $localContext;

				$this->setState(404);
				$this->factor();
				$this->ctx->stop = $this->input->LT(-1);
				$this->setState(411);
				$this->errorHandler->sync($this);

				$alt = $this->getInterpreter()->adaptivePredict($this->input, 29, $this->ctx);

				while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
					if ($alt === 1) {
						if ($this->getParseListeners() !== null) {
						    $this->triggerExitRuleEvent();
						}

						$previousContext = $localContext;
						$localContext = new Context\BinaryExpressionSContext(new Context\TermContext($parentContext, $parentState));
						$this->pushNewRecursionContext($localContext, $startState, self::RULE_term);
						$this->setState(406);

						if (!($this->precpred($this->ctx, 2))) {
						    throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 2)");
						}
						$this->setState(407);

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
						$this->setState(408);
						$this->factor(); 
					}

					$this->setState(413);
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
		public function factor(): Context\FactorContext
		{
		    $localContext = new Context\FactorContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 72, self::RULE_factor);

		    try {
		        $this->setState(435);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 30, $this->ctx)) {
		        	case 1:
		        	    $localContext = new Context\ArrayLitContext($localContext);
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(414);
		        	    $this->arrayLiteral();
		        	break;

		        	case 2:
		        	    $localContext = new Context\ArrayLit2DContext($localContext);
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(415);
		        	    $this->arrayLiteral2D();
		        	break;

		        	case 3:
		        	    $localContext = new Context\ArregloAccesoContext($localContext);
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(416);
		        	    $this->accesoArreglo();
		        	break;

		        	case 4:
		        	    $localContext = new Context\GroupedExpressionContext($localContext);
		        	    $this->enterOuterAlt($localContext, 4);
		        	    $this->setState(417);
		        	    $this->match(self::LPAREN);
		        	    $this->setState(418);
		        	    $this->recursiveLogExpr(0);
		        	    $this->setState(419);
		        	    $this->match(self::RPAREN);
		        	break;

		        	case 5:
		        	    $localContext = new Context\UnaryExpressionContext($localContext);
		        	    $this->enterOuterAlt($localContext, 5);
		        	    $this->setState(421);

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
		        	    $this->setState(422);
		        	    $this->factor();
		        	break;

		        	case 6:
		        	    $localContext = new Context\FloatLitContext($localContext);
		        	    $this->enterOuterAlt($localContext, 6);
		        	    $this->setState(423);
		        	    $this->match(self::FLOAT);
		        	break;

		        	case 7:
		        	    $localContext = new Context\EnteroLitContext($localContext);
		        	    $this->enterOuterAlt($localContext, 7);
		        	    $this->setState(424);
		        	    $this->match(self::ENTERO);
		        	break;

		        	case 8:
		        	    $localContext = new Context\BoolLitContext($localContext);
		        	    $this->enterOuterAlt($localContext, 8);
		        	    $this->setState(425);
		        	    $this->match(self::BOOL);
		        	break;

		        	case 9:
		        	    $localContext = new Context\RuneLitContext($localContext);
		        	    $this->enterOuterAlt($localContext, 9);
		        	    $this->setState(426);
		        	    $this->match(self::RUNE);
		        	break;

		        	case 10:
		        	    $localContext = new Context\StrLitContext($localContext);
		        	    $this->enterOuterAlt($localContext, 10);
		        	    $this->setState(427);
		        	    $this->match(self::STR);
		        	break;

		        	case 11:
		        	    $localContext = new Context\NilLitContext($localContext);
		        	    $this->enterOuterAlt($localContext, 11);
		        	    $this->setState(428);
		        	    $this->match(self::NIL);
		        	break;

		        	case 12:
		        	    $localContext = new Context\NowFuncContext($localContext);
		        	    $this->enterOuterAlt($localContext, 12);
		        	    $this->setState(429);
		        	    $this->funcNow();
		        	break;

		        	case 13:
		        	    $localContext = new Context\LenFuncContext($localContext);
		        	    $this->enterOuterAlt($localContext, 13);
		        	    $this->setState(430);
		        	    $this->funcLen();
		        	break;

		        	case 14:
		        	    $localContext = new Context\SubFuncContext($localContext);
		        	    $this->enterOuterAlt($localContext, 14);
		        	    $this->setState(431);
		        	    $this->funcSub();
		        	break;

		        	case 15:
		        	    $localContext = new Context\TypeFuncContext($localContext);
		        	    $this->enterOuterAlt($localContext, 15);
		        	    $this->setState(432);
		        	    $this->funcType();
		        	break;

		        	case 16:
		        	    $localContext = new Context\LlamarFuncionFContext($localContext);
		        	    $this->enterOuterAlt($localContext, 16);
		        	    $this->setState(433);
		        	    $this->llamadaFuncion();
		        	break;

		        	case 17:
		        	    $localContext = new Context\IdentifierContext($localContext);
		        	    $this->enterOuterAlt($localContext, 17);
		        	    $this->setState(434);
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

		    $this->enterRule($localContext, 74, self::RULE_arrayLiteral);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(437);
		        $this->match(self::LCOR);
		        $this->setState(438);
		        $this->recursiveLogExpr(0);
		        $this->setState(439);
		        $this->match(self::RCOR);
		        $this->setState(440);
		        $this->tipoBase();
		        $this->setState(441);
		        $this->match(self::LBRACE);
		        $this->setState(442);
		        $this->listaExpr();
		        $this->setState(443);
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

		    $this->enterRule($localContext, 76, self::RULE_arrayLiteral2D);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(445);
		        $this->match(self::LCOR);
		        $this->setState(446);
		        $this->recursiveLogExpr(0);
		        $this->setState(447);
		        $this->match(self::RCOR);
		        $this->setState(448);
		        $this->match(self::LCOR);
		        $this->setState(449);
		        $this->recursiveLogExpr(0);
		        $this->setState(450);
		        $this->match(self::RCOR);
		        $this->setState(451);
		        $this->tipoBase();
		        $this->setState(452);
		        $this->match(self::LBRACE);
		        $this->setState(453);
		        $this->listaValores();
		        $this->setState(454);
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

		    $this->enterRule($localContext, 78, self::RULE_tipos);

		    try {
		        $this->setState(459);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 31, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(456);
		        	    $this->tipoBase();
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(457);
		        	    $this->tipoArray();
		        	break;

		        	case 3:
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(458);
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

		    $this->enterRule($localContext, 80, self::RULE_tipoArray);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(461);
		        $this->match(self::LCOR);
		        $this->setState(462);
		        $this->recursiveLogExpr(0);
		        $this->setState(463);
		        $this->match(self::RCOR);
		        $this->setState(464);
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

		    $this->enterRule($localContext, 82, self::RULE_tipoArray2D);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(466);
		        $this->match(self::LCOR);
		        $this->setState(467);
		        $this->recursiveLogExpr(0);
		        $this->setState(468);
		        $this->match(self::RCOR);
		        $this->setState(469);
		        $this->match(self::LCOR);
		        $this->setState(470);
		        $this->recursiveLogExpr(0);
		        $this->setState(471);
		        $this->match(self::RCOR);
		        $this->setState(472);
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

		    $this->enterRule($localContext, 84, self::RULE_tipoBase);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(474);

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

		    $this->enterRule($localContext, 86, self::RULE_simboloAsignacion);

		    try {
		        $this->setState(479);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::ASSIGN:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(476);
		            	$this->match(self::ASSIGN);
		            	break;

		            case self::PLUS:
		            case self::MINUS:
		            case self::MULT:
		            case self::DIV:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(477);

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
		            	$this->setState(478);
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
					case 32:
						return $this->sempredLogExpr($localContext, $predicateIndex);

					case 33:
						return $this->sempredRelExpr($localContext, $predicateIndex);

					case 34:
						return $this->sempredExpr($localContext, $predicateIndex);

					case 35:
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
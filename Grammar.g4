grammar Grammar;

programa
    : topLevel* EOF
    ;

topLevel
    : funcion
    | mainFuncion
    | declaracion
    | declaracionConst
    ;


mainFuncion
    : FUNC MAIN LPAREN RPAREN bloque #BloqueMain
    ;

i
    : imprimir #FuncionImprimir  
    | declaracion #Declaration
    | declaracionCorta #ShortDeclaration
    | declaracionConst #ConstDeclaration
    | asignacion #Asignation
    | sentenciaIf #IfSentencia
    | sentenciaSwitch #SwitchSentencia
    | sentenciaFor #ForSentencia
    | expFor #IncDec
    | funcion #DFunction
    | retornar #SentenciaReturn
    | llamadaFuncion #LlamarFuncion
    | CONTINUE #SentenciaContinue
    | BREAK #SentenciaBreak
    ;

funcLen
    : LEN LPAREN logExpr RPAREN
    ;

funcNow
    : NOW LPAREN RPAREN
    ;

funcSub
    : SUBSTR LPAREN logExpr COMMA logExpr COMMA logExpr RPAREN
    ;

funcType
    : TYPEOF LPAREN IDENTIFICADOR RPAREN
    ;

llamadaFuncion
    : IDENTIFICADOR LPAREN listaExpr? RPAREN
    ;

retornar
    : RETURN listaExpr?;

funcion
    : FUNC IDENTIFICADOR LPAREN listaParametros? RPAREN LPAREN listaRetorno RPAREN bloque
    | FUNC IDENTIFICADOR LPAREN listaParametros? RPAREN tipos bloque
    | FUNC IDENTIFICADOR LPAREN listaParametros? RPAREN bloque
    ;

listaRetorno
    : tipos (COMMA tipos)*
    ;

listaParametros
    : IDENTIFICADOR tipos (COMMA IDENTIFICADOR tipos)*
    ;

accesoArreglo
    : IDENTIFICADOR LCOR logExpr RCOR
    | IDENTIFICADOR LCOR logExpr RCOR LCOR logExpr RCOR
    ;

listaValores
    : LBRACE listaExpr RBRACE (COMMA  LBRACE listaExpr RBRACE)*
    ;

sentenciaFor
    : FOR forClasico
    | FOR logExpr bloque
    | FOR bloque
    ;

forClasico
    : declaracionCorta SEMICOLON logExpr SEMICOLON condFor bloque 
    ;

condFor
    : expFor
    | asignacion
    ;

expFor
    : IDENTIFICADOR PLUS PLUS
    | IDENTIFICADOR MINUS MINUS
    ;

sentenciaSwitch
    : SWITCH logExpr LBRACE bloqueSwitch RBRACE
    ;

bloqueSwitch
    : bloqueCase+ bloqueDefault?
    ;

bloqueCase
    : CASE listaExpr COLON bloque
    ;

bloqueDefault
    : DEFAULT COLON bloque
    ;

sentenciaIf
    : IF logExpr bloque (ELSE IF logExpr bloque)* (ELSE bloque)?
    ;

bloque
    : LBRACE (i SEMICOLON?)* RBRACE
    ;

asignacion
    : (IDENTIFICADOR | accesoArreglo) simboloAsignacion logExpr
    ;

imprimir
    : FMT DOT PRINTLN LPAREN listaExpr RPAREN
    ;

declaracion
    : VAR listaId tipos
    | VAR listaId tipos ASSIGN listaExpr
    ;

declaracionCorta
    : listaId COLON ASSIGN listaExpr
    ;

declaracionConst
    : CONST IDENTIFICADOR tipos ASSIGN logExpr
    ;

listaExpr
    : logExpr (COMMA logExpr)*
    ;

listaId
    : IDENTIFICADOR (COMMA IDENTIFICADOR)*
    ;

logExpr
    : logExpr op=(ORO | ANDO) relExpr # LogicalExpression
    | relExpr # toRelExpr
    ;

relExpr
    : relExpr op=(LE | GE | EQUAL | NEQUAL | LESS | GREATER) expr #RelationalExpresion
    | expr #ToExpr
    ;

expr
    : expr op=(PLUS | MINUS) term # BinaryExpressionT
    | term                 # toTerm
    ;

term
    : term op=(MULT | DIV | MOD) factor # BinaryExpressionS
    | factor #toFactor
    ;

factor
    : arrayLiteral #ArrayLit
    | arrayLiteral2D #ArrayLit2D
    | accesoArreglo #ArregloAcceso
    | LPAREN logExpr RPAREN # GroupedExpression
    | op=(MINUS | NEG) factor # UnaryExpression
    | FLOAT #FloatLit
    | ENTERO #EnteroLit
    | BOOL  #BoolLit
    | RUNE #RuneLit
    | STR #StrLit
    | NIL #NilLit
    | funcNow #NowFunc
    | funcLen #LenFunc
    | funcSub #SubFunc
    | funcType #TypeFunc
    | llamadaFuncion #LlamarFuncionF
    | IDENTIFICADOR #Identifier
    ;

arrayLiteral
    : LCOR logExpr RCOR tipoBase LBRACE listaExpr RBRACE
    ;

arrayLiteral2D
    : LCOR logExpr RCOR LCOR logExpr RCOR tipoBase LBRACE listaValores RBRACE
    ;

tipos
    : tipoBase
    | tipoArray
    | tipoArray2D
    ;

tipoArray
    : LCOR logExpr RCOR tipoBase
    ;

tipoArray2D
    : LCOR logExpr RCOR LCOR logExpr RCOR tipoBase
    ;

tipoBase
    : INT_T
    | FLOAT_T
    | BOOL_T
    | RUNE_T
    | STRING_T
    ;

simboloAsignacion
    : ASSIGN
    | op=(PLUS | MINUS | MULT | DIV) ASSIGN
    ;

//PALABRAS RESERVADAS
FUNC : 'func';
MAIN : 'main';
VAR : 'var';
FMT : 'fmt';
PRINTLN : 'Println';
CONST : 'const';
IF : 'if';
ELSE : 'else';
SWITCH: 'switch';
CASE: 'case';
DEFAULT: 'default';
FOR: 'for';
BREAK: 'break';
CONTINUE: 'continue';
RETURN: 'return';
LEN: 'len';
NOW: 'now';
SUBSTR: 'substr';
TYPEOF: 'typeOf';

INT_T : 'int' | 'int32';
FLOAT_T : 'float' | 'float32';
BOOL_T : 'bool';
RUNE_T : 'rune';
STRING_T : 'string';

//SIMBOLOS
LBRACE : '{';
RBRACE : '}';
LPAREN : '(';
RPAREN : ')';
LCOR : '[';
RCOR : ']';
COMMA : ',';
ASSIGN : '=';
COLON : ':';
SEMICOLON : ';';
PLUS : '+';
MINUS : '-';
NEG: '!';
MULT : '*';
DIV : '/';
MOD : '%';
DOT : '.';
REF : '&';
ANDO : '&&';
ORO : '||';
LE: '<=';
GE: '>=';
EQUAL: '==';
NEQUAL: '!=';
LESS : '<';
GREATER : '>';

BOOL
    : 'true'
    | 'false'
    ;

NIL
    : 'nil'
    ;

ENTERO
    : [0-9]+
    ;

FLOAT
    : [0-9]+ '.' [0-9]+
    | '.' [0-9]+
    ;

STR
    : '"' ( ~["\\] | '\\' . )* '"'
    ;

RUNE
    : '\'' ( ~['\\]
        | '\\n'
        | '\\t'
        | '\\r'
        | '\\\\'
        | '\\\''
        | '\\u' HEX HEX HEX HEX
        ) '\''  
    ;

fragment HEX
    : [0-9a-fA-F];

IDENTIFICADOR
    : ([_a-zA-Z])([_a-zA-Z0-9])*
    ;

COMENTARIO_LINEA
    : '//' ~[\r\n]* -> skip
    ;

COMENTARIO_BLOQUE
    : '/*' .*? '*/' -> skip
    ;

WS
    : [ \t\r\n]+ -> skip
    ;

ERROR
    : .
    ;
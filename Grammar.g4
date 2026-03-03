grammar Grammar;

p
    : bMain EOF     # Programa
    ;


bMain
    : FUNC MAIN LPAREN RPAREN LBRACE (i SEMICOLON?)* RBRACE #BloqueMain
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
    | declaracionArreglos #ArreglosDeclaration
    | asignacionArreglos #ArreglosAsignation
    | declaracionArreglosD #ArreglosDeclarationD
    | asignacionArreglosD #ArreglosAsignationD
    | funcion #DFunction
    | retornar #SentenciaReturn
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

retornar
    : RETURN listaExpr;

funcion
    : FUNC IDENTIFICADOR LPAREN listaParametros? RPAREN LPAREN listaRetorno RPAREN bloqueFuncion
    | FUNC IDENTIFICADOR LPAREN listaParametros? RPAREN tipos bloqueFuncion
    ;

listaRetorno
    : tipos (COMMA tipos)*
    ;

listaParametros
    : IDENTIFICADOR tipos (COMMA IDENTIFICADOR tipos)*
    ;

bloqueFuncion
    : LBRACE (i SEMICOLON?)* RBRACE
    ;

declaracionArreglosD
    : VAR IDENTIFICADOR LCOR logExpr RCOR LCOR logExpr RCOR tipos (ASSIGN LCOR logExpr RCOR LCOR logExpr RCOR tipos LBRACE listaValores RBRACE)?
    ;

listaValores
    : (LBRACE listaExpr RBRACE COMMA)*
    ;

asignacionArreglosD
    : accesoArreglosD ASSIGN logExpr
    ;

accesoArreglosD
    : IDENTIFICADOR LCOR logExpr RCOR LCOR logExpr RCOR
    ;

declaracionArreglos
    : VAR IDENTIFICADOR LCOR logExpr RCOR tipos (ASSIGN LCOR logExpr RCOR tipos LBRACE listaExpr RBRACE)?
    ;

asignacionArreglos
    : accesoArreglos ASSIGN logExpr
    ;

accesoArreglos
    : IDENTIFICADOR LCOR logExpr RCOR
    ;

sentenciaFor
    : FOR forClasico
    | FOR logExpr bloqueFor
    | FOR bloqueFor
    ;

forClasico
    : declaracionCorta SEMICOLON logExpr SEMICOLON condFor bloqueFor 
    ;

condFor
    : expFor
    | asignacion
    ;

bloqueFor
    : LBRACE (i SEMICOLON?)* RBRACE
    ;

expFor
    : IDENTIFICADOR PLUS PLUS
    | IDENTIFICADOR MINUS MINUS
    ;

sentenciaSwitch
    : SWITCH logExpr LBRACE bloqueSwitch RBRACE
    ;

bloqueSwitch
    : bloqueCase* bloqueDefault?
    ;

bloqueCase
    : CASE listaExpr COLON (i SEMICOLON?)*
    ;

bloqueDefault
    : DEFAULT COLON (i SEMICOLON?)*
    ;

sentenciaIf
    : IF logExpr LBRACE (i SEMICOLON?)* RBRACE bloqueElseIf
    ;

bloqueElse
    : ELSE LBRACE (i SEMICOLON?)* RBRACE
    |
    ;

bloqueElseIf
    : (ELSE IF logExpr LBRACE (i SEMICOLON?)* RBRACE)* bloqueElse
    ;

asignacion
    : IDENTIFICADOR simboloAsignacion expr
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
    : CONST IDENTIFICADOR tipos ASSIGN expr
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
    : term op=(MULT | DIV) modterm # BinaryExpressionS
    | modterm #ToModTerm
    ;

modterm
    : modterm MOD factor # BinaryExpressionF
    | factor #toFactor   
    ;
    
factor
    : LPAREN logExpr RPAREN # GroupedExpression
    | MINUS factor # UnaryExpression
    | FLOAT #FloatLit
    | ENTERO #EnteroLit
    | BOOL  #BoolLit
    | RUNE #RuneLit
    | STR #StrLit
    | NIL #NilLit
    | REF IDENTIFICADOR #IdentifierR
    | REF accesoArreglos #ArregloAccesoR
    | REF accesoArreglosD #ArregloAccesoDR
    | MULT IDENTIFICADOR #IdentifierD
    | MULT accesoArreglos #ArregloAccesoD
    | MULT accesoArreglosD #ArregloAccesoDD
    | IDENTIFICADOR #Identifier
    | accesoArreglos #ArregloAcceso
    | accesoArreglosD #ArregloAccesoD
    | funcNow #NowFunc
    | funcLen #LenFunc
    | funcSub #SubFunc
    | funcType #TypeFunc
    ;

tipos
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

INT_T : 'int';
FLOAT_T : 'float';
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


IDENTIFICADOR
    : ([_a-zA-Z])([_a-zA-Z0-9])*
    ;

ENTERO
    : [0-9]+
    ;

FLOAT
    : [0-9]+ '.' [0-9]+
    | '.' [0-9]+
    ;

BOOL
    : 'true'
    | 'false'
    ;

STR
    : '"' ( ~["\\] | '\\' . )* '"'
    ;

RUNE
    : '\'' ( ~['\\] | '\\' . ) '\'' 
    ;

NIL
    : 'nil'
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
<?php

/**********************************************************************************
|  1. OPERADORES E EXPRESSÕES
| 
|      -> São agentes que manipulam dados com cálculos e analises.
| 
|  1.1. OPERADORES ARITMÉTICOS
|      
|      -> Realizam contas matemáticas.
| 
|         SOMA             + 
|         SUBTRAÇÃO        - 
|         MULTIPLICAÇÃO    * 
|         DIVISÃO          / 
|         MODULO           % 
|         POTÊNCIA         **
| 
**********************************************************************************/

echo 5 + 2  . "\n";
echo 5 - 2  . "\n";
echo 5 * 2  . "\n";
echo 5 / 2  . "\n"; // Divisão Dinâmica
echo 5 % 2  . "\n"; // Resto da Divisão
echo 5 ** 4 . "\n";

/**********************************************************************************
|  1.2. OPERADORES RELACIONAIS
|      
|      -> Realizam comparações simples entre dados.
|
|         IGUALDADE             ==
|         DIFERENTE             !=
|         IGUALDADE RESTRITA    ===
|         DIFERENTE RESTRITA    !==
|         MAIOR QUE             > 
|         MENOR QUE             <
|         MAIOR OU IGUAL        >=   
|         MENOR OU IGUAL        <=
|
**********************************************************************************/

echo (5 > 2)     . "\n"; // true
echo (5 < 2)     . "\n"; // false
echo (5 >= 2)    . "\n"; // true
echo (5 <= 2)    . "\n"; // false
echo (5 == 2)    . "\n"; // false
echo (2 == 2)    . "\n"; // true
echo (5 != 2)    . "\n"; // true
echo (2 != 2)    . "\n"; // false
echo (2 == "2")  . "\n"; // true
echo (2 === "2") . "\n"; // false
echo (2 != "2")  . "\n"; // false
echo (2 !== "2") . "\n"; // true

/**********************************************************************************
|  1.3. OPERADORES LÓGICOS
|      
|      -> Realizam comparações compostas entre dados lógicos.
|
|         NEGAÇÃO      !
|         CONJUNÇÃO    &&
|         DISJUNÇÃO    ||
|
**********************************************************************************/

echo !true            . "\n"; // false
echo !false           . "\n"; // true

echo (true  &&  true) . "\n"; // true
echo (false &&  true) . "\n"; // false
echo (true  && false) . "\n"; // false
echo (false && false) . "\n"; // false

echo (true  ||  true) . "\n"; // true
echo (false ||  true) . "\n"; // true
echo (true  || false) . "\n"; // true
echo (false || false) . "\n"; // false

/**********************************************************************************
|  1.4. OPERADORES DE ATRIBUIÇÃO ARITMÉTICA
|      
|      -> Realizam operações de cálculos sobre uma variável e atribuem esse valor
|         para a mesma variável.
|
**********************************************************************************/

$valor = 5;
$valor += 10; // $valor -> 15
$valor -= 3;  // $valor -> 12
$valor *= 3;  // $valor -> 36
$valor /= 6;  // $valor -> 6
$valor %= 4;  // $valor -> 2
$valor **= 5; // $valor -> 32

/**********************************************************************************
| 
|  1.5. OPERADOR INCREMENTAL/DECREMENTAL
|      
|      -> Realizam operações de soma (incremento) e de subtração (decremento) em
|         um variável com o valor de uma unidade.
|
|         PRÉ-INCREMENTO    ++$num
|         PÓS-INCREMENTO    $num++
|         PRÉ-DECREMENTO    --$num
|         PÓS-DECREMENTO    $num--
|
**********************************************************************************/

$num = 0;

echo ++$num . "\n"; // $num -> 1
echo $num++ . "\n"; // $num -> 2 (Após o término da instrução)
echo --$num . "\n"; // $num -> 1
echo $num-- . "\n"; // $num -> 0 (Após o término da instrução)

/**********************************************************************************
|  1.6. CONVERSÃO DE TIPOS (TYPE CASTING)
| 
|      -> São operadores responsáveis com mudar o tipo de uma variável.
|         
|      OBS: A principal conversão sempre será entre números e string's.
| 
|      OBS: Podemos usar a função `is_numeric():bool` para indicar se uma string 
|           pode ou não representar um valor numérico.
| 
**********************************************************************************/

echo gettype((integer) "5") . "\n"; // "integer" ou intval("5")/ floatval("5")
echo gettype((string) 5)    . "\n"; // "string"

<?php

/**********************************************************************************
|  1. VARÁVEIS & CONSTANTES
|      
|      -> São espaços na memória do computador para armazenar informações.
| 
|  1.1. VARIÁVEIS
| 
|      -> Permite mudar os dados durante a execução do programa.
|
**********************************************************************************/

$nome     = "Lindonjonson"; // string
$simbolo  = '$';            // string
$idade    = 37;             // integer
$salario  = 1234.56;        // double
$estaVivo = true;           // boolean

/**********************************************************************************
|  1.2. CONSTANTES
| 
|      -> Não permite mudar os dados durante a execução do programa.
|
**********************************************************************************/

const CPF   = "123.456.789-00"; // string
const ID    = 1222345;          // integer
const PI    = 3.1415;           // double
const ADMIN = false;            // boolean

/**********************************************************************************
|  2. DATA TYPES
| 
|      -> No PHP temos os seguintes tipos de dados:
|
|       # integer
|       # double
|       # string
|       # boolean
|       # array
|       # object
|       # null
|      
|      OBS: Usamos a função `gettype():string` para mostrar o tipo de dado.
| 
**********************************************************************************/

echo "nome:     " . gettype($nome)     . "\n"; // string
echo "simbolo:  " . gettype($simbolo)  . "\n"; // string
echo "idade:    " . gettype($idade)    . "\n"; // integer
echo "salario:  " . gettype($salario)  . "\n"; // double
echo "estaVivo: " . gettype($estaVivo) . "\n"; // boolean

/**********************************************************************************
 |  3. COMPLEX/ABSTRACT TYPES
 | 
 |      -> São agrupamentos de tipos escalares (integer, double, string, boolean)
 |         que buscam representar estruturas ou abstrações do mundo real.
 |
 **********************************************************************************/

$hobby  = ["Jogar", "Comer", "Programar"];       // Array indexado
$person = ['nome' => "Cristian", 'idade' => 21]; // Array associativo
$action = fn() => "Anonymous";                   // Objeto Closure
$date   = new DateTime();                        // Objeto Datetime

echo "hobby:  " . gettype($hobby)  . "\n";
echo "person: " . gettype($person) . "\n";
echo "action: " . gettype($action) . "\n";
echo "date:   " . gettype($date)   . "\n";
echo "null:   " . gettype($null)   . "\n";

/**********************************************************************************
|  4. VALORES ESPECIAS
|
|      -> São valores destinados para comportamentos atípicos da linguagem.
|
**********************************************************************************/

$null = null;

echo "null:   " . gettype($null) . "\n";

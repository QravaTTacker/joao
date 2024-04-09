<?php

/**********************************************************************************
|  1. INSTRUÇÕES DE SAÍDA (OUTPUT)
| 
|      -> São comandos responsáveis por mostrar uma mensagem na tela.
| 
**********************************************************************************/

echo "Hello, World!\n";          // Mostra uma mensagem.
var_dump("Hello, World!");       // Mostra informações detalhadas de um valor.
var_export("Hello, World!\n");   // O mesmo que `var_dump`, mas com menos informações.
print_r("Hello, World!\n");      // O mesmo que `var_dump`, mas voltado para arrays.

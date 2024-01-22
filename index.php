<?php

require_once __DIR__. '/linhaxcoluna.php';
require_once __DIR__. '/variaveis.php';

echo "Calculo entre duas matrizes. \n \n ";
//quadrada ou não quadrada




$matriz[0]['a_ij'] = linhaxcoluna($matriz); //perguntar linha e coluna
//$matriz['matriz0']['numeros'] = readMatriz();
$matriz[1]["a_ij"] = linhaxcoluna($matriz);
//$matriz['matriz0']['numeros'] = readMatriz();
print_r ($matriz);
?>
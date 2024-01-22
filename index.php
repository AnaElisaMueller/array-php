<?php

require_once __DIR__. '/variaveis.php';
require_once __DIR__. '/linhas.php';
require_once __DIR__. '/colunas.php';
require_once __DIR__. '/readMatriz.php';
require_once __DIR__. '/continuar.php';
require_once __DIR__. '/calculo.php';

echo "Calculo entre duas matrizes. \n \n ";
//quadrada ou não quadrada

for ($i =0; $i <2; $i++){
$matriz[$i]['linhas'] = linhas($matriz); //perguntar a linha
$matriz[$i]['colunas'] = colunas($matriz); //perguntar a coluna
//$matriz[$i]['numeros']= readMatriz($matriz, $i);

for ($l=0; $l< $matriz[$i]['linhas']; $l++){
    for ($c=0; $c< $matriz[$i]['colunas']; $c++){
$matriz[$i]['numeros'][$l][$c] = readline("Digite os numeros da matriz \n". $i);
    }
}
}

print_r ($matriz);

//calculo
echo calculo($matriz);

?>
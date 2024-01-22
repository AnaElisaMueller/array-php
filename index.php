<?php

require_once __DIR__. '/variaveis.php';
require_once __DIR__. '/linhas.php';
require_once __DIR__. '/colunas.php';
require_once __DIR__. '/calculo.php';
require_once __DIR__. '/imprimir.php';
require_once __DIR__. '/isMatriz.php';


echo "Calculo entre duas matrizes. \n \n ";
//quadrada ou não quadrada

for ($i =0; $i <2; $i++){
$matriz[$i]['linhas'] = linhas($matriz); //perguntar a linha
$matriz[$i]['colunas'] = colunas($matriz); //perguntar a coluna
//$matriz[$i]['numeros']= readMatriz($matriz, $i);

for ($l=0; $l< $matriz[$i]['linhas']; $l++){
    for ($c=0; $c< $matriz[$i]['colunas']; $c++){
$matriz[$i]['numeros'][$l][$c] = readline("Digite os numeros da matriz". $i .": \n");
    }
}
}

//print_r($matriz);
echo "resultado: \n";
$validar = isMatriz($matriz);

if ($validar == true){
//calculo
$matriz[2]['numeros'] = calculo($matriz);
imprimir($matriz);
} else {    echo "não é matriz, encerrando programa \n";}

?>
<?php

function calculo(array $matriz){
$soma=0;
//linha * coluna
/*
for ($l=0; $l< $matriz[$i]['linhas']; $l++){
    for ($c=0; $c< $matriz[$i]['colunas']; $c++){
$a = $matriz[0][$l][$c]   * $matriz[1][$c][$l];

*/
//$matriz[0 ou 1]['numero'] l=linha; c=coluna;
for ($l=0; $l< $matriz[1]['linhas']; $l++){
    for ($c=0; $c< $matriz[0]['colunas']; $c++){
$mult = $matriz[0]['numeros'][$l][$c] * $matriz[1]['numeros'][$c][$l]; //certo
$soma = $soma + $mult;
}
$matriz[2]['numero'][$l] = $soma;//separar por linha
$mult = 0; //zerar
$soma = 0; 
}
return matriz;

}

?>
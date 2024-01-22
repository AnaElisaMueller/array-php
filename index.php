<?php

require_once __DIR__. '/vari.php';

$jogo[0]["a_ij"] = readline ("aij");

$jogo[0]["numeros"] = readline ("aij");

print_r($jogo);


echo $jogo[0]['numeros']. "\n";
$jogo[0]["a_ij"] = 9;
echo $jogo[0]["a_ij"];

?>
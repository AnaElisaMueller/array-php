<?php

function readMatriz(array $matriz, int $i): array{

    for ($l=0; $l< $matriz[$i]['linhas']; $l++){
        for ($c=0; $c< $matriz[$i]['colunas']; $c++){

    $matriz[$i][$l][$c] = readline("Digite os numeros da matriz \n". $i);
        }
    }
    return $matriz;
}

?>
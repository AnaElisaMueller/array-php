<?php

function calculo(array $matriz):array{

//$soma = [];
//$soma = 0;


//$matriz[0 ou 1]['numero'] l=linha; c=coluna;
for ($l=0; $l < $matriz[0]['linhas']; $l++){
    for ($c=0; $c < $matriz[1]['colunas']; $c++){  
        $matriz[2][$l][$c] =0;         
        for ($c1=0; $c1< $matriz[0]['colunas']; $c1++){

       $matriz[2][$l][$c] += $matriz[0]['numeros'][$l][$c1] * $matriz[1]['numeros'][$c1][$c];
}
}

}
$matriz[2]['linhas'] = $matriz[0]['linhas'];
$matriz[2]['colunas'] = $matriz[1]['colunas'];

return $matriz;

}

?>
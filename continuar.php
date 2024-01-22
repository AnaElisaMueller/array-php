<?php


function continuar(): bool {
    $resposta = readline("\nDeseja calcular novamente? (s/n): ");
if ($resposta === 's'){
    return true;
}else {return false;}

return $resposta === 's' ? true : false;

}
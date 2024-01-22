
<?php
// verificar se é matriz, se não for não é possivel calcular
//= coluna da primeira precisa ser igual a a linha da segunda;
function isMatriz(array $matriz):bool{
if ($matriz[0]['colunas'] != $matriz[1]['linhas']){
    return false;
} else {
    return true;
}

}
?>
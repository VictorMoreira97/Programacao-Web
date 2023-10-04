<?php 

$tarifa = 0.14;

$idCidade = 54;

switch ($idCidade) {
    case 1: 
        $tarifa = 0.16;
        break;
    case 52:
        $tarifa = 0.08;
        break;
    case 54:
        $tarifa = 0.24;
        break;
    case 200:
        $tarifa = 0.33;
        break;
}

$ligacoes = 514;

$valor = $ligacoes * $tarifa;

echo "Valor a pagar R$ $valor";

?>
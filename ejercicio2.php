<?php
$precioOriginal = 50000;
$descuento = 25;

function calcularDescuento($precioOriginal, $descuento){
    $totalDescuento = $precioOriginal *($descuento /100);
    $precioTotal = $precioOriginal - $totalDescuento;
    return $precioTotal;

}


$precioTotal = calcularDescuento($precioOriginal, $descuento);
echo "El valor a pagar es ".$precioTotal;
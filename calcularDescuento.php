<?php

$precioArt = 5000;
$descuento = 20;
$totalProductos = intval(readline("Ingrese la cantidad de productos a llevar: "));

function calcularDescuentos($precioArt, $descuento, $totalProductos) {
    $totalSinDescuento = $precioArt * $totalProductos;
    $totalConDescuento = $totalSinDescuento - ($totalSinDescuento * $descuento / 100);
    return $totalConDescuento;
}
$totalSinDescuento = calcularDescuentos ($precioArt, $descuento, $totalProductos);
echo "El total a pagar luego del descuento es de: ".$totalSinDescuento;
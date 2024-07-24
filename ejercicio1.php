<?php

$precioOriginal = 15000;
$descuento = 15;
$cantidadDeProductos = intval(readline("Cantidad de productos a llevar: "));

function calcularDescuento($precioOriginal, $descuento, $cantidadDeProductos){
    $precioTotal = $precioOriginal * $cantidadDeProductos;
    $totalDescuento= $precioTotal *($descuento /100);
    $totalPagar = $precioTotal - $totalDescuento;
    return "El total a pagar es de: ".$totalPagar;
}

echo calcularDescuento($precioOriginal, $descuento, $cantidadDeProductos);


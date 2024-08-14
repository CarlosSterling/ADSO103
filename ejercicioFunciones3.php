<?php
function calcularVolumen($radioBase, $altura){
    $volumen = (3.1416 * pow($radioBase,2) * $altura);
    return $volumen;
}

echo calcularVolumen(4,4);


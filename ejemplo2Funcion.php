<?php

function operacion ($num1, $num2,$num3,$operacion){
    $resultado=0;
    if($operacion == "suma"){
        $resultado = "la suma de los numeros es: ".$num1 + $num2 + $num3;
    }elseif($operacion == "resta"){
        $resultado = "la resta de los numeros es: ".$num1 - $num2 - $num3;
    }elseif($operacion == "Multiplicacion"){
        $resultado = "la multiplicacion de los numeros es: ".$num1 * $num2 * $num3;
    }elseif($operacion == "division"){
        $resultado = "la division de los numeros es: ".$num1 / $num2 / $num3;
    }

    return $resultado;

    }

    $operacion1 = operacion(2,2,2,"suma");
    echo $operacion1."\n";

    echo operacion(10,4,2,"resta");

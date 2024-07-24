<?php

$texto = readline("Ingrese una cadena de texto: ");

function esPalindromo($texto){
    $texto = strtolower(str_replace(' ','',$texto));
    $textoInvertido = strrev($texto);
    if ($texto ===$textoInvertido){
        echo "La palabra es un palindromo";
    }else{
        echo "La palabra NO es un palindromo";
    }

}

esPalindromo($texto);

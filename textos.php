<?php

$texto = "hola grupo";
$textoInvertido = strrev($texto);
$todoMayuscula = Strtoupper ($texto);
$primeraMayuscula = Ucfirst($texto); 
$primeraPalabraMayuscula = Ucwords($texto); 
$contarCaracteres = Strlen($texto);
$cantidadPalabras = Str_word_count ($texto);




echo $textoInvertido."\n";
echo $todoMayuscula."\n";
echo $primeraMayuscula."\n";
echo $primeraPalabraMayuscula."\n";
echo "$texto, tiene ".$contarCaracteres." caracteres"."\n";
echo "$texto, tiene ".$cantidadPalabras." palabras"."\n";
<?php
$numero =intval(readline("Ingrese el número del cual desea saber si es primo o no: "));

function EsPrimo ($numero){

    if ($numero <= 1 ){
        return false;
    }
    for ($i = 2; $i < $numero; $i++){
        if ($numero % $i == 0){
            return false;
        }
    }
return true;
}
echo EsPrimo($numero)? 'Es primo' : 'No es primo';
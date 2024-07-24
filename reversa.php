<?php
function reversa($cadena) {
    return strrev($cadena);
}
$cadena = strval(readline("Ingrese el texto a revertir: "));

echo reversa($cadena);
?>

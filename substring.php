<?php

// Extraer un substring con php

function obtenerPalabra($frase, $inicial, $final) {
    $palabra = substr($frase, $inicial, $final - $inicial);
    return $palabra;
}

$frase = "las flores amarillas";
$inicial = 4;
$final = 10;

$palabra = obtenerPalabra($frase, $inicial, $final);

echo $palabra;

?>

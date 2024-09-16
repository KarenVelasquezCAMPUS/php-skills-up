<?php

// Encontrar el número mayor de una lista de números en un array

function encontrarNumeroMaximo($numeros) {
    $numeroMaximo = 0;
    $tamano = count($numeros);

    for ($i = 0; $i < $tamano; $i++) {
        if ($numeroMaximo < $numeros[$i]) {
            $numeroMaximo = $numeros[$i];
        }
    }

    return $numeroMaximo;
}

$numeros = array(5, 10, 15, 60, 8);
$maximo = encontrarNumeroMaximo($numeros);
echo "El número máximo es: " . $maximo;
echo "<br>";

// Encontrar el número mayor de una lista de números en un array | Con funcion de php

function encontrarMaximo(...$numeros) {
    return max($numeros);
}

$maximo = encontrarMaximo(5, 10, 15, 60, 8);
echo "El número máximo es: " . $maximo;

?>

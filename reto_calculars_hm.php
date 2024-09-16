<?php 

$horas = readline("Ingresa el tiempo en horas: ");
$minutos = readline("Ingresa el tiempo en minutos: ");
$segundos = readline("Ingresa el tiempo en segundos: ");

// $tiempo_en_segundos = ($horas * 60 * 60) + ($minutos * 60) + $segundos;
$tiempo_en_segundos = ($horas * 3600) + ($minutos * 60) + $segundos;

echo "<pre>";
var_dump("El tiempo en segundos es: " . $tiempo_en_segundos);
echo "</pre>";

?>

<?php 

$segundos = readline("Ingresa el tiempo en segundos: ");

echo "<pre>";
var_dump("Segundos: " . $segundos);
echo "</pre>";

$horas = (int) ($segundos / 3600);
$segundos = (int) ($segundos % 3600);
$minutos = (int) ($segundos / 60);
$segundos = (int) ($segundos % 60);

echo "<pre>";
var_dump("Son " . $horas . " horas, minutos " . $minutos . " y " . $segundos . " segundos.");
echo "</pre>";

?>

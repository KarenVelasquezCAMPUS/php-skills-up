<?php 

// suma básica con php
function suma(){
  $valor1 = 8;
  $valor2 = 6;
  $resultado = $valor1 + $valor2;
  
  echo "La suma es ";
  print_r($resultado);
  echo "<br>";
}

suma();

// resta básica con php
function resta(){
  $valor1 = 8;
  $valor2 = 6;
  $resultado = $valor1 - $valor2;

  echo "La resta es ";
  print_r($resultado);
  echo "<br>";
}

resta();

// multiplicación básica con php
function multiplicacion(){
  $valor1 = 8;
  $valor2 = 6;
  $resultado = $valor1 * $valor2;

  echo "La multiplicacion es ";
  print_r($resultado);
  echo "<br>";
}

  multiplicacion();

// division básica con php
function division(){
  $valor1 = 8;
  $valor2 = 6;
  $resultado = $valor1 / $valor2;

  echo "La division es ";
  print_r($resultado);
  echo "<br>";
}

  division();

// Calculadora con php

$operacion = readline("
Ingrese la operacion que desea realizar: 
1. Suma
2. Resta
3. Multiplicacion
4. Division
");

$num1 = readline("Ingrese el primer numero: ");
$num2 = readline("Ingrese el segundo numero: ");

if ($operacion == 1) {
  $resultado = $num1 + $num2;
  echo "El resultado de la suma es: " . $resultado;
}elseif ($operacion == 2) {
  $resultado = $num1 - $num2;
  echo "El resultado de la resta es: " . $resultado;
}elseif ($operacion == 3) {
  $resultado = $num1 * $num2;
  echo "El resultado de la multiplicacion es: " . $resultado;
}elseif ($operacion == 4) {
  $resultado = $num1 / $num2;
  echo "El resultado de la division es: " . $resultado;
}else{
  echo "Operacion no valida";
}

?> 

<?php

// Arreglos

print_r("Arreglos");

$edades = [18, 20, 25, 30, 35];
echo "<pre>";
var_dump("Una de las edades resgistradas es: " . $edades[4]);
echo "</pre>";

$edadesArray = array(19, 21, 26, 31, 36);
echo "<pre>";
var_dump("Una de las edades resgistradas (en array) es: " . $edades[2]);
echo "</pre>";

// Arreglos Asociativos

print_r("Arreglos Asociativos");

$EdadesPersona = array(
  "Edward" => 22,
  "Tita" => 8,
  "Sofi" => 19,
);

echo "<pre>";
var_dump("La edad de Edward es: " . $EdadesPersona["Edward"]);
echo "</pre>";

$cafe = array(
  "Capuccino" => 5000,
  "Latte" => 4000,
  "Americano" => 3000,
);

echo "<pre>";
var_dump("El precio de un capuccino es: {$cafe['Capuccino']} pesos colombianos");
echo "</pre>";

$DatosPersonas = array(

  "Edward" => array(
    "apellido" => "Carvajal",
    "edad" => "22",
    "pais" => "Colombia",
    "cumpleaños" => "22 de junio",
  ),

  "Tita" => array(
    "apellido" => "Carvajal",
    "edad" => "8",
    "pais" => "Colombia",
    "cumpleaños" => "11 de marzo",
  ),

  "Sofia" => array(
    "apellido" => "Velasquez",
    "edad" => "19",
    "pais" => "Colombia",
    "cumpleaños" => "10 de septiembre",
  ),
  
);

echo "<pre>";
// Sin separar el var_dump va a salir un error ya que estamos imprimiendo un array asociativo más un texto
// var_dump("Los datos personales de Sofi son: {$DatosPersonas['Sofia']} Apellido: {$DatosPersonas['Sofia']['apellido']}, Edad: {$DatosPersonas['Sofia']['edad']}, Pais de nacimiento: {$DatosPersonas['Sofia']['pais']}, Fecha de cumpleaños: {$DatosPersonas['Sofia']['cumpleaños']}");
var_dump("Los datos personales de Sofi son: ");
var_dump("Apellido: {$DatosPersonas['Sofia']['apellido']}");
var_dump("Edad: {$DatosPersonas['Sofia']['edad']}");
var_dump("Pais de nacimiento: {$DatosPersonas['Sofia']['pais']}");
var_dump("Fecha de cumpleaños: {$DatosPersonas['Sofia']['cumpleaños']}");

echo "</pre>";

// Manipulación de Arreglos

print_r("Manipulación de Arreglos");

$ManipulacionEdades = [54, 63, 1, 65, 32];

/* # count 
    sirve para contar la cantidad de elementos que tiene un arreglo
*/

echo "<pre>";
var_dump("Hay " . count($ManipulacionEdades) . " elementos en el arreglo");
echo "</pre>";

/* # array_push 
    sirve para agregar un elemento al final del arreglo 
*/

array_push($ManipulacionEdades, 12);

echo "<pre>";
var_dump("El arreglo con el nuevo elemento es: ");
var_dump($ManipulacionEdades);
echo "</pre>";

/* # is_array  
  sirve para saber si un elemento es un arreglo
*/

$esto_no_es_un_arreglo = "Hola";

echo "<pre>";
var_dump(is_array($esto_no_es_un_arreglo));
echo "</pre>";

echo "<pre>";
var_dump(is_array($ManipulacionEdades));
echo "</pre>";

/* # explode
  sirve para convertir una cadena string a un arreglo
*/

$lista_de_compras_stringE = "banano, manzana, pera, uva, carne";
$lista_de_compras_explode = explode(",", $lista_de_compras_stringE);

echo "<pre>";
var_dump($lista_de_compras_explode);
echo "</pre>";

/* # implode
  sirve para convertir un arreglo en una cadena de string
*/

$lista_de_compras_implode = ["banano", "manzana", "pera", "uva", "carne"];
$lista_de_compras_stringI = implode(",", $lista_de_compras_implode);

echo "<pre>";
var_dump($lista_de_compras_stringI);
echo "</pre>";

?>

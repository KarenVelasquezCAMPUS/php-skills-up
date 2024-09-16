<?php

print_r("Reto: Escuela de Michis");

$escuela = array(
  
  array(
    "Nombre" => "MichiLalo",
    "Apellido" => "Lalitos",
    "Edad" => "10",
    "Ocupacion" => "Senior Dev",
    "Color" => "Gris con blanco",
    "Comida" => array(
      "Favoritas" => "Pizza, Sushi",
      "NoFavoritas" => "Hamburguesa, Purina"
    )
  ),

  array(
    "Nombre" => "MichiTainy",
    "Apellido" => "Mini",
    "Edad" => "2",
    "Ocupacion" => "Artista",
    "Color" => "Naranja con rayas blancas",
    "Comida" => array(
      "Favoritas" => "Lasaña, Pasta Boloñesa",
      "NoFavoritas" => "Pescado, Jengibre"
    )
  ),

  array(
    "Nombre" => "MichiLulo",
    "Apellido" => "Shell",
    "Edad" => "6",
    "Ocupacion" => "Fisico",
    "Color" => "Negro",
    "Comida" => array(
      "Favoritas" => "Ramen, Dumplings",
      "NoFavoritas" => "Galletas, Cebolla"
    )
  ),
  
);

echo "<pre>";
var_dump("El apellido de MichiLalo es: {$escuela[0]['Apellido']}");
echo "</pre>";

echo "<pre>";
var_dump("La edad de MichiTainy es: {$escuela[1]['Edad']}");
echo "</pre>";

echo "<pre>";
var_dump("La ocupación de MichiLulo es: {$escuela[2]['Ocupacion']}");
echo "</pre>";

echo "<pre>";
var_dump("El color de MichiLalo es: {$escuela[0]['Color']}");
echo "</pre>";

echo "<pre>";
var_dump("La comida favorita de MichiTainy es: {$escuela[1]['Comida']['Favoritas']}");
echo "</pre>";

echo "<pre>";
var_dump("La comida menos favorita de MichiLulo es: {$escuela[2]['Comida']['NoFavoritas']}");
echo "</pre>";

?>

<?php

// Lista de ciudades con clima y ubicación específica Autonomo

function recomendacionautonomo($caracteristica, $tipo) {
  
  $clima = array(
    "Bogota" => "frio", 
    "Monteria" => "calido", 
    "Medellin" => "templado"
  );

  $ubicacion = array(
    "Guajira" => "norte", 
    "Leticia" => "sur", 
    "Santander" => "este", 
    "Antioquia" => "oeste"
  );

  $turismo = array(
    "Santa Marta" => "mar", 
    "Villavicencio" => "llano", 
    "Riohacha" => "desierto", 
    "Quindio" => "valle"
  );

  switch($tipo) {
    case "clima":
      echo array_search($caracteristica, $clima);
      break;
    case "ubicacion":
      echo array_search($caracteristica, $ubicacion);
      break;
    case "turismo":
      echo array_search($caracteristica, $turismo);
    break;
    default:
    echo "No se encontro la caracteristica";
    break;
  }
}

recomendacionautonomo("valle", "turismo");

?>

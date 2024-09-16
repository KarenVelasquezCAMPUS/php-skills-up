<?php

// Lista de ciudades con clima y ubicación específica Manual

function recomendacionmanual() {
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
  
  switch("clima") {
    case "clima":
      echo array_search("frio", $clima);
      break;
    case "ubicacion":
      echo array_search("norte", $ubicacion);
      break;
    case "turismo":
      echo array_search("valle", $turismo);
    break;
  }
}

recomendacionmanual();

?>

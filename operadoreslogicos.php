<?php

$michis_felinos = true;
$michis_caninos = false;
$michis_4_patas = true;
$michis_2_patas = false;
$michis_caminan = true;
$michis_vuelan = false;
$michis_programan = false;
$michis_comen = true;

// AND &&

print_r("AND &&");

echo '<pre>';
var_dump($michis_felinos && $michis_caninos);
echo '</pre>';

echo '<pre>';
var_dump($michis_felinos && $michis_4_patas);
echo '</pre>';

echo '<pre>';
var_dump($michis_felinos && $michis_2_patas);
echo '</pre>';

echo '<pre>';
var_dump($michis_felinos && $michis_caminan);
echo '</pre>';

echo '<pre>';
var_dump($michis_felinos && $michis_vuelan);
echo '</pre>';

echo '<pre>';
var_dump($michis_felinos && $michis_programan);
echo '</pre>';

echo '<pre>';
var_dump($michis_felinos && $michis_comen);
echo '</pre>';

// OR ||

print_r("OR ||");

echo '<pre>';
var_dump($michis_caninos || $michis_felinos);
echo '</pre>';

echo '<pre>';
var_dump($michis_caninos || $michis_4_patas);
echo '</pre>';

echo '<pre>';
var_dump($michis_caninos || $michis_2_patas);
echo '</pre>';

echo '<pre>';
var_dump($michis_caninos || $michis_caminan);
echo '</pre>';

echo '<pre>';
var_dump($michis_caninos || $michis_vuelan);
echo '</pre>';

echo '<pre>';
var_dump($michis_caninos || $michis_programan);
echo '</pre>';

echo '<pre>';
var_dump($michis_caninos || $michis_comen);
echo '</pre>';

// NOT !

print_r("NOT !");

echo '<pre>';
var_dump(!$michis_felinos);
echo '</pre>';

echo '<pre>';
var_dump(!$michis_caninos);
echo '</pre>';

echo '<pre>';
var_dump(!$michis_4_patas);
echo '</pre>';

echo '<pre>';
var_dump(!$michis_2_patas);
echo '</pre>';

echo '<pre>';
var_dump(!$michis_caminan);
echo '</pre>';

echo '<pre>';
var_dump(!$michis_vuelan);
echo '</pre>';

echo '<pre>';
var_dump(!$michis_programan);
echo '</pre>';

echo '<pre>';
var_dump(!$michis_comen);
echo '</pre>';

?>

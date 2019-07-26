<?php


$frase = "A repetição é a mãe da retenção.";

var_dump($frase);

echo "<br/>";

var_dump(strlen($frase));


$q = strpos($frase, "mãe");

var_dump($q);

echo "<br/>";

$texto = substr($frase, 0, $q);

var_dump($texto);

echo "<br/>";

$texto2 = substr($frase, $q);

var_dump($texto2);

echo "<br/>";




?>
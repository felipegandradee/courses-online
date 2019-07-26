<?php
phpinfo();
$qualASuaIdade = 70;
$idadeCrianca = 12;
$idadeMaior = 18;
$melhorIdade = 65;


if($qualASuaIdade < $idadeCrianca){

	echo "Criança";

} else if($qualASuaIdade < $idadeMaior){

	echo "Adolescente";

} else if($qualASuaIdade < $melhorIdade){

	echo "Adulto";

} else {

	echo "Idoso";
}

echo "<br/>";

echo ($qualASuaIdade < $idadeMaior) ? "Menor de Idade" : "Menor de Idade";




?>
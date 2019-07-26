<?php

function incluirClasses($nomeClasse){

	if(file_exists($nomeClasse . "php") === true){ // verificando se determinada classe ja existe
		require_once($nomeClasse . ".php");
	}
}

spl_autoload_register("incluirClasses"); // carrega mais de uma função autoload
spl_autoload_register( function($nomeClasse){

		if(file_exists("abstratas" . DIRECTORY_SEPARATOR . $nomeClasse . "php") === true){ // pegando de outras pastas
			require_once("abstratas" . DIRECTORY_SEPARATOR . $nomeClasse . ".php");

		}
	});


$carro = new DelRey();
$carro->acelerar(80);
	


?>
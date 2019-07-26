<?php

	require_once("config.php");

	use Cliente\Cadastro; //usando a namespace Cliente

	$cad = new Cadastro();
	$cad->setNome("Felipe Andrade");
	$cad->setEmail("fga@gmail.com");
	$cad->setSenha("********");

	$cad->registrarVenda();
	
?>
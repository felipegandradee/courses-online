<?php

	//inicializando a sessão
	session_start();

	//recebendo a conexão
	include_once("conexao.php");

	// recebendo os dados do formulário
	$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
	$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
	$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
	$id_cargo = filter_input(INPUT_POST, 'idcargo', FILTER_SANITIZE_NUMBER_INT);	

	//Realizando a pesquisa
		//Criando a query
		$result_pessoa = "UPDATE pessoa SET nome='$nome', cpf='$cpf', id_cargo='$id_cargo' WHERE id='$id'";

		//Executando a query
		$resultado_pessoa = mysqli_query($conn, $result_pessoa) or die(mysqli_error($conn));

		//Verifciando se alterou com sucesso
		if (mysqli_affected_rows($conn)) {
			$_SESSION['msg'] = "<span style='color:green'>Pessoa alterada com sucesso!</span>";
			header("Location: listar_pessoa.php");
		} else {
			$_SESSION['msg'] = "<span style='color:green'>Pessoa não foi alterada com sucesso!</span>";
			header("Location: editar_pessoa.php");
		}
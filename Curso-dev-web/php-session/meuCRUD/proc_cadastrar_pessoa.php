<?php
	//Criando a sessão p/ estabelecer a sessão
	session_start();

	//incluindo a conexão
	include_once("conexao.php");

	//Recebendo os dados do formulário
	$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
	$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
	$idcargo = filter_input(INPUT_POST, 'idcargo', FILTER_SANITIZE_NUMBER_INT);

	//Inserindo dados no Banco de dados
		//Criando a Query
		$result_pessoa = "INSERT INTO pessoa(nome, cpf, id_cargo) VALUES('$nome', '$cpf', '$idcargo')";

		//Executando a query
		$resultado_pessoa = mysqli_query($conn, $result_pessoa) or die(mysqli_error($conn));

		//Verificando se inseriu com sucesso
		if(mysqli_insert_id($conn)){
			$_SESSION['msg'] = "<span style='color:green'>Pessoa cadastrada com sucesso!</span>";
			header("Location: listar_pessoa.php");
		} else {
			$_SESSION['msg'] = "<span style='color:red'>Pessoa não foi cadastrada com sucesso!</span>";
			//redirecionando para página de formulário
			header("Location: cadastrar_pessoa.php");
		}
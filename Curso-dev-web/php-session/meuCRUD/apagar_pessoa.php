<?php
	//inicializando a sessão
	session_start();

	//recebendo a conexão
	include_once("conexao.php");

	//recebendo os dados do usuário no listar
	$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

	//realizando a pesquisa
		//criando a query
		$result_pessoa = "DELETE FROM pessoa WHERE id='$id'";

		//Executando a query
		$resultado_pessoa = mysqli_query($conn, $result_pessoa) or die(mysqli_error($conn));

		//Verificando se foi excluido
		if(mysqli_affected_rows($conn)){
			$_SESSION['msg'] = "<span style='color:green'> Pessoa excluída com sucesso! </span>";
			header("Location: listar_pessoa.php");
		} else{
			$_SESSION['msg'] = "<span style='color:red'> Pessoa não foi excluída com sucesso! </span>";
			header("Location: listar_pessoa.php");			
		}

<?php
	//inicializando a sessão
	session_start();

	//recebendo a conexão de um arquivo externo.
	include_once("conexao.php");

	//recebendo o id do usuário no Listar
	$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

	//Realizando a pesquisa
		//Criando a query
		$result_usuario = "DELETE FROM usuarios WHERE id='$id'";

		//Executando a query
		$resultado_usuario = mysqli_query($conn, $result_usuario) or die(mysqli_error($conn));

		//Verificando se foi excluído
		if(mysqli_affected_rows($conn)){
			//exibindo a mensagem de sucesso através da seção
			$_SESSION['msg'] = "<span style='color:green;'> Usuário apagado com sucesso! </span>";

			//redirecionando para a página de Listar os Usuários
			header("Location: crud_listar.php");
		} else {
			//exibindo a mensagem de erro através da seção
			$_SESSION['msg'] = "<span style='color:red;'> Usuário não foi apagado com sucesso! </span>";

			//redirecionando para a página de Listar os Usuários
			header("Location: crud_listar.php");
		}

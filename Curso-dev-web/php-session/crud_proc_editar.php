<?php
	//inicializando a sessão
	session_start();

	//recebendo a conexão de um arquivo externo.
	include_once("conexao.php");

	//recebendo os dados do formulário
	$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
	$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
	$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);

	//Realizando a pesquisa
		//Criando a query
		$result_usuario = "UPDATE usuarios SET
							nome='$nome', email='$email', modified=NOW()
							WHERE id='$id'"; 

		//Executando a query
		$resultado_usuario = mysqli_query($conn, $result_usuario) or die(mysqli_error($conn));

		//Verificando se alterou com sucesso
		if(mysqli_affected_rows($conn)){
			//exibindo a mensagem de sucesso através da seção
			$_SESSION['msg'] = "<span style='color:green;'> Usuário editado com sucesso! </span>";

			//redirecionando para a página de Listar os Usuários
			header("Location: crud_listar.php");
		} else {
			//exibindo a mensagem de erro através da seção
			$_SESSION['msg'] = "<span style='color:red;'> Usuário não foi editado com sucesso! </span>";

			//redirecionando para a página de Editar os Usuários (formulário)
			header("Location: crud_editar.php");
		}			

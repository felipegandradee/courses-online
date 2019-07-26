<?php
	//Criando sessão para exibir a mensagem de inserção
	session_start();

	//recebendo a conexão de um arquivo externo.
	include_once("conexao.php");

	//Recebendo dados do formulário
	$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
	$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

	//Inserindo os dados no banco
		//Criando a query
		$result_usuarios = "INSERT INTO usuarios (nome, email, situacao_id, niveis_acesso_id, created)
							VALUES ('$nome', '$email', '2', '3', NOW())";

		//Executando a query
		$resultado_usuarios = mysqli_query($conn, $result_usuarios) or die(mysqli_error($conn));

		//Verificando se inseriu com sucesso
		if(mysqli_insert_id($conn)){
			//exibindo a mensagem de sucesso através da seção
			$_SESSION['msg'] = "<span style='color:green;'> Usuário cadastrado com sucesso! </span>";

			//redirecionando para a página de Listar os Usuários
			header("Location: crud_listar.php");
		} else {
			//exibindo a mensagem de erro através da seção
			$_SESSION['msg'] = "<span style='color:red;'> Usuário não foi cadastrado com sucesso! </span>";

			//redirecionando para a página de Cadastrar os Usuários (formulário)
			header("Location: crud_cadastrar.php");
		}
?>

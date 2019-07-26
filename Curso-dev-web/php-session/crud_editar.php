<?php
	//inicializando a sessão
	session_start();

	//recebendo a conexão de um arquivo externo.
	include_once("conexao.php");

	//recebendo o id do usuário no Listar
	$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

	//Realizando a pesquisa
		//Criando a query
		$result_usuario = "SELECT * FROM usuarios WHERE id='$id' LIMIT 1"; //retorna apenas um registro

		//Executando a query
		$resultado_usuario = mysqli_query($conn, $result_usuario) or die(mysqli_error($conn));

		//Lendo os dados
		$row_usuario = mysqli_fetch_assoc($resultado_usuario);
?>
<!DOCTYPE html>
	<html lang="pt-br">
		<head>
			<meta charset="utf-8">
			<title>CRUD - Editar</title>
		</head>
		<body>
			<a href="crud_listar.php">Listar</a>
			<h1>Editar Usuário</h1>
			<?php
				//Verificando a existência da sessão
				if(isset($_SESSION['msg'])){
					echo "<p>" . $_SESSION['msg'] . "</p>";
					unset($_SESSION['msg']);
				}
			?>
			<form method="POST" action="crud_proc_editar.php">
				<label>Nome: </label>
				<input type="text" name="nome" value="<?php echo $row_usuario['nome']; ?>"><br><br>

				<label>E-mail: </label>
				<input type="email" name="email" value="<?php echo $row_usuario['email']; ?>"><br><br>

				<input type="hidden" name="id" value="<?php echo $row_usuario['id']; ?>"><br><br>

				<input type="submit" name="Cadastrar"><br><br>
			</form>
		</body>
	</html>
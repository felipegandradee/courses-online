<?php
	//criando a sessão
	session_start();

	//incluindo a conexão do BD
	include_once("conexao.php");

	//recebendo o Id da pessoa no Listar
	$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

	//realizando a pesquisa
		//criando a query
		$result_pessoa = "SELECT * FROM pessoa WHERE id='$id' LIMIT 1";

		//executando a query
		$resultado_pessoa = mysqli_query($conn, $result_pessoa) or die(mysqli_error($conn));

		//Lendo os dados
		$row_pessoa = mysqli_fetch_assoc($resultado_pessoa);

?>
<!DOCTYPE html>
	<html lang="pt-br">
		<head>
			<meta charset="utf-8">
			<title>CRUD - EDITAR PESSOA</title>
		</head>
		<body>
			<h1>Editar Pessoa</h1>
			<?php
				//Verificando a existência da sessão
				if (isset($_SESSION['msg'])) {
					echo "<p>". $_SESSION['msg'] ."</p>";
					unset($_SESSION['msg']);
				}
			?>
			<form method="POST" action="proc_editar_pessoa.php">
				<label>Nome: </label>
				<input type="text" name="nome" value="<?php echo $row_pessoa['nome']; ?>"><br><br>

				<label>Cpf: </label>
				<input type="text" name="cpf" value="<?php echo $row_pessoa['cpf']; ?>"><br><br>

				<label>Id Cargo: </label>
				<input type="number" name="idcargo" value="<?php echo $row_pessoa['id_cargo']; ?>"><br><br>

				<input type="hidden" name="id" value="<?php echo $row_pessoa['id']; ?>">

				<input type="submit" name="Concluir"><br><br>

			</form>
		</body>
	</html>
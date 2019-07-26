<?php
	//Inicializando a sessão
	session_start();

	//incluindo o arquivo de conexão
	include_once("conexao.php");
?>
	<!DOCTYPE html>
	<html lang="pt-br">
		<head>
			<meta charset="utf-8">
			<title>CRUD - LISTAR</title>
		</head>
		<body>
			<div> <a href="cadastrar_pessoa.php">Cadastrar</a></div>
			<?php
			 echo "<h1>Listar Pessoas</h1>";

			 //Verificando a existência da conexão
			 if(isset($_SESSION['msg'])){
			 	echo "<p>" . $_SESSION['msg'] . "</p>";
			 	unset($_SESSION['msg']);
			 }

			 //Realizando a pesquisa
			 	//Trazendo a Quantidade Total de Pessoas
			 		$result_qt_pessoa = "SELECT COUNT(id) AS qt_pessoas FROM pessoa";

			 		//executando a query
			 		$resultado_qt_pessoa = mysqli_query($conn, $result_qt_pessoa);

			 		//Lendo o resultado
			 		$row_qt_pessoa = mysqli_fetch_assoc($resultado_qt_pessoa);
			 		echo "<h3> Total de Pessoas Cadastradas: " . $row_qt_pessoa['qt_pessoas'] . "</h3>";

			 	//Criando a Query para exibição das pessoas cadastradas
				 	$result_pessoa = "SELECT tb_pessoa.*, tb_pessoa.nome AS nome_pessoa, cpf, id_cargo, tb_cargo.nome AS nome_cargo
				 					FROM pessoa tb_pessoa
				 					INNER JOIN cargo tb_cargo ON tb_cargo.id = tb_pessoa.id_cargo
				 					";

				 	//executando a query
				 	$resultado_pessoa = mysqli_query($conn, $result_pessoa) or die(mysqli_error($conn));

				 	//lendo os dados
				 	while ($row_usuario = mysqli_fetch_assoc($resultado_pessoa)) {
				 		echo "ID: " . $row_usuario['id'] . "<br>";
				 		echo "Nome: " . $row_usuario['nome_pessoa'] . "<br>";
				 		echo "CPF: " . $row_usuario['cpf'] . "<br>";
				 		echo "Cargo: " . $row_usuario['id_cargo'] . " - " . $row_usuario['nome_cargo'] . "<br>";
				 		echo "<div> <a href='editar_pessoa.php?id=" . $row_usuario['id'] . "'>Editar </a></div>";
				 		echo "<div> <a href='apagar_pessoa.php?id=" . $row_usuario['id'] . "'>Apagar </a></div><hr>";
				 	}


			?>
		</body>
	</html>
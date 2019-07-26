<?php
	//criando a sessão
	session_start();

?>
<!DOCTYPE html>
	<html lang="pt-br">
		<head>
			<meta charset="utf-8">
			<title>CRUD - CADASTRAR PESSOA</title>
		</head>
		<body>
			<h1>Cadastrar Pessoa</h1>
			<?php
				//Verificando a existência da sessão
				if (isset($_SESSION['msg'])) {
					echo "<p>". $_SESSION['msg'] ."</p>";
					unset($_SESSION['msg']);
				}
			?>
			<form method="POST" action="proc_cadastrar_pessoa.php">
				<label>Nome: </label>
				<input type="text" name="nome"><br><br>

				<label>Cpf: </label>
				<input type="text" name="cpf"><br><br>

				<label>Id Cargo: </label>
				<input type="number" name="idcargo"><br><br>

				<input type="submit" name="Cadastrar"><br><br>

			</form>
		</body>
	</html>
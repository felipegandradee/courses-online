<?php
	//inicializando a sessão
	session_start();
?>
<!DOCTYPE html>
	<html lang="pt-br">
		<head>
			<title>CRUD - Cadastrar</title>
		</head>
		<body>
			<a href="crud_listar.php">Listar</a>
			<h1>Cadastrar Usuário</h1>
			<?php
				//Verificando a existência da sessão
				if(isset($_SESSION['msg'])){
					echo "<p>" . $_SESSION['msg'] . "</p>";
					unset($_SESSION['msg']);
				}
			?>
			<form method="POST" action="crud_proc_cadastrar.php">
				<label>Nome: </label>
				<input type="text" name="nome"><br><br>

				<label>E-mail: </label>
				<input type="email" name="email"><br><br>

				<input type="submit" name="Cadastrar"><br><br>
			</form>
		</body>
	</html>
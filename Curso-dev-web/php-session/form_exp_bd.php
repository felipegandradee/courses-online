<?php
	//Inicializando a sessão 
	session_start();
?>
<!DOCTYPE html>
	<html lang="pt-br">
		<head>
			<meta charset="utf-8">
			<title>Exportar BD</title>
		</head>
		<body>
			<h1>Exportar base de dados</h1>
			<?php
				//Verificando se existe a variavel 'msg' na SESSION
			if (isset($_SESSION['msg'])) {
				echo "<p>" . $_SESSION['msg'] . "</p>";
				unset($_SESSION['msg']);
			}
			?>
			<form method="POST" action="proc_form_exp_bd.php" enctype="multipart/form-data">
				<label>Servidor: </label>
				<input type="text" name="Servidor" placeholder="Nome do Servidor"><br><br>
				
				<label>Usuário: </label>
				<input type="text" name="usuario" placeholder="Nome do usuário"><br><br>

				<label>Senha: </label>
				<input type="password" name="senha" placeholder="Senha da base de dados"><br><br>

				<label>Base de Dados: </label>
				<input type="text" name="dbname" placeholder="Nome da base de dados"><br><br>

				<input type="submit" value="Exportar" >								
			</form>
		</body>
	</html>
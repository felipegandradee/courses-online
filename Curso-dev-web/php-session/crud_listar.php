<?php
	//inicializando a sessão
	session_start();

	//recebendo a conexão de um arquivo externo.
	include_once("conexao.php");
?>
<!DOCTYPE html>
	<html lang="pt-br">
		<head>
			<meta charset="utf-8">
			<title>CRUD - Listar</title>
		</head>
		<body>
			<a href="crud_cadastrar.php">Cadastrar</a>
			<?php
				echo "<h1>Listar Usuários</h1>";
				//Verificando a existência da sessão
				if(isset($_SESSION['msg'])){
					echo "<p>" . $_SESSION['msg'] . "</p>";
					unset($_SESSION['msg']);
				}
				//Realizando a pesquisa
					//Criando a query
						//Qtde de usuarios
						$result_qt_user = "SELECT COUNT(id) AS qt_usuarios FROM usuarios";
						//Executando a query
						$resultado_qt_user = mysqli_query($conn, $result_qt_user) or die(mysqli_error($conn));
						//Lendo o resultado
						$row_qt_user = mysqli_fetch_assoc($resultado_qt_user);
						echo "<h3>Quantidade de Usuários: " . $row_qt_user['qt_usuarios'] . "</h3>";

						//Listar nome do usuario juntamente com a situação e o nome de acesso
						$result_usuarios = "SELECT user.*, sit.nome AS nome_sit, nivac.nome AS nome_niv_ac 
											FROM usuarios user
											INNER JOIN situacoes sit ON sit.id = user.situacao_id
											INNER JOIN niveis_acesso nivac ON nivac.id = user.niveis_acesso_id
											";
						//Executando a query
						$resultado_usuarios = mysqli_query($conn, $result_usuarios) or die(mysqli_error($conn));
						//Lendo o resultado
						while($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){
							echo "ID: " . $row_usuario['id'] . "<br>";
							echo "Nome: " . $row_usuario['nome'] . "<br>";
							echo "E-mail: " . $row_usuario['email'] . "<br>";
							echo "Situação: " . $row_usuario['situacao_id'] . " - " . $row_usuario['nome_sit'] . "<br>";
							echo "Nível de Acesso: " . $row_usuario['niveis_acesso_id'] . " - " . $row_usuario['nome_niv_ac'] . "<br>";
							echo "<a href='crud_editar.php?id=" . $row_usuario['id'] . "'>Editar</a><br>";
							echo "<a href='crud_apagar.php?id=" . $row_usuario['id'] . "'>Apagar</a><hr>";
				}
			?>
		</body>
	</html>
<?php
//credenciais de conexão
$server = "localhost";
$user = "root";
$password = "";
$dbname = "celke";

//criando conexão
$conn = mysqli_connect($server, $user, $password, $dbname);

//criando a query
$result_usuarios = "SELECT user.id, user.nome AS nome_usuario, user.email, user.niveis_acesso_id, niv_ac.nome AS nome_niv_ac
					FROM usuarios AS user
					INNER JOIN niveis_acesso AS niv_ac ON niv_ac.id = user.niveis_acesso_id";

 //executando query
$resultado_usuarios = mysqli_query($conn, $result_usuarios) or die(mysqli_error($conn));// se der erro na query será exibido na tela


//lendo os dados
while($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){
	echo "ID: " . $row_usuario['id'] . "<br>";
	echo "Nome do Usuário: " . $row_usuario['nome_usuario'] . "<br>";
	echo "E-mail: " . $row_usuario['email'] . "<br>";
	echo "Nome Nível de Acesso: " . $row_usuario['nome_niv_ac'] . "<br>";
	echo "Níveis Acesso ID: " . $row_usuario['niveis_acesso_id'] . "<br><hr>";
}

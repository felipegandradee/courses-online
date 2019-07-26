<?php
//credenciais de conexão
$server = "localhost";
$user = "root";
$password = "";
$dbname = "celke";

//criando conexão
$conn = mysqli_connect($server, $user, $password, $dbname);

//criando a query
$result_usuario = "SELECT user.id, user.nome AS nome_user, user.email, user.niveis_acesso_id, nivac.nome AS nome_niv_ac
				   FROM usuarios user
				   RIGHT JOIN niveis_acesso AS nivac ON nivac.id = user.niveis_acesso_id ";

//executando a query
$resultado_usuario = mysqli_query($conn, $result_usuario) or die(mysqli_error($conn)); // se der erro na query será exibido na tela

//lendo os dados
while($row_usuario = mysqli_fetch_assoc($resultado_usuario)){
	print_r("ID: " . $row_usuario['id'] . "<br>");
	echo "Nome do Usuário: " . $row_usuario['nome_user'] . "<br>";
	echo "E-mail: " . $row_usuario['email'] . "<br>";
	echo "Nome do Nível de Acesso: " . $row_usuario['nome_niv_ac'] . "<br><hr>";
}
<?php
//credenciais de conexão
$server = "localhost";
$user = "root";
$password = "";
$dbname = "celke";

//criando conexão
$conn = mysqli_connect($server, $user, $password, $dbname);

//criando a query
$result_usuarios = "SELECT * FROM usuarios WHERE nome LIKE 'a%'"; 
// %a%  - indica q este valor entre as porcentagens pode estar em qualquer posição do texto.
// %a  - indica q este valor entre as porcentagens deve estar no final do texto.
// a%  - indica q este valor entre as porcentagens deve estar no começo do texto.

//executando a query
$resultado_usuarios = mysqli_query($conn, $result_usuarios);

//lendo os dados
while($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){
	echo "ID: " . $row_usuario['id'] . "<br>";
	echo "Nome: " . $row_usuario['nome'] . "<br>";
	echo "E-mail: " . $row_usuario['email'] . "<br><hr>";
}


?>
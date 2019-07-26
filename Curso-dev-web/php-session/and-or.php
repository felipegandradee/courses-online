<?php

//credenciais de conexão
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "celke";

//criando conexão
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

//criando a query
$result_usuarios = "SELECT * FROM usuarios WHERE situacao_id='1' OR niveis_acesso_id='1' ";

//executando query
$resultado_usuarios = mysqli_query($conn, $result_usuarios);

//lendo as informações
while($row_usuarios = mysqli_fetch_assoc($resultado_usuarios)){
	echo "ID: " . $row_usuarios['id'] . "<br>";
	echo "Nome: " . $row_usuarios['nome'] . "<br>";
	echo "E-mail: " . $row_usuarios['email'] . "<br>";
	echo "Situação id: " . $row_usuarios['situacao_id'] . "<br>";
	echo "Niveis acesso id: " . $row_usuarios['niveis_acesso_id'] . "<br><hr>";

} 

?>
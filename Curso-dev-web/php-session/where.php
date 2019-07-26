<?php

//credenciais de conexão
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "celke";

//criando conexão
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

//criando a query
$result_usuario = "SELECT id, nome, email, situacao_id FROM usuarios WHERE situacao_id='1'";

//executando query
$resultado_usuario = mysqli_query($conn, $result_usuario);

//lendo as informações
while($row_usuario = mysqli_fetch_assoc($resultado_usuario)){
	echo "ID: " . $row_usuario['id'] . "<br>";
	echo "Nome: " . $row_usuario['nome'] . "<br>";
	echo "E-mail: " . $row_usuario['email'] . "<br>";
	echo "Situação ID: " . $row_usuario['situacao_id'] . "<br><hr>";

}

?>
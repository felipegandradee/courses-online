<?php

//credenciais de conexão
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "celke";

//Criar a conexão
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

//criando a query
$result_usuarios = "SELECT * FROM usuarios ORDER BY id DESC"; //  ID em ordem decrescente
$result_usuarios = "SELECT * FROM usuarios ORDER BY id ASC"; // ID em ordem crescente
$result_usuarios = "SELECT * FROM usuarios ORDER BY nome DESC"; // Nome em ordem decrescente
$result_usuarios = "SELECT * FROM usuarios ORDER BY nome ASC"; // Nome em ordem crescente

//executando query
$resultado_usuarios = mysqli_query($conn, $result_usuarios);

//lendo as informações
while($row_usuarios = mysqli_fetch_assoc($resultado_usuarios)){
	echo "ID: " . $row_usuarios['id'] . "<br>";
	echo "Nome: " . $row_usuarios['nome'] . "<br>";
	echo "E-mail: " . $row_usuarios['email'] . "<br><hr>";
}


?>
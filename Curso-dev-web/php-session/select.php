<?php

//credenciais de conexão
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "celke";

//criando conexão
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

//criando a query
$result_usuario = "SELECT * FROM usuarios";

//executando query
$resultado_usuario = mysqli_query($conn, $result_usuario);

//criando variavel para atribuir o resultado
$row_usuario = mysqli_fetch_assoc($resultado_usuario);
var_dump($row_usuario);

echo "<br>";

//imprimindo todos usuarios
while($row_usuario = mysqli_fetch_assoc($resultado_usuario)){
	var_dump($row_usuario); // imprimindo tudo direto

	//imprimindo com cada campo
	echo "ID: " . $row_usuario['id'] .  "<br>";
	echo "Nome: " . $row_usuario['nome'] .  "<br>";
	echo "E-mail: " . $row_usuario['email'] .  "<br> <hr>";
}


?>
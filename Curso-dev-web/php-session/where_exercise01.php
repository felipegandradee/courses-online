<?php

//credenciais de conexão
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "celke_exercises";

//criando conexão
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

//criando a query
$result_situacaos = "SELECT id, nome, created, modified FROM situacaos WHERE id='2'";

//executando query
$resultado_situacaos = mysqli_query($conn, $result_situacaos);

//lendo as informações
while($row_situacaos = mysqli_fetch_assoc($resultado_situacaos)){
	echo "ID: " . $row_situacaos['id'] . "<br>";
	echo "Nome: " . $row_situacaos['nome'] . "<br>";
	echo "Criado em: " . $row_situacaos['created'] . "<br><hr>";
}

?>
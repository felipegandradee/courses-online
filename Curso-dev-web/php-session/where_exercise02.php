<?php

//credenciais de conexão
$servidor = "localhost";
$user = "root";
$senha = "";
$dbname = "celke_exercises";

//criando conexão
$conn = mysqli_connect($servidor, $user, $senha, $dbname);

//criando a query
$result_niveis_acessos = "SELECT id, nome, created, modified FROM niveis_acessos WHERE id='3'";

//executando query
$resultado_niveis_acessos = mysqli_query($conn, $result_niveis_acessos);

//lendo as informações
while($row_niveis_acessos = mysqli_fetch_assoc($resultado_niveis_acessos)){
	echo "ID: " . $row_niveis_acessos['id'] . "<br>";
	echo "Nome: " . $row_niveis_acessos['nome'] . "<br>";
	echo "Criado em: " . $row_niveis_acessos['created'] . "<br>";
}

?>
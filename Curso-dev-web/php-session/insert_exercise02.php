<?php
$server = "localhost";
$user = "root";
$password = "";
$dbname = "celke_exercises";

$conn = mysqli_connect($server, $user, $password, $dbname);

$result_niveis_acessos = "INSERT INTO niveis_acessos(nome, created, situacao_id) VALUES('Supervisor', NOW(), '4')";
$resultado_niveis_acessos = mysqli_query($conn, $result_niveis_acessos);

if(mysqli_insert_id($conn)){
	echo "Insert inserido com sucesso!" . " ID do registro criado: " . mysqli_insert_id($conn);
}

?>
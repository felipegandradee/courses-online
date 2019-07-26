<?php
$server = "localhost";
$user = "root";
$password = "";
$dbname = "celke_exercises";

$conn = mysqli_connect($server, $user, $password, $dbname);

$result_situacaos = "INSERT INTO situacaos(nome, created) VALUES('João', NOW())";
$resultado_situacaos = mysqli_query($conn, $result_situacaos);

if(mysqli_insert_id($conn)){
	echo "Insert inserido com sucesso!" . " ID do registro criado: " . mysqli_insert_id($conn);
}

?>
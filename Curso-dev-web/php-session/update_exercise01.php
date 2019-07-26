<?php
$server = "localhost";
$user = "root";
$password = "";
$dbname = "celke_exercises";

$conn = mysqli_connect($server, $user, $password, $dbname);

$result_situacaos = "UPDATE situacaos SET nome = 'Bloqueado', modified = NOW() WHERE id = '2'";
$resultado_situacaos = mysqli_query($conn, $result_situacaos);

if(mysqli_affected_rows($conn)){
	echo "Registro alterado com sucesso!";
}
?>
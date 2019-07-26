<?php
$server = "localhost";
$user = "root";
$password = "";
$dbname = "celke_exercises";

$conn = mysqli_connect($server, $user, $password, $dbname);

$result_situacaos = "SELECT * FROM situacaos WHERE nome LIKE '%n%'";

$resultados_situacaos = mysqli_query($conn, $result_situacaos);

while($rows_situacaos = mysqli_fetch_assoc($resultados_situacaos)){
	echo "ID: " . $rows_situacaos['id'] . "<br>";
	echo "Nome: " . $rows_situacaos['nome'] . "<br>";
	echo "Created: " . $rows_situacaos['created'] . "<br><hr>";
}
?>
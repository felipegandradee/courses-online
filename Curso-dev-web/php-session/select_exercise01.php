<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "celke_exercises";

$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

$result_situacaos = "SELECT * FROM situacaos";

$resultado_situacaos = mysqli_query($conn, $result_situacaos);

while($row_situacaos = mysqli_fetch_assoc($resultado_situacaos)){

	echo "ID: " . $row_situacaos['id'] .  "<br>";
	echo "Nome: " . $row_situacaos['nome'] .  "<br>";
	echo "Created: " . $row_situacaos['created'] .  "<br> <hr>";
}

?>
<?php

$servidor = "localhost";
$user = "root";
$pass = "";
$dbname = "celke_exercises";

$conn = mysqli_connect($servidor, $user, $pass, $dbname);

$result_niveis_acessos = "SELECT * FROM niveis_acessos";

$resultado_niveis_acessos = mysqli_query($conn, $result_niveis_acessos);

while($row_niveis_acessos = mysqli_fetch_assoc($resultado_niveis_acessos)){
	echo "ID: " . $row_niveis_acessos['id'] . "<br>";
	echo "Nome: " . $row_niveis_acessos['nome'] . "<br>";
	echo "Created: " . $row_niveis_acessos['created'] . "<br> <hr>";

}

?>
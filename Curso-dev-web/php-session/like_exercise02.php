<?php
$server = "localhost";
$user = "root";
$password = "";
$dbname = "celke_exercises";

$conn = mysqli_connect($server, $user, $password, $dbname);

$result_niveis_acessos = "SELECT * FROM niveis_acessos WHERE nome LIKE '%a%'";

$resultado_niveis_acessos = mysqli_query($conn, $result_niveis_acessos);

while($rows_niveis_acessos = mysqli_fetch_assoc($resultado_niveis_acessos)){
	echo "ID: " . $rows_niveis_acessos['id'] . "<br>";
	echo "Nome: " . $rows_niveis_acessos['nome'] . "<br><hr>";
}


?>
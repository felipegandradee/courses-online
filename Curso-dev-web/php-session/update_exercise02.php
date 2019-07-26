<?php
$server = "localhost";
$user = "root";
$password = "";
$dbname = "celke_exercises";

$conn = mysqli_connect($server, $user, $password, $dbname);

$result_niveis_acesso = "UPDATE niveis_acessos SET nome = 'Aluno', modified = NOW() WHERE id = '3'";
$resultados_niveis_acesso = mysqli_query($conn, $result_niveis_acesso);

if(mysqli_affected_rows($conn)){
	echo "Registro alterado com sucesso!";
}
?>
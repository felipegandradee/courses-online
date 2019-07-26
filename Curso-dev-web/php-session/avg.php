<?php
//credenciais de conexão
$server = "localhost";
$user = "root";
$password = "";
$dbname = "celke";

//criando conexão
$conn = mysqli_connect($server, $user, $password, $dbname);

//criando a query
$result_usuario = "SELECT AVG(qt_acessos) AS qnt_acessos FROM usuarios";

//executando a query
$resultado_usuario = mysqli_query($conn, $result_usuario) or die(mysqli_error($conn)); // se der erro na query será exibido na tela

//lendo os dados
$row_usuario = mysqli_fetch_assoc($resultado_usuario);
echo "Média de Acessos: " . (int) $row_usuario['qnt_acessos'] . "<br>";
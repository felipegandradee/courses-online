<?php
//credenciais de conexão
$server = "localhost";
$user = "root";
$password = "";
$dbname = "celke";

//criando conexão
$conn = mysqli_connect($server, $user, $password, $dbname);

//criando a query
$result_usuario = "SELECT SUM(qt_acessos) AS qnt_acessos FROM usuarios WHERE situacao_id = '1' AND niveis_acesso_id = '3'";

//executando a query
$resultado_usuario = mysqli_query($conn, $result_usuario) or die(mysqli_error($conn)); // se der erro na query será exibido na tela

//lendo os dados
$row_usuario = mysqli_fetch_assoc($resultado_usuario);
echo "Total de Acessos: " . (int) $row_usuario['qnt_acessos'] . "<br>";
<?php

//credenciais de conexão
$server = "localhost";
$user = "root";
$password = "";
$dbname = "celke";

//criando conexão
$conn = mysqli_connect($server, $user, $password, $dbname);

//criando a query
$result_usuarios = "DELETE FROM usuarios WHERE id='4'";

 //executando query
$resultado_usuarios = mysqli_query($conn, $result_usuarios);

//confirmando se foi excluído
if(mysqli_affected_rows($conn)){
	echo "Apagado com sucesso!";
} else {
	echo "Erro: usuário não foi apagado";
}


?>
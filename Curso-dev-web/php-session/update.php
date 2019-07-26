<?php
//credenciais de conexão
$server = "localhost";
$user = "root";
$password = "";
$dbname = "celke";

//criando conexão
$conn = mysqli_connect($server, $user, $password, $dbname);

//criando a query
$result_usuarios = "UPDATE usuarios SET situacao_id='1', niveis_acesso_id='2', modified=NOW() WHERE id='5'";

 //executando query
$resultado_usuarios = mysqli_query($conn, $result_usuarios);

//verificando se realizou a alteração
if(mysqli_affected_rows($conn)){
	echo "Alterado com sucesso!";
} else {
	echo "Erro ao alterar o usuário.";
}

?>
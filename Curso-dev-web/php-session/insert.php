<?php

//credenciais de conexão
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "celke";

//Criar a conexão
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

$nome = "Carlos";
$email = "carlos@celke.com.br";
//criando a query
$result_usuarios = "INSERT INTO usuarios (nome, email, situacao_id, niveis_acesso_id, created) VALUES ('$nome', '$email', '2', '3', NOW())"; // 'NOW()' pega a hora e data atual do servidor

 //executando query
$resultado_usuarios = mysqli_query($conn, $result_usuarios);

//verificando se inseriu com sucesso e terá um retorno na variavel $conn
if(mysqli_insert_id($conn)){
	echo "ID: ".mysqli_insert_id($conn). "<br>"; //trazendo o número do ID do registro criado
	echo "Inserido com sucesso";
} else {
	echo "Erro ao inserir o registro no usuário";
}

?>
<?php

//credenciais de conexão
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "celke";

//criando conexão
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

//criando a query
$result_usuario = "SELECT DISTINCT email FROM usuarios";


//executando query
$resultado_usuario = mysqli_query($conn, $result_usuario);

//lendo as informações
while($row_usuario = mysqli_fetch_assoc($resultado_usuario)){
	echo "E-mail: " . $row_usuario['email'] . "<br> <hr>";

}

?>
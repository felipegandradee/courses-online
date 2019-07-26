<?php

//realizando a conexão c/ MySQL por meio da Classe MySQLi

$conn = new mysqli("localhost", "root", "", "dbphp7");

//verificar se não deu erro na conexão
if($conn->connect_error){

	echo "Error: " . $conn->connect_error;
}

//realizando o insert pelo prepare("comando SQL aqui")
$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(? , ?)"); // " ? " será trocado por valores posteriormente

$stmt->bind_param("ss", $login, $pass); // " bind_param " recebe os tipos de variáveis das interrogações e seus respectivos valores
// 's' -> string
// 'i' -> inteiro
// 'f' -> float
// 'd' -> double

$login = "user";
$pass = "12345";

//executando o $stmt
$stmt->execute();


//inserindo outro usuário. Ob: Não é necessário utilizar novamente os comandos prepare e bind_param
$login = "root";
$pass = "****";
$stmt->execute();


//comando fecth para exibir ao usuario - comando direto sem o prepare
$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

	//acessando os dados dessa variavel $result
/*	
	while($row = $result->fetch_array()){ // 'fetch_array()' verifica se tem dado linha por linha no cursor e retorna a qtd de linhas e o índice das colunas
		var_dump($row);
	}	

*/	

	while($row = $result->fetch_assoc()){  // outra maneira de exibir somente com o nome da String
		var_dump($row);

	}



//convertendo para JSON
$data = array();

while($row = $result->fetch_assoc()){
	array_push($data, $row);
}

echo json_encode($data);

?>
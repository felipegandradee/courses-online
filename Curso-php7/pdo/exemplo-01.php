<?php

//Usando PDO
$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

$stmt = $conn->´prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

$stmt->execute();

$results = $stmt->fetch_all(PDO::FETCH_ASSOC); // 'fetch_all()' já fateia todas as linhas

var_dump($results);






?>
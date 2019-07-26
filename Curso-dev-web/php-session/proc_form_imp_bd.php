<?php
//inicializando a sessão
session_start();

//Receber os dados do formulário
	//Recebendo o arquivo
	$arquivo = $_FILES['arquivo']['tmp_name'];
	//var_dump($arquivo);
	$sevidor = filter_input(INPUT_POST, 'servidor', FILTER_SANITIZE_STRING);
	$usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
	$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
	$dbname = filter_input(INPUT_POST, 'dbname', FILTER_SANITIZE_STRING);

//Importar conexão BD
include_once("conexao.php");

//Ler os dados do arquivo e converter em String
$dados = file_get_contents($arquivo);
//echo $dados;

//Executar as query do backup
mysqli_multi_query($conn, $dados);

//mensagem de redirecionamento
$_SESSION['msg'] = "<span style='color:green'> Base de dados restaurada com sucesso! </span>";

//realizando o redirecionamento
header("LOCATION: form_imp_bd.php");

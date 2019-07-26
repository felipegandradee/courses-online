<?php
$server = "localhost";
$user = "root";
$password = "";
$dbname = "celke_exercises";

$conn = mysqli_connect($server, $user, $password, $dbname);

$result_niv_ac = "SELECT niv_ac.situacao_id AS id_situacao, sit_id.nome AS nome_situacao 
					FROM niveis_acessos As niv_ac
					INNER JOIN situacaos AS sit_id ON sit_id.id = niv_ac.situacao_id";

$resultado_niv_ac = mysqli_query($conn, $result_niv_ac);

while($row_niv_ac = mysqli_fetch_assoc($resultado_niv_ac)){
	echo "ID da situação: " . $row_niv_ac['id_situacao'] . "<br>";
	echo "Nome da situação: " . $row_niv_ac['nome_situacao'] . "<br><hr>";
}
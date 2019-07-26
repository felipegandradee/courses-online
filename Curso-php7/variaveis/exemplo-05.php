<?php

$nome = "Glaucio";

function teste() {
	global $nome;
	echo $nome;
}

function teste2(){
	$nome = "Felipe";
	echo $nome . " agora teste2";
}

	

teste();
teste2();
?>
<?php

	$pessoas = array();

	array_push($pessoas, array( 
		'nome'   => 'João' ,
		'idade'  => 20
	));

	array_push($pessoas, array( 
		'nome'   => 'Cleber' ,
		'idade'  => 45
	));

echo json_encode($pessoas);










?>
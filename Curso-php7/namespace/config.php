<?php

spl_autoload_register(
	
	function($nameClass){

		var_dump($nameClass); // include do namespace e as Classes relacionadas

		$dirClass = "class";
		$filename = $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php"; // todo path do arquivo
	
		if(file_exists($filename)){
			require_once($filename);
		}
	}

);




?>
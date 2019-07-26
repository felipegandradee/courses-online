<?php

class Pessoa{

	public $nome = "Rasmus Lerdorf";
	protected $idade = 48;
	private $senha = "123456";


	public function verDados(){

		echo $this->nome  . "<br/>";
		echo $this->idade . "<br/>";
		echo $this->senha . "<br/>";


	}


}	

$objeto = new Pessoa();

//Acessando de forma externa da Classe
// echo $objeto->nome   . "<br/>";
// echo $objeto->idade  . "<br/>";
// echo $objeto->senha  . "<br/>";

//aceso através da propria classe
$objeto->verDados();


?>
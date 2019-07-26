<?php

class Endereo{

	private $logradouro;
	private $numero;
	private $cidade;

	public function __construct($logradouro, $numero, $cidade){

		$this->logradouro = $logradouro;
		$this->numero = $numero;
		$this->cidade = $cidade;


	}

	public function __destruct(){

			var_dump("DESTRUIR");
	}

	public function __toString(){

		return $this->logradouro . ", " . $this->numero . ". " . $this->cidade . "<br/>";
	}

}


$meuEndereco = new Endereo("Rua Sem Nome", "123", "São Paulo");
var_dump($meuEndereco);

echo "<br/>";

//destruindo
unset($meuEndereco);

echo "<br/>";

//imprimindo com o toString
$meuEndereco = new Endereo("Rua Sem Nome", "123", "São Paulo");
echo $meuEndereco;

?>
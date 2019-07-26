<?php

//informando qual é o namespace
namespace Cliente;

	class Cadastro extends \Cadastro { //  " \Cadastro " volta uma pasta

		public function registrarVenda(){

			echo "Foi registrada uma venda para o cliente " . $this->getNome();
		}

	}



?>
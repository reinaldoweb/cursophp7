<?php 

class Pessoa{


	public $nome;// Atributos


	public function falar(){//Método


		return "O meu nome é ".$this->nome;
	}
}

$reinaldo = new Pessoa();
$reinaldo->nome = "Reinaldo Santos";
echo $reinaldo->falar();

 ?>
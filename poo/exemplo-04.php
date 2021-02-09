<?php

class Endereco{

	private $logaradouro;
	private $numero;
	private $cidade;



	public function __construct($a , $b, $c){

		$this->logradoro =$a;
		$this->numero = $b;
		$this->cidade = $c;

	}

	public function __toString(){
		
		return $this->logradoro.", ".$this->numero." - ".$this->cidade;
	}
}

	$meuEndereco = new Endereco("Rua Potiguar", "40", "Paripe");
	//var_dump($meuEndereco);

	echo $meuEndereco;


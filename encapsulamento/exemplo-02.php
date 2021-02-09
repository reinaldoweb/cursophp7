<?php 


class Pessoa{

	public $nome = "Reinaldo";
	protected $idade = 53;
	private $senha = "123456";

	public function verDados(){

		echo $this->nome ."<br/>";
		echo $this->idade ."<br/>";
		echo $this->senha ."<br/>";
	}

}//Pessoa


class Programador extends Pessoa{


public function verDados(){

		echo $this->nome ."<br/>";
		echo $this->idade ."<br/>";
		echo $this->senha ."<br/>";
	}


}



$objeto = new Programador();

//echo $objeto->idade . "<br/>";


$objeto->verDados();


 ?>
<?php 



class Documento{

	private $numero;


	public function getNumero()
	{

		return $this->numero;
	}

	public function setNumero($n){

		$this->numero = $n;
	}

	
}//Documento




	class CPF extends Documento{

		public function validar():bool
		{

			$numeroCPF = $this->getNumero();
			//Aqui vai a validação do cpf
			return true;
		}
	}



	$doc = new CPF();

	$doc->setNumero("111222458-98");

	var_dump($doc->validar());

	echo "<br/>";

	echo $doc->getNumero();
	
 ?>
<?php 

class Animal{


	public function falar(){

		return "Som";


	}

	public function mover(){

		return "Anda";

	}

}

	class Cachorro extends Animal{

		public function falar(){

			return "Late";
		}


	}

	class Gato extends Animal{

		public function falar(){

			return "Mia";
		}
	}


	class Passaro extends Animal{

		public function cantar(){
			return "Canta";
		}

		public function mover(){

			return "voa e " . parent::mover();
		}
	}



	$gato = new Gato();

	echo $gato->falar(). "<br/>";;
	echo $gato->mover(). "<br/>";
echo "--------------------------------------<br/>";
	$pluto = new Cachorro();
	echo $pluto->falar() . "<br/>";
	echo $pluto->mover() . "<br/>";

echo "--------------------------------------<br/>";

	$ave = new Passaro();
	echo $ave->cantar() . "<br/>";
	echo $ave->mover() . "<br/>";
 ?>
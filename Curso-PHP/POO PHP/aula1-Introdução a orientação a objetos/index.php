<?php
	class person{
		private $name  ="";
		private $age   ="";
		private $weigh ="";

		public function crescer(){
			echo "Estou crescendo";
			$this->comer();   	            #$this serve para referenciar elementos dentro da classe. #usar "->" para as chamadas de métodos


		}

		private function comer(){           #função privada não consegue sre chamada
			echo "Estou com";
		}

	}



	$pessoa  = new person;
	$pessoa2 = new person;

	$pessoa->crescer();  
	$pessoa2->comer();                       #usar "->" para as chamadas de métodos

?>
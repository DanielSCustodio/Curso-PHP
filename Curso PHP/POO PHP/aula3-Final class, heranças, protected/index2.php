<?php
	
	 class Filha{					
		public function mostrarOla(){
			echo "Foi herdado";
		}

		protected function heranca(){           #Protected pode ser chamado por outra classe que seja herdada, diferente do Private que só pode ser 													chamando dentro da própria classe. 
			echo "Herança de outra classe";
		}


		public function original(){
			echo "Original";
		}
	}


	class Pai extends Filha{
		public function mostrarTchau(){
			echo "Tchau Mundo";
		}
		public function getHeranca(){
			$this->heranca();
		}

		public function original(){             #Reescrevendo a função de origem e passando novo valor;
			echo "reescreveu a function";
			echo "<br/>";
			parent::original();                 #Chamando a função de origem dentro da função reescrita(cópia).
		}
	}

	$PaiOBJ = new Pai;

	$PaiOBJ->mostrarOla();
	echo "<hr>";
	$PaiOBJ->mostrarTchau();
	echo "<hr>";
	$PaiOBJ->getHeranca();
	echo "<hr>";
	$PaiOBJ->original();      









	




	

	
	
?>
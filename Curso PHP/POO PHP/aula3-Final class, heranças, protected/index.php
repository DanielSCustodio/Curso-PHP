<?php
	
	final class Filha{					#Quando a classe é final ele não pode ser herdada. Outras classes não podem acessar ela. Usar extends 																															  para chamar ela
		public function mostrarOla(){
			echo "Olá mundo";
		}	
	}



	class Pai{
		public function mostrarTchau(){
			echo "Tchau Mundo";
		}
	}

	

	$pai3 = new Pai;
	$pai3->mostrarTchau();

	$filha3 = new Filha;
	$filha3->mostrarOla();

	
	
?>
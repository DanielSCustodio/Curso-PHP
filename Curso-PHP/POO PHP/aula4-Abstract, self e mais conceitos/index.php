<?php
	
	abstract class Teste{						#Classe abstrata pode apenas ser herdada, não pode ser instanciada

		public function function1(){
			echo "Chamando função abstrada";
		}

		abstract function function2();                   #Método abstrado. O método abstrado será codificado na classe principal
		abstract function function3();

	}

	class Principal extends Teste{
		public function function2(){						
			echo "Estou declarando oficialmente um método abstrado";
		}

		public function function3(){            #Os métodos abstrados tem que ser declarado na classe principal, mesmo que não sejam usados

		}

		public  static function metodoestatico(){
			echo "Chamando metodo estático";
			
		}

		public function function4(){			
			Principal::metodoestatico();      
			echo "<br/>";
			self::metodoestatico();              #Chamando o método estático da mesma classe

		}

		public function GetMetodoEstatico(){
			Principal2::outroMetodoEstatico();	#Chamando um método estático de outra classe
			
		}
	}

	Class Principal2{
		public static function outroMetodoEstatico(){
			echo "Chamando método estático de outra classe";
		}

	}

	
	$PrincipalOBJ = new Principal;
	echo "<hr>";
	$PrincipalOBJ->function2();
	echo "<hr>";
	$PrincipalOBJ->function4();
	echo "<hr>";
	$PrincipalOBJ->GetMetodoEstatico();
	echo "<br/>";
	$PrincipalOBJ->metodoestatico();

	


?>
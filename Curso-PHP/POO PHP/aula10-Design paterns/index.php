<?php 

	
	class Cachorro{
		function __construct(){
			echo "Classe Cachorro";
		}
	}

	class Gato{
		function __construct(){
			echo "Classe Gato";
		}
	}

	
	class Animal{
		public static function build($nameClass){    //Método Simple Factory
			if (class_exists($nameClass)) {
				return new $nameClass;
			}else{
				die('Ops! A Classe não existe!');
			}
		}
	}

	Animal::build('gato');
	echo "<hr>";

	#_________________________________________________________________________________________________________________
	#FACADE PATTERN

	class Carrinho{
		public function FecharCarrinho(){
			echo "Carrinho fechado";
		}
	}

	class Frete{
		public function CalcularFrete(){
			echo "Frete Calculado";
		}
	}

	class Pedido{
		public function FinalizarPedido(){
			echo "Pedido Finalizado";

		}
	}


	class Loja{
		public function FinalizarCompra(){
			$this -> FecharCarrinho();
			$this -> CalcularFrete();
			$this -> FinalizarPedido();
		}

		public function FecharCarrinho(){
			$carrinho = new Carrinho();
			$carrinho->FecharCarrinho();
		}


		public function CalcularFrete(){
			$frete = new Frete();
			$frete-> CalcularFrete();
		}

		public function FinalizarPedido(){
			$pedido = new Pedido();
			$pedido-> FinalizarPedido();
		}
	


	}

	$loja = new Loja();
	$loja->FinalizarCompra();


?>
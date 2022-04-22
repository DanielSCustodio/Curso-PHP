<?php
  class Exemplo{

  	private $var1;
  	public $var2;
  	public static $var3 ="Estático";


  	public static function metodo(){
  	echo "Método Estático";
 	 }


 	public function AlterarNome($par){
 	 	$this->var1=$par;
 	}

 	public function mostraNome(){
 		return $this->var1;            #this está acessando a variavel da classe
 	}

  }
  
?>
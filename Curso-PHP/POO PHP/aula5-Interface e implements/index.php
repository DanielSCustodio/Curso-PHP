<?php

	 include('interface.php');

     class Teste implements interface1{

     	public function Print($par){
     		echo "$par";   	
	 	}

	 	public function Print2(){          #O método da classe abastrata tem que ser declarado mesmo que não seja usado
		}

	}	
	 $testeObj = new Teste();
	 $testeObj->Print("Que luta");
     	
?>	
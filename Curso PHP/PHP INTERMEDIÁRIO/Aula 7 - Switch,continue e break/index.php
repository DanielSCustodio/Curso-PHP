<?php

	$name = "Amazo";

	switch($name){
		case 'Batman':
		echo "É o Batman";
		echo "<hr>";
		break;

		case 'Amazo':
		echo "É o Amazo";
		echo "<hr>";
		break;
	}


	for($i=0; $i< 15; $i++){
		if ($i==10 || $i==8 || $i==5) {  #Continue é usado em loops for, while, do e  foreach          
			continue;	}                #Continue pula a condição especificada 	
		echo "$i";
		echo "<hr>";
		if ($i == 12) {                #Quando só tem uma linha de código após a condição if, não é necessário 	                                                                                           usar chave
			break;                     #Break é usado em loops for, while, do,  foreach e switch.
		}

	}






?>
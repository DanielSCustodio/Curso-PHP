<?php

	$names = array ('chave1'=>'Batman','Arqueiro verde', 'Super Girl','Lex Luthor');

			
	foreach($names as $key => $value){
		echo "Chave:";
		echo $key;
		echo "<br/>";
		echo "Valor:";
		echo $value;
		echo "<hr>";
	}

	#'chave1'=>'Batman' = atribui um valor de chave específico, é uma chave personalizada



	$heroes = array('Amazo','Asa Noturna','Vandal Savage','Mulher-Gavião','Shazam');

	$contador = count($heroes);          #Essa função"count" quantifica os elementos do array

	echo "$contador";
	echo "<br/>";


	echo "Laço for em um array";
	echo "<br/>";
	for($i=0; $i<$contador; $i++){
		echo "$heroes[$i]";              #[$i] passa o nome do conteúdo
		echo "<br/>";
	}

?>
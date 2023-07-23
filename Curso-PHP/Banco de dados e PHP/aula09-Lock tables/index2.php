<?php
	$pdo = new PDO('mysql:host=localhost;dbname=dc_comics','root','');	
	$pdo->exec("LOCK TABLES `cargos`WRITE");
	sleep(10);




	//para fazer o teste, saia do index1 e atualize o index2, vai sre verificado que o index1 só vai sre carregado depois que passar os 
	//10 segundos estipulado no index2, sendo assim não havendo concorrencia na tabela

?>
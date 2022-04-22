<?php

	define('HOST','localhost');
	define('DB','dc_comics');
	define('USER','root');
	define('PASS','');


	try {
		$pdo = new PDO('mysql:host='.HOST.';dbname='.DB,USER,PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND =>"SET NAMES utf8"));
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = $pdo->prepare("SELECT *FROM `cargos`");
		$sql->execute();

		$usuarios = $sql->fetchAll();
		foreach ($usuarios as $key => $value) {
			echo $value['nome_cargo'];
			echo "<hr>";
		}


	} catch (Exception $e) {
		echo "<h2>ERRO AO CONECTAR</h2>";
	}

	
	//para fazer o teste, saia do index1 e atualize o index2, vai sre verificado que o index1 só vai sre carregado depois que passar os 
	//10 segundos estipulado no index2, sendo assim não havendo concorrencia na tabela
?>
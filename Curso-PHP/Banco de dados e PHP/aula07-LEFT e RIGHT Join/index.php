<?php

	$pdo = new PDO('mysql:host=localhost;dbname=db_teste','root','');
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
	$sql = $pdo->prepare("SELECT * FROM `clientes` LEFT JOIN cargos ON `clientes`.`cargo` = `cargos`.`id`");
	//ao usar o left vai me retornar tudo do elemento a esquerda mesmo que não tenha correspondencia, por exemplo cliente está a esquerda  e vai aparecer todos os clientes mesmo aqueles que não tem seu id igual ao cargo id
	$sql-> execute();
	$clientes = $sql->fetchAll();
	foreach ($clientes as $key => $value) {
		echo $value['nome'];
		echo "|";
		echo $value['nome_cargo'];
		echo "<hr>";

	}












?>
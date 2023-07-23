<?php
	define('HOST','localhost');
	define('DB','dc_comics');
	define('USER','root');
	define('PASS','926565'); //TIRAR A SENHA PARA FUNCIONAR

	try {
		$pdo = new PDO('mysql:host='.HOST.';dbname='.DB,USER,PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		
	} catch (Exception $e) {
		echo "<h1>ERRO AO CONECTAR</h1>";
	}
	

//trycatch não deixa aparecer a senha do banco de dados, pois ele edita a mensagem que vai aparecer na tela







?>
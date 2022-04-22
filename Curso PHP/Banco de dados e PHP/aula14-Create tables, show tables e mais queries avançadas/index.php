<?php

	$pdo = new PDO("mysql:host=localhost;dbname=dc_comics","root","");

	$sql = 'CREATE TABLE importancia (
			id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			nome_importancia VARCHAR(30) NOT NULL
		)';

	$pdo->exec($sql);

	/*
	$tables = $pdo->query("SHOW TABLES");
	$tables = $tables->fetchAll();

	echo "<pre>";
		print_r($tables);
	echo "</pre>";
	*/
?>
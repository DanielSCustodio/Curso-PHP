<?php
	$pdo = new PDO("mysql:host=localhost;dbname=dc_comics","root","");
	$sql = $pdo->prepare("SELECT * FROM clientes GROUP BY especialidade  HAVING  cargo >= 1");

	$sql->execute();


	echo "<pre>";
		var_dump($sql->fetchAll());
	echo "</pre>";

// O HAVING funciona como um where podendo adicionar mais uma condição depois do agrupamento(GROUP BY)

?>
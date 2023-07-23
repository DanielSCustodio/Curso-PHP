<?php

$pdo = new PDO('mysql:host=localhost; dbname=db_teste','root','');

$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // verificar erros no PDO

$sql = $pdo->prepare("SELECT*FROM `clientes`GROUP BY cargo ORDER BY nome DESC LIMIT 3"); //AGRUPA/ORDENA, LIMITA O NÚMERO DE ELEMENTOS 																								MOTRADOS, DESC = DECRESCENTE  ASC = CRESCENTE
			   //LIMIT PODE SER USADO PARA COMEÇAR EM DETERMINADO ELEMENTO POR EXEMPL LIMIT 1,3 (COMEÇA NO PRIMEIRO E VAI ATÉ O TERCEIRO)
$sql->execute();

$clientes = $sql->fetchAll();

foreach ($clientes as $key => $value) {
	echo $value['nome'];
	echo "<hr>";
}

?>
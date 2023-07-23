<?php
	$pdo = new PDO('mysql:host=localhost;dbname=dc_comics','root','');
	$sql = $pdo->prepare("SELECT * FROM clientes WHERE nome LIKE  '%na'"); 
	$sql->execute();
	$cargos = $sql->fetchAll();

	print_r($cargos);



// o Sinal % quer dizer que o contéudo não importa em referencia ao caracter escolhido, por exemplo %a o que vem ante de a não importa. a palavra tem que terminar com a
//por exemplo b% o que vem depois de não importa, a palavra tem que começar com b
//%c% qualquer palavra que contenha c
?>
<?php
	$pdo = new PDO('mysql: host=localhost; dbname=cursophp','root','');

	$id =3;

	$sql = $pdo->prepare("DELETE FROM `cliente` WHERE id=?");

	if ($sql->execute(array($id))) {
		echo "Um personagem foi deletado.";
	}
?>
<?php 

	$pdo = new PDO('mysql:host = localhost; dbname=cursophp','root','');

	$id=3;

	$sql = $pdo->prepare("UPDATE `cliente` SET nome='Lex', sobrenome='Luthor'  WHERE id=$id "); //atualizando através do ID

	$sql2 = $pdo->prepare("UPDATE `cliente` SET nome='The', sobrenome ='Batman' WHERE nome ='Bruce' AND sobrenome='Wayne'");//Usar AND 																																ou 																																 OR
	$sql3 = $pdo->prepare("UPDATE `cliente` SET nome='Vandal', sobrenome ='Savage' WHERE nome ='Lex' OR nome='Lanterna'");

	if ($sql->execute()) {
		echo "<br>";
		echo "Dados cadastrais atualizado com sucesso!";
	}

	if ($sql2->execute()) {
		echo "<br>";
		echo "Dados cadastrais atualizado com sucesso!";
	}

	if ($sql3->execute()) {
		echo "<br>";
		echo "Dados cadastrais atualizado com sucesso!";
	}
?>
<?php
	$pdo = new PDO('mysql:host=localhost; dbname=cursophp','root','');

	$sql = $pdo->prepare('SELECT * FROM posts'); //SELECT * FROM SELECIONA TODOS OS CAMPOS DA TABLEA

	$sql->execute();

	$info = $sql->fetchAll();                    //Captura todas as informações da tabela selecionada
/*
 foreach ($info as $key => $value) {
 	echo "Titulo: ".$value['titulo'];
 	echo "<br/>";
 	echo "Matéria: ".$value['conteudo'];
 	echo "<hr>";
 }
for ($i=0; $i < count($info); $i++) {    //count fornece o tamanho do array
 	echo "Titulo: ".$info[$i]['titulo'];
 	echo "<br/>";
 	echo "Matéria: ".$info[$i]['conteudo'];
 	echo "<hr>";
 }

 #__________________________________________________________________________________________________________________

 $sql = $pdo->prepare('SELECT * FROM categoria');

 $sql -> execute();

 $info = $sql->fetchAll();                   //Captura todas as informações da tabela selecionada

 foreach ($info as $key => $value) {
 	$categoria_id = $value['id'];
 	echo "Categoria: ".$value['nome'];
 	echo "<br/>";
 	$sql = $pdo->prepare("SELECT * FROM posts WHERE categoria_id = $categoria_id");
 	$sql->execute();
 	$infoPost = $sql->fetchAll();
 	foreach ($infoPost as $key => $value) {
 		echo "Titulo: ".$value['titulo'];
 		echo "<br/>";
 		echo "Notícia: ".$value['conteudo'];
 		echo "<hr>";
 	}

 }
 */
#__________________________________________________________________________________________________________________


$sqlJoin = $pdo->prepare("SELECT `posts`.*, `categoria`.*, `posts`.`id` AS `post_id` FROM `posts` INNER JOIN  `categoria` ON `posts`.`categoria_id` = `categoria`. `id`");

$sqlJoin -> execute();

$info = $sqlJoin ->fetchAll(PDO:: FETCH_ASSOC); //Captura apenas o nomes dos itens da coluna e não os número que as representa

echo "<pre>";
print_r($info);
echo "<pre>";



?>
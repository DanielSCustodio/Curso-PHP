<?php
	$pdo = new PDO('mysql:host=localhost;dbname=dc_comics','root','');
	//$sql = $pdo->prepare('SELECT * FROM clientes WHERE id IN(1,2,10)'); 
	$sql = $pdo->prepare("SELECT * FROM clientes WHERE data BETWEEN '2020-01-01'AND '2020-01-29'"); 
	$sql -> execute();
	$run = $sql->fetchAll();

    print_r($run);

//IN = utilizado para selecionar determinada caracteristica de um atributo
    //WHERE id IN (1,2) vai retornar somente os ID's 1 e 2 da tabela.


//BETWEEN utilizado para a escolha de períodos
?>



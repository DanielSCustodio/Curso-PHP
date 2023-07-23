<?php
	date_default_timezone_set('America/Sao_Paulo');   #Defini o fuso-horário
	$date = date('d/m/Y H:i:s');					  #Formato BR, sempre usar
	echo $date;
	echo "<br/>";



	$hora = date('d/m/Y H:i:s',time()+(60));		   #Função time captura em segundos a data atual, 												               parametros a passar em segundos 
	echo "$hora";
	echo "<br/>";


	$tempo = time();
	echo "$tempo";
	echo "<br/>";

	$test = "Teste1";
	$title = "Include e Date";

	

	include('header.php');
	
?>


	<h1> Home</h1>



<?php
include('footer.php');
echo "$txt";
?>
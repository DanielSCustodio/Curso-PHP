<?php
	include("class1.php");
	include("class2.php");
	include("Class3.php");
	include("Class4.php");

	#use \Sessao1\class1;                   #carregando a classe
	#$class1 = new class1();			     #Como a classe já foi carregada não é necessário usar o caminho de diretório para essa chamad
	$class1 = new Sessao1\class1();



?>	
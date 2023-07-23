<?php
	include('Exemplo.class.php');

	$exemploOBJ = new Exemplo();
	$exemploOBJ2 = new Exemplo();


	$exemploOBJ->var2 = "Meu nome";   #Usar"->" para atribuir valor a variável".  A variável só foi alterada porque é pública

	echo $exemploOBJ->var2;
	echo "<hr>";
	
	echo Exemplo::$var3;
	echo "<hr>";
	echo Exemplo::$var3 ="Mudei o valor"; #Estático não pode ser acessado pelo objeto da classe somente pela classe. Não se cria objeto pra acesssar ou modificar a variável estática.
	echo "<hr>";

	echo Exemplo::metodo();               #O método estático não é acessado pelo objeto da classe, foi acessado diretamente pela classe, sem a 	                                       necessidade de usar objeto pra isso e nem tem como usar objeto.
	echo "<hr>";
	$exemploOBJ2->AlterarNome("Daniel");
	echo $exemploOBJ2->mostraNome();
?>
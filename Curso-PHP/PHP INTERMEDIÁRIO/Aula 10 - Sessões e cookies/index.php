<?php
	session_start();                       #Declaração de sessão
	$_SESSION['nome'] = 'Daniel';		   #Criação de sessão
	$_SESSION['idade']= '40';


	setcookie('nome','testeBiscoito', time()+(60*60*24),'/');#parametros: nome, valor, tempo, path("/"acessível em todas as páginas)
	echo $_COOKIE['nome'];							         #para destruir o cookie deve declarar um tempo negativo




?>
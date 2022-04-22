<?php
	session_start();
	#if (isset($_SESSION['nome'])) {     #Veirificando se a sessão existe
		echo $_SESSION['nome'];          #Pode ser criado um array ao invés de uma variavel
		echo $_SESSION['idade'];
		
	#}

	#unset($_SESSION['nome']);		  #Destrói uma sessão específica         

	#session_destroy();               #Destrói todas as sessões
		
?>
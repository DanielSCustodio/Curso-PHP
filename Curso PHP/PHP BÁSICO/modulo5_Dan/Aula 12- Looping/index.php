<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<h1>Comentários e Laços</h1>
</body>
</html>
<?php
	for ($i=0; $i<5 ; $i++) { 
		echo "Oi $i vezes";
		echo "<hr>";
		echo "<br/>";
	}


	for ($i=5; $i >= 0; $i--) { 
		echo "Olá $i vezes";
		echo("<hr>");
		echo("<br/>");
	}

	$i = 0;
	while ($i <= 10) {
		echo "$i While";
		$i+=1;
		echo "<br/>";
	}


	$i = 5;
	do{
		echo "Passei aqui $i vezes - Do-While";
		echo("<br/>");
		$i--;
	}while($i > 0);



	#coments
	//coments
	/* coments mais 
	de uma linha */

?>
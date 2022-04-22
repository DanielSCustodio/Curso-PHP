<?php 
	date_default_timezone_set('America/Sao_Paulo');
	$pdo = new PDO('mysql:host=localhost;dbname=cursophp','root','');

	if(isset($_POST['acao'])){
		$nome = $_POST['nome'];
		$sobrenome = $_POST['sobrenome'];
		$momento_registro = date('Y-m-d H:i:s');

		$sql = $pdo->prepare("INSERT INTO `cliente` VALUES (null,?,?,?)");

		$sql->execute(array($nome,$sobrenome,$momento_registro));
		echo "Cliente Inserido com sucesso!";
	}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>F O R M U L Á R I O</title>
 </head>
 <body>
 	<form method="post">
 		<input type="text" name="nome" required/>
 		<input type="text" name="sobrenome" required/>
 		<input type="submit" name="acao" value="ENVIAR"/>
 	</form>
 </body>
 </html>
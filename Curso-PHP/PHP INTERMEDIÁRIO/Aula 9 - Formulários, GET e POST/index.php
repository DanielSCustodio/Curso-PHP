<!DOCTYPE html>
<html>
<head>
	<title>Formulário</title>
</head>
<body>
	<?php
		if (isset($_GET['acao'])) {
			$nome  = @$_GET['nome'];
			$email = @$_GET['email'];
			echo "$nome";
			echo "<br/>";
			echo "$email";
		}



		if (isset($_POST['action'])) {
			echo $_POST['num1'] + $_POST['num2'];
		}


		if(isset($_POST['action2'])){
			echo $_POST['nome'];
		}


		if(isset($_POST['action3'])){
			foreach ($_POST['valor'] as $key => $value) {
				echo "$value";
				echo "<br/>";
			}

		}






	?>
	<form>
		<input type="text" name="nome">
		<input type="text" name="email">
		<input type="submit" name="acao" value="Enviar">
		<br>
	</form>

	<form method="post">
		<input type="text" name="num1">
		<input type="text" name="num2">
		<input type="submit" name="action" value="ENVIAR">
	</form>

	<form method="post">
		<select name="nome">
			<option value="Batman">Batman</option>
			<option value="Bruce">Bruce</option>
		</select>
		<input type="submit" name="action2" value="ENVIAR">
	</form>


	<form method="post">
		<input type="checkbox" name="valor[]" value="HarveyBullock">Harvey Bullock
		<input type="checkbox" name="valor[]" value="RayPalmer">Ray Palmer
		<input type="checkbox" name="valor[]" value="Seyg-El">Seyg-El
		<input type="checkbox" name="valor[]" value="Van Wayne">Van Wayne
		<input type="checkbox" name="valor[]" value="AdaoNegro">Adão Negro
		<input type="submit" name="action3" value="enviar">
	</form>
</body>
</html>
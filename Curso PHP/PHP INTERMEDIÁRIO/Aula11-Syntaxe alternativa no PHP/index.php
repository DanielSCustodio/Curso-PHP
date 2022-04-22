<?php
	$name = "Marciano";
	$count = 0;

	if ($name == "Marciano") :
		echo "It's true";
	endif;

	echo "<hr>";

	while ($count <= 3):
		$count++;
		echo "Passei aqui";
		echo "<br/>";
	endwhile;

	echo "<hr>";

	$array = ['bola','boneca'];
	foreach ($array as $key => $value):
		print_r($array);
	endforeach;

	echo "<hr>";
	
	for($i=0; $i <5; $i++):
		echo $i;
		echo "<br/>";
	endfor;







?>
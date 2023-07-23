<?php
$num10 = 10;
$num20 ="20"; /*Funciona mesmo sendo string */

if ($num10 <= $num20) {
	echo "20 maior que 10";
}else{
	echo "20 não é maior que 10";
}

$valueOne = 10;
$valueTwo = 20;
$valueThree = 30;

echo "<br/>";

if (($valueTwo > $valueOne)&&($valueTwo < $valueThree)) {
	echo "Verdade";
}else{
	echo "Falso";
}

echo "<br/>";

if (($valueOne == $valueThree)||($valueThree > $valueOne)) {
	echo "Verdade";
}else{
	echo "Falso";
}

?>
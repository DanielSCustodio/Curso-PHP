<?php
 $valor1 = 10;
 $valor2 = "10";

 if ($valor1 == $valor2) {
 	echo "São iguais";
 }else{
 	echo "São diferentes";
 }


echo "<br/>";


 if ($valor2 === $valor1) {
 	echo "São idênticos";
 }else{
 	echo "Não são idênticos";
 }

 echo "<br/>";

if ($valor2!=$valor1) {
	echo "É diferente";
}else{
	echo "Não são diferentes";
}

echo "<br/>";


if ($valor2!==$valor1) {
	echo "São diferentes";
}else{
	echo "Não são diferentes";
}




?>
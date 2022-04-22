<?php

$array1 = array("chave1"=>"Valor1","chave2"=>"Valor2");
$array2 = array("chave3"=>"Valor3","chave4"=>"Valor4");
$result = array_merge($array2, $array1);                     #Usado para combinat dois ou mais arrays

print_r($result);
echo "<br/>";




echo "<br/>";



$array3 = array("chave11"=>"Valor1","chave2"=>"Valor2");
$array4 = array("chave11"=>"Outo valor","chave2"=>"Valor4");

print_r(array_intersect_key($array3, $array4));                #serve para retornar valores com a mesma chave 																							   em 1 ou mays arrays
echo "<br/>";


$arr =['<h2>Meta-humano</h2>', '<h3>Orquídea Negra</h3>', '<h4>Tim Drake</h4>'];
print_r($arr);
echo('<hr>');
print_r(array_map('strip_tags', $arr));              #Array_map aplica uma função a todos os valores do array
													 #Pode ser função nativa ou criada, 1ºparametro é o nome da funçaõ o 2º é o array que sofrerá a ação.
echo "<hr>";



#Exemplo BOOOOOOOOOOOOOOOOOOOOOM
$arrX=[1,'bola','casaco','boneca'];
$arrY=[8,'bola','chinelo','vassoura'];
$result = array_merge($arrX, $arrY); 
print_r(array_intersect_key($arrX, $arrY));
echo("<br>");


echo "<hr>";      
print_r($result); 



echo "<br/>";
?>
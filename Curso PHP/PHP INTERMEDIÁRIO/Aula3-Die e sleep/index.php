<?php

sleep(1);
echo "1";                                      #tempo em "carregamento" antes de executar uma ação
echo "<br/>";

sleep(2);
echo "2";
echo "<br/>";


sleep(3);
echo "3";										#Os tempos dos sleeps são somados e só depois aparece seus 														respectivos conteúdos, porém tudo junto
echo "<br/>";


 /*$name = "Batman";
if($name=="Super"){
	echo "Massa";
}else{
	die("O script parou de funcionar");         #Para de executar o código após essa ação
}*/


$value =1;

if ($value==1) {
	die("Acabou");
}



echo "Parou não";
?>
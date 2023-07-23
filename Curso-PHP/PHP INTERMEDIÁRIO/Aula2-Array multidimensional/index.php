<?php

 $name = [array('Lanterna Verde', 'Ravena'), array('Superboy','Jor-El')];

 echo $name[0][0];  #Não usar aspas para passar os indices do array
 echo "<br/>";

  echo $name[0][1];  
 echo "<br/>";

  echo $name[1][0];  
 echo "<br/>";

  echo $name[0][1];  
 echo "<br/>";

 $nameTwo [0]['chave1'] = "Ravena";  #Especificando o valor do indice
 echo $nameTwo[0]['chave1'];

?>
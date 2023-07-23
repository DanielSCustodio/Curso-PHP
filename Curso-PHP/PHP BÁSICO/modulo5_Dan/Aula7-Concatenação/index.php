<?php
$name = 'Batman';
$phrase = 'I am ';
define('nome', 'Robin');

/*echo $phrase. $nome;*/

echo "$phrase $name";
echo "<br/>";
echo "Diga $phrase $name";
echo "<br/>";
echo "<div clas =\"$phrase\">Problema com aspas dupla e HTML</div>";
echo $phrase.nome;
?>
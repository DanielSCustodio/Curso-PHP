<?php 
$x = "name";
$z = 120;
$$x = "daniel";
$y =& $z;
$y = 20;

echo $x;
echo "<br>";
echo $name;
echo "<br>";
echo $z;
echo "<br>";
echo $y;
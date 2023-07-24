<?php 
$x = "name";
$z = 120;
$$x = "daniel";
$y =& $z;
$y = 20;
$n = 10;

echo $x;
echo "<br>";
echo $name;
echo "<br>";
echo $z;
echo "<br>";
echo $y;
echo "<br>";
echo "Global N: $n <br>";

function test (){
  $n = 17;
  echo "Local N: $n <br>";
}
test();
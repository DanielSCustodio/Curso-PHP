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

function sum (){
  global $n;
  $result  = $n +12;
  echo "$result <br>";
  $n = 38;
}
sum();
echo "$n <br>";

function increment(){
  static $a = 0;
  $a++;
  echo "$a <br>";
}
increment();
increment();
increment();

function subtraction($a, $b){
  echo $a - $b;
  echo "<br>";
};
subtraction(17, 6);
subtraction(23, 15);
subtraction(9, 64);

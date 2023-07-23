<?php
  class Person{
    function speak(){
      echo "Olá, você!";
    }
  }

  $jhon = new Person();

  $jhon->name = "Jhon Kenny";

  echo $jhon->name;
  echo "<br>";

  $jhon->speak();

?>
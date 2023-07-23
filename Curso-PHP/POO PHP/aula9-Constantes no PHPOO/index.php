<?php

	class MyClass
	{
		const VALOR = 300;
		function __construct()
		{
			echo self:: VALOR;
		}
	}

	new MyClass;
	echo "<br>";
	echo MyClass::VALOR;
?>
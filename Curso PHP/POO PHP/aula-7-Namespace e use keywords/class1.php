<?php
	
	namespace Sessao1;                  #Estou colocando a Class1 em uma seção, como de fosse uma pasta.
	use Sessao4\Class4;					#Classe 4 sendo declarada aqui para ser chamada diretamente na Class1 sem precisar usar o caminho do 																																diretório

	class Class1
	{
		
		function __construct(){
			new \class2();	
			echo "<br>";				#Foi usada a barra para encontrar a class2 na raiz do diretório
			echo "Classe Instanciada";
			echo "<br>";				
			new \Sessao2\Class3();		#A chamada é feita pelo nome da classe na IDE e não no diretório
			echo "<br>";
			new class4();				#Chamda diretamenta sem uso do caminho do diretório, pois foi declarada antes
		}
	}
?>	
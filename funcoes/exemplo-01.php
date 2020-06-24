<?php 

function ola() { //toda função DEVE retornar um valor (return). Se não retorna valor. 
				//é uma sub-rotina que só realiza uma tarefa.

	echo "<br>";
	echo "<hr>";

	return "Olá Mundo!<br>";

}

echo ola();
$frase =  ola();

echo strlen($frase);



 ?>
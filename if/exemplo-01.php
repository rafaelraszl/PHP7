<?php

$qualASuaIdade = 66; 

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if ($qualASuaIdade < $idadeCrianca) {

	echo "<br>";
	echo "<br>";

	echo "<hr>";

	echo "Criança";

} else if ($qualASuaIdade < $idadeMaior) {

	echo "<br>";
	echo "<br>";

	echo "<hr>";

	echo "Adolescente";

} else if ($qualASuaIdade < $idadeMelhor) {

	echo "<br>";
	echo "<br>";

	echo "<hr>";

	echo "Adulto";
} else {

	echo "<br>";
	echo "<br>";

	echo "<hr>";

	echo "Idoso";
}

	echo "<br>";
	echo "<br>";

	echo "<hr>";

	echo ($qualASuaIdade < $idadeMaior) ? "Menor de idade!" : "Maior de idade!";

 ?>
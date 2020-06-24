<?php 

function ola($texto = "Mundo", $periodo = "Bom dia") {

	return "Olá $texto! $periodo!";
}

echo "<br>";
echo "<hr>";
//require_once("../include/cabecalho.php");
//CÓDIGO
echo ola();

echo "<br>";

echo "<br>";
echo "<hr>";

echo ola("Rafael", "Boa noite");

echo "<br>";


echo "<br>";
echo "<hr>";

echo ola("Eliane", "Boa tarde");

echo "<br>";

 ?>
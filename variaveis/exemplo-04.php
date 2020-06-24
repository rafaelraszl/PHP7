<?php 

//$nome = (int)$_GET["a"];

//var_dump($nome);

$ip = $_SERVER["REMOTE_ADDR"];

$path = $_SERVER["SCRIPT_NAME"];

echo "<br>";

echo "<hr>";

echo "O IP desta máquina é: " . "<strong>$ip</strong>";

echo "<br>";

echo "<br>";

echo "<hr>";

echo "O caminho do arquivo é: " . "<strong>$path</strong>";


 ?>
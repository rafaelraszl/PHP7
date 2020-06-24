<?php 

$a = 30;

$b = 55;

echo "<br>";
echo "<br>";

echo "<hr>";

var_dump($a > $b);

echo "<br>";
echo "<br>";

echo "<hr>";

var_dump($a < $b);

echo "<br>";
echo "<br>";

echo "<hr>";

var_dump($a == $b); //== para comparação... 1 = só é para atribuição de valores

echo "<br>";
echo "<br>";

echo "<hr>";

$c = 10;
$d = 10.0;

var_dump($c == $d); // == são de valores iguais
var_dump($c === $d); // === são de valores iguais, porém são de tipo diferentes, pois $d é float

echo "<br>";
echo "<br>";

echo "<hr>";

var_dump($c != $d); //valor é igual
var_dump($c !== $d); //valor é igual, porém o tipo é diferente


 ?>
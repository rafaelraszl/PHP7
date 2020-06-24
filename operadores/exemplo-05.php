<?php 

$a = 50;

$b = 35;

echo "<br>";
echo "<br>";

echo "<hr>";

var_dump($a <=> $b); //comparação de maior, menor e igual. a é maior q b, então o resultado é 1

echo "<br>";
echo "<br>";

echo "<hr>";

$c = 10;

$d = 50;

var_dump($c <=> $d); //c é menos que d, então o resultado é -1

echo "<br>";
echo "<br>";

echo "<hr>";

$e = 50;

$f = 50;

var_dump($e <=> $f); //e é igual a f, então o resultado é 0


 ?>
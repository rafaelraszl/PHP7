<?php 

$a = NULL;

$b = NULL;

$c = 10;

echo "<br>";
echo "<br>";

echo "<hr>";

echo $a ?? $b ?? $c; //se for nulo ele não mostra. isso evita o erro ou notice de variável não definida

$d = NULL;

$e = 8;

$f = 10;

echo "<br>";
echo "<br>";

echo "<hr>";

echo $d ?? $e ?? $f; //ignorou o $f pq tem valor definido no $e


 ?>
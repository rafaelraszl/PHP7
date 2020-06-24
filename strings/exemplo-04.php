<?php 

$frase = "A repetição é mãe da retenção.";

$palavra = "mãe";

$q = strpos($frase, $palavra);
$t = strlen($frase);

echo "<br>";
echo "<br>";

echo "<hr>";

var_dump($q, $t);

echo "<br>";
echo "<br>";

echo "<hr>";

$texto = substr($frase, 0, $q);

var_dump($texto);

echo "<br>";
echo "<br>";

echo "<hr>";

$texto2 = substr($frase, $q);

var_dump($texto2);

echo "<br>";
echo "<br>";

echo "<hr>";

$texto3 = substr($frase, $q + strlen($palavra), strlen($frase));

var_dump($texto3);

 ?>
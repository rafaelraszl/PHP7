<?php 

//Variávei de tipos básicos
$nome = "Rafael Raszl";
$site = 'www.mekhetdev.com.br';

$ano = 1985;

$salario = 5500.99;

$bloquado = false;

//Variáveis de tipos compostos
$frutas = array("Abacaxi", "Laranja", "Manga");

echo "<br>";

echo "<hr>";

echo $frutas[2];

echo "<br>";


$nascimento = new DateTime();

echo "<br>";

echo "<hr>";

var_dump($nascimento);

echo "<br>";



//Variáveis de tipos especiais
$arquivo = fopen("exemplo-03.php", "r");

echo "<br>";

echo "<hr>";

var_dump($arquivo);

echo "<br>";


$nulo = NULL;

 ?>
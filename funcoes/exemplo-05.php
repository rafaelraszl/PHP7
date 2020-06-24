<?php 

//require_once("../include/cabecalho.php");

require_once("funcoes.php");

$a = 10;

function trocaValor(&$b) { //qnd tem o & na função, é passagem de parâmetro por referência

	$b += 50;

	return $b;
}

cabecalho();

echo trocaValor($a);

cabecalho();

echo trocaValor($a);

//quebraLinha();

cabecalho();

echo $a; //o valor de $a não muda, pois ela é declarada fora do escopo da função trocaValor


 ?>
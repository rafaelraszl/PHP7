<?php 
require_once("funcoes.php");


$pessoa = array(

	'nome'=>'Rafael',
	'idade'=>35
);

foreach ($pessoa as &$value) {

	if (gettype($value) === 'integer') $value += 10;
	
	cabecalho();

	echo $value;
}

cabecalho();

var_dump($pessoa);


 ?>
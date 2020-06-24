<?php

require_once("funcoes.php");

function soma(int ...$valores):string {

	return array_sum($valores);
}

cabecalho();

echo var_dump(soma(2, 2));

cabecalho();

echo soma(25, 33);

cabecalho();

echo soma(1.5, 3.2);

 ?>
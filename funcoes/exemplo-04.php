<?php 

function ola() {

	$argumentos = func_get_args();

	return $argumentos;
}
echo "<br>";
echo "<hr>";
var_dump(ola("Bom dia", "Rafael", "Como vai?"));


 ?>
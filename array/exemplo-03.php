<?php 

$pessoas = array();

array_push($pessoas, array(
	'nome'=>'Rafael',
	'idade'=>35
));

array_push($pessoas, array(
	'nome'=>'Eliane',
	'idade'=>37
));

echo "<br>";
echo "<hr>";
print_r($pessoas[0]["nome"]);

echo "<br>";
echo "<hr>";
print_r($pessoas);


 ?>
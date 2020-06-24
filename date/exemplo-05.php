<?php 

$dt = new DateTime('', new DateTimeZone("America/Sao_Paulo")); //para setar a data atual

//$dt->setTimezone(new DateTimeZone("America/Sao_Paulo")); //pode ser assim tb para setar data atual

$periodo = new DateInterval("P15D");

echo "<br>";

echo "<hr>";

echo $dt->format("d/m/Y H:i:s");

$dt->add($periodo);

echo "<br>";

echo "<hr>";

echo $dt->format("d/m/Y H:i:s");


 ?>
<?php 

$dt = new DateTime();

echo "<br>";

echo "<hr>";

date_default_timezone_set("America/Sao_Paulo");

echo $dt->format("d/m/Y H:i:s");


 ?>
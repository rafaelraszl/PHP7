<?php 

setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

date_default_timezone_set("America/Sao_Paulo");

echo "<br>";

echo "<hr>";

echo "Hoje é: " . ucwords(strftime("%A")) . ", " . strftime("%d/%B/%Y");

echo "<br>";

echo "<hr>";

echo date("l, d/M/Y");

 ?>
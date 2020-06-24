<?php 

$valorTotal = 0;

$valorTotal += 100;

$valorTotal += 25;

$valorTotal -=10;

//Desconto com porcentagem -10%
$valorTotal *= 0.9; //.9 = 90% do valor, ou seja, 10% de desconto

echo "<br>";

echo "<hr>";

echo "O valor total da compra é de: R$<strong>$valorTotal</strong>";


 ?>
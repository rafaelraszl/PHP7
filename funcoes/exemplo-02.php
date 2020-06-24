<?php 

function salario() {

	return 946.00;
}
echo "<br>";
echo "<hr>";
$salarioTotal = salario()*3;
echo "José recebeu 3 salários: R$". number_format($salarioTotal, 2, ',', '.');

 ?>
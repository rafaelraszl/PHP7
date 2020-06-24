<?php 

$anoNascimento = 1985;

$anoAtual = 2020;

$idade = $anoAtual - $anoNascimento;

$nomeCompleto = "Rafael Raszl";

echo "<hr>";

echo "Meu nome é " . $nomeCompleto . " e nasci em " . $anoNascimento .
	". Tenho" . " " . $idade . " anos.";

echo "<br/>";

unset($nomeCompleto, $anoNascimento);

if (isset($nomeCompleto) and isset($anoNascimento)) {

	echo "<hr>";

echo "Meu nome é " . $nomeCompleto . " e nasci em " . $anoNascimento .
	". Tenho" . " " . $idade . " anos.";


};


 ?>
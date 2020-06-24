<?php 

class Pessoa {

	public $nome; //atributo

	public function falar() { //método

		return "O meu nome é " . $this->nome;
	}
}

$rafael = new Pessoa();
$rafael->nome = "Rafael Raszl";
echo "<br>";
echo "<hr>";
echo $rafael->falar() . ".";


 ?>
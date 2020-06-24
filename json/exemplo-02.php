<?php 

$json = '[{"nome":"Jo\u00e3o","idade":35},{"nome":"Eliane","idade":37}]';

$data = json_decode($json, true); //colocar o true para não virar objeto

var_dump($data);

 ?>
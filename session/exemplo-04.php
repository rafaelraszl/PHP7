<?php 

//session_id('5d3eqi5kamf3jajlrfpkk6j7ss');

require_once("config.php");

session_regenerate_id(); //função nativa do php que força a criação de uma nova id de sessão

echo "<br>";
echo "<hr>";

echo session_id();

var_dump($_SESSION);


 ?>
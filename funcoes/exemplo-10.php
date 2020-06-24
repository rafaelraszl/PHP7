<?php 

function teste($callback) {

	//Processo lento

	$callback();
}

teste(function() {

	echo "<br>";

	echo "<hr>";

	echo "Terminou!";
});


 ?>
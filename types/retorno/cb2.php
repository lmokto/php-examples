<?php
	// nuestra clausura
	
	$numeros_nuevos = array_map(function($a){
		return $a * 2;
	}, range(1, 5));

	print implode(' ', $numeros_nuevos);

?>


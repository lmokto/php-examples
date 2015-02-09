<?php

	function tomar_array($entrada){
		echo "$entrada[0] + $entrada[1] = ".$entrada[0]+$entrada[1];
	}

	function añadir_algo(&$cadena){
		$cadena .= "y algo mas.";
	}

	$cad = " esto es una cadena, ";

	añadir_algo($cad);
	echo $cad; // imprime esto es una cadena, y algo mas.

	function hacercafe($tipo = "capuchino"){
		return "hacer una taza $tipo.\n";
	}

	echo hacercafe();
	echo hacercafe(null);
	echo hacercafe("espresso");

?>
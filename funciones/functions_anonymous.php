<?php 
	echo preg_replace_callback("~-([a-z])~", function ($coincidencia){
		return strtoupper($coincidencia[1]);
	}, "hola-mundo");
	//imprime hola mundo
?>
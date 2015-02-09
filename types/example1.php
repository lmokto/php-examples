<?php 
	echo "vamos a evaluar algunops tipos d datos en php\n";
	$un_bool = TRUE; // un valor boooleano
	$un_str = "foo"; // una cadena
	$un_str2 = "foo"; // una cadena
	$un_int = 12; // un entero

	echo gettype($un_bool); // imprime bolean
	echo "\n";
	echo gettype($un_str); // imprime un string

	// si este valor es un entero, incrementarlo un cuartro
	if(is_int($un_int)){
		$un_int += 4; //realizo el incremento,
		echo "\n";
		echo $un_int;
		echo "\n";
	}

	// si $un_bool es unna cadena, imprimila...
	// no va a imprimri nada, por que es un boleeano
	if(is_string($un_bool)){
		echo "cadena: $un_bool";
	}
?>
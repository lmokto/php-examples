<?php
	//http://php.net/manual/es/language.constants.syntax.php
   //A diferencia de definir constantes usando define(), las constantes definidas con la palabra clave const deben declararse en el nivel superior del entorno de la aplicación porque se definen en tiempo de ejecución. Esto significa que no pueden declararse dentro de funciones, bucles, sentencias if o bloques try/ catch.

	// Funciona a partir de PHP 5.3.0
	const CONSTANTE = 'Hola Mundo';

	echo CONSTANTE;

	// Funciona a partir de PHP 5.6.0
	const OTRA_CONSTANTE = CONSTANTE.'; Adiós Mundo';

	echo OTRA_CONSTANTE;
?>
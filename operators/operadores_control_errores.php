<?php
	// http://php.net/manual/es/language.operators.errorcontrol.php
	$my_file = @file("non_existent_file") or die("la apertura de archivo ha fallado: el error fue '$php_errormsg'");

	$value = @$cache[$key]; // no producirá una anotación si el índice $key no existe.

?>
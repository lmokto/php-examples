<?php
	// mostrar todos los errores
	error_reporting(E_ALL);

	$arr = array("fruit" => "apple", "veggie" => "carrot");

	// correcto
	print $arr['fruit']; //apple
	print $arr['veggie']; //carrot

	// incorrecto, esto funciona pero tambien genera un erro de php 
	// nivel E_NOTICE ya que no hay definida una constante llamada fruit

	// notice, use of undefined constant fruit -- assumed 'fruit' in ...
	print $arr[fruit]; //apple

	// esto define una consntante para demostrar lo que pasa.. el valor 'veggie'

	define('fruit', 'veggie');

	print $arr['fruit']; // apple
	print $arr[fruit]; // carrot

	// Lo siguiente está bien ya que se encuentra al interior de una cadena. Las constantes no son procesadas al 
	// interior de cadenas, así que no se produce un error E_NOTICE aquí
	print "hello $arr[fruit]"; // hello apple


	// Con una excepción, los corchetes que rodean las matrices al
	// interior de cadenas permiten el uso de constantes
	print "Hello {$arr[fruit]}";    // Hello carrot
	print "Hello {$arr['fruit']}";  // Hello apple

	// Esto no funciona, resulta en un error de intérprete como:
	// Parse error: parse error, expecting T_STRING' or T_VARIABLE' or T_NUM_STRING'
	// Esto por supuesto se aplica también al uso de superglobales en cadenas
	print "Hello $arr['fruit']";
	print "Hello $_GET['foo']";

	// La concatenación es otra opción
	print "Hello " . $arr['fruit']; // Hello apple
?>
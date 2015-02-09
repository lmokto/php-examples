<?php
	// Ejemplo de uso para: Operador Ternario
	$action = (empty($_POST['action'])) ? 'default' : $_POST['action'];
	// La expresión (expr1) ? (expr2) : (expr3) evalúa a expr2 si expr1 se evalúa como TRUE y a expr3 si expr1 se evalúa como FALSE.

	//// Lo anterior es idéntico a esta sentencia if/else
	if(empty($_POST['action'])){
		$action = 'default';
	} else {
		$action = $_POST['action'];
	}

?>
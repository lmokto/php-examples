<?php
	// http://php.net/manual/es/language.types.boolean.php
	$foo = True; //asigna el valor TRUE a $foo
	$accion = True;
	$mostrar_separadores = False;

	//Cualquier otro valor es considerado TRUE (incluyendo cualquier resource).

	if($accion == "mostrar_version"){
		echo "la version es 1.23\n";
	}

	if($mostrar_separadores){
		echo "<hr>\n";
	}

?>
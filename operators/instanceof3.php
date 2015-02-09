<?php
	// http://php.net/manual/es/language.operators.type.php
	$a = 1;
	$b = NULL;
	$c = imagecreate(5, 5);

	var_dump($a instanceof stdClass);
	var_dump($b instanceof stdClass);
	var_dump($c instanceof stdClass);
	var_dump(FALSE instanceof stdClass);

//Hay algunas trampas a tener en cuenta. Antes de versión de PHP 5.1.0, instanceof llamaría a __autoload() si el nombre de clase no existía. Además, si la clase no estaba cargada, un error fatal ocurriría. Esto se puede solucionar mediante una referencia de clase dinámica o una variable string que contenga el nombre de la clase:


?>
<?php

	// http://php.net/manual/es/language.types.array.php

	$arr = array(5=>, 1, 12=>2);
	$arr[] = 56; // esto es lo mismo que $arr[13] = 56;
				// en este punto de el script

	$arr["x"] = 42; // esto agrega un nuevo elemento a
					// el array con la clave "x"

	unset($array[5]); // esto elimina el elemento del array

	unset($array); // esto elimina el array completo

?>
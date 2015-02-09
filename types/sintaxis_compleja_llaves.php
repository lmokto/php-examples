<?php

	//mostramos todos los errores
	error_reporting(E_ALL);

	$genial = "fantastico";

	// no funciona, muestra: esto { fantastico }
	echo "esto es {$genial}";

	// funciona, muestra: esto es fantastico
	echo "esto es {$genial}";
	echo "esto es ${genial}";

	// funciona 
	echo "este cuadro tiene {$cuadrado->width}00 centimetros de lado.";

	// funciona, las claves entre comillas solo funcionan usando la sintaxis de llaves
	echo "esto funciona: {$arr['clave']}";

?>
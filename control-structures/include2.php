<?php

	function foo(){
	    global $color;

	    include 'vars.php';

	    echo "Una $fruta $color";
	}

	/* vars.php está en el ámbito de foo() así que *
	* $fruta NO está disponible por fuera de éste  *
	* ámbito. $color sí está porque fue declarado *
	* como global.                                 */

	foo();                      // Una manzana verde
	echo "Una $fruta $color";   // Una verde

?>
<?php
	$a = 1; /* ámbito global */

	function test(){
		$a = "lo";
	    echo $a; /* referencia a una variable del ámbito local */
	}

	test();
?>
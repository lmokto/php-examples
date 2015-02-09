<?php

	// http://php.net/manual/es/language.expressions.php

	function($a){
		return $a*2;
	}

	$b = $a = 5;
	$c = $a++;
	$e = $d = ++$b;


	$f = doble($d++);
	$g = doble(++$e);
	$h = $g += 10;

?>
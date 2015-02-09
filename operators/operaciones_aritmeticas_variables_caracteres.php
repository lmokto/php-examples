<?php
	// http://php.net/manual/es/language.operators.increment.php
	echo "== Letras ==".PHP_EOL;
	$s = "W";

	for($n=0;$n<6;$n++){
		echo ++$s . PHP_EOL;
	}

	echo "== Digitos ==".PHP_EOL;
	$d='A8';
	for($n=0;$n<6;$n++){
		echo ++$d.PHP_EOL;
	}

	$d = 'A08';
	for($n=0;$n<6;$n++){
		echo ++$d.PHP_EOL;
	}

?>
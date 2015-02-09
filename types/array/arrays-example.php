<?php

	error_reporting(E_ALL);

	ini_set('display_errors', true);
	ini_set('html_errors', false);

	// array simple
	// http://php.net/manual/es/language.types.array.php
	$array = array(1, 2);
	$count = count($array);

	for($i=0;$i<$count;$i++){
		echo "\nRevisando $i:\n";
		echo "Mal: ". $array["$i"]."\n";
		echo "bien: ". $array[$i]."\n";
		echo "Mal: {$array['$i']}\n";
		echo "bieen: {$array[$i]}\n";
	}

?>
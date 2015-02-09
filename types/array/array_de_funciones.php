<?php
	
	function getArray(){
		return array(1, 2, 3);
	}

	// en php 5.4
	$secondElement = getArray()[1];

	//anteriormente
	$tmp = getArray();
	$secondElement = $tmp[1];

	// o

	list(, $secondElement) = getArray();

?>
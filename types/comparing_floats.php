<?php 
	$a = 1.23456789;
	$b = 1.23456780;
	$epsilon = 0.00001;
	//http://php.net/manual/es/language.types.float.php
	if(abs($a-$b)<$epsilon){
		echo "true";
	}

?>
<?php
	
	//http://php.net/manual/es/functions.variable-functions.php

	class foo{
		static variable = "lolo";
		static function fo() {
			echo "otra variable ";
		}
	}

	echo foo:$variable;
	$variable = "variable";
	foo::$fo();
?>
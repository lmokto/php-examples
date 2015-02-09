<?php

	global $HTTP_POST_VARS;
	echo $HTTP_POST_VARS['name'];

	// las superglobales estan disponibles en cualquier ambito y no requiere global
	// las super globales estan disponibles desde php 4.1.0 y ahora HTTP_POST_VARS se considera obsoleta
	echo $_POST['name'];

?>
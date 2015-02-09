<?php

	function hacercafe($tipos = array("capuchino"), $fabricanteCafe = NULL){
		$aparato = is_null($fabricanteCafe) ? "las manos" : $fabricanteCafe;
		return "hacer una taza de ".join(", ", $tipos)." con $aparato.\n";
	}

	echo hacercafe();
	echo hacercafe(array("capuchino", "lavazza"), "una tetera");

?>
<?php
	
	$a = 3;
	$b = &$a; // b es una referencia para $
	
	print "$a\n"; 	// muestra 3
	print "%$b\n"; // muestra 3

	$a = 4; // cambia $a..

	print "$a\n"; // muestra 4
	print "$b\n"; // muestra 4 tambien, dado que $b es una referencia directa para $a, la cual ha sido cambiada
	

?>
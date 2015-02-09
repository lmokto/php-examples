<?php
	
	function foo(){
		function bar(){
			echo "no existo hasta que se llame foo().\n";
		}
	}

	/* no podemos llamar aun bar() ya que no existe */

	foo();

	/* ahora podemos llamar a bar(), el procedimiento de foo(), la ha hecho accesible.*/

	bar();

?>
<?php

	// Operadores de incremento/decremento
	// Ejemplo	Nombre	Efecto
	// ++$a	Pre-incremento	Incrementa $a en uno, y luego retorna $a.
	// $a++	Post-incremento	Retorna $a, y luego incrementa $a en uno.
	// --$a	Pre-decremento	Decrementa $a en uno, luego retorna $a.
	// $a--	Post-decremento	Retorna $a, luego decrementa $a en uno.

	echo "<h3>post incremento</h3>";
	$a = 5;
	echo "debe ser 5: ".$a++."<br/>\n";
	echo "debe ser 6: ".$a."<br/>\n";

	echo"<h3>Pre-incremento</h3>";
	$a = 5;
	echo "debe ser 6: ".++$a."<br/>\n";
	echo "debe ser 6: ".$a."<br/>\n";

	echo "<h3>Postdecremento</h3>";
	$a = 5;
	echo "Debe ser 5: " . $a-- . "<br />\n";
	echo "Debe ser 4: " . $a . "<br />\n";

	echo "<h3>Predecremento</h3>";
	$a = 5;
	echo "Debe ser 4: " . --$a . "<br />\n";
	echo "Debe ser 4: " . $a . "<br />\n";

?>
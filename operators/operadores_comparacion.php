<?php
	
	// Los operadores de comparación, como su nombre lo indica, permiten comparar dos valores. Puede también estar interesado en ver las tablas de comparación de tipos, ya que muestran ejemplos de las varias comparaciones relacionadas con tipos.


	// Operadores de comparación
	// Ejemplo	Nombre	Resultado
	// $a == $b	Igual	TRUE si $a es igual a $b después de la manipulación de tipos.
	// $a === $b	Idéntico	TRUE si $a es igual a $b, y son del mismo tipo.
	// $a != $b	Diferente	TRUE si $a no es igual a $b después de la manipulación de tipos.
	// $a <> $b	Diferente	TRUE si $a no es igual a $b después de la manipulación de tipos.
	// $a !== $b	No idéntico	TRUE si $a no es igual a $b, o si no son del mismo tipo.
	// $a < $b	Menor que	TRUE si $a es estrictamente menor que $b.
	// $a > $b	Mayor que	TRUE si $a es estrictamente mayor que $b.
	// $a <= $b	Menor o igual que	TRUE si $a es menor o igual que $b.
	// $a >= $b	Mayor o igual que	TRUE si $a es mayor o igual que $b.

	var_dump(0 == 'a'); // 0 == 0 -> true
	var_dump("1" == "01");
	var_dump("10" == "1e1");
	var_dump(100 == "1e2");

	switch("a"){
		case 0:
			echo "0";
			break;
		case "a": // nunca alcanzado debido a que "a" ya ha coincidido con 0
			echo "a";
			break;
	}

	

?>
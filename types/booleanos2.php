<?php
	/*
		http://php.net/manual/es/language.types.boolean.php
		
		Cuando se realizan conversiones a boolean, los siguientes valores son considerados FALSE:
		el boolean FALSE mismo
		el integer 0 (cero)
		el float 0.0 (cero)
		el valor string vacío, y el string "0"
		un array con cero elementos
		un object con cero variables miembro (sólo en PHP 4)
		el tipo especial NULL (incluyendo variables no definidas)
		objetos SimpleXML creados desde etiquetas vacías

	*/
	var_dump((bool) ""); //bool(false)
	var_dump((bool) 1); //bool(true)
	var_dump((bool) -2); //bool(true)
	var_dump((bool) "foo"); //bool(true)
	var_dump((bool) 2.3e5); //bool(true)
	var_dump((bool) array(12)); //bool(true)
	var_dump((bool) array()); //bool(false)
	var_dump((bool) "false"); //Bool(true)

?>
<?php

	// instanceof también se puede utilizar para determinar si una variable es un objeto instanciado de una clase que hereda de una clase padre:
	// http://php.net/manual/es/language.operators.type.php

	class MyClass{

	}

	class NotMyClass{

	}

	$a = new MyClass;
	var_dump($a instanceof MyClass);
	var_dump($a instanceof NotMyClass);

?>
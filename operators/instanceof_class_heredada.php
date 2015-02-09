<?php

	class ParentClass{

	}


	// herencia d clases
	class MyClass extends ParentClass{

	}

	$a = new MyClass;
	var_dump($a instanceof MyClass);
	var_dump($a instanceof ParentClass);

	$b = new MyClass;
	var_dump(!($a instanceof stdClass));


	// Finalmente, instanceof también se puede utilizar para determinar si una variable es un objeto instanciado de una clase que implementa una interface:

	// Ejemplo #4 Utilizando instanceof para la clase
	
	interface MyInterface {

	}

	class MyClass implements MyInterface{

	}

	$a = new MyClass;
	var_dump($a instanceof MyClass);
	var_dump($a instanceof MyInterface);


?>
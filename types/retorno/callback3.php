<?php

	// http://php.net/manual/es/language.types.callable.php#language.types.callable.passing

	class MyClass {
		
		public $property = "hello world";

		public function MyMethod(){
			call_user_func(array($this, 'myCallbackMethod'))
		}

		public function myCallbackMethod(){
			echo $this->property;
		}

	}


?>
<?php 

$str = <<<'EOD'
Ejemplo de un string
expandido en varias lineas
empleando la sintaxis nowdoc.
EOD;

// un ejemplo mas complejo con variables 

class foo {
	public $foo;
	public $bar;

	function foo(){
		$this->foo = 'foo';
		$this->bar = array('bar1', 'bar2', 'bar3');
	}
}

$foo = new foo();
$nombre = 'mi nombre';

echo <<<'EOT'
Mi nombre es "$nombre". Estoy escribiendo un poco de $foo->foo.
Ahora, estoy escribiendo un poco de {$foo->bar[1]}.
Esto debería mostrar una 'A' mayúscula: \x41
EOT;

?>
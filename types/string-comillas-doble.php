<?php
// http://php.net/manual/es/language.types.string.php#language.types.string.syntax.single
$str = <<<EOD
Ejemplo de una cadena
expandida en varias líneas
empleando la sintaxis heredoc.
EOD;

	class foo{
		var $foo;
		var $bar;

		function foo(){
			$this->foo = 'foo';
			$this->bar = array("a", "b", "c");
		}
	}

	$foo = new foo();
	$nombre = "MiNombre";

echo <<<EOT
mi nombre es "$nombre". estoy escribiendo un poco de $foo->foo.
ahora, estoy escribiendo un poco {$foo->bar[1]}.
esto deberia mostrar una 'A' mayuscula: \x41
EOT;
?>
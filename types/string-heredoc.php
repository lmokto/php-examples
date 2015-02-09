<?php 

var_dump(array(<<<EOD
foobar!
EOD
));

function foo(){
	static $bar = <<<LABEL
nada aqui dentro...
LABEL;
}


class foo{
	const BAR = <<<FOOBAR
ejemplo de constante
FOOBAR;
}

public $baz = <<<FOOBAR
ejemplo de propiedad
FOOBAR;

echo <<<"FOOBAR"
hola mundo!!
FOOBAR;

?>
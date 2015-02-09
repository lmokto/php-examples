<?php
//http://php.net/manual/es/language.operators.array.php
$a = array("a" => "apple", "b" => "banana");
$b = array("a" => "pear", "b" => "strawberry", "c" => "cherry");

$c = $a + $b; // Unión de $a y $b
echo "Union of \$a and \$b: \n";
var_dump($c);

$c = $b + $a; // Unión de $b y $a
echo "Union of \$b and \$a: \n";
var_dump($c);
?>
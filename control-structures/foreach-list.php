<?php
$array = [
    [1, 2],
    [3, 4],
];

foreach ($array as list($a, $b)) {
    // $a contiene el primer elemento del array interior,
    // y $b contiene el segundo elemento.
    echo "A: $a; B: $b\n";
}
?>
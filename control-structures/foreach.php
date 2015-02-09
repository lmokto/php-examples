<?php
/* Ejemplo 1 de foreach: sólo el valor */
// http://php.net/manual/es/control-structures.foreach.php
$a = array(1, 2, 3, 17);

foreach ($a as $v) {
    echo "Valor actual de \$a: $v.\n";
}

/* Ejemplo 2 de foreach: valor (con su notación de acceso manual impreso con fines ilustrativos) */

$a = array(1, 2, 3, 17);

$i = 0; /* sólo para efectos ilustrativos */

foreach ($a as $v) {
    echo "\$a[$i] => $v.\n";
    $i++;
}

/* Ejemplo 3 de foreach: clave y valor */

$a = array(
    "uno" => 1,
    "dos" => 2,
    "tres" => 3,
    "diecisiete" => 17
);

foreach ($a as $k => $v) {
    echo "\$a[$k] => $v.\n";
}

/* Ejemplo 4 de foreach: arrays multidimensionales */
$a = array();
$a[0][0] = "a";
$a[0][1] = "b";
$a[1][0] = "y";
$a[1][1] = "z";

foreach ($a as $v1) {
    foreach ($v1 as $v2) {
        echo "$v2\n";
    }
}

/* Ejemplo 5 de foreach: arrays dinámicos */

foreach (array(1, 2, 3, 4, 5) as $v) {
    echo "$v\n";
}
?
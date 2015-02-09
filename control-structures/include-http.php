<?php

/* Este ejemplo asume que www.example.com está configurado para interpretar archivos
* .php y no archivos .txt. Además, aquí 'Funciona' quiere decir que las variables
* $foo y $bar están disponibles dentro del archivo incluido. */

// No funciona; file.txt no puede ser manejado por www.example.com como PHP
include 'http://www.example.com/file.txt?foo=1&bar=2';

// No funciona; busca por un archivo llamado 'file.php?foo=1&bar=2' en el
// sistema de archivos local.
include 'file.php?foo=1&bar=2';

// Si funciona.
include 'http://www.example.com/file.php?foo=1&bar=2';

$foo = 1;
$bar = 2;
include 'file.txt';  // Funciona.
include 'file.php';  // Funciona.

?>
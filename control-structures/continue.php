<?php
    while (list($clave, $valor) = each($arr)) {
        if (!($clave % 2)) { // saltar los miembros impares
            continue;
        }
        hacer_algo($valor);
    }

    $i = 0;
    while ($i++ < 5) {
        echo "Exterior<br />\n";
        while (1) {
            echo "Medio<br />\n";
            while (1) {
                echo "Interior<br />\n";
                continue 3;
            }
            echo "Esto nunca se imprimirá.<br />\n";
        }
        echo "Ni esto tampoco.<br />\n";
    }
?>
<?php
// a primera vista, lo siguiente parece tener la salida de 'true'
echo (true?'true':false?'t':'f');

// sin embargo, la salida real de lo anterior es 't'
// esto se debe a que las expresiones ternarias se evalúan de izquierda a derecha

// la siguiente es una versión más obvia del mismo código anterior
echo ((true ? 'true' : false) ? 't' : 'f');

// aquí, se puede ver que la primera expresión es evaluada como 'true', que
// a su vez se evalúa como (bool)true, retornando así la rama verdadera de la
// segunda expresión ternaria.
?>
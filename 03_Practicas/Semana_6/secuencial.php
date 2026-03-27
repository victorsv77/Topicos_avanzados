<?php

$inicio = microtime(true);

sleep(3);
sleep(3);

$fin = microtime(true);

$tiempoTotal = $fin - $inicio;

echo "Ejecución secuencial completada en " . round($tiempoTotal, 2) . " segundos";

?>
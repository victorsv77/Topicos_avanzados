<?php

$inicio = microtime(true);

sleep(3);

$fin = microtime(true);

$tiempo = $fin - $inicio;

echo "Tarea 2 completada en " . round($tiempo, 2) . " segundos";

?>
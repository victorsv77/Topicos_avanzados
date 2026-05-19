<?php

$servidor = "localhost";
$usuario  = "root";     
$password = "";         
$base_datos = "sistema_tareas"; 

try {
    
    $conexion = new PDO("mysql:host=$servidor;dbname=$base_datos;charset=utf8", $usuario, $password);
    
   
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    
    $conexion->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

} catch (PDOException $e) {
   
    die("Error de conexión: " . $e->getMessage());
}
?>
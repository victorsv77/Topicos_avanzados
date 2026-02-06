<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = trim($_POST["nombre"]);
    $correo = trim($_POST["correo"]);
    $edad   = trim($_POST["edad"]);
    $accion = $_POST["accion"];

    // Validaciones básicas
    if (empty($nombre) || empty($correo) || empty($edad)) {
        echo "Error: Todos los campos son obligatorios.";
        exit;
    }

    if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        echo "Error: El correo no tiene un formato válido.";
        exit;
    }

    if ($edad <= 0) {
        echo "Error: La edad debe ser mayor a 0.";
        exit;
    }

    // Manejo de eventos
    if ($accion == "guardar") {
        echo "Información guardada correctamente.<br>";
        echo "Nombre: $nombre <br>";
        echo "Correo: $correo <br>";
        echo "Edad: $edad";
    }

    if ($accion == "validar") {
        echo "Validación exitosa. Todos los datos son correctos.";
    }

} else {
    echo "Acceso no permitido.";
}
?>

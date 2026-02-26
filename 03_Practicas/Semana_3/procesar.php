<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $errores = [];

    // Validar radio
    if (empty($_POST["genero"])) {
        $errores[] = "No seleccionaste género.";
    } else {
        $genero = $_POST["genero"];
    }

    // Validar checkbox
    if (empty($_POST["hobbies"])) {
        $errores[] = "No seleccionaste hobbies.";
    } else {
        $hobbies = $_POST["hobbies"];
    }

    // Validar select
    if (empty($_POST["nivel"])) {
        $errores[] = "No seleccionaste nivel de estudio.";
    } else {
        $nivel = $_POST["nivel"];
    }

    echo "<h2>Resultados del formulario</h2>";

    if (!empty($errores)) {

        echo "<h3>Errores encontrados:</h3>";
        echo "<ul>";
        foreach ($errores as $error) {
            echo "<li>$error</li>";
        }
        echo "</ul>";

    } else {

        echo "<p><strong>Género seleccionado:</strong> $genero</p>";

        echo "<p><strong>Hobbies seleccionados:</strong></p>";
        echo "<ul>";
        foreach ($hobbies as $hobbie) {
            echo "<li>$hobbie</li>";
        }
        echo "</ul>";

        echo "<p><strong>Nivel de estudio:</strong> $nivel</p>";

        echo "<h3>Formulario procesado correctamente ✔️</h3>";
    }

} else {
    echo "Acceso no permitido.";
}

?>

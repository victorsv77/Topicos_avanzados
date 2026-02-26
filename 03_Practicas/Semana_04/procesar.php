<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // ==========================
    // 1. CAPTURA Y STRINGS
    // ==========================

    $nombre = strtoupper($_POST["nombre"]);
    $longitud_nombre = strlen($_POST["nombre"]);

    $correo = $_POST["correo"];
    $edad = $_POST["edad"];
    $fecha_ingreso = $_POST["fecha_ingreso"];
    $puesto = $_POST["puesto"];

    // ==========================
    // 2. VALIDACIONES (FILTROS)
    // ==========================

    $correo_valido = filter_var($correo, FILTER_VALIDATE_EMAIL);

    $edad_valida = filter_var($edad, FILTER_VALIDATE_INT, [
        "options" => ["min_range" => 18, "max_range" => 70]
    ]);

    // ==========================
    // 3. MANEJO DE FECHAS
    // ==========================

    $fecha_actual = new DateTime();
    $fecha_ingreso_obj = new DateTime($fecha_ingreso);
    $diferencia = $fecha_actual->diff($fecha_ingreso_obj);
    $dias_transcurridos = $diferencia->days;

    // ==========================
    // 4. ESTRUCTURA + JSON
    // ==========================

    $empleado = [
        "nombre" => $nombre,
        "correo" => $correo,
        "estado_correo" => $correo_valido ? "Válido" : "Inválido",
        "edad" => $edad,
        "fecha_ingreso" => $fecha_ingreso,
        "dias" => $dias_transcurridos,
        "puesto" => $puesto
    ];

    $json = json_encode($empleado);
    $empleado_decodificado = json_decode($json, true);

    // ==========================
    // 5. ARREGLOS Y ESTADÍSTICAS
    // ==========================

    $registros = [];
    $registros[] = $empleado_decodificado;

    $total = count($registros);
    $suma_edades = 0;
    $correos_invalidos = 0;

    foreach ($registros as $registro) {
        $suma_edades += $registro["edad"];

        if ($registro["estado_correo"] == "Inválido") {
            $correos_invalidos++;
        }
    }

    $promedio = $suma_edades / $total;

    // ==========================
    // 6. REPORTE
    // ==========================

    echo "<link rel='stylesheet' href='css/estilos.css'>";
    echo "<div class='container'>";
    echo "<h2>Reporte de Empleado</h2>";

    echo "<table>";
    echo "<tr>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Estado</th>
            <th>Edad</th>
            <th>Días</th>
            <th>Puesto</th>
          </tr>";

    foreach ($registros as $registro) {
        echo "<tr>
                <td>{$registro['nombre']}</td>
                <td>{$registro['correo']}</td>
                <td>{$registro['estado_correo']}</td>
                <td>{$registro['edad']}</td>
                <td>{$registro['dias']}</td>
                <td>{$registro['puesto']}</td>
              </tr>";
    }

    echo "</table>";

    echo "<div class='stats'>";
    echo "<p><strong>Total registros:</strong> $total</p>";
    echo "<p><strong>Promedio edad:</strong> $promedio</p>";
    echo "<p><strong>Correos inválidos:</strong> $correos_invalidos</p>";
    echo "<p><strong>Longitud del nombre:</strong> $longitud_nombre caracteres</p>";
    echo "</div>";

    echo "<br><a href='index.php' class='btn'>Volver</a>";
    echo "</div>";
}
?>

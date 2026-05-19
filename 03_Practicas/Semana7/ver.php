<?php require 'conexion.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Historial</title>
</head>
<body>

    <h2>Registros en Base de Datos</h2>

    <table border="1">
        <thead>
            <tr>
                <th>Fecha</th>
                <th>Tarea</th>
                <th>Evento</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $rows = $conexion->query("SELECT * FROM tareas_log ORDER BY fecha DESC")->fetchAll();
            
            foreach ($rows as $f): ?>
                <tr>
                    <td><?= htmlspecialchars($f['fecha']) ?></td>
                    <td>Tarea <?= htmlspecialchars($f['tarea_id']) ?></td>
                    <td><?= htmlspecialchars($f['estado']) ?></td>
                </tr>
            <?php endforeach; ?>

            <?php if (!$rows): ?>
                <tr><td colspan="3">No hay datos.</td></tr>
            <?php endif; ?>
        </tbody>
    </table>

    <br>
    <a href="index.html">Volver</a>

</body>
</html>
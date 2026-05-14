<?php
session_start();

$empleados = [
    "Juan Pérez - Sistemas",
    "María López - Recursos Humanos",
    "Carlos Martínez - Ventas",
    "Ana García - Contabilidad"
];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Empleados</title>

    <link rel="stylesheet" href="estilos.css?v=1.1">
</head>

<body>

<header>

    <nav>
        <a href="index.php">Inicio</a>
        <a href="empleados.php">Empleados</a>
        <a href="registro.php">Registrar</a>
    </nav>

    <h2>Lista de Empleados</h2>

</header>

<main>

    <?php foreach($empleados as $empleado): ?>

        <div class="card">

            <strong>Empleado:</strong>
            <?php echo $empleado; ?>

        </div>

    <?php endforeach; ?>

    <a href="index.php" class="btn btn-secundario">
        Volver al Inicio
    </a>

</main>

</body>
</html>
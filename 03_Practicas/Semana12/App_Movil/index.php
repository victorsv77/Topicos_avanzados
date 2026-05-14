<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    $_SESSION['usuario'] = "Víctor";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Empleados - Inicio</title>

    <link rel="stylesheet" href="estilo.css">
</head>

<body>

<header>

    <nav>
        <a href="index.php">Inicio</a>
        <a href="empleados.php">Empleados</a>
        <a href="registro.php">Registrar</a>
    </nav>

    <h2>
        Bienvenido,
        <?php echo $_SESSION['usuario']; ?>
    </h2>

</header>

<main>

    <section class="card">

        <h1>Sistema de Registro de Empleados</h1>

        <p>
            Administra la información de los empleados
            de manera rápida y sencilla.
        </p>

        <p>
            Puedes registrar, consultar y organizar
            los datos del personal desde cualquier dispositivo.
        </p>

        <a href="registro.php" class="btn">
            Registrar Empleado
        </a>

    </section>

</main>

</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Empleados - TechSolutions</title>
    <link rel="stylesheet" href="css/estios.css">
</head>
<body>

<div class="container">
    <h2>Registro de Empleado</h2>

    <form action="procesar.php" method="POST">

        <label>Nombre completo</label>
        <input type="text" name="nombre" required>

        <label>Correo electrónico</label>
        <input type="email" name="correo" required>

        <label>Edad</label>
        <input type="number" name="edad" required>

        <label>Fecha de ingreso</label>
        <input type="date" name="fecha_ingreso" required>

        <label>Puesto</label>
        <input type="text" name="puesto" required>

        <button type="submit">Registrar Empleado</button>

    </form>
</div>

</body>
</html>

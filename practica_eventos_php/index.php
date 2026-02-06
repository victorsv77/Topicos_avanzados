<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Usuario</title>
</head>
<body>

<h2>Sistema de Registro</h2>

<form action="procesar.php" method="POST">
    <label>Nombre:</label><br>
    <input type="text" name="nombre"><br><br>

    <label>Correo:</label><br>
    <input type="email" name="correo"><br><br>

    <label>Edad:</label><br>
    <input type="number" name="edad"><br><br>

    <button type="submit" name="accion" value="guardar">Guardar</button>
    <button type="submit" name="accion" value="validar">Validar</button>
    <button type="reset">Limpiar</button>
</form>

</body>
</html>

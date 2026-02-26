<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Práctica Semana 3</title>
    <link rel="stylesheet" href="css/estilos.css">
    <script src="js/validaciones.js" defer></script>
</head>
<body>

<h2>Formulario de Preferencias</h2>

<form action="procesar.php" method="POST" onsubmit="return validarFormulario();">

    <h3>1. Selecciona tu género favorito:</h3>
    <input type="radio" name="genero" value="Acción"> Acción<br>
    <input type="radio" name="genero" value="Comedia"> Comedia<br>
    <input type="radio" name="genero" value="Drama"> Drama<br>

    <h3>2. Selecciona tus hobbies:</h3>
    <input type="checkbox" name="hobbies[]" value="Fútbol"> Fútbol<br>
    <input type="checkbox" name="hobbies[]" value="Música"> Música<br>
    <input type="checkbox" name="hobbies[]" value="Videojuegos"> Videojuegos<br>

    <h3>3. Selecciona tu nivel de estudio:</h3>
    <select name="nivel" id="nivel">
        <option value="">-- Selecciona una opción --</option>
        <option value="Bachillerato">Bachillerato</option>
        <option value="Universidad">Universidad</option>
        <option value="Posgrado">Posgrado</option>
    </select>

    <br><br>
    <button type="submit">Enviar</button>

</form>

</body>
</html>

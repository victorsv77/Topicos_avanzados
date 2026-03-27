<!DOCTYPE html>
<html>
<head>
    <title>Semana 6 - Concurrencia</title>
</head>
<body>

<h2>Simulación Flujo Único vs Flujo Múltiple</h2>

<h3>Flujo Único (Secuencial)</h3>
<a href="secuencial.php" target="_blank">
    <button>Ejecutar Secuencial</button>
</a>

<h3>Flujo Múltiple (Simulación)</h3>
<button onclick="ejecutarParalelo()">Ejecutar en Paralelo</button>

<div id="resultado"></div>

<script>
function ejecutarParalelo() {

    document.getElementById("resultado").innerHTML = "Ejecutando...";

    fetch("tarea1.php");
    fetch("tarea2.php");

    document.getElementById("resultado").innerHTML =
        "Tareas enviadas en paralelo (revisar pestaña Network)";
}
</script>

</body>
</html>
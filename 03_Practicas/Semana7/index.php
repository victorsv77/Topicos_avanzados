<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel de Control</title>
</head>
<body>

    <h1>Gestor de Tareas</h1>

    <div>
        <h3>Tarea 1: Reportes</h3>
        <p>Estado actual: <span id="status-1">detenido</span></p>
        <div>
            <button onclick="control(1, 'encender')">Encender</button>
            <button onclick="control(1, 'apagar')">Apagar</button>
        </div>
    </div>

    <hr> <div>
        <h3>Tarea 2: Datos</h3>
        <p>Estado actual: <span id="status-2">detenido</span></p>
        <div>
            <button onclick="control(2, 'encender')">Encender</button>
            <button onclick="control(2, 'apagar')">Apagar</button>
        </div>
    </div>

    <br>
    <a href="ver.php">Ver Historial</a>

    <script>
        // Diccionario para evitar el uso de switch/case o if
        const estados = {
            'encender': 'ejecutando',
            'apagar': 'detenido'
        };

        function control(id, accion) {
            // Petición al servidor
            fetch(`log.php?tarea=${id}&accion=${accion}`);
            
            // Actualización inmediata del span correspondiente
            actualizarUI(id, estados[accion] || '---');
        }

        function monitorear() {
            // Lista de IDs a revisar
            const listaTareas = [1, 2];

            listaTareas.forEach(id => {
                fetch(`log.php?tarea=${id}&accion=estado`)
                    .then(r => r.text())
                    .then(txt => actualizarUI(id, txt));
            });
        }

        function actualizarUI(id, msj) {
            const elemento = document.getElementById(`status-${id}`);
            if (elemento) {
                elemento.textContent = msj;
            }
        }

        // Ejecuta la revisión cada 2 segundos
        setInterval(monitorear, 2000);
    </script>
</body>
</html>
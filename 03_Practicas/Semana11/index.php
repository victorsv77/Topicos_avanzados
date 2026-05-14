<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Registro de Empleados</title>

    <link rel="stylesheet" href="estilos.css">
</head>

<body>

    <header>
        <h1>Sistema de Registro de Empleados</h1>

        <p>
            <?php
                echo "Fecha actual: " . date("d/m/Y");
            ?>
        </p>
    </header>

    <main>

        <section class="formulario">

            <h2>Datos del Empleado</h2>

            <form action="procesar.php" method="POST">

                <input type="text" name="nombre" placeholder="Nombre completo" required>

                <input type="email" name="correo" placeholder="Correo electrónico" required>

                <input type="number" name="edad" placeholder="Edad" min="18" max="70" required>

                <input type="date" name="fecha_ingreso" required>

                <input type="text" name="puesto" placeholder="Puesto del empleado" required>

                <select name="departamento" required>
                    <option value="">Seleccione departamento</option>
                    <option>Recursos Humanos</option>
                    <option>Sistemas</option>
                    <option>Ventas</option>
                    <option>Contabilidad</option>
                </select>

                <div class="botones">

                    <button type="submit" class="registrar">
                        Registrar
                    </button>

                    <button type="reset" class="limpiar">
                        Limpiar
                    </button>

                </div>

            </form>

        </section>

    </main>

</body>
</html>
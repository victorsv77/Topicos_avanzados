<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Sistema de Registro - TechSolutions</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: linear-gradient(135deg, #1f4037, #99f2c8);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: #ffffff;
            width: 450px;
            padding: 35px;
            border-radius: 12px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.2);
        }

        .container h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #1f4037;
        }

        .form-group {
            margin-bottom: 18px;
        }

        .form-group label {
            display: block;
            margin-bottom: 6px;
            font-weight: 600;
            color: #333;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border-radius: 6px;
            border: 1px solid #ccc;
            font-size: 14px;
            transition: 0.3s;
        }

        .form-group input:focus {
            border-color: #1f4037;
            outline: none;
            box-shadow: 0 0 5px rgba(31,64,55,0.4);
        }

        .btn {
            width: 100%;
            padding: 12px;
            background: #1f4037;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 15px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn:hover {
            background: #14532d;
        }

        .link {
            text-align: center;
            margin-top: 15px;
        }

        .link a {
            text-decoration: none;
            color: #1f4037;
            font-weight: 600;
            transition: 0.3s;
        }

        .link a:hover {
            text-decoration: underline;
        }

        .footer {
            text-align: center;
            font-size: 12px;
            margin-top: 20px;
            color: #888;
        }

    </style>
</head>
<body>

<div class="container">
    <h2>Registro de Empleados</h2>

    <form action="procesar.php" method="POST">

        <div class="form-group">
            <label>Nombre completo</label>
            <input type="text" name="nombre" required>
        </div>

        <div class="form-group">
            <label>Correo electrónico</label>
            <input type="email" name="correo" required>
        </div>

        <div class="form-group">
            <label>Edad</label>
            <input type="number" name="edad" required>
        </div>

        <div class="form-group">
            <label>Fecha de ingreso</label>
            <input type="date" name="fecha_ingreso" required>
        </div>

        <div class="form-group">
            <label>Puesto</label>
            <input type="text" name="puesto" required>
        </div>

        <button type="submit" class="btn">Registrar Empleado</button>

    </form>

    <div class="link">
        <a href="listar.php">Ver empleados registrados</a>
    </div>

    <div class="footer">
        Sistema interno © TechSolutions
    </div>
</div>

</body>
</html>
<?php
require_once __DIR__ . "/libreria/EmpleadoHelper.php";
require_once __DIR__ . "/config/Conexion.php";

$nombre = EmpleadoHelper::formatearNombre($_POST["nombre"]);
$correo = $_POST["correo"];
$edad = $_POST["edad"];
$fecha = $_POST["fecha_ingreso"];
$puesto = $_POST["puesto"];

if(!EmpleadoHelper::validarCorreo($correo)){
    die("Correo inválido");
}

if(!EmpleadoHelper::validarEdad($edad)){
    die("Edad inválida");
}

$conexion = Conexion::conectar();

$sql = "INSERT INTO empleados (nombre, correo, edad, fecha_ingreso, puesto)
        VALUES (:nombre, :correo, :edad, :fecha, :puesto)";

$stmt = $conexion->prepare($sql);
$stmt->bindParam(":nombre",$nombre);
$stmt->bindParam(":correo",$correo);
$stmt->bindParam(":edad",$edad);
$stmt->bindParam(":fecha",$fecha);
$stmt->bindParam(":puesto",$puesto);
$stmt->execute();
?>

<!DOCTYPE html>
<html>
<head>
<title>Registro Exitoso</title>
<style>
body{
    background: linear-gradient(135deg,#1f4037,#99f2c8);
    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh;
    font-family:Segoe UI;
}
.card{
    background:white;
    padding:40px;
    border-radius:12px;
    box-shadow:0 15px 35px rgba(0,0,0,0.2);
    text-align:center;
    width:400px;
}
.success{
    font-size:50px;
    color:#1f4037;
}
h2{
    margin:15px 0;
    color:#1f4037;
}
.btn{
    display:inline-block;
    margin-top:20px;
    padding:10px 20px;
    background:#1f4037;
    color:white;
    text-decoration:none;
    border-radius:6px;
    transition:.3s;
}
.btn:hover{
    background:#14532d;
}
</style>
</head>
<body>

<div class="card">
    <div class="success">✔</div>
    <h2>Empleado registrado correctamente</h2>
    <a href="index.php" class="btn">Registrar otro</a>
    <a href="listar.php" class="btn">Ver empleados</a>
</div>

</body>
</html>
<?php
require_once __DIR__ . "/libreria/EmpleadoHelper.php";
require_once __DIR__ . "/config/Conexion.php";

$conexion = Conexion::conectar();
$empleados = $conexion->query("SELECT * FROM empleados")->fetchAll(PDO::FETCH_ASSOC);

$total = count($empleados);
$sumaEdades = 0;
$mayorAntiguedad = 0;
$empleadoAntiguo = "";

foreach($empleados as $emp){
    $sumaEdades += $emp["edad"];
    $antiguedad = EmpleadoHelper::calcularAntiguedad($emp["fecha_ingreso"]);
    if($antiguedad > $mayorAntiguedad){
        $mayorAntiguedad = $antiguedad;
        $empleadoAntiguo = $emp["nombre"];
    }
}

$promedioEdad = $total > 0 ? $sumaEdades / $total : 0;
?>

<!DOCTYPE html>
<html>
<head>
<title>Lista de Empleados</title>
<style>
body{
    background:#f4f6f9;
    font-family:Segoe UI;
    padding:40px;
}
h2{
    text-align:center;
    margin-bottom:30px;
    color:#1f4037;
}
.table-container{
    background:white;
    padding:30px;
    border-radius:12px;
    box-shadow:0 10px 25px rgba(0,0,0,0.1);
}
table{
    width:100%;
    border-collapse:collapse;
}
th{
    background:#1f4037;
    color:white;
    padding:12px;
}
td{
    padding:10px;
    text-align:center;
}
tr:nth-child(even){
    background:#f2f2f2;
}
.stats{
    margin-top:30px;
    display:flex;
    justify-content:space-around;
}
.card{
    background:white;
    padding:20px;
    border-radius:10px;
    box-shadow:0 5px 15px rgba(0,0,0,0.1);
    width:30%;
    text-align:center;
}
.card h3{
    color:#1f4037;
}
.btn{
    display:block;
    width:200px;
    margin:30px auto 0;
    padding:10px;
    background:#1f4037;
    color:white;
    text-align:center;
    text-decoration:none;
    border-radius:6px;
}
.btn:hover{
    background:#14532d;
}
</style>
</head>
<body>

<h2>Empleados Registrados</h2>

<div class="table-container">
<table>
<tr>
    <th>Nombre</th>
    <th>Correo</th>
    <th>Edad</th>
    <th>Puesto</th>
</tr>

<?php foreach($empleados as $emp): ?>
<tr>
    <td><?= $emp["nombre"] ?></td>
    <td><?= $emp["correo"] ?></td>
    <td><?= $emp["edad"] ?></td>
    <td><?= $emp["puesto"] ?></td>
</tr>
<?php endforeach; ?>

</table>
</div>

<div class="stats">
    <div class="card">
        <h3>Total Empleados</h3>
        <p><?= $total ?></p>
    </div>

    <div class="card">
        <h3>Promedio Edad</h3>
        <p><?= number_format($promedioEdad,2) ?></p>
    </div>

    <div class="card">
        <h3>Mayor Antigüedad</h3>
        <p><?= $empleadoAntiguo ?> (<?= $mayorAntiguedad ?> años)</p>
    </div>
</div>

<a href="index.php" class="btn">Volver al registro</a>

</body>
</html>
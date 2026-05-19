<?php
$productos = [
    ["id" => 1, "nombre" => "Laptop", "precio" => "$15,000"],
    ["id" => 2, "nombre" => "Mouse Gamer", "precio" => "$800"],
    ["id" => 3, "nombre" => "Teclado Mecánico", "precio" => "$1,500"]
];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Móvil</title>

    <link rel="stylesheet" href="estilos.css">
</head>

<body>

<header>
    <h1>Tienda Móvil</h1>
</header>

<main>

    <?php foreach($productos as $producto): ?>

        <div class="card">

            <h2><?php echo $producto['nombre']; ?></h2>

            <p>Precio: <?php echo $producto['precio']; ?></p>

            <a href="detalle.php?id=<?php echo $producto['id']; ?>" class="btn">
                Ver detalle
            </a>

        </div>

    <?php endforeach; ?>

</main>

</body>
</html>
<?php

$id = $_GET['id'];

$productos = [
    1 => [
        "nombre" => "Laptop",
        "precio" => "$15,000",
        "descripcion" => "Laptop para trabajo y gaming."
    ],

    2 => [
        "nombre" => "Mouse Gamer",
        "precio" => "$800",
        "descripcion" => "Mouse RGB de alta precisión."
    ],

    3 => [
        "nombre" => "Teclado Mecánico",
        "precio" => "$1,500",
        "descripcion" => "Teclado mecánico con luces LED."
    ]
];

$producto = $productos[$id];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle del Producto</title>

    <link rel="stylesheet" href="estilos.css">
</head>

<body>

<header>
    <h1>Detalle del Producto</h1>
</header>

<main>

    <div class="card">

        <h2><?php echo $producto['nombre']; ?></h2>

        <p><strong>Precio:</strong> <?php echo $producto['precio']; ?></p>

        <p>
            <strong>Descripción:</strong>
            <?php echo $producto['descripcion']; ?>
        </p>

    </div>

    <div class="card">

        <h3>Comprar producto</h3>

        <form>

            <input type="text" placeholder="Nombre completo" required>

            <input type="email" placeholder="Correo electrónico" required>

            <input type="number" placeholder="Cantidad" required>

            <button type="submit" class="btn">
                Comprar
            </button>

        </form>

    </div>

    <a href="index.php" class="btn regresar">
        ← Regresar
    </a>

</main>

</body>
</html>
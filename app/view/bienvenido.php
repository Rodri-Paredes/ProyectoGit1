<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.html");
    exit();
}

$username = $_SESSION["username"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <link rel="stylesheet" href="/../../styles.css">
</head>
<body>
    <div class="container">
        <h2>Bienvenido, <?php echo $username; ?>!</h2>
        <p>Has iniciado sesión exitosamente.</p>
        <a href="logout.php" class="btn">Cerrar sesión</a>
        <a href="practica6.2/add_product.php" class="edit-btn">agregar producto</a>
    </div>
</body>
</html>

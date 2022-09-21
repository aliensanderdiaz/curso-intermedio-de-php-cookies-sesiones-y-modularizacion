<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
</head>
<body>
    <?php if( isset( $_SESSION["id"])): ?>
        <h1>Hola <?= $_SESSION["username"] ?></h1>
        <p>Tu email es: <?= $_SESSION["email"] ?></p>
        <a href="./logout.php">Salir</a>
    <?php else: ?>
        <h1>No has iniciado sesión</h1>
        <a href="./login.php?user=1">Ir al login</a>
    <?php endif; ?>
</body>
</html>
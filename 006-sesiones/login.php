<?php

session_start();

$users = [
    array(
        "username" => "Retaxito",
        "email" => "retaxito@mail.com"
    ),
    array(
        "username" => "Michi",
        "email" => "michi@mail.com"
    ),
];

$id = $_GET["user"] ?? "";

echo "El usuario elegido es: " . $users[$id]["username"];

$_SESSION["id"] = $id;
$_SESSION["username"] = $users[$id]["username"];
$_SESSION["email"] = $users[$id]["email"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <a href="./index.php">Ir al index</a>
</body>
</html>
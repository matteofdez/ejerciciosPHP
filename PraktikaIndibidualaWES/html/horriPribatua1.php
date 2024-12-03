<?php
require "../db/db.php";
require "utilidades.php";
util();

$db = new DB();
$db->konektatu();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
} else {
    $id = htmlspecialchars($_SESSION['user_id']);
    $erabiltzailea = $db->getID($id);
    echo "Kaixo " . $erabiltzailea['email'];
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
<a href="login.php" class="btn">Atera</a>
</body>
</html>
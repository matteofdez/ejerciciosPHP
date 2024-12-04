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
    echo " Hau horri pribatua da.";
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
    <br>
    <a href="sessionItxi.php" class="btn">Atera</a>
    <a href="horriPribatua2.php" class="btn">Joan horri pribatuta 2</a>
</body>

</html>
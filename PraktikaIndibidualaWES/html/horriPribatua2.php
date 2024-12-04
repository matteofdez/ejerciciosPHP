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
    echo " Hau horri pribatua 2 da.";
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
    <a href="horriPribatua1.php" class="btn">Atzera</a>
    <a href="sessionItxi.php" class="btn">Atera</a>
</body>

</html>
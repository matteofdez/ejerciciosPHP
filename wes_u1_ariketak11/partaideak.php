<?php
    require "db/db.php";
    require 'db/TaldeaDB.php';
    require 'db/PartaideakDB.php';

    session_start();

    $db = new DB();
    $db->konektatu();
    $partaideakDB = new PartaideakDB($db);
    $taldeaDB = new TaldeaDB($db);
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ariketa 11</title>
        <style>
            table, th, td {
            border: 1px solid black;
            }
        </style>
    </head>
    <body>
        <?php $taldea = $taldeaDB->get($_GET['taldea']) ?>
            <h1><?= $taldea['izena'] ?> - Partaideak</h1>
        <?php  ?>
        <?php if (isset($_GET['sortutaOk'])) { ?>
            <span style="color: green;"><?php echo $_GET['izena']; ?> partaidea sortu da.</span><br><br>
        <?php } ?>
        <table>
            <tr>
                <th>ID</th>
                <th>Izena</th>
                <th>Herrialdea</th>
            </tr>
            <?php foreach ($partaideakDB->getAll($_GET['taldea']) as $partaidea) { ?>
            <tr>
                <td><?= $partaidea['id'] ?></td>
                <td><?= $partaidea['izena'] ?></td>
                <td><?= $partaidea['herrialdea'] ?></td>
            </tr>
            <?php } ?>
        </table>
        <h2>Gehitu partaidea</h2>
        <form method="POST" action="kontroladoreak/partaideak_controller.php">
            <input type="hidden" name="taldea" value="<?= $partaidea['taldea_id'] ?>">
            <label for="izena">Izena:</label>
            <input type="text" id="izena" name="izena">
            <br><br>
            <label for="herrialdea">Herrialdea:</label>
            <input type="text" id="herrialdea" name="herrialdea">
            <br><br>
            <input type="submit" value="Sortu">
        </form>
        <br><br>
        <a href="index.php">Itzuli</a>
    </body>
</html>
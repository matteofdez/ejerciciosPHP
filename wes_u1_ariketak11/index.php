<?php
require "db/db.php";
require "db/taldeaDB.php";
require "db/partaideakDB.php";
require 'klaseak/partaideak.php';
require 'klaseak/taldea.php';
// require 'kontroladoreak/taldea_controller.php';
// require 'kontroladoreak/partaideak_controller.php';

$db = new DB();
$db->konektatu();
$taldeaDB = new TaldeaDB($db);

session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ariketa 11</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            }
    </style>
</head>

<body>
    <h1>Ariketa 11</h1>
    <?php if (isset($_GET['sortutaOk'])) { ?>
        <span style="color: green;"><?php echo $_GET['izena']; ?> taldea sortu da.</span><br><br>
    <?php
 } else if (isset($_GET['aldatuOk'])) { ?>
        <span style="color: green;">Taldearen puntuak aldatu dira.</span><br><br>
    <?php 
} ?>
    <table>
        <tr>
            <th>ID</th>
            <th>Izena</th>
            <th>Puntuak</th>
        </tr>
        <?php foreach ($taldeaDB->getAll() as $talde) { ?>
            <tr>
                <td><?= $talde['id'] ?></td>
                <td><a href="partaideak.php?taldea=<?= $talde['id'] ?>"><?= $talde['izena'] ?></a></td>
                <td>
                    <form action="kontroladoreak/taldea_controller.php" method="POST">
                        <input type="hidden" name="_method" value="UPDATE">
                        <input type="hidden" name="id" value="<?= $talde['id'] ?>">
                        <input type="hidden" name="izena" value="<?= $talde['izena'] ?>">
                        <input type="number" id="puntuak" name="puntuak" value="<?= $talde['puntuak'] ?>">
                        <button type="submit">Aldatu</button>
                    </form>
                </td>
                <td>
                    <form action="kontroladoreak/taldea_controller.php" method="POST" onsubmit="return confirm('Ezabatu taldea?');">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="id" value="<?= $talde['id'] ?>">
                        <button type="submit">Ezabatu</button>
                    </form>
                </td>
                <td>
                    <form action="kontroladoreak/taldea_controller.php" method="POST">
                        <input type="hidden" name="_method" value="GOGOKOENA">
                        <input type="hidden" name="id" value="<?= $talde['id']; ?>">
                        <button type="submit">Gogokoena</button>
                    </form>
                </td>
            </tr>
        <?php 
    } ?>
    </table>
    <h2>Gehitu taldea</h2>
    <form method="POST" action="kontroladoreak/taldea_controller.php">
        <label for="izena">Izena:</label>
        <input type="text" id="izena" name="izena">
        <br><br>
        <label for="puntuak">Puntuak:</label>
        <input type="text" id="puntuak" name="puntuak">
        <br><br>
        <input type="submit" value="Sortu">
    </form>
    <br>


   <?php if (isset($_COOKIE['gogokoena']) && is_numeric($_COOKIE['gogokoena'])) { ?>
    <span style="color: purple;">Zure talde gogokoena:
        <?php 
        $taldea = $taldeaDB->get($_COOKIE['gogokoena']);
        if ($taldea) { // Verifica si el equipo existe
            echo htmlspecialchars($taldea['izena']);
        } else {
            echo "Taldea ez da aurkitu."; // Mensaje de error si no se encuentra el equipo
        }
        ?>
    </span><br><br>
<?php } ?>
</body>

</html>
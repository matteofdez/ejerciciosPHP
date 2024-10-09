<?php
require '../db/db.php';
require '../db/TaldeaDB.php';

session_start();

$db = new DB();
$db->konektatu();
$taldeaDB = new TaldeaDB($db);
$izenaErr = $izena = "";
$puntuakErr = $puntuak = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // DELETE
    if(isset($_POST['_method']) && $_POST['_method'] == "DELETE") {
        if($taldeaDB->delete($_POST['id'])) {
            header("Location: ../index.php?ezabatutaOk=true");
            exit();
        }
        else {
            header("Location: ../index.php?error=1");
            exit();
        }
    } 
    // UPDATE
    else if(isset($_POST['_method']) && $_POST['_method'] == "UPDATE") {
        $izena = htmlspecialchars($_POST["izena"]);
        if($taldeaDB->editPuntuak($_POST['id'], $_POST['puntuak'])) {
            header("Location: ../index.php?aldatuOk=true");
exit();
        } else {
            header("Location: ../index.php?error=1");
            exit();
        }
    }
    // GOGOKOENA
    else if (isset($_POST['_method']) && $_POST['_method'] == "GOGOKOENA") {
        $id = $_POST["id"];
        if (isset($id) && is_numeric($id)) {
            setcookie("gogokoena", $id, time() + (86400 * 30), "/"); // 30 días
            $_SESSION["gogokoena"] = $id;
        }
        header("Location: ../index.php");
        exit();
    } else {
        // POST
        if (empty($_POST["izena"])) {
            $izenaErr = "Izena derrigorrezkoa da.";
        } else {
            $izena = htmlspecialchars($_POST["izena"]);
        }

        if (!empty($_POST["puntuak"])) {
            $puntuak = (int)htmlspecialchars($_POST["puntuak"]);
        }
        if (empty($izenaErr)) {
            if($taldeaDB->create($izena, $puntuak)){
                header("Location: ../index.php?sortutaOk=true&izena=".$izena."&puntuak=".$puntuak);
                exit();
            }
            else {
                header("Location: ../index.php?error=1");
                exit();
            }
        }
        else {
            header("Location: ../index.php?izenaErr=$izenaErr");
            exit();
        }
    }
} else {
    header("Location: ../index.php");
    exit();
}
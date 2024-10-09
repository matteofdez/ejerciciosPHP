<?php
require '../db/db.php';
require '../db/PartaideakDB.php';

// Datu-basearekin erabiltzaileak kudeatzeko objektuak sortu.
$db = new DB();
$db->konektatu();
$partaideakDB = new PartaideakDB($db);

// Erroreak kudeatzeko aldagaiak.
$izenaErr = $izena = $herrialdeaErr = $herrialdea = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $taldea = $_POST["taldea"];
        // POST
        if (empty($_POST["izena"])) {
            $izenaErr = "Izena derrigorrezkoa da.";
        } else {
            $izena = htmlspecialchars($_POST["izena"]);
        }

        if (empty($_POST["herrialdea"])) {
            $herrialdeaErr = "Herrialdea derrigorrezkoa da.";
        } else {
            $herrialdea = htmlspecialchars($_POST["herrialdea"]);
        }
        if (empty($izenaErr) && empty($herrialdeaErr)) {
            if($partaideakDB->create($izena, $herrialdea, $taldea_id)){
                header("Location: ../partaideak.php?taldea_id=$taldea_id&sortutaOk=true&izena=".$izena."&herrialdea=".$herrialdea);
                exit();
            }
            else {
                header("Location: ../index.php?error=1");
                exit();
            }
        }
        else {
            header("Location: ../index.php?izenaErr=$izenaErr&herrialdeaErr=$herrialdeaErr");
            exit();
        }
} else {
    header("Location: ../index.php");
    exit();
}
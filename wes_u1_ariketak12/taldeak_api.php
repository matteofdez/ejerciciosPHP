<?php
require 'db.php';
require 'taldea.php';
require 'taldeaDB.php';

    // Bueltatuko den erantzuna JSON formatuan egongo dela adierazi.
    header("Content-Type: application/json");

    if ($_SERVER["REQUEST_METHOD"]=="GET") {
        $db = new DB();
        $db->konektatu();
        $taldeaDB = new TaldeaDB($db);
        $respuesta=$taldeaDB->getAll();
        echo json_encode($respuesta);
    }
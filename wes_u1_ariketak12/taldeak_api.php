<?php
require 'db.php';
require 'taldea.php';
require 'taldeaDB.php';

// Bueltatuko den erantzuna JSON formatuan egongo dela adierazi.
header("Content-Type: application/json");
$db = new DB();
$db->konektatu();
$taldeaDB = new TaldeaDB($db);

//GET
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET["id"])) {
        $id = $_GET["id"];
        $respuesta = $taldeaDB->get($id);
        echo json_encode($respuesta);
    } else {
        $respuesta = $taldeaDB->getAll();
        echo json_encode($respuesta);
    }
}
//POST
elseif ($_SERVER["REQUEST_METHOD"]== "POST"){
    // Dekodifikatu jasotako JSON informazioa.
    $aux = json_decode(file_get_contents('php://input'), true);
    $izenaErr = "";
    if (empty($aux["izena"])) {
        $izenaErr = "Izena derrigorrezkoa da.";
    } else {
        $izena = htmlspecialchars($aux["izena"]);
    }

    if (!empty($aux["puntuak"])) {
        $puntuak = (int)htmlspecialchars($aux["puntuak"]);
    }
    print_r($izenaErr);
    if (empty($izenaErr)) {
        if($taldeaDB->create($izena, $puntuak)){
            $respuesta = $taldeaDB->getAll();
            echo json_encode($respuesta);
        }
        else {
            $respuesta = $taldeaDB->getAll();
            echo json_encode($respuesta);
        }
    }
}
//PUT
elseif($_SERVER["REQUEST_METHOD"]=="PUT"){ 
    $aux = json_decode(file_get_contents('php://input'), true);
       
        if($taldeaDB->editPuntuak($aux['id'], $aux['puntuak'])) {
            $respuesta = $taldeaDB->getAll();
            echo json_encode($respuesta);
        } else {
            $respuesta = $taldeaDB->getAll();
            echo json_encode($respuesta);
        }
}
//DELETE
elseif($_SERVER["REQUEST_METHOD"]=="DELETE"){
    $aux = json_decode(file_get_contents('php://input'), true);
        if($taldeaDB->delete($aux['id'])) {
            $respuesta = $taldeaDB->getAll();
            echo json_encode($respuesta);
        }
        else {
            $respuesta = $taldeaDB->getAll();
            echo json_encode($respuesta);
        }
}
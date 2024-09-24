<?php
require 'helpers.php';
$emailError = $alokatuDataError = $nanError= "";
$email = $alokatuData = $izena = $abizenak = $alokatutakoLiburua = $nan = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $izena = htmlspecialchars($_POST["izena"]);
    $abizenak = htmlspecialchars($_POST["abizenak"]);
    $alokatutakoLiburua = htmlspecialchars($_POST["alokatutakoLiburua"]);
    $email = htmlspecialchars($_POST["email"]);
    $alokatuData = htmlspecialchars($_POST["alokatuData"]);
    $nan = htmlspecialchars($_POST["nan"]);
    if (empty($_POST["email"])) {
        $emailError = "Email derrigorrezkoa da.";
    } elseif (!emailaKonprobatu($email)) {
        $emailError = "@ derrigorrezkoa da.";
    }

    if (empty($_POST["alokatuData"])) {
        $alokatuDataError = "Alokatu Data derrigorrezkoa da.";
    } else {
        $alokatuData = htmlspecialchars($_POST["alokatuData"]);
    }
    if (empty($_POST["nan"])) {
        $nanError = "Nan derrigorrezkoa da.";
    } else {
        $nanError = nanLetra($nan); 
    }

    if (!empty($emailError) || !empty($alokatuDataError) || !empty($nanError)) {
        // Parametroak URL-an gehitzen dira
        $queryString = http_build_query([
            'email' => $email,
            'alokatuData' => $alokatuData,
            'nan' => $nan,
            'izena' => $izena,
            'abizenak' => $abizenak,
            'alokatutakoLiburua' => $alokatutakoLiburua,
            'emailError' => $emailError,
            'alokatuDataError' => $alokatuDataError,
            'nanError' => $nanError
        ]);
         header("Location: index.php?$queryString");
        exit();
    }
    $itzuliData = date('Y-m-d', strtotime($alokatuData . ' + 10 days'));

    // Datuak bistaratzeko HTML formatuan
    echo "<h1>Alokairua onartuta</h1>";
    echo "<p>Email: $email</p>";
    echo "<p>NAN: $nan</p>";
    echo "<p>Data: $alokatuData</p>";
    echo "<p>Itzultze data: $itzuliData</p>";
} else {
    header("Location: index.php");
    exit();

}
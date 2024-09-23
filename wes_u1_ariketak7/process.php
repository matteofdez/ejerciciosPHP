<?php
$emailError = $alokatuDataError = "";
$email = $alokatuData = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["email"])) {
        $emailError = "Email derrigorrezkoa da.";
    } else {
        $email = htmlspecialchars($_POST["email"]);
    }

    if (empty($_POST["alokatuData"])) {
        $alokatuDataError = "Alokatu Data derrigorrezkoa da.";
    } else {
        $alokatuData = htmlspecialchars($_POST["alokatuData"]);
    }

    if (empty($emailError) && empty($alokatuDataError)) {
        echo "<p style='color: green;'>Dena ondo! Izena: $email, Data: $alokatuData</p>";
    } else {
        // Itzuli formulariora errore mezuekin URL-an (horrela $_GET aldagai superglobalean egongo dira atzigarri).
        header("Location: index.php?emailError=$emailError&alokatuDataError=$alokatuDataError&email=$email&alokatuData=$alokatuData");
        exit();
    }
} else {
    header("Location: index.php");
    exit();
}
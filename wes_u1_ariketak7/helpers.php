<?php
function emailaKonprobatu($emaila)
{
    // Emailak '@' karakterea egiaztatzen dugu
    if (str_contains($emaila, '@')) {
        // Karakterea badago
        return true;
    } else {
        // Karakterea ez badago
        return false;
    }
}

function nanLetra($nan)
{
    // NAN-en letrak array batean gordetzeko aldagaia.
    $letrak = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E'];

    $zbk = substr($nan, 0, -1);
    $letra = strtoupper(substr($nan, -1));

    if (!is_numeric($zbk) || strlen($zbk) != 8) {
        return "NAN zenbakia ez da egokia.";
    }
    $mod = $zbk % 23;
    $letraZuzena = $letrak[$mod];

    if ($letraZuzena != $letra) {
        return "NAN-aren letra ez da zuzena. Letra zuzena: " . $letraZuzena;
    }
}
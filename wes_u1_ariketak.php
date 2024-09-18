<!DOCTYPE html>
<html>
<body>
    <h1>Ariketa 1.1</h1>
    <?php
    //Aldagarrien helburua da ariketa ondo egitea
    $zenbaki = 27;
    print "Zenbaki: " . $zenbaki;
    ?>
    <h1>Ariketa 1.2</h1>
    <?php
    $balioa = 3;
    $balioaTop = 10;
    $egia = TRUE;
    if ($balioa >= $balioaTop) {
        $egia = TRUE;
    } elseif ($balioa < $balioaTop) {
        $egia = FALSE;
    }
    print "Balioa, 10 baino handiago da: ";
    //Esto es la ternaria para que deje sacar una booleana por texto
    print $egia ? 'TRUE' : 'FALSE';
    ?>
    <h1>Ariketa 1.3</h1>
    <?php
    //Empieza a contar por 0 por eso sale sólo hasta 9
    for ($erosketa = 0; $erosketa < 10; $erosketa++) {
        print "Sigue comprando. Vas  " . $erosketa . " compras. <br>";
    }
    print "YA NO PUEDES COMPRAR MAS, SORRY."
    ?>
    <h1>Ariketa 1.4</h1>
    <?php
    $realPin = 3;
    $userPin = 4;
    //fscanf(STDIN, "%s", $userPin); No sirve por que es una pagina web
    if ($userPin != $realPin) {
        print "BLOKEATUTA<br>";
        //Lo resto para que el siguiente sea el pin correcto
        $userPin--;
    }
    if ($userPin == $realPin) {
        print "DESBLOKEATUTA";
    }
    ?>
    <h1>Ariketa 1.5</h1>
    <?php
    $baimendutako_mezua;
    $erabiltzailea = 17;
    $legalAge = 18;
    if ($erabiltzailea <= $legalAge) {
        $baimendutako_mezua = "Ezin zara sartu " . $erabiltzailea . " urte dituzu.";
        print $baimendutako_mezua;
        print "<br>";
        //Se suma para que en el siguiente if salga 18 y sea mayor de edad
        $erabiltzailea++;
    }
    if ($erabiltzailea <= $legalAge) {
        $baimendutako_mezua = "Gure lokalera sartu zaitezke " . $erabiltzailea . " urte dituzu.";
        print $baimendutako_mezua;
        print "<br>";
    }
    ?>
</body>
</html>
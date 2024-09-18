<!DOCTYPE html>
<html>

<body>
    <h1>Ariketa 1.1</h1>
    <?php
    $egunaGaur = date("N");
    //date funtzioa erabiliz lortu asteko egun zenbakia eta ondoren idatzi zein egunari dagokion
    if ($egunaGaur == 1) {
        print "Gaur astelena da.";
    } elseif ($egunaGaur == 2) {
        print "Gaur asteartea da.";
    } elseif ($egunaGaur == 3) {
        print "Gaur asteaskena da.";
    } elseif ($egunaGaur == 4) {
        print "Gaur osteguna da.";
    } elseif ($egunaGaur == 5) {
        print "Gaur ostirala da.";
    } elseif ($egunaGaur == 6) {
        print "Gaur larunbata da.";
    } elseif ($egunaGaur == 7) {
        print "Gaur igandea da.";
    }
    ?>
    <h1>Ariketa 1.2</h1>
    <?php
    $nota = "F";
    //Notak bistaratu, noten arabera
    switch ($nota) {
        case "A":
            echo "Oso ondo";
            break;
        case "B":
            echo "Ondo";
            break;
        case "C":
            echo "Nahiko";
            break;
        case "D":
            echo "Gutxi";
            break;
        case "F":
            echo "Oso gutxi";
            break;
    }
    ?>
    <h1>Ariketa 1.3</h1>
    <?php
    //Gutxienezko eta Gehienezko Kopurua Bistaratu
    //0 eta 30 bitarteko zenbakia
    $randomNum = rand(0, 30);
    if ($randomNum <= 10) {
        //0-10 artean dago
        echo $randomNum . " zenbakia 0-10 artean dago.";
    } elseif ($randomNum <= 20 && $randomNum > 10) {
        //10-20 artean dago
        echo $randomNum . " zenbakia 10-20 artean dago.";
    } elseif ($randomNum <= 30 && $randomNum > 20) {
        //20-30 artean dago
        echo $randomNum . " zenbakia 20-30 artean dago.";
    }
    ?>
</body>

</html>
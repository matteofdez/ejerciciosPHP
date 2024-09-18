<!DOCTYPE html>
<html>

<body>
    <h1>Ariketa 3.1</h1>
    <?php
    $contador = 0;
    $result = 0;
    //10 ausazko zenbakien (1tetik 10era) batura
    while ($contador <= 10) {
        $ausasko = rand(1, 10);
        $result = $result + $ausasko;
        echo "<br>";
        echo $result . " resultado eta " . $contador . " vuelta da.";
        $contador++;
    }
    echo "<br>";
    echo "<br>";
    echo "10 zenbakiaren batuera " . $result;
    ?>
    <h1>Ariketa 3.2</h1>
    <?php
    //biderkatu 5 zenbakiak osatzen dituen zenbaki guztiak 
    $contador = 1;
    for ($i = 1; $i <= 5; $i++) {
        $contador = $i * $contador;
    }
    echo $contador;
    ?>
    <h1>Ariketa 3.3</h1>
    <?php
    $zenbakia = 3;
    //Array Elementuak Bistaratu
    do {
        echo $zenbakia . " ";
        $zenbakia += 3;
    } while ($zenbakia <= 30);
    ?>
    <h1>Ariketa 3.4</h1>
    <?php
    $herrialdeak = array("EH", "Frantzia", "Alemania", "Italia");
    foreach ($herrialdeak as $herrialdea) {
        echo $herrialdea . "<br>";
    }
    ?>
    <h1>Ariketa 3.5</h1>
    <?php
    $contador = 0;
    //Zenbaki lehenak (primoak) erakutsi eta zenbatu
    for ($zenbakia = 2; $zenbakia <= 100; $zenbakia++) {
        $primo = true;

        for ($i = 2; $i <= sqrt($zenbakia); $i++) {
            if ($zenbakia % $i == 0) {
                $primo = false;
                break;
            }
        }
        if ($primo) {
            echo $zenbakia . " ";
            $contador++;
        }
    }
    echo "<br>Kopurua: " . $contador;
    ?>
</body>

</html>
<!DOCTYPE html>
<html>

<body>
    <!--Tabla borderrekin-->
    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }
    </style>
    <!--Array Batura Funtzioarekin-->
    <h1>Ariketa 6.1</h1>
    <?php
    $zenbakiak = [4, 8, 15, 16, 23, 42];

    $suma = batura($zenbakiak);
    echo "Batura " . $suma . " da.";
    function batura($array)
    {
        $suma = 0;
        for ($i = 0; $i < count($array); $i++) {

            $suma += $array[$i];
        }
        return $suma;
    }
    ?>
    <h1>Ariketa 6.2</h1>
    <table>
        <tr>
            <th>Frase</th>
        </tr>
        <?php
        //array
        $frase = ['Esto es una frase.'];
        $frase2 = ['Bigarrena da.'];
        fraseBatura($frase, $frase2);

        function fraseBatura($frase, $frase2)
        {
            $fraseJuntaFinal = array_merge($frase, $frase2);
            foreach ($fraseJuntaFinal as $fraseJun) {
                echo "<tr>";
                echo "<td>" . $fraseJun . "<br></td>";
                echo "</tr>";
            }
        }
        ?>
    </table>
    <h1>Ariketa 6.3</h1>
    <table>
        <tr>
            <th>Izena</th>
            <th>Nota</th>
        </tr>
        <?php
        //array
        $ikasleak = [
            ["ikaslea" => "Jon", "nota" => 8],
            ["ikaslea" => "Ane", "nota" => 9],
            ["ikaslea" => "Markel", "nota" => 7]
        ];
        bistaratu($ikasleak);

        function bistaratu($ikasleak)
        {
            for ($i = 0; $i < count($ikasleak); $i++) {
                echo "<tr>";
                echo "<td>" . $ikasleak[$i]["ikaslea"] . "<br></td>";
                echo "<td>" . $ikasleak[$i]['nota'] . "<br></td>";
                echo "</tr>";
            }
        }
        ?>
    </table>
    <h1>Ariketa 6.4</h1>
    <?php
    faktorial();
    function faktorial()
    {
        $zenbakia = rand(1, 10);
        $faktorial = 1;
        $biderketak = [];

        for ($i = 1; $i <= $zenbakia; $i++) {
            $faktorial *= $i;
            $biderketak[] = "$i != $faktorial";
        }
        echo "<p>Zenbakia: $zenbakia</p>";
        echo "<p>Faktorial: $faktorial</p>";
        echo "<ul>";
        foreach ($biderketak as $biderketa) {
            echo "<li>$biderketa</li>";
        }
        echo "</ul>";
    }
    ?>


</body>

</html>
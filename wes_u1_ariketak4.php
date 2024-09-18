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
    <!--Zenbakien Batura-->
    <h1>Ariketa 4.1</h1>
    <?php
    $zenbakiak = [];
    for ($i = 0; $i < 5; $i++) {
        $zenbakiak[] = rand(1, 100);
    }
    $batura = array_sum($zenbakiak);
    echo "<table border='1'>";
    foreach ($zenbakiak as $i => $zenbakia) {
        echo "<tr><td>Zenbakia " . ($i + 1) . "</td><td>$zenbakia</td></tr>";
    }
    echo "<tr>
    <td><strong>Batura</strong></td>
    <td><strong>$batura</strong></td>
    </tr>";
    echo "</table>";
    ?>
    //Arrayaren Elementuak Ordenatzea
    <h1>Ariketa 4.2</h1>
    <table>
        <tr>
            <th>1. herrialdea</th>
            <th>2. herrialdea</th>
            <th>3. herrialdea</th>
            <th>4. herrialdea</th>
        </tr>
        <?php
        $herriak = ["EH", "Frantzia", "Alemania", "Italia"];
        sort($herriak);
        foreach ($herriak as $x) {
            echo "<td>$x</td>";
        }
        ?>
    </table>
    //Arrayaren Elementuak Bikoitia edo Ez Bakoitia
    <h1>Ariketa 4.3</h1>
    <table>
        <tr>
            <th>Zenbakia</th>
            <th>Bikoitia</th>
        </tr>
        <?php
        $array = [];
        for ($i = 0; $i < 6; $i++) {
            $array[] = rand(1, 100);
        }
        foreach ($array as $zenbaki) {
            echo "<tr>";
            echo "<td>$zenbaki</td>";
            if ($zenbaki % 2 == 0) {
                echo "<td>Bai</td>";
            } else {
                echo "<td>Ez</td>";
            }
            echo "</tr>";
        }
        ?>
</body>

</html>
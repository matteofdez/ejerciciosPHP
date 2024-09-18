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
    <!--Array Multidimentsionala Bistaratu-->
    <h1>Ariketa 5.1</h1>
    <table>
        <tr>
            <th>Izena</th>
            <th>Autorea</th>
        </tr>
        <?php
        //array
        $idazleak = [
            ["izena" => "Harry Potter", "autorea" => "J.K Rowling"],
            ["izena" => "Game of Thrones", "autorea" => "George R.R. Martin"],
            ["izena" => "The Hobbit", "autorea" => "J.R.R. Tolkien"]
        ];
        foreach ($idazleak as $idazlea) {
            echo "<tr>";
            echo "<td>" . $idazlea["izena"] . "<br></td>";
            echo "<td>" . $idazlea['autorea'] . "<br></td>";
            echo "</tr>";
        }
        ?>
    </table>
    <!--Array Multidimentsionala, Elementua Bilketa (for erabiliz): kalkulatu eta bistaratu-->
    <h1>Ariketa 5.2</h1>
    <table>
        <tr>
            <th>Ikasle</th>
            <th>Nota</th>
        </tr>
        <?php
        //array
        $ikasleak = [
            ["ikaslea" => "Jon", "nota" => 8],
            ["ikaslea" => "Ane", "nota" => 9],
            ["ikaslea" => "Markel", "nota" => 7]
        ];
        $media = 0;
        for ($i = 0; $i < count($ikasleak); $i++) {
            echo "<tr>";
            echo "<td>" . $ikasleak[$i]["ikaslea"] . "<br></td>";
            echo "<td>" . $ikasleak[$i]['nota'] . "<br></td>";
            echo "</tr>";

            $media += $ikasleak[$i]['nota'];
        }

        echo "Media da: ";
        echo $media / count($ikasleak);
        ?>
    </table>
    <!--Array Multidimentsionala, (<5 txarra, <7 ona, >7 oso ona)-->
    <h1>Ariketa 5.3</h1>
    <table>
        <tr>
            <th>Ikasle</th>
            <th>Nota</th>
        </tr>
        <?php
        //array
        $ikasleak = [
            ["ikaslea" => "Jon", "nota" => 8],
            ["ikaslea" => "Ane", "nota" => 6],
            ["ikaslea" => "Markel", "nota" => 3]
        ];

        for ($i = 0; $i < count($ikasleak); $i++) {
            echo "<tr>";
            echo "<td>" . $ikasleak[$i]["ikaslea"] . "<br></td>";
            echo "<td>" . $ikasleak[$i]['nota'] . "<br></td>";
            echo "</tr>";
        }

        foreach ($ikasleak as $ikasle) {
            if ($ikasle['nota'] < 5) {
                echo "<tr>";
                echo "<td>" . $ikasle["ikaslea"] . "<br></td>";
                echo "<td>" . "Txarra" . "<br></td>";
                echo "</tr>";
            }
            if ($ikasle['nota'] < 7 && $ikasle['nota'] > 5) {
                echo "<tr>";
                echo "<td>" . $ikasle["ikaslea"] . "<br></td>";
                echo "<td>" . "Ona" . "<br></td>";
                echo "</tr>";
            }
            if ($ikasle['nota'] < 10 && $ikasle['nota'] > 7) {
                echo "<tr>";
                echo "<td>" . $ikasle["ikaslea"] . "<br></td>";
                echo "<td>" . "Oso ona" . "<br></td>";
                echo "</tr>";
            }
        }
        ?>
    </table>
    <!--Array Multidimentsionala, 3 ikasleen zerrenda bat-->
    <h1>Ariketa 5.4</h1>
    <table>
        <tr>
            <th>Ikasle</th>
            <th>Nota</th>
            <th>Abizena</th>
            <th>Telefonoa</th>
            <th>Adina</th>
        </tr>
        <?php
        //array
        $ikasleak = [
            ["ikaslea" => "Jon", "nota" => 8, "abizena" => "Fernandez", "telefonoa" => "111", "adina" => "32"],
            ["ikaslea" => "Ane", "nota" => 6, "abizena" => "Gonzalez", "telefonoa" => "324", "adina" => "2"],
            ["ikaslea" => "Markel", "nota" => 3, "abizena" => "rey", "telefonoa" => "64533", "adina" => "31"],
            ["ikaslea" => "Aritz", "nota" => 5, "abizena" => "lopez", "telefonoa" => "653", "adina" => "19"],
            ["ikaslea" => "Ricardo", "nota" => 10, "abizena" => "Adin", "telefonoa" => "7654", "adina" => "25"],
        ];

        for ($i = 0; $i < count($ikasleak); $i++) {
            echo "<tr>";
            echo "<td>" . $ikasleak[$i]["ikaslea"] . "<br></td>";
            echo "<td>" . $ikasleak[$i]['nota'] . "<br></td>";
            echo "<td>" . $ikasleak[$i]['abizena'] . "<br></td>";
            echo "<td>" . $ikasleak[$i]['telefonoa'] . "<br></td>";
            echo "<td>" . $ikasleak[$i]['adina'] . "<br></td>";
            echo "</tr>";
        }
        ?>
    </table>
    <!--2 abizen, 2 telefono eta modulo bakoitzaren nota-->
    <h1>Ariketa 5.5</h1>
    <table>
        <tr>
            <th>Ikasle</th>
            <th>Nota</th>
            <th>Abizena</th>
            <th>Abizena1</th>
            <th>Telefonoa</th>
            <th>Telefonoa 1</th>
            <th>Adina</th>
        </tr>
        <?php
        //array
        $ikasleak = [
            ["ikaslea" => "Jon", "nota" => 8, "abizena" => "Fernandez", "abizena1" => "rey", "telefonoa" => "111", "telefonoa1" => "234", "adina" => "32"],
            ["ikaslea" => "Ane", "nota" => 6, "abizena" => "Gonzalez", "abizena1" => "fernandez", "telefonoa" => "324", "telefonoa1" => "543445", "adina" => "2"],
            ["ikaslea" => "Markel", "nota" => 3, "abizena" => "rey", "abizena1" => "gonzalez", "telefonoa" => "64533", "telefonoa1" => "664664", "adina" => "31"],
            ["ikaslea" => "Aritz", "nota" => 5, "abizena" => "lopez", "abizena1" => "martinez", "telefonoa" => "653", "telefonoa1" => "5646546", "adina" => "19"],
            ["ikaslea" => "Ricardo", "nota" => 10, "abizena" => "Adin", "abizena1" => "lopez", "telefonoa" => "7654", "telefonoa1" => "66666", "adina" => "25"],
        ];

        for ($i = 0; $i < count($ikasleak); $i++) {
            echo "<tr>";
            echo "<td>" . $ikasleak[$i]["ikaslea"] . "<br></td>";
            echo "<td>" . $ikasleak[$i]['nota'] . "<br></td>";
            echo "<td>" . $ikasleak[$i]['abizena'] . "<br></td>";
            echo "<td>" . $ikasleak[$i]['abizena1'] . "<br></td>";
            echo "<td>" . $ikasleak[$i]['telefonoa'] . "<br></td>";
            echo "<td>" . $ikasleak[$i]['telefonoa1'] . "<br></td>";
            echo "<td>" . $ikasleak[$i]['adina'] . "<br></td>";
            echo "</tr>";
        }
        ?>
    </table>


</body>

</html>
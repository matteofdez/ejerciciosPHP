<h1>Ariketa 9.1</h1>
<?php
require_once 'klaseak.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["formulario1"])) {
    $izenAbizenak = htmlspecialchars($_POST['izenAbizenak']);
    $zeregina = htmlspecialchars($_POST['zeregina']);

    if ($zeregina == "ikaslea") {
        $pertsona = new Ikaslea($izenAbizenak, $zeregina);
    } elseif ($zeregina == "irakaslea") {
        $pertsona = new Irakaslea($izenAbizenak, $zeregina);
    } else {
        echo "Ez dakit.";
        exit;
    }

    $pertsona->aurkeztu();
}

?>

<!DOCTYPE html>
<html lang="eu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertsonaren Formularioa</title>
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="izenAbizenak">Izen-abizenak:</label>
        <input type="text" id="izenAbizenak" name="izenAbizenak" required><br><br>

        <label for="zeregina">Zeregina:</label>
        <select id="zeregina" name="zeregina" required>
            <option value="ikaslea">Ikaslea</option>
            <option value="irakaslea">Irakaslea</option>
        </select><br><br>

        <input type="submit" name="formulario1" value="Bidali">
    </form>
</body>
</html>

<h1>Ariketa 9.2</h1>
<?php
$liburua1 = new Liburu("Harry Potter", "Egilea J.K. Rowling");
$liburua2 = new Liburu("The Hobbit", "Egilea J.R.R. Tolkien");
$liburua3 = new Liburu("To kill a mockingbird", "Egilea Harper Lee");

$katalogoa = new LiburuKatalogoa();
$katalogoa->gehituLiburua($liburua1);
$katalogoa->gehituLiburua($liburua2);
$katalogoa->gehituLiburua($liburua3);

$katalogoa->katalogoaBistaratu();
?>
<h1>Ariketa 9.3</h1>
<?php

$laukia = new Laukia(5, 10);
$zirkulua = new Zirkulua(7);

$figuraArray = [$laukia, $zirkulua];

foreach ($figuraArray as $figura) {
    echo "Azalera: " . $figura->kalkulatuAzalera() . "\n";
}
?>
<h1>Ariketa 9.4</h1>
<?php
$animaliarenSoinua = '';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["formulario2"])) {

    $animaliaMota = $_POST["animalia"];
    $animalia = null;

    if ($animaliaMota == "txakurra") {
        $animalia = new Txakurra();
    } elseif ($animaliaMota == "katua") {
        $animalia = new Katua();
    }
    if ($animalia) {
        $animaliarenSoinua = $animalia->esan();
    }
}

?>

<!DOCTYPE html>
<html lang="eu">

<head>
    <meta charset="UTF-8">
    <title>Animalien Soinuak</title>
</head>

<body>
    <h1>Animalien Soinuak</h1>
    <form method="post" action="">
        <label for="animalia">Aukeratu animalia bat:</label>
        <select id="animalia" name="animalia">
            <option value="txakurra">Txakurra</option>
            <option value="katua">Katua</option>
        </select>
        <br><br>
        <input type="submit" name="formulario2" value="Erakutsi Soinua">
    </form>
    <?php
    if ($animaliarenSoinua) {
        echo "<p>Animaliaren soinua: <strong>" . htmlspecialchars($animaliarenSoinua) . "</strong></p>";
    }
    ?>
</body>
</html>
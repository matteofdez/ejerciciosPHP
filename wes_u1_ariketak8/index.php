<?php
require_once 'klaseak/Autoa.php';
require_once 'klaseak/Ikaslea.php';
require_once 'klaseak/Langilea.php';
require_once 'klaseak/Produktua.php';
require_once 'klaseak/Kalkulagailua.php';


$autoa = new Autoa("Seat", "Panda");

echo $autoa->getCoche();

$notak = [
    "Matematika" => 3.5,
    "Euskera" => 7.3,
    "Historia" => 9.5,
    "Ingles" => 5.5
];

echo "<br>";
echo "<br>";
$ikaslea = new Ikaslea("Matteo", $notak);

$ikaslea->erakutsi_notak();


echo "<br>Batez besteko nota: " . $ikaslea->bataz_bestekoa();

echo "<br>";
echo "<br>";
$langilea = new Langilea("Matteo", 2530);

echo "Hasierako datuak:<br>";
$langilea->erakutsiDatuak();
$langilea->soldataIgo(300);

echo "<br>Soldata igo ondoren:<br>";
$langilea->erakutsiDatuak();

echo "<br>";
$produktua = new Produktua("Liburua", 20);

$produktua->aukeratu(2);

$emaitza = 0;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $zenbaki1 = $_POST['zenbaki1'];
    $zenbaki2 = $_POST['zenbaki2'];
    $eragiketa = $_POST['eragiketa'];

    $kalkulagailua = new Kalkulagailua($zenbaki1);

    if ($eragiketa === 'batu') {
        $kalkulagailua->batu($zenbaki2);
    } elseif ($eragiketa === 'kendu') {
        $kalkulagailua->kendu($zenbaki2);
    } elseif ($eragiketa === 'biderkatu') {
        $kalkulagailua->biderkatu($zenbaki2);
    }

    $emaitza = $kalkulagailua->lortuEmaitza();
}
?>

<!DOCTYPE html>
<html lang="eu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ariketa 8</title>
</head>
<body>
    <h2>Kalkulagailua</h2>
    
    <form method="POST" action="">
        <label for="zenbaki1">Lehen zenbakia:</label>
        <input type="number" id="zenbaki1" name="zenbaki1" required><br><br>

        <label for="zenbaki2">Bigarren zenbakia:</label>
        <input type="number" id="zenbaki2" name="zenbaki2" required><br><br>

        <label for="eragiketa">Eragiketa:</label><br>
        <input type="radio" id="batu" name="eragiketa" value="batu" checked>
        <label for="batu">Batuketa</label><br>
        <input type="radio" id="kendu" name="eragiketa" value="kendu">
        <label for="kendu">Kenketa</label><br>
        <input type="radio" id="biderkatu" name="eragiketa" value="biderkatu">
        <label for="biderkatu">Biderketa</label><br><br>

        <input type="submit" value="Kalkulatu">
    </form>

    <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
        <h2>Emaitza: <?php echo $emaitza; ?></h2>
    <?php endif; ?>
</body>
</html>

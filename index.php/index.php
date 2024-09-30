<?php
require_once 'klaseak.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
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

        <input type="submit" value="Bidali">
    </form>
</body>
</html>
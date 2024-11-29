<!DOCTYPE html>
<html>

<head>
    <title>Erabiltzaile berria sortu</title>
</head>

<body>
    <h1>Erabiltzaile berria sortu</h1>
    <?php
    require "../db/db.php";
    $db = new DB();
    $db->konektatu();

    $emailEzBeteta;
    $passwordEzBeteta;
    $passwordEzBerdinak;
    $email;
    $password;
    $password2;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["email"])) {
            $emailEzBeteta = "Erabiltzailea beteta egon behar da.";
        } else {
            $email = htmlspecialchars($_POST["email"]);
        }

        if (empty($_POST["password"])) {
            $passwordEzBeteta = "Pasahitza beteta egon behar da.";
        } else {
            $password = htmlspecialchars($_POST["password"]);
            $password2 = $_POST["password2"];
            if ($password != $password2) {
                $passwordEzBerdinak = "Pasahitzak berdinak izan behar dira";
            }
        }

        if (empty($emailEzBeteta) && empty($passwordEzBerdinak) && empty($passwordEzBeteta)) {
            $db->insert($email, $password);
        }
    }
    ?>

    <form method="POST" action="newUser.php">
        <label>Erabiltzailea:</label>
        <input type="text" name="email">
        <br>
        <br>
        <label>Pasahitza:</label>
        <input type="password" name="password">
        <br>
        <br>
        <label>Pasahitza sartu berriro:</label>
        <input type="password" name="password2">
        <br>
        <br>
        <button type="submit">Sartu</button>
    </form>
</body>

</html>
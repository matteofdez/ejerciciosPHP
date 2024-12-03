<!DOCTYPE html>
<html>

<head>
    <title>Erabiltzaile berria sortu</title>
</head>

<body>
    <h1>Erabiltzaile berria sortu</h1>
    <?php
    require "../db/db.php";
    require "utilidades.php";
    util();
    $db = new DB();
    $db->konektatu();

    $emailEzBeteta = "";
    $passwordEzBeteta = "";
    $passwordEzBerdinak = "";
    $email;
    $password;
    $password2;

    if (isset($_SESSION['user_id'])) {
        header("Location: horriPribatua1.php");
    }

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
            $hash = password_hash($password, PASSWORD_DEFAULT);

            $db->insert($email, $hash);
        }
    }
    ?>

    <form method="POST" action="newUser.php">
        <label>Erabiltzailea:</label>
        <input type="text" name="email">
        <?php if (!empty($emailEzBeteta)) { ?>
            <span style="color: red;"><?php echo $emailEzBeteta ?></span>
        <?php } ?>
        <br>
        <br>
        <label>Pasahitza:</label>
        <input type="password" name="password">
        <?php if (!empty($passwordEzBeteta)) { ?>
            <span style="color: red;"><?php echo $passwordEzBeteta ?></span>
        <?php } ?>
        <br>
        <br>
        <label>Pasahitza sartu berriro:</label>
        <input type="password" name="password2">
        <?php if (!empty($passwordEzBeteta)) { ?>
            <span style="color: red;"><?php echo $passwordEzBeteta ?></span>
        <?php } ?>
        <?php if (!empty($passwordEzBerdinak)) { ?>
            <span style="color: red;"><?php echo $passwordEzBerdinak ?></span>
        <?php } ?>
        <br>
        <br>
        <button type="submit">Sartu</button>
        <a href="login.php" class="btn">Ir al login</a>
    </form>
</body>

</html>
<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
</head>

<body>
    <h1>Login</h1>
    <?php
    require "../db/db.php";
    require "utilidades.php";
    util();

    $db = new DB();
    $db->konektatu();
    $email;
    $password;
    $emailEzBeteta = "";
    $passwordEzBeteta = "";
    $emailEzExist = "";

    if (isset($_SESSION['user_id'])) {
        header("Location: horriPribatua1.php");
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["email"])) {
            $emailEzBeteta = "Erabiltzailea beteta egon behar da.";
        } else {
            $email = htmlspecialchars($_POST["email"]);
            $erabiltzailea = $db->select($email);
            if (!$erabiltzailea) {
                $emailEzExist = 'ERROR: Registratu behar zara.';
            }
        }

        if (empty($_POST["password"])) {
            $passwordEzBeteta = "Pasahitza beteta egon behar da.";
        } else {
            if (password_verify($pasahitza, $hash)) {
                $password = htmlspecialchars($_POST["password"]);
            }
        }

        if (empty($emailEzBeteta) && empty($emailEzExist) && empty($passwordEzBeteta)) {
            $_SESSION['user_id'] = $erabiltzailea['id'];
            header("Location: horriPribatua1.php");
        }
    }
    ?>
    <form method="POST" action="login.php">
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
        <button type="submit">Sartu</button>
        <a href="newUser.php" class="btn">Erabiltzaile berria</a>
    </form>
</body>

</html>
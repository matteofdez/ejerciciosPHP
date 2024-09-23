<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Ariketa</title>
</head>

<body>
    <h1>Formulario ariketa</h1>
    <form method="post" action="process.php">
        <!--Nombre-->
        <label for="izena">Izena:</label>
        <input type="text" id="izena" name="izena">

        <!--Abizena-->
        <br><br>
        <label for="abizenak">Abizenak:</label>
        <input type="text" id="abizenak" name="abizenak">

        <!--AlokatutakoLiburua-->
        <br><br>
        <label for="alokatutakoLiburua">Alokatutako liburua:</label>
        <input type="text" id="alokatutakoLiburua" name="alokatutakoLiburua">

        <!--Email-->
        <br><br>
        <label for="email">Email:</label>
        <input type="text" id="email" name="email">

        <?php if (isset($_GET['emailError'])) { ?>
            <span style="color: red;"><?php echo $_GET['emailError']; ?></span><br><br>
        <?php } ?>

        <!--AlokatuData-->
        <br><br>
        <label for="alokatuData">Alokatu Data:</label>
        <input type="date" id="alokatuData" name="alokatuData">

        <?php if (isset($_GET['alokatuDataError'])) { ?>
            <span style="color: red;"><?php echo $_GET['alokatuDataError']; ?></span><br><br>
        <?php } ?>

        <!--NAN-->
        <br><br>
        <label for="nan">NAN:</label>
        <input type="text" id="nan" name="nan">

        <?php if (isset($_GET['nanError'])) { ?>
            <span style="color: red;"><?php echo $_GET['nanError']; ?></span><br><br>
        <?php } ?>

        <br><br>
        <input type="submit" value="Bidali">
    </form>
</body>

</html>
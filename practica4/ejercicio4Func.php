<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PruebaFuncion</title>
        <?php include "comprobar_nombre_usuario.php" ?>
    </head>
    <body> 
    <?php 
        if (!isset($_POST["submit"])) {
    ?>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        Ingrese nombre de usuario: <input name="username" size="10">
            <input type="submit" name="submit" value="Ir">
        </form>
    <?php
    } else {
        $username = $_POST['username'];
        comprobar_nombre_usuario($username);
    }
    ?>
    </body>
</html>
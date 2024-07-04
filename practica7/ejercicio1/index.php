<?php
    if (isset($_POST["estilo"])) {
        $estilo = $_POST["estilo"];
        setcookie("estilo", $estilo, time()+(86400 * 90));
    } else {
        if (isset($_COOKIE["estilo"])){
            $estilo = $_COOKIE["estilo"];
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
    <title>Ejercicio 1</title>
        <?php
            if (isset($estilo)){
                echo '<link rel="STYLESHEET" type="text/css" href="'.$estilo.'.css">';
            }
        ?>
    </head>
    <body>
        <form action="index.php" method="post"> Seleccionar el estilo que deseas visualizar en la página:
            <br><br>
            <select name="estilo">
                <option value="estilo1">Crema
                <option value="estilo2">Mar
                <option value="estilo3">Rosas
                <option value="estilo4">Selva
            </select>
            <input type="submit" value="Cambiar estilo">
        </form>
    </body>
</html>
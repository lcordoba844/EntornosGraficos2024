<!DOCTYPE html>
<html lang="en">
    <?php
        session_start();
        if (isset($_SESSION["visits_counter"])) {
            $_SESSION["visits_counter"] = 1;
        } else {
            $_SESSION["visits_counter"]++;
        }
        $cant_visitas = count($_SESSION["visits_counter"]);
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador visitas</title>
</head>
<body>
    <h2>Cantidad de visitas</h2>
    <?php 
        echo $cant_visitas;
    ?>
</body>
</html>
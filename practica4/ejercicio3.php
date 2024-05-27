<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            if (!isset($_POST['submit'])) {
        ?>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            Edad: <input name="age" size="2">
            <input type="submit" name="submit" value="Ir">
        </form>
        <?php
            }
            else {
                $age = $_POST['age'];
                if ($age >= 21) {
                    echo 'Mayor de edad';
                }
                else {
                    echo 'Menor de edad';
                }
            }
        ?>
    </body>
</html>
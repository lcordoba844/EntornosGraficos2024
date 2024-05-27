!<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Ejercicio2</title>
    </head>
    <body>
    <?php
        $i = 1;
        while ($i <= 10) {
            print $i++;
        }
    ?>
    <br><br>
    <?php
        $i = 1;
        while ($i <= 10):
            print $i;
        $i++;
        endwhile;
    ?>
    <br><br>

    <?php
        $i = 0;
        do {
            print ++$i;
        } while ($i<10);
    ?>
    <br><br>
    <?php
        for ($i = 1; $i <= 10; $i++) {
            print $i;
        }
    ?>
    <br><br>
    <?php
        for ($i = 1; $i <= 10; print $i, $i++) ;
    ?>
    <br><br>
    <?php
        for ($i = 1; ;$i++) {
            if ($i > 10) {
                break;
            }
            print $i;
        }
    ?>
    <br><br>
    <?php
        $i = 1;
        for (;;) {
            if ($i > 10) {
                break;
            }
            print $i;
            $i++;
        }
    ?>
    <br><br>

    </body>
</html>
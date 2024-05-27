<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>FuncionesEj3</title>
    </head>
    <body>
        <?php
            $fun = getdate();
            echo "Has entrado en esta pagina a las $fun[hours] horas, con $fun[minutes] minutos y $fun[seconds]
            segundos, del $fun[mday]/$fun[mon]/$fun[year]";
        ?>
    </body>
</html>

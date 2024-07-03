<!DOCTYPE html>



<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>EnviarCorreo</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <?php
        $destinatario = "lcordoba844@gmail.com";
        $asunto = "Probando enviar mail";
        $mensaje = "Algo que quieras enviar";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: lcordoba844@gmail.com' . "\r\n";
            if(mail($destinatario, $asunto, $mensaje, $headers)){
                echo "Correo enviado correctamente";
            }else{
                echo "Error al enviar correo electronico";
            }
        ?>
    </body>
</html>

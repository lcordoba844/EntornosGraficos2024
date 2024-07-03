<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $nombre = $_POST["nombre"];
        $correo = $_POST["correo"];
        $mensaje = $_POST["mensaje"];

        $destinatario = "lcordoba844@gmail.com";
        $asunto = "Probando enviar mail";
        $mensaje = "Nombre: " . $nombre . "\n";
        $mensaje .= "Correo: " . $correo . "\n";
        $mensaje .= "Mensaje: " . $mensaje;

        $headers = "From: " . $correo . "\r\n";
        $headers .= "Reply-To: " . $correo . "\r\n";
        if (mail($destinatario, $asunto, $mensaje, $headers))
        {
            echo "Mensaje enviado con exito";
        } else
        {
            echo "Error al enviar el mensaje";
        }
    }
?>


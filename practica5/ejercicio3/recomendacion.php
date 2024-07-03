<?php
    if (($_SERVER['REQUEST_METHOD'] === 'POST')&&(isset($_SERVER['HTTP_REFERER']))) {

        $webpage = $_SERVER['HTTP_REFERER'];
        $to = $_POST['friendsmail']; 
        $from = $_POST['mymail'];
        $subject = 'Recomendación de sitio web';
        
        $message = 'Hola, te recomiendo visitar este sitio web: ' . $webpage . '.';
        
        $headers = 'From: ' . $from . "\r\n" .
          'Reply-To: ' . $from . "\r\n" .
          'X-Mailer: PHP/' . phpversion();
        
        if (mail($to, $subject, $message, $headers)) {
          echo 'Correo electrónico enviado con éxito.';
        } else {
          echo 'Error al enviar el correo electrónico.';
        }
    }

?>
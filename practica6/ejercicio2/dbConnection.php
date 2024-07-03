<?php
    $hostname = "127.0.0.1";
    $username = "admin";
    $password ="admin";
    $db = "ej_ciudades";
    $link = mysqli_connect($hostname,$username,$password) or die("Error al Conectar");
    mysqli_select_db($link,$db);
?>
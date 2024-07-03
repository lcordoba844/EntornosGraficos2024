<?php
    $link = mysqli_connect("localhost", "root") or die ("Problemas de conexión a la base de datos");
    $ciudad = $_POST['ciudad'];
    $vSql = "SELECT * FROM capitales WHERE ciudad='$ciudad' ";
    $vResultado = mysqli_query($link, $vSql);

    if (mysqli_num_rows($vResultado) == 0) {
        echo ("Ciudad Inexistente <br>");
        echo ("<A href='formBaja.html'>Continuar</A>");
    } else {
        $vSql = "DELETE FROM capitales WHERE ciudad = '$ciudad' ";
        mysqli_query($link, $vSql);
        echo ("La ciudad fue elminada<br>");
        echo ("<A href='index.html'>Volver al menu</A>");
    }
    mysqli_free_result($vResultado);
    mysqli_close($link);
  ?>
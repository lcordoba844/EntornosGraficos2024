<?php
    $link = mysqli_connect("localhost", "root") or die ("Problemas de conexión a la base de datos");
    $ciudad = $_POST['ciudad'];
    $pais = $_POST['pais'];
    $habitantes = $_POST['habitantes'];
    $superficie = $_POST['superficie'];
    $metro = $_POST['metro'];

    if($metro==='si'){
        $metroValor=1;
    }else if($metro==='no'){
        $metroValor = 0;
    }
    //Chequea que no exista
    $vSql = "SELECT * FROM capitales WHERE ciudad='$ciudad'";
    $vResultado = mysqli_query($link, $vSql) or die(mysqli_error($link));;
    $ciudadExistente = mysqli_fetch_assoc($vResultado);
    if ($ciudadExistente) {
        echo ("La ciudad ya existe");
        echo ("<a href='index.html'>Volver al menú</a>");
    } else {
    $vSql = "INSERT INTO capitales (ciudad, pais, habitantes, superficie, tieneMetro) values ('$ciudad','$pais', '$habitantes', '$superficie', '$metroValor')";
        mysqli_query($link, $vSql) or die(mysqli_error($link));
        echo ("Ciudad registrada");
        echo ("<A href='index.html'>VOLVER AL MENU</A>");
    }
    // Cerrar la conexion
    mysqli_close($link);
  ?>
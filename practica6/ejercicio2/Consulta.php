<?php
    $link = mysqli_connect("localhost", "root") or die ("Problemas de conexión a la base de
    datos");
    $vSql = "SELECT * FROM capitales";
    $vResultado = mysqli_query($link, $vSql);
    $total_registros = mysqli_num_rows($vResultado);
?>
<table border=1>
    <tr>
        <td><b>Ciudad</b></td>
        <td><b>Pais</b></td>
        <td><b>Habitantes</b></td>
        <td><b>Superficie</b></td>
        <td><b>Tiene Metro?</b></td>
    </tr>
    <?php
        while ($fila = mysqli_fetch_array($vResultado)) {
    ?>
    <tr>
        <td><?php echo ($fila['ciudad']); ?></td>
        <td><?php echo ($fila['pais']); ?></td>
        <td><?php echo ($fila['habitantes']); ?></td>
        <td><?php echo ($fila['superficie']); ?></td>
        <td><?php echo ((!$fila['tieneMetro']?"Si":"No")); ?></td>
    </tr>
    <tr>
        <td colspan="5"></td>
    </tr>
    <?php
        }
        mysqli_free_result($vResultado);
        mysqli_close($link);
    ?>
</table>
<p>&nbsp;</p>
<p><a href="index.html">Volver al menu del ABM</a></p>
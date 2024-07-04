<?php
  if(isset($_COOKIE["contador"])){
    $contador = $_COOKIE["contador"] + 1;
    setcookie("contador", $contador, time()+(86400 * 30));
  } else {
    $contador = 1;
    setcookie("contador", $contador, time()+(86400 * 30));
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Ejercicio 2</title>
  </head>
  <body>
    <?php
      if($contador == 1){
        echo("<h1> Este es tu primer ingreso.</h1> <br> <p>Recargue la pagina</p> <br> <a href='ejercicio2.php'>Recargar</a>");
      } else {
        echo("<h1> Conque te gusta visitarnos </h1> <br> <p>Ya visitaste esta página ".$contador." veces.</p> <br> <a href='ejercicio2.php'>Recargar</a>");
      }
    ?>
  </body>
</html>
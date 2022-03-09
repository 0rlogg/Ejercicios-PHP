<?php
/**
 * Esta variable deberá de tener el valor de si he acertado
 * o si se ha excedido el número de intentos
 */
$msj ;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css" type="text/css"/>
</head>
<body>
<fieldset>
    <legend>Fin del juego</legend>
    <form action="index.php" method="POST">
        <?php echo "<h2>$msj</h2>"; ?>
        <input type="submit" value="Volver a Inicio">
    </form>

</fieldset>


</body>
</html>
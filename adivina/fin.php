<?php
/**
 * Esta variable deberá de tener el valor de si he acertado
 * o si se ha excedido el número de intentos
 */
$estado=filter_input(INPUT_GET,'estado');
if ($estado =='false'){
    $msj = "Has superado el numero de intentos" ;
}else{
    $msj = "He acertado, hurra!!";
}

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

        <input type="hidden" name="estado" value="<?= $estado ?>">
    </form>

</fieldset>


</body>
</html>
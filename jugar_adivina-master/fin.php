<?php
$jugada = $_GET['jugada'];
if ($jugada > 10)
    $msj = "No has sido sincera/o, deber&iacutea de haberlo acertado ya!!!!";
else
    $msj = "Ves qu&eacute listo que soy !!!!! :). En $jugada jugadas!!!";
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
<?php


$seleccionIdioma = filter_input(INPUT_GET, "idiomas") ?? "esp";


$esp = null;
$eng = null;
$fr = null;
$insertaNombre = null;

switch ($seleccionIdioma) {

    case "esp":
        $esp = "checked";
        $insertaNombre = "Inserta tu nombre";
        break;

    case "eng":
        $eng = "checked";
        $insertaNombre = "Insert your name";

        break;

    case "fr":
        $fr = "checked";
        $insertaNombre = "Insérez votre nom";
        break;
}

// acordarse de poner la parte de insertar nombre
//

?>
<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

    <meta name="viewport"
    <title>Adivina n&uacutemero</title>
    <link rel="stylesheet" href="estilo.css" type="text/css"/>
</head>
<body>


<fieldset style="width: 50%;float:left;margin-left: 20%; background: bisque">
    <h2> Establecer idioma</h2>
    <fieldset>
        <legend>Selecciona el idioma</legend>
        <form action="bienvenida.php" method="POST">
            <input type="radio"  name="idiomas" value="esp" <?= $esp ?> />Espanyol <br/>
            <input type="radio" name="idiomas" value="eng" <?= $eng ?> />Inglés<br/>
            <input type="radio" name="idiomas" value="fr" <?= $fr ?> /> Frances<br/>
            <?php "$insertaNombre" ?><input type="text" name="nombre"><input type="submit" name="submit" value="Selecionar">
        </form>
    </fieldset>
</fieldset>
</body>
</html>




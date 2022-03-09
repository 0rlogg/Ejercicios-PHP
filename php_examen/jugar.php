<?php /** @noinspection PhpMultipleClassDeclarationsInspection */
require_once ('Juego.php');
//Identifica las variabbles que vas a necesitar
//Esta parte no es obligatoria pero te ayudará a hacer el programa

$idiomas = filter_input(INPUT_POST, "idiomas");
$nombre = filter_input(INPUT_POST, "nombre");
$opcion = $_POST['idiomas'] ?? null;

//case que hace que se carge la frase del idioma definida en index
switch ($opcion) {

    //tener en cuenta el hacer variables para cambiar toda la pagina de idioma
    case "esp":
        $nombre_idioma = "Español";
        $msj = " ESP - Opciones de aplicación para "."<b>".$nombre."</b>"." con idioma "."<b>".$nombre_idioma."</b>";
        break;

    case "eng":
        $nombre_idioma = "Inglés";
        $msj = " ENG - Opciones de aplicación para "."<b>".$nombre."</b>"." con idioma "."<b>".$nombre_idioma."</b>";
        break;

    case "fr":
        $nombre_idioma = "Francés";
        $msj = " FR - Opciones de aplicación para "."<b>".$nombre."</b>"." con idioma "."<b>".$nombre_idioma."</b>";
        break;

}

?>

<!doctype html>
<html lang="es">
<head>
    <title></title>
</head>
<body style="width: 70%;float:left;margin-left: 20%; ">
<h3></h3>
<fieldset style="width:100%;background:bisque ">
    <legend><?=$msj?></legend>
    <form action="jugar.php" method="POST" >
        <input type="submit" value="Borrar identificación y reiniciar juego" name="submit" >
        <input type="hidden" value="<?= $idiomas ?>" name="idiomas">
        <input type="submit" value="Comenzar" name="comenzar" >
        <hr />
    </form>
</fieldset>


</body>

</html>
<?php
spl_autoload(Juego::class);
include ('Juego.php');
//Identifica las variabbles que vas a necesitar

//Esta parte no es obligatoria pero te ayudará a hacer el programa
$idiomas = filter_input(INPUT_POST, "idiomas");
$nombre = filter_input(INPUT_POST, "nombre");
$opcion = $_POST['idiomas'] ?? null;
$intentos = filter_input(INPUT_POST, "num_intentos");
//Este es un modo de controlar el routeo es decir, qué evento a solicitado este recurso
switch ($opcion){
    //case de vuelta a index
    case "Volver": header("location:index.php?idiomas=$idiomas");//Acciones si he presionado volver
        exit();}

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
    <form action="index.php" method="POST" >
        <input type="submit" value="Borrar identificación y reiniciar juego" name="submit" >
        <input type="submit" value="Comenzar" name="comenzar" >
        <input type="hidden" value="<?= $idiomas ?>" name="idiomas">
        <hr />
    </form>
</fieldset>

<h3></h3>
<fieldset style="width:40%;background:bisque; hidden ">
    <legend>Empieza el juego</legend>
    <form action="jugar.php" method="POST" >
        <h2> El n&uacutemero es </h2>
        <h5> Jugada x </h5>
        <h5> Actualmente te quedan x intentos </h5>

        <input type="hidden" value="" name="num_intentos">
        <input type="hidden" value="" name="num">
        <input type="hidden" value="" name="max">
        <input type="hidden" value="" name="min">
        <input type="hidden" value="" name="jugada">
        <fieldset>
            <legend>Indica c&oacutemo es el n&uacutemero qu&eacute has pensado</legend>
            <input type="radio" name="rtdo" checked value='>'> Mayor<br />
            <input type="radio" name="rtdo" value='<'> Menor<br />
            <input type="radio" name="rtdo" value='='> Igual<br />
        </fieldset>
        <hr />
        <input type="submit" value="jugar" name="submit" >
        <input type="submit" value="reiniciar" name="submit"  >
        <input type="submit" value="volver" name="submit"  >

    </form>
</fieldset>

</body>
</html>
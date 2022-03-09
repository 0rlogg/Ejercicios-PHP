<?php

//Identifica las variabbles que vas a necesitar

//Esta parte no es obligatoria pero te ayudará a hacer el programa
$idiomas = filter_input(INPUT_POST, "idiomas");
var_dump($idiomas);
$opcion = $_POST['idiomas'] ?? null;

//Este es un modo de controlar el routeo es decir, qué evento a solicitado este recurso
switch ($opcion){
    //case de vuelta a index
    case "Volver": header("location:index.php?idiomas=$idiomas");//Acciones si he presionado volver
        exit();}

//case que hace que se carge la frase del idioma definida en index
switch ($opcion) {

    //tener en cuenta el hacer variables para cambiar toda la pagina de idioma
    case "esp":
        $idiomas = "Bienvenido a mi página web";
        break;

    case "eng":

        $idiomas = "Welcome to my website";
        break;


    case "fr":
        $idiomas = "Bienvenue sur mon site web";
        break;
}
        ?>


    <!doctype html>
    <html lang="es">
<head>
    <title></title>
</head>
<body style="width: 60%;float:left;margin-left: 20%; ">

<h3></h3>
<fieldset style="width:40%;background:bisque ">
    <legend>Empieza el juego</legend>
    <form action="index.php" method="POST" >
        <h2><span style="color: blue"> <?= $idiomas?> </span> </h2>
        <input type="hidden" value="<?= $idiomas ?>" name="idiomas">
        <hr />
        <input type="submit" value="Volver" name="submit" >
    </form>
</fieldset>

</body>
    </html>
<?php
$opcion = $_POST['submit']??"";
var_dump($_POST);
switch ($opcion){

    case "Crear":
        echo "Hola";
        crearFicheros();
        break;

    case "Borrar":
        borrarFicheros();
        break;

    case "Borrar_ficheros":

        break;

}

function crearFicheros(){
     for ($i=0; $i<20; $i++){
         tempnam("ficherostmp", "A");}
}

function borrarFicheros(){

}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1>Crear y borrar ficheros</h1>
<form action="" method="POST">
    <input type="submit" value="Crear" name="submit">
    <input type="submit" value="Borrar" name="submit">
    <input type="submit" value="Borrar_fichero" name="submit">
</form>
</body>
</html>
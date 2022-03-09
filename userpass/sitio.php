<?php
//leo el nombre que me ha de venir por get del index (aplicamos el operador de fusion de nulos)
$nombre = filter_input(INPUT_GET, 'nombre') ?? null;
if (is_null($nombre)) { //Intento controlar que no cargue directamente este recurso desde el navegador
    header("Location:userpass.php");
    exit();
}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Bienvenido a este sitio web, <?= $nombre?></h1>

</body>
</html>

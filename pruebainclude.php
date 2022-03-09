
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="0.01">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Pruebas de require-require_once e include-include_once</title>
</head>
<body>
<?php

echo "<h1>Reloj</h1>";
require("Include/hora_include.php");
echo "<h1>Reloj</h1>";
require_once("Include/hora_include.php");
echo "<h1>Fecha</h1>";
include("Include/fecha_include.php");
echo "<h1>Fecha</h1>";
include_once("Include/fecha_include.php");

?>
</body>
</html>

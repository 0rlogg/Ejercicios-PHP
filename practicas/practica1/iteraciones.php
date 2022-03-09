<?php
header("refresh:2;url=index.php");

for ($i = 0; $i<100; $i++ ){
}
$division = 2;

$operacion = ($i/ $division) + 1;
$resolucion = ($i + 0 ) * $operacion /2 ;


?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="CSS/estilo.css" type="text/css">
    <title>Document</title>
</head>
<body>

<div class="solucion">
    <h1>Iteraciones en php</h1>
    <div class="parrafo"><div class="bold">La suma de los 100 primeros números pares es <span class = 'variable bold'></span><?=$resolucion?></span></div></div>
    <br />


<div class ="enunciado">
    <h3><a href="index.php">Volver</a></h3>
</div>

</body>
</html>

<?php
header("refresh:2;url=index.php");
function imparpar () {
    $n = rand(1,1000);
if ($n % 2 == 0){
    echo "$n es par";
}else{
    echo "$n es impar";
}}

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
    <h1>Operador Ternario</h1>
    <div class="parrafo"><div class="bold"><?= imparpar()?></div></div>
    <br />
    <div class="parrafo"><span class="bold"><a href="ternario.php">Probar otro número</a></span> </div>
</div>
</div>
<div class ="enunciado">
    <h3><a href="index.php">Volver</a></h3>
</div>
</body>
</html>

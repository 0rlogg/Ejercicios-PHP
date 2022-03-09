<?php
header("refresh:2;url=index.php");

$consnum = 10 ;
$constring = 'Hola mundo' ;
$conshex = '5e' ;
$consbin = '1010';
$consexpn = 5 + 5;
$cadcaracteres = 'Hola'.'mundo';
$varfunc = print_r('Hola mundo');
$varasig = $consnum;

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

<body>

<div class="enunciado">
    <div class="titulo center">Expresión de asignación</div>
    <div class="parrafo"><span class="bold">Expresión asignada</span> Siguiendo las especificaciones del enuniado.</div>
    <div class="parrafo"><span class="bold">Valor de la expresión</span> Valor que devuelve la <span class="bold">expresión.</span>
        de asignacion
    </div>
</div>
<div class="solucion">
    <h1>Variables en PHP</h1>
    <table border="1">
        <tr>
            <th>Expresión asignada</th>
            <th>Valor de la expresión</th>
        </tr>

        <tr><span class='msj'><td><span class=bold>$consnum = 10 ;</td> <td>-<span class='variable'><?=$consnum?></span>-</td>
</span>
        </tr>
        <tr><span class='msj'><td><span class=bold>$constring = 'Hola mundo' ;</td> <td>-<span class='variable'><?=$constring?></span>-</td>
</span>
        </tr>
        <tr><span class='msj'><td><span class=bold>$conshex = '5e' ;</td> <td>-<span class='variable'><?=$conshex?></span>-</td>
</span>
        </tr>
        <tr><span class='msj'><td><span class=bold>$consbin = '1010';</td> <td>-<span class='variable'><?=$consbin?></span>-</td>
</span>
        </tr>
        <tr><span class='msj'><td><span class=bold>$consexpn = 5 + 5;</td> <td>-<span class='variable'><?=$consexpn?></span>-</td>
</span>
        </tr>
        <tr><span class='msj'><td><span class=bold>$cadcaracteres = 'Hola'.'mundo';</td> <td>-<span class='variable'><?=$cadcaracteres?></span>-</td>
</span>
        </tr>
        <tr><span class='msj'><td><span class=bold>$varfunc = print_r('Hola mundo');</td> <td>-<span class='variable'><?=$varfunc?></span>-</td>
</span>
        </tr>
        <tr><span class='msj'><td><span class=bold>$varasig = $consnum;</td> <td>-<span class='variable'><?=$varasig?></span>-</td>
</span>
        </tr>
    </table>
</div>
<div class="enunciado">
    <h3><a href="index.php">Volver</a></h3>
</div>

</div>
</body>

</html>

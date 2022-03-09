<?php
header("refresh:2;url=index.php");
$a = 10;
$b = 12;
function duplicar(){
    global $a;
    global $b;
    $a = $a * 2;
    $b = $b * 2;
    return ("variable a duplicada = $a - variable b duplicada = $b <br/>
             El valor mayor de los dos es: $b");}



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
<div class="enunciado">
    <div class="titulo center">Funciones </div>
    <div class="parrafo bold">Función </div>
    <div class="parrafo margin20">Recibe dos parámetros (referencia y valor)</div>
    <div class="parrafo margin20">Duplica los valores de los parámetros</div>
    <div class="parrafo margin20">Visualiza los valores antes y después de modificarlos</div>

    <div class="parrafo bold">Programa principal </div>
    <div class="parrafo margin20">Crea dos variables</div>
    <div class="parrafo margin20">Visualiza sus valores</div>
    <div class="parrafo margin20">Invoca a la función </div>
    <div class="parrafo margin20">Vuleve a visualizar los valores</div>
<hr color:red/>
    <div class="parrafo cursiva">Plantea globalizar tanto $a como $b, y comprende el resultado </div>

</div>
<div class="solucion">
    <h1>Funciones: paso de parámetros</h1>
    <div class="parrafo"><div class="bold">Crear dos valores en variables. <span class='variable'>$a = <?=$a?> $b = <?=$b?></span></div></div>
    <div class="parrafo"><div class="bold">Visualizar valores: <span class='variable'>$a = <?=$a?> $b = <?=$b?></span></div></div>
    <div class="parrafo"><div class="bold">Invocar funcion: <span class='variable'><?=duplicar()?></span></div></div>
    <div class="parrafo"><div class="bold">Visualizar valores de las variables: <span class='variable'>$a modificado <?= $a?> $b modificado <?= $b?></span></div></div>
    <div class="parrafo"><div class="bold">invocar a la función: <span class='variable'> <?=duplicar()?></span></div></div>
    <div class="parrafo"><div class="bold">Volver a visualizar valores: <span class='variable'> $a modificado <?= $a?> $b modificado <?= $b?></span></div></div>
    <br />



</div>
</div>
<div class ="enunciado">
    <h3><a href="index.php">Volver</a></h3>
</div>
</body>

</html>

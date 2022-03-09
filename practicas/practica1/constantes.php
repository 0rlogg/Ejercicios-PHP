<?php
header("refresh:2;url=index.php");
// constantes

const edad = 24;
$anyosrest = 100 - edad;

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
    <h1>Constantes en PHP</h1>
    <div class="parrafo"><div class="bold">Constante declarada con const&nbsp&nbsp</div><div class='margin20'>Tengo <?= edad ?> años (Constante declarada con <span class='variable'>const</span>)</div></div>
    <div class="parrafo"><div class="bold">Actualmente tengo <?= edad ?> años, me quedan <?= $anyosrest ?> para cumplir 100 años  </div>


</div>
</div>
<div class ="enunciado">
    <h3><a href="index.php">Volver</a></h3>
</div>
</body>
</html>

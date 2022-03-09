<?php
header("refresh:2;url=index.php");
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
    <h1>Selecciones en php</h1>
    <div class="parrafo"><div class="bold">
            <span class="bold"><?php
                $edad = rand(0,150);
                switch (true) {
                    case ($edad >= 0 & $edad <= 11):

                        echo "$edad años, es la edad de un niño";
                        break;
                    case ($edad >= 12 & $edad <= 17):

                        echo "$edad años, es la edad de un adolescente";
                        break;
                    case ($edad >= 18 & $edad <= 35):

                        echo "$edad años, es la edad de una persona joven";
                        break;
                    case ($edad >= 36 & $edad <= 65):

                        echo "$edad años, es la edad de una persona adulta";
                        break;
                    case ($edad >= 66 & $edad <= 110):
                        echo "$edad años, es la edad de un jubilado";
                        break;

                    case ($edad > 111):
                        echo "$edad años, edad no contemplada en la encuesta";
                        break;}
                ?></span>
        </div>
    <br />
    <div class="parrafo"><span class="bold"><a href="seleccion.php">Probar otra edad</a></span> </div>


</div>
<div class ="enunciado">
    <h3><a href="index.php">Volver</a></h3>
</div>

</body>
</html>

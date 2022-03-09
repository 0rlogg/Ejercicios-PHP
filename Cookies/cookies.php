<?php
//setcookie($name= user, orlogg, 200);
//setcookie($name=idioma, espanyol, 200);

$opcion = filter_input(INPUT_GET, "opcion");

switch ($opcion){

    case "Deportes":

        break;
    case "Economia":

        break;
    case "Ciencia":

        break;
}



?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cookies</title>
</head>
<body>

    <fieldset>
        <legend>Opciones
            <form action="cookies.php" method="POST">
            <label>Deportes</label><input type="radio" name="opcion"  value="Deportes" id="">
            <label>Economia</label><input type="radio" name="opcion"  value="Economia" id="">
            <label>Ciencia</label><input type="radio" name="opcion"  value="Ciencia" id="">
                <input type="submit" value="Enviar">
            </form>
        </legend>
    </fieldset>
    <fieldset>

        <div id="Deportes">
        <h1>Deportes</h1>
        <pre>El seleccionador español femenino José Ignacio Prades reserva a la pivote Eli Cesareo y a la primera línea Laura Hernández para el primer partido de la fase principal del Mundial contra Japón, que se disputa este miércoles (20:30 horas).
La pivote catalana sufrió un leve esquince de tobillo en el entrenamiento del martes. Una circunstancia que llevó al técnico español a reservar por "precaución" a la jugadora del Bere Bera.
Vuelven a la convocatoria con las 'Guerreras' la lateral derecho Mireya González y la primera línea Carmen Campos. Durante el Mundial cada combinado nacional puede inscribir a 16 jugadoras.</pre>
       </div id="Economia">
        <div>
        <h1>Economia</h1>
        <pre>La deuda se dispara ya más de 230.000 millones en año y medio mientras el Gobierno sigue sin un plan de ajuste
El pasivo público marca un nuevo máximo histórico pero el Ejecutivo obvia las exigencias del Banco de España y la Autoridad Fiscal</pre>
        </div id="Ciencia">
        <h1>Ciencia</h1>
        <pre>El VLTI (Interferómetro del Very Large Telescope) del Observatorio Europeo Austral (ESO) ha obtenido las imágenes más profundas y nítidas hasta la fecha de la región que hay alrededor del agujero negro supermasivo ubicado en el centro de nuestra galaxia.
Las nuevas imágenes nos acercan 20 veces más de lo que era posible antes del VLTI y han ayudado a los astrónomos a encontrar una estrella nunca antes vista cerca del agujero negro. Al rastrear las órbitas de las estrellas del centro de nuestra Vía Láctea, el equipo ha realizado la medición más precisa obtenida hasta el momento de la masa del agujero negro.</pre>
        <div>
    </fieldset>
</body>
</html>



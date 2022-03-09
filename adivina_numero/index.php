<?php

$intentos= filter_input(INPUT_GET,  "intentos") ?? 10;


$checked_10 = null;
$checked_16 = null;
$checked_20 = null;

switch ($intentos){

    case 10:
        $checked_10="checked";
        break;

    case 16:
        $checked_16="checked";
        break;

    case 20:
        $checked_20="checked";
        break;
}

/*  programa aplica busqueda dicotomica y nos da un numero y 2 opciones menor o mayor
    variables de guardado, dependen de estados anteriores.

    el programa permite 10-16-20 intentos

    nos da 3 opciones jugar reiniciar o volver form radio

    boton empezar juego

    Tiene que mantener lo seleccionado al volver


    variables
        $jugada

        $Reiniciar

        $Empezar

        $max

        $min

        $intentos


        valores de 1 - 1024

    */


?>
--10--<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <meta name="viewport"
    <title>Adivina n&uacutemero</title>
    <link rel="stylesheet" href="estilo.css" type="text/css"/>
</head>
<body>


<fieldset style="width: 50%;float:left;margin-left: 20%; background: bisque">
    <legend><h1>Juego adivina n&uacutemero</h1></legend>
    <h2>    Selecciona un intervalo del men&uacute de abajo</h2>
    <fieldset>
        <legend>Esteblece interfalo</legend>
        <form action="jugar.php" method="POST">
            <input type="radio" name="intentos" value="10"  <?= $checked_10?> />1-1.024(2<sup>10</sup>). 10 intentos<br />
            <input type="radio" name="intentos" value="16"  <?= $checked_16?> /> 1-65.536(2<sup>15</sup>). 15 intentos<br />
            <input type="radio" name="intentos" value="20"  <?= $checked_20?> /> 1-1.048.536(2<sup>20</sup>). 20 intentos<br />
            <input type="submit" value="Empezar" name="submit">
        </form></fieldset>
    <br />
    <h2>    Piensa un n&uacutemero de ese intervalo</h2>
    <h2>    La aplicaci&oacuten lo acertar&aacute en el n&uacutemero de intentos establecidos seg&uacuten el intervalo</h2>
    <hr />

    <h2>    Cada vez que la aplicaci&oacuten te especifique un n&uacutemero deber&aacutes de indicar</h2>
    <ul>
        <ol>Si el n&uacutemero buscado es mayor</ol>
        <ol>Si el n&uacutemero buscado es menor</ol>
        <ol>Si has aceertado el n&uacutemero</ol>
    </ul>


</fieldset>
</body>
</html>



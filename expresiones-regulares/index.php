<?php
if (isset($_POST)){

    $expresion = filter_input(INPUT_POST, 'expresion');
    $cadena = filter_input(INPUT_POST, 'cadena');



    //al poner una expresion regular es importante poner detras de los corchetes el simbolo: * para que pueda haber mas de 1 numero o mas de 1 caracter
if (preg_match($expresion, $cadena , $repeticiones)) {
    $msj= "<p>La cadena $cadena es correcta.</p>\n";}
else {
    $msj= "<p>La cadena $cadena no es correcta.</p>\n";}}

var_dump($repeticiones);
//repeticiones es un array que nos dice que dentro de una cadena hay algo quye se cumple mas de 1 vez

?>

<!doctype html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Expresiones regulars</title>
    <link rel="stylesheet" href="estilo.css">

</head>
<body>

     <fieldset>
         <legend></legend>
        <form action="index.php" method="post"></form>
        <label for="expresion">Expresion regular</label><br>
         <input type="text" name="expresion" id=""><br><br>
        <label for="cadena">cadena de caracteres</label><br>
         <input type="text" name="cadena" id=""><br><br>
        <input type="submit" value="Validar">
    </fieldset>
<fieldset><?=$msj?></fieldset>

</body>
</html>

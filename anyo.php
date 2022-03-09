<?php
//funcion para saber si un anyo es bisiesto
function bisiesto ($anyo){
    if (($anyo % 4 == 0) and ($anyo % 100 != 0) OR ($anyo %400 == 0)){
        return true;}
    else{
        return false;}
}
//obtener datos

$dia = rand(1,33);
$mes = rand(1,14);
$anyo = rand(100,5000);

//evaluar datos

$fecha = "$dia/$mes/$anyo";
$error = "error";

//casos de 31 dias
switch ($mes){
    case 1:

        break;
    case 3:

        break;
    case 5:

        break;
    case 8:

        break;
    case 10:

        break;
    case 12:
        if ($dia > 31){
            $error="Este mes es de 31 dias no $dia dias";}
        break;

        //casos de 30 dias
    case 4:

        break;
    case 6:

        break;
    case 9:

        break;
    case 11:
        if ($dia > 30){
            $error="Este mes es de 30 dias no $dia dias";}
        break;

        //casos de 28-29 dias
    case 2:
        if (bisiesto($anyo)) {
            if ($dia > 29)
                $error = "error";}
        else
            if ($dia > 28){
                $error = "error";}
        break;
    default: $error="el $mes no es correcto";
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php

if ($error == ""){
    echo"<h1> La fecha: $fecha es correcta</h1>";
}else{
    echo"<h1>La fecha: $fecha es incorrecta</h1>";
}

?>
</body>
</html>

<?php
$dia = 1;
$mes = 1;
$anyo = 1970;
$fecha = $dia/$mes/$anyo;
$fecha_unix = strtotime($fecha);
$fechaActual_hora  = date('H:i:s');
$fechaActual= date('m-d-Y H:i:s');
$anyos = floor($fecha_unix /(60*60*24*365.4));
$resultado = $fecha_unix - $fechaActual;
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="0.01">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
echo "<h1>hora actual: $fechaActual_hora</h1>";
echo "<h1>Fecha y hora actual: $fechaActual</h1>";
echo "<h1>Edad: $anyos</h1>";
echo "<h1>Edad en segundos: $resultado</h1>";


?>
</body>
</html>

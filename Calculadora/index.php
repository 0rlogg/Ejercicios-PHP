<?php

$tipo = Operacion::tipo_operacion($_POST['operacion']);

switch ($tipo){
    case Operacion::ERROR:

    break;

    case Operacion::REAL://operacion real tambien coge numero estilo 1,1, 8.4 + 6 tambien sera + - * /


    break;

    case Operacion::RACIONAL://a/b  b/c  + - * :division


    break;

}
?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
Operacion <input type="text" name="operacion" id=""><br>
<input type="submit" value="">
</body>
</html>

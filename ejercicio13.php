<?php
$edad = rand (1,90);
$msj_no_premio = "<h1>Usted es el visitante numero: $numero lo lamentamos, intentelo la proxima vez</h1>";
if ($edad > 18) {
echo "edad generada " . $edad;
}else {
  echo "<h1 style=color:red > tienes $edad años no puedes acceder </h1>";
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


</body>
</html>

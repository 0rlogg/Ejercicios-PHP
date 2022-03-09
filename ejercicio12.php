<?php
$numero = rand (1,100);
$msj_premio = "<h1>Felicidades visitante numero: $numero usted ha ganado un premio</h1>";
$msj_no_premio = "<h1>Usted es el visitante numero: $numero lo lamentamos, intentelo la proxima vez</h1>";
if ($numero %2 == 0) {
echo $msj_premio;
}else {
  echo $msj_no_premio;
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

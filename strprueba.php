<?php

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="1">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php


echo strftime("Hoy es %A y son las %H:%M");
setlocale ( LC_ALL, "es_ES.utf8");
echo strftime("Hoy es %A y son las %H:%M");
//no funciona


?>
</body>
</html>

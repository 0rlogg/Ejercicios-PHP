<?php
$x = rand(1, 6); //
$R = dechex(rand(0,255));//dechex(rand(0,255))
$G = dechex(rand(0,255));//
$B = dechex(rand(0,255));//
$msj = "<h$x style=color:#$R$G$B> Este es el texto que debe de aparecer cambiante</h$x>"
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

  <?php echo $msj ?>

</body>
</html>

<?php
//crear sesion
session_start();
$clicks = $_SESSION['clicks'] ?? [];
$clicks[] = time();
$_SESSION['clicks']=$clicks;
var_dump($_SESSION);

if (isset($_POST['cerrar'])){
    session_destroy();
    session_start();
}




?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sesiones</title>
</head>
<body>

<?php

foreach ($clicks as $index =>$click){
    echo "<h1>Click $index realizado a las ".date("h:i:s",$click)."</h1>";
}

"Actualmente llevas $clicks clicks ";
?>

<form action="index.php" method="POST">
    <input type="submit" value="Enviar" name="clicks">
    <input type="submit" value="cerrar sesion" name="cerrar">
</form>


</body>
</html>

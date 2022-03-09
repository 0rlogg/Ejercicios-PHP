<?php

//si he presionado submit
if (isset($_POST['submit'])) {
    //leemos los datos
    $nombre = filter_input(INPUT_POST, 'nombre');
    $password = filter_input(INPUT_POST, 'password');

    //Confirmo que son datos correctos
    if ($nombre==$password) { //Si ok me voy a sitio.php llevando el valor del nombre
        header("Location:sitio.php?nombre=$nombre");
        exit();
    }

    else {
        $msj = "Usuario y password no son correctos"; //Si no es correcto user y pass me quedo informando e ello
    }
}else {
    $msj = "Introduce tus datos de acceso"; //Si accedo por url mensaje de uso de la pantalla
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
<fieldset style="background: antiquewhite; margin:100px;width:50%  ">
    <legend>Datos de acceso</legend>
    <form action="userpass.php" method="POST">
        <h2><?= $msj ?> </h2>
        Usuario <input type="text" name="nombre" id=""><br/>
        Pass <input type="text" name="password" id=""><br/>
        <input type="submit" value="Acceder" name="submit">
    </form>
</fieldset>

</body>
</html>
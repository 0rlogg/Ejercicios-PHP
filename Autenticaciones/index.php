<?php

if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-AUTHENTICATE: Basic Realm:"Pagina de acceso restringido, debe registrarse');
    header('HTTP/1.0 401 Unauthorized');
    exit();
}

$user = $_SERVER['PHP_AUTH_USER'];
$passw = $_SERVER['PHP_AUTH_PW'];

if($user !== $passw){
    header('WWW-AUTHENTICATE: Basic Realm:"Pagina de acceso restringido, debe registrarse');
    header('HTTP/1.0 401 Unauthorized');
    exit();
}

if (isset($_POST['submit'])){
    header('WWW-AUTHENTICATE: Basic Realm:"Pagina de acceso restringido, debe registrarse');
    header('HTTP/1.0 401 Unauthorized');
    exit();
}

?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Credenciales-prueba</title>

    <form action="index.php" method="post">
        <input type="submit" value="Salir" name="submit">
    </form>
</head>
<body>
<h1>Bienvenido</h1>
</body>
</html>

<?php

var_dump($_POST);
spl_autoload_register(function ($clase){
    require ("BD.php");});

$conexion = new BD();
$opcion = $_POST['submmit'];
switch ($opcion){
    case "Editar":
        $conexion->obtener_productos();

        break;
    case "Actualizar":
        $conexion->actualizar_producto();
        break;}

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

<?php if ($_POST['submit']!='Actualizar') :?>

    <form action="producto.php" method="post">
        <h1>Datos del producto</h1>

        Codigo : <input type="text" name="codigo" value="<?php $codigo ?>" id="" disabled><br />
        Nombre : <input type="text" name="nombre" value="<?= $nombre ?>" id=""><br />
        Nombre Corto : <input type="text" name="nombre_corto" value="<?= $nombre_corto ?>" id=""><br />
        PVP : <input type="text" name="precio" value="<?= $precio ?>" id=""><br />
        Descripcion :<textarea name="descripcion" id="" cols="30" rows="10"><?= $descripcion ?></textarea>
        <br><br>
        <input type="submit" value="Actualizar" name="submit">

                            <!-- INPUT HIDDENS -->
        <input type="hidden" name="familia" value="<?= $familia?>">
        <input type="hidden" name="codigo" value="<?= $codigo?>">
        <input type="hidden" name="nombre" value="<?= $nombre?>">
        <input type="hidden" name="nombre_corto" value="<?= $nombre_corto?>">
        <input type="hidden" name="precio" value="<?= $precio?>">
        <input type="hidden" name="descripcion" value="<?= $descripcion?>">
    </form>
    <form action="index.php" method="post">
        <input type="submit" value="Volver" name="submit">
        <input type="hidden" name="familia" value="<?= $familia?>">
    </form>

<?php else: ?>

    <h1>Producto actualizado con exito</h1>

    <form action="index.php" method="post">
        <input type="submit" value="Volver" name="submit">

                            <!-- INPUT HIDDENS -->
        <input type="hidden" name="familia" value="<?= $familia?>">
        <input type="hidden" name="codigo" value="<?= $codigo?>">
        <input type="hidden" name="nombre" value="<?= $nombre?>">
        <input type="hidden" name="nombre_corto" value="<?= $nombre_corto?>">
        <input type="hidden" name="precio" value="<?= $precio?>">
        <input type="hidden" name="descripcion" value="<?= $descripcion?>">
    </form>

<?php endif; ?>

</body>
</html>
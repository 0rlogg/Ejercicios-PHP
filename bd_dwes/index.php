<?php
var_dump($_POST);
spl_autoload_register(function ($clase) {
    require("BD.php");
});


$conexion = new BD();
$familias = $conexion->obtener_familias();

if (isset($_POST['submit'])) {
    $familia = $_POST['familia'];
    $productos = $conexion->obtener_productos($familia);
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
<form action="index.php" method="post">
    <h1>Datos de familia</h1>
    <select name="familia" id="">
        <?php
        foreach ($familias as $familia)
            echo "<option value='{$familia['cod']}'> {$familia['nombre']}</option>"
        ?>
    </select>
    <input type="submit" value="Ver productos" name="submit">
</form>
<?php if (isset($productos)): ?>
    <h2>Listado de productos</h2>
    <fieldset>
        <legend>Seleccona uno para modificar</legend>
        <?php
        foreach ($productos as $producto) {
            echo "<form action='producto.php' method='post'>\n";
            echo "{$producto['nombre_corto']} Precio {$producto['PVP']}€\n";
            echo "<input type='submit' value='editar' name ='submit'><br />\n";
            echo "<input type='hidden' value='{$producto['cod']}' name ='codigo'><br />\n";
            echo "<input type='hidden' value='{$producto['nombre_corto']}' name ='nombre_corto'><br />\n";
            echo "<input type='hidden' value='{$producto['PVP']}' name ='precio'><br />\n";
            echo "<input type='hidden' value='{$producto['descripcion']}' name ='descripcion'><br />\n";
            echo "<input type='hidden' value='{$producto['familia']}' name ='familia'><br />\n";
            echo "</form>\n\n";
        }
        ?>


    </fieldset>
<?php endif;
$conexion = mysqli_close()
?>


</body>
</html>
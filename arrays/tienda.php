<?php

$productos = [
    'lechuga' => ['unidades' => 200,
        'precio' => 0.90],
    'tomates' =>['unidades' => 2000,
        'precio' => 2.15],
    'cebollas' =>['unidades' => 3200,
        'precio' => 0.49],
    'fresas' =>['unidades' => 4800,
        'precio' => 4.50],
    'manzanas' =>['unidades' => 2500,
        'precio' => 2.10]];


if (isset($_POST['submit'])){
    $factura ="";
    foreach ($productos  as $producto => $contenido) {
            $unidades = filter_input(INPUT_POST,$producto);
            $subtotal  = $unidades * $contenido['precio'];
            $total+=$subtotal;
            $factura.="<h3> Has comprado $unidades de $producto a {$contenido['precio']} = $subtotal euros</h3>";}
            $factura.= "<h2>Total de factura = $total euros</h2>";}?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tienda</title>
</head>
<body>
    <fieldset style="width: 30 %;margin:40px;background:bisque; font - size:2em">
        <form action="tienda.php" method="POST">
        <?php
            foreach ($productos as $producto => $contenido) {
            echo "<label id='$producto'>$producto</label>";
            echo "<input type='text' name='$producto' /> Precio $contenido[precio] x ud<br/>";}?>

        <input type="submit" value="Comprar" name ="submit">
        </form>
    </fieldset>

    <fieldset style="width: 30 %;margin:40px;background:bisque; font - size:2em">
        <legend>Total Factura</legend>
        <?=$factura?>
    </fieldset>

    <fieldset style="width: 30 %;margin:40px;background:bisque; font - size:2em">
        <legend>Estado de la tienda antes de la compra</legend>
        <?php

            foreach ($productos as $producto => $contenido) {
                echo "<label id='$producto'>$producto </label>";
                echo "<label id='$producto'> $contenido[unidades] ud</label><br/>";}?>

    </fieldset>

    <fieldset style="width: 30 %;margin:40px;background:bisque; font - size:2em">
        <legend>Estado de la tienda despues de la compra</legend>
        <?php
        if (isset($_POST['submit'])){
        $unidades = filter_input(INPUT_POST,$producto);
            foreach ($productos as $producto => $contenido) {
                $stockrestante = $contenido['unidades'] - $unidades;
                echo "<label id='$producto'>$producto </label>";
                echo "<label id=''> $stockrestante ud</label><br/>";}}?>

    </fieldset>
</body>
</html>
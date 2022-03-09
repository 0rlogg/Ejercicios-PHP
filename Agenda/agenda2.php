<?php

//zona de funciones

//function valida_datos($n, $t, $a){//Funcion para validar errores
//    $msj_error = null;
        //probar switch case
//    if (isset($nombre)){
//        if (!is_numeric($t))// null o letras
//            $msj_error = "El telefono no es numerico";}//E3
//        if (is_null($t) && !array_key_exists($a,$n))//E1
//            $msj_error = "El nombre $n no existe y no puedo borrarlo";
//        else{
//           $msj_error = "El nombre no puede estar vacio";}

//    return $msj_error;
//}


if (isset($_POST['submit'])) {

    $agenda = $_POST['agenda'] ?? [];//declaro agenda como array
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];

    //analisis de errores
    $error = valida_datos($nombre, $telefono, $agenda);
    if (!$error)
        $agenda[$nombre] = $telefono;}

?>

<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="estilo.css" type="text/css">
    <title> Agenda de contactos</title>
</head>
<header>
    <?php
         if($agenda > 0)
             echo  "<h4>Agenda de contactos: ".count($agenda)."</h4>";
        else
            echo "<h4>Agenda de contactos: sin contactos</h4>";
    ?>
    </header>
<body>

<div class="listado_contactos">
    <div class="center">LISTADO DE CONTACTOS</div>
    <hr>
    <div class="center">

        <?php
        if (isset($agenda))
            echo $agenda[$nombre].$agenda[$telefono];
            ?>

    </div>
</div>
<!-- Creamos el formulario para insertar los nuevos datos-->
<fieldset>
    <legend>Nuevo Contacto</legend>
    <form action="agenda2.php" method="post">
        <br>
        <input type="text" name="nombre"><br/>
        <input type="text" name="telefono"><br/>
        <input type="submit" value="Acceder" name="submit">
        <input type="submit" value="Eliminar contactos" name="enviar" disabled >

        <!-- Metemos los contactos existentes  ocultos en el formulario-->
        <?php
        if (isset($agenda)) {
            foreach ($agenda as $clave => $a) {
                echo "<input type='hidden' name='agenda' value = '$a' />\n";}
        }?>

    </form>
</fieldset>
<div style="clear:both ">
    <hr/>
</div>

</body>

</html>

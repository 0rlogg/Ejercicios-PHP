<?php

if (!isset($contact_list)) {
    $contact_list = [];
}

if (isset($_POST['submit'])){
    //asigna a la variable $name el valor que recoge de  'name'.
    $name = filter_input(INPUT_POST, 'nombre');
    $telephone = filter_input(INPUT_POST, 'telefono', FILTER_VALIDATE_INT);
    $contact_list = filter_input(INPUT_POST, "contact_list", FILTER_DEFAULT, FILTER_REQUIRE_ARRAY) ?? [];

    if (empty($name) or is_numeric($name)) {
        nombre_invalido($name);
    } elseif (array_key_exists($name, $contact_list) && (empty($telephone))) {
        $contact_list = delete_contact($name, $contact_list);
    } else {
        $contact_list = create_modify_contact($contact_list, $name, $telephone);
    }
}

if (isset($_POST['reset'])){
    unset($contact_list);
    $contact_list = array();
}

function nombre_invalido($name) {
    echo("El campo del nombre está relleno de forma incorrecta. RECUERDA  <br>" );
    if (is_numeric($name)){
        echo("El campo del nombre no puede contener números<br>");
    } else {
        echo("El campo del nombre no puede estar en vacio. <br>");
    }
}

function create_modify_contact($contact_list, $name, $telephone){

    if (array_key_exists($name, $contact_list)){
        $contact_list [$name] = $telephone;
        echo("Acabas de modificar el contacto $name");

    }elseif (empty($telephone)) {
        echo("El teléfono está vacio. Si quieres borrar un contacto asegúrate de que el nombre está bien escrito. De lo contrario introduce un número.");
    }else {
        $contact_list [$name] = $telephone;
        echo("Has creado un contacto nuevo");
    }

    return $contact_list;
}

function delete_contact($name, $contact_list){
    unset($contact_list[$name]);
    echo("Acabas de borrar el contacto $name.");
    return $contact_list;
}

foreach($contact_list as $name =>$telephone){
    echo ("<input type='hidden' name='contact_list[$name]' value = '$telephone' />\n");
}

?>
<!DOCTYPE HTML>
<html>
    <head>
     <meta http-equiv="content-type" content="text/html; charset=UTF-8">
     <link rel="stylesheet" href="./estilo.css" type="text/css">
     <script src='https://unpkg.com/vue'></script>
     <title> Agenda de contactos</title>
    </head>
<header>
    <p></p>
</header>
    <body>
        <fieldset>
            <legend>Nuevo Contacto</legend>
                <form action=index.php method="post">
                    <br>
                        <label for="nombre">Nombre</label><input type="text" name="nombre" size="15"/><br/>
                        <label for="telefono">Teléfono </label><input type="number" name="telefono" size="15"/><br/>
                        <input type="submit" value="Crear contacto" name="enviar">
                        <input type="submit" value="reset" name="reset"><br><br>
                        <input type="submit" value="borrar" name="borrar"><br><br>
                        <!-- Metemos los contactos existentes  ocultos en el formulario-->
                </form>
        </fieldset>
        <div style="clear:both ">
        </div>
        <div class="listado_contactos">
            <div class="center">LISTADO DE CONTACTOS</div>
            <hr>
            <div class="center">
                <?php

                foreach ($contact_list as $name =>$telephone){
                    echo("Nombre: $name, Telefono: $telephone. <br>");
                }

                ?>
            </div>
        </div>
    </body>
</html>

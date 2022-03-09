<?php


function publicar()
{
    $ficheros = $_POST['ficheros'];
    $error = "";

    foreach ($ficheros as $fichero) {
        $origen = "./uploads/$fichero";
        $destino = "./downloads/$fichero";
        if (!rename($origen, $destino))
            $error .= "No se ha poidido mover $origen<br />";
    }
    if ($error = "")
        $msj = "Se han movido " . sizeof($fichero) . " ficheros";
    else
        $msj = $error;

    return $msj;


}

function valida_admin()
{
    $nombre = filter_input(INPUT_POST, 'nombre');
    $pass = filter_input(INPUT_POST, 'pass');
    if (($nombre == "admin") and ($pass == "admin"))
        return true;
    else
        return false;

}

function quita_dir_pto($dir)
{

    $retorno = [];
    foreach ($dir as $directorio) {
        if ($directorio[0] == ".")
            continue;
        $retorno[] = $directorio;
    }
    return $retorno;
}

function obtener_contenido($directorio)
{
    $dir_ppal = scandir($directorio);

    $dir_ppal = quita_dir_pto($dir_ppal);

    $html = "";
    foreach ($dir_ppal as $dir) {
        $html .= "<fieldset><legend>$dir</legend>\n";
        $ficheros = scandir("$directorio/$dir");
        $ficheros = quita_dir_pto($ficheros);
        foreach ($ficheros as $fichero) {
            $html .= "<h2><a href='$directorio/$dir/$fichero'>$fichero</a></h2>";
        }
        $html .= "</fieldset>";
    }
    return $html;
}

function obtener_contenido_con_checkbox($directorio)
{
    $dir_ppal = scandir($directorio);
    $dir_ppal = quita_dir_pto($dir_ppal);
    $html = "";
    foreach ($dir_ppal as $dir) {
        $html .= "<fieldset><legend>$dir</legend>\n";
        $ficheros = scandir("$directorio/$dir");
        $ficheros = quita_dir_pto($ficheros);

        foreach ($ficheros as $fichero) {
            $html .= "<h4><input type='checkbox' value='$dir/$fichero' name='ficheros[]' >$fichero</h4>";
        }
        $html .= "</fieldset>";
    }
    return $html;
}


function subir_fichero()
{
    $fichero = $_FILES['fichero'];
    $tipo = $fichero['type'];
    $tipo = explode("/", $tipo);

    switch ($tipo[0]) {
        case "audio":
        case "video":
            $destino = "./uploads/musica/";
            break;
        case "image":
            $destino = "./uploads/imagenes/";
            break;
        case "application":
            if ($tipo[1] == "pdf")
                $destino = "./uploads/pdf/";
            else
                $destino = "./uploads/otros/";
            break;
        default:
            $destino = "./uploads/otros/";
    }


    $origen = $fichero['tmp_name'];
    $destino .= $fichero['name'];
    if (move_uploaded_file($origen, $destino))
        $msj = "Se ha submido correctametne el fichero -$destino-";
    else {
        $error = $fichero['error'];
        $msj = "Error -$error- No Se ha submido correctametne el fichero -$destino-";
    }
    var_dump($msj);
    return $msj;
}
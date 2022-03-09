<?php
$opcion_cookie = $_COOKIE['opcion']??" ";

if(isset($_POST['post'])) {
$opcion = filter_input(INPUT_POST,"opcion")??null;}

$show_deportes =true;
$show_economia =true;
$show_ciencia =true;

switch($opcion){
    case 'deporte':
        $show_economia =false;
        $show_ciencia =false;
        break;
    case 'ciencia':
        $show_deportes =false;
        $show_economia =false;
        break;
    case 'economia':
        $show_deportes =false;
        $show_ciencia =false;
        break;
}
setcookie("opcion", $opcion, time()+600);

if (isset($_POST['eliminar'])){
    setcookie("opcion", $opcion, 1);

    $show_deportes =true;
    $show_economia =true;
    $show_ciencia =true;
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
<fieldset>
    <legend>Opciones</legend>
    <form action="cookies2.php" method="post">
        <input type="radio" name="opcion" value="deporte" id="">Deporte<br/>
        <input type="radio" name="opcion" value="economia" id="">Economía<br/>
        <input type="radio" name="opcion" value="ciencia" id="">Ciencia<br/>
        <input type="submit" value="Enviar"name="post">
        <input type="submit" value="Eliminar cookie"name="eliminar">

    </form>

</fieldset>
<?php if( $show_deportes):?>
    <fieldset>

        <legend>Deportes</legend>
        <pre>
        Corría el minuto 8 del partido de la noche del martes en
        el Etihad y Luke Ayling barrió a Rodri
        en balde al borde del área.
        El madrileño se plantó solo frente al portero,
    </pre>
    </fieldset>
<?php endif;
if( $show_ciencia):?>
    <fieldset>
        <legend>Ciencia</legend>
        <pre>
        Conjunto de conocimientos obtenidos
        mediante la observación y el razonamiento ,
        sistemáticamente estructurados y de
        los que se deducen principios
        y leyes generales con capacidad predictiva y
    </pre>
    </fieldset>
<?php endif;
if( $show_economia):?>

    <fieldset>
        <legend>Economía</legend>
        <pre>
        En la jornada Encuentros en
        La Vanguardia, Calviño destacó
        que los recursos que llegan de
        Europa serán distintos a los
        fondos estructurales y que
        permitirán movilizar hasta 140.000 millones de euros.
    </pre>
    </fieldset>
<?php endif?>

</body>
</html>


Enviar un mensaje a web

















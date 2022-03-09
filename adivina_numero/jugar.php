<?php

//Identifica las variabbles que vas a necesitar
//Esta parte no es obligatoria pero te ayudará a hacer el programa
$intentos = filter_input(INPUT_POST, "intentos");
var_dump($intentos);



//Inicializa las que vamos a obtener siempre su valor




//Ahora leemos la opción que nos ha traído aquí
$opcion = $_POST['submit'] ?? null;
$opcion_numero = $_POST['rtdo'] ?? null;


//Este es un modo de controlar el routeo es decir, qué evento a solicitado este recurso
switch ($opcion){
    case "Reiniciar":
    case "Empezar"://inicializar los valores
        //Acciones is vengo del index y empiezo la jugada
        $min = 1;
        $max = pow(2,$intentos);
        $numero_jugada = 1;
        $numero_generado = $max/2;
        $jugadas_restantes = $intentos -  $numero_jugada;

        break;
// 1, 2, 4 ,8, 16, 32, 64, 128, 256, 512
// para el caso mayor se deberia de coger el numero generado y sumarle su mitad
    case "Jugar":
        $min = filter_input(INPUT_POST, "min");
        $max = filter_input(INPUT_POST, "max");
        $numero_generado = filter_input(INPUT_POST, "numeroGenerado");
        $resultado = filter_input(INPUT_POST, "resultado");
        $numero_jugada = filter_input(INPUT_POST, "numeroJugada");
        if ($numero_jugada >$intentos){
            header("Location:fin.php?estado=false");
        }

        //Acciones si he presionado jugar
        switch ($resultado){
            case ">":
                    //sumar numero generado + numero generado / 2
                $min = $numero_generado;
                break;

            case "<":
                //restar numero generado - numero generado / 2
                $max = $numero_generado;
                break;

            case "=":
                header("location:final.php?estado=true");
                exit();
                break;
            default:
                header("Location:index.php");
        }
        break;
    case "Reiniciar":
        //Acciones si he presionado Reiniciar

        break;
    case "Volver": header("location:index.php?intentos=$intentos");
        //Acciones si he presionado volver
            exit();
        break;
    default:
        //Acciones por defecto

}
$numero_generado = round(($min=$max)/2);
$numero_jugada++;

$resultado = 0; // si el numero es mayor, menor o acertado
//Si hay variables que acutalizo la pongo aquí en cualquier caso, las debería de poner aquí


?>


<!doctype html>
<html lang="es">
<head>
    <title>Juego de adivina un número</title>
</head>
<body style="width: 60%;float:left;margin-left: 20%; ">

<h3></h3>
<fieldset style="width:40%;background:bisque ">
    <legend>Empieza el juego</legend>
    <form action="jugar.php" method="POST" >
        <h2> El n&uacutemero es <span style="color: blue"> <?= $numero_generado?> </span> </h2>
        <h5> Jugada  <span style="color: blue"><?= $numero_jugada?> </span>  </h5>
        <h5> Actualmente te quedan   <span style="color: blue"> <?= $jugadas_restantes?> </span> intentos </h5>

        <input type="hidden" value="<?= $intentos ?>" name="intentos">
        <input type="hidden" value="<?= $min ?>" name="min">
        <input type="hidden" value="<?= $max ?>" name="max">
        <input type="hidden" value="<?= $numero_generado ?>" name="numeroGenerado">
        <input type="hidden" value="<?= $resultado ?>" name="rtdo">
        <input type="hidden" value="<?= $numero_jugada ?>" name="numeroJugada">



        <fieldset>
            <legend>Indica c&oacutemo es el n&uacutemero qu&eacute has pensado</legend>
            <input type="radio" name="rtdo" checked value='>'> Mayor<br />
            <input type="radio" name="rtdo" value='<'> Menor<br />
            <input type="radio" name="rtdo" value='='> Igual<br />
        </fieldset>
        <hr />
        <input type="hidden" name="">
        <input type="submit" value="Jugar" name="submit" >
        <input type="reset" value="Reiniciar" name="submit" >
        <input type="submit" value="Volver" name="submit" >

    </form>
</fieldset>

</body>
</html>
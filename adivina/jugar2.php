<?php
//Identifica las variabbles que vas a necesitar
$maximo;
$minimo;
$numero_jugada;
$numero_generado;
$jugadas_restantes;
$resultado;//Si el numero es mayor, menor o he acertado


//Esta parte no es obligatoria pero te ayudará a hacer el programa

$intentos = filter_input(INPUT_POST, "intentos");
echo $intentos;

//Inicializa las que vamos a obtener siempre su valor




//Ahora leemos la opción que nos ha traído aquí
$opcion = $_POST['submit'] ?? null;


//Este es un modo de controlar el routeo es decir, qué evento a solicitado este recurso
switch ($opcion){
    case "Empezar"://inicializar los valores
    case "Reiniciar":
    default:
    //Acciones is vengo del index y empiezo la jugada
        $minimo = 1;
        $maximo = pow(2,$intentos);
        $numero_jugada = 1;
        $numero_generado = $maximo / 2;
        break;
    case "Jugar":
    //Acciones si he presionado jugar
        $numero_jugada=filter_input(INPUT_POST,"numero_jugada");
        if ($numero_jugada>=$intentos){
            header("Location:fin.php?estado=false");
            exit();
        }
        $minimo= filter_input(INPUT_POST,"minimo");
        $maximo = filter_input(INPUT_POST,"maximo");
        $numero_generado=filter_input(INPUT_POST,"numero_generado");
        $resultado=filter_input(INPUT_POST,"resultado");
        switch ($resultado){
            case ">":
                $minimo = $numero_generado;
                break;
            case "<":
                $maximo = $numero_generado;
                break;
            case "=":
                header("Location:fin.php?estado=true");
                exit();
        }
                $numero_generado=round(($minimo+$maximo)/2);
                $numero_jugada++;
        break;

    case "Volver":
    //Acciones si he presionado volver
        header("Location:index.php?intentos=$intentos");
        exit();



}
$jugadas_restantes = $intentos - $numero_jugada;
//Si hay variables que acutalizo la pongo aquí en cualquier caso, las debería de poner aquí


?>


<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Juego de adivina un número</title>
</head>
<body style="width: 60%;float:left;margin-left: 20%; ">

<h3></h3>
<fieldset style="width:40%;background:bisque ">
    <legend>Empieza el juego</legend>
    <form action="jugar2.php" method="POST" >
        <h2> El n&uacutemero es  <span style="color: blue"> <?= $numero_generado?> </span> </h2>
        <h5> Jugada  <span style="color: blue"> <?=$numero_jugada?> </span>  </h5>
        <h5> Actualmente te quedan   <span style="color: blue"> <?=$jugadas_restantes?> </span> intentos </h5>

        <input type="hidden" value="<?= $intentos ?>" name="intentos">
        <input type="hidden" value="<?= $minimo ?>" name="minimo">
        <input type="hidden" value="<?= $maximo ?>" name="maximo">
        <input type="hidden" value="<?= $numero_generado ?>" name="numero_generado">
        <input type="hidden" value="<?= $numero_jugada ?>" name="numero_jugada">
        <input type="hidden" value="<?= $jugadas_restantes ?>" name="jugadas_restantes">
        <input type="hidden" name="resultado" value="<?= $resultado ?>">

        <fieldset>
            <legend>Indica c&oacutemo es el n&uacutemero qu&eacute has pensado</legend>
            <input type="radio" name="resultado" checked value='>'> Mayor<br />
            <input type="radio" name="resultado" value='<'> Menor<br />
            <input type="radio" name="resultado" value='='> Igual<br />
        </fieldset>
        <hr />
        <input type="submit" value="Jugar" name="submit" >
        <input type="submit" value="Reiniciar" name="submit"  >
        <input type="submit" value="Volver" name="submit"  >

    </form>
</fieldset>

</body>
</html>
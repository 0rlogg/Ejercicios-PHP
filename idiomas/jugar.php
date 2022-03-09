ikkkkkkkkkkkkkkkkkkkkkukj
<?php

//Evitamos warning si accedo directamente a la página
if (!(isset($_POST['submit']))) {
    header ("Location:index.php");
    require ('Juego.php');
}

$intentos = filter_input(INPUT_POST, "num_intentos");


function jugar (&$min, &$max,$num, $jugada) {
    $estado = filter_input(INPUT_POST,"rtdo");
    switch ($estado){
        case "<":
            $min=$num;
            $num = intdiv($min+$max, 2);
            break;
        case ">":
            $max=$num;
            $num = intdiv($min+$max, 2);
            break;
        case "=":
            header ("Location:fin.php?jugada=$jugada");
            break;
            }

    return $num;

}
//Este es un modo de controlar el routeo es decir, qué evento a solicitado este recurso
switch ($_POST['submit']){
    case "empezar"://inicializar los valores
        $min =1;
        $max = pow (2,$intentos);
        $num =$max/2;
        $jugada = 1;
        $resto_intentos = $intentos-$jugada;
        break;
    case "jugar":
        $min=filter_input(INPUT_POST, "min");
        $max=filter_input(INPUT_POST, "max");
        $num=filter_input(INPUT_POST, "num");
        $jugada++;
        if ($jugada>$intentos)
            header ("Location:fin.php?jugadas=$jugada");
        $resto_intentos = $intentos-$jugada;
        $num = jugar($min, $max, $num, $jugada);
        break;
    case "reiniciar":
        echo "<h1>Reiniciando intentos a $intentos</h1>";
        break;
    case "volver":
        header("Location:index.php");
        break;
    default:
        header("Location:index.php");



}
?>


<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body style="width: 60%;float:left;margin-left: 20%; ">

<h3></h3>
<fieldset style="width:40%;background:bisque ">
    <legend>Empieza el juego</legend>
    <form action="jugar.php" method="POST" >
        <h2> El n&uacutemero es <?=$num?> ?</h2>
        <h5> Jugada <?=$jugada ?> </h5>
        <h5> Actualmente te quedan  <?=$resto_intentos ?> intentos </h5>

        <input type="hidden" value="<?= $intentos ?>" name="num_intentos">
        <input type="hidden" value="<?= $num?>" name="num">
        <input type="hidden" value="<?= $max ?>" name="max">
        <input type="hidden" value="<?= $min ?>" name="min">
        <input type="hidden" value="<?= $jugada ?>" name="jugada">
        <fieldset>
            <legend>Indica c&oacutemo es el n&uacutemero qu&eacute has pensado</legend>
            <input type="radio" name="rtdo" checked value='>'> Mayor<br />
            <input type="radio" name="rtdo" value='<'> Menor<br />
            <input type="radio" name="rtdo" value='='> Igual<br />
        </fieldset>
        <hr />
        <input type="submit" value="jugar" <?=jugar()?> name="submit" >
        <input type="submit" value="reiniciar" name="submit"  >
        <input type="submit" value="volver" name="submit"  >

    </form>
</fieldset>

</body>
</html>
<?php
$seleccionIdioma = filter_input(INPUT_GET, "idiomas") ?? "esp";
$esp = null;
$eng = null;
$fr = null;
$insertaNombre = null;

switch ($seleccionIdioma) {
    case "esp":
        $esp = "checked";
        $insertaNombre = "Inserta tu nombre";
        break;
    case "eng":
        $eng = "checked";
        $insertaNombre = "Insert your name";
        break;
    case "fr":
        $fr = "checked";
        $insertaNombre = "Insérez votre nom";
        break;
}

// acordarse de poner la parte de insertar nombre
//

?>
<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport"
    <link rel="stylesheet" href="estilo.css" type="text/css"/>
</head>
 <div>
   <form action="jugar.php" method="POST" >
    <h1>Empezar a jugar</h1>
    <h2>Aqui una explicacion del juego</h2>
       <input type="submit" value="Empezar" name="Empezar">
   </form>
 </div>
<br>
<?php ?>
    <div>
        <fieldset style="width: 50%;float:left;margin-left: 20%; background: bisque ">
         <fieldset >
            <legend>Datos de acceso</legend>
            <form action="jugar.php" method="POST" >
                Nombre
                <?php "$insertaNombre" ?><input type="text" name="nombre"><br>
                idioma
                <select name="idiomas">
                    <option value = "esp" <?= $esp ?>>Espanyol</option>
                    <option value = "eng" <?= $eng ?>>Inglés</option>
                    <option value = "fr" <?= $fr ?>>Frances</option>
                </select><br>
                <input type="submit" name="submit" value="Identificación">
            </form>
         </fieldset>
        </fieldset>
    </div>
</body>
</html>




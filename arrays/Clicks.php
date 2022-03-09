<?php

if (isset($_POST['submit'])) {

    $nombre = filter_input(INPUT_POST, 'nombre');
    $accesos =  filter_input(INPUT_POST, "accesos",FILTER_DEFAULT, FILTER_REQUIRE_ARRAY) ?? [];
    if (array_key_exists($nombre, $accesos))
        $accesos[$nombre]++;
    else
        $accesos[$nombre] = 1;

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
<form action="Clicks.php" method="POST">
    <input type="text" name="nombre" id=""><br/>
    <input type="submit" value="Acceder" name="submit">

    <?php

    if (isset($accesos)) {
        foreach ($accesos as $nombre => $clicks) {
            echo "<input type='hidden' name='accesos[$nombre]' value = '$clicks' />\n";
        }
    }


    ?>

</form>
<?php
if (isset($accesos))
    foreach ($accesos as $nombre => $clicks)
        echo "<h1>$nombre ha realizado $clicks clicks";


?>

</body>
</html>










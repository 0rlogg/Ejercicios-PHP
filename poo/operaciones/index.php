<?php
spl_autoload_register(function ($clase) {
    require "Racional2.php";
});

if (isset($_POST['submit'])) {
    $op1 = filter_input(INPUT_POST, 'op1');

    $op2 = new Racional2(filter_input(INPUT_POST, 'op2'));

    $op1 = new Racional2 ($op1);

    $operacion = filter_input(INPUT_POST, 'operador');
    switch ($operacion) {
        case '+':
            $rtdo = $op1->sumar($op2);
            break;
        case '-':
            $rtdo = $op1->restar($op2);
            break;
        case '*':
            $rtdo = $op1->multiplicar($op2);
            break;
        case '/':
            $rtdo = $op1->dividir($op2);
            break;
    }

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
    <legend>Calculadora</legend>
    <form action="index.php" method="post">
        <input type="text" name="op1" value="<?= $op1 ?? null ?>" id="">
        <select name="operador" id="">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="text" name="op2" value="<?= $op2 ?? null ?>" id=""><br/>
        <input type="submit" value="Calcular" name="submit">
    </form>
    <div>
        <?php

        if (isset($rtdo)) {
            echo "<h2>$op1$operacion$op2=$rtdo";
        }

        ?>
    </div>
</fieldset>


</body>
</html>






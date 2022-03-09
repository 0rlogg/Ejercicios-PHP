<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="estilo.css" media="screen" />
    </head>
    <body>
        <fieldset id="ayuda">
            <legend>Reglas de uso de la calculadora</legend>
            <div id=texhelp> La calculadora se usa escribiendo la operación.</div>
            <div id=texhelp> La  operación será <strong>Operando_1 operación Operando_2</strong>.</div>
            <div id=texhelp> Cada operando puede ser número <strong>real  o racional.</strong></div>
            <div id=texhelp> Real p.e. <strong>5</strong> o <strong>5.12 </strong> Racional p.e <strong> 6/3 </strong>o<strong> 7/1</strong></div>
            <div id=texhelp> Los operadores reales permitidos son <strong><font size='5' color='red'> +  -  *  /</font></strong></div>
            <div id=texhelp> Los operadores racionales permitidos son <strong><font size='5' color='red'> +  -  *  :</font> </strong></div>
            <div id=texhelp> No se deben de dejar espacios en blanco entre operandos y operación</div>
            <div id=texhelp> Si un operando es real y el otro racional se considerará operación racional</label></div>
            <div id=texhelp> Ejemplo (Real)<strong>5.1+4</strong>  (Racional)<strong>5/1:2</strong>  (Error)<strong>5.2+5/1</strong> (Error)<strong>52214+</strong> </label></div>
            

        </fieldset>
        <?php
        spl_autoload_register(function($clase) {
            require"$clase.php";
        });
        if ($_POST['enviar']) {
            //Leemos la operacion
            $operacionCadena = $_POST['operacion'];
            switch (Operacion::tipoOperacion($operacionCadena)) {
                case Operacion::RACIONAL:
                    $operacionNum = new OperacionRacional($operacionCadena);
                    $descripcion = $operacionNum->describe();
                    break;
                case Operacion::REAL:
                    $operacionNum = new OperacionReal($operacionCadena);
                    $descripcion = $operacionNum->describe();
                    break;
                case Operacion::ERROR:
                    $descripcion = " La operación <br /><strong>$operacionCadena</strong><br /> No es una operación válida";
                    break;
            }
            echo "<fieldset id=rtdo><legend>Resultado</legend>";
            echo ("<label>$descripcion</label>");
            echo "</fieldset>";
        }
        ?>
        <fieldset>
            <legend>Establece la operación</legend>
            <form action="." method="post">
                <label for="operacion">Operacion</label>
                <input type="text" name="operacion" id="">
                <input type="submit" name="enviar" value="Calcular">
                <?php
                if (isset($_POST['enviar'])) {
                    echo "<label>$operacionNum</label>";
                }
                ?>

            </form>
        </fieldset>
    </body>
</html>

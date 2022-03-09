<?php
header("refresh:5;url=index.php");

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="CSS/estilo.css" type="text/css">
    <title>Document</title>
</head>
<body>

<div class="enunciado">
    <div class="titulo center">Mostrando variables</div>
    <div class="parrafo"><span class="bold">Valores asignados</span> son los asignaciones realizadas en el progreama php </div>
    <div class="parrafo"><span class="bold">Mostrando valores</span> muestra el valor de la variable y el valor convertido a la representación deseada</div>
</div>
<div class="solucion">
    <h1>Variables en PHP</h1>
    <table border="1">
        <tr>
            <th>Valores Asignados</th>
            <th>Mostrando Valores</th>
        </tr>

        <tr><span class='msj'><td>$v=125</td> <td>Variable <span class='bold'>decimal</span>, valor <span class='variable'>-125-</span></td>
</span>
        </tr>
        <tr><span class='msj'><td>$v=0274</td><td> Variable <span class='bold'>octal</span>, valor <span class='bold'>decimal</span> <span class='variable'>-188-</span> y en <span class='bold'>octal</span> <span class='variable'>274</span><br />
</span>
        </tr>
        <tr><span class='msj'><td>$v=0xABC12</td><td>Variable <span class='bold'>hexadecimal</span>,valor <span class='bold'>decimal</span> <span class='variable'>-703506-</span> y en <span class='bold'>hexadecimal</span>  <span class='variable'>abc12</span></td>
</span>
        </tr>
        <tr><span class='msj'><td>$v=01100</td><td>Variable <span class='bold'>binaria</span>, valor <span class='bold'>decimal</span> <span class='variable'>-12-</span> y en <span class='bold'>binario</span>  <span class='variable'>1100</span></td>
</span>
        </tr>
        <tr><span class='msj'><td>$v=1.2343223000332</td><td>Variable <span class='bold'>float</span>,valor  <span class='variable'>-1.2343223000332-</span> y en <span class='bold'>notación científica</span> es <span class='variable'>1.234322e+0 </span></td>
</span>
        </tr>
        <tr><span class='msj'><td>$v=1.234000e+1</td><td>Variable <span class='bold'>float</span>,valor <span class='variable'>-12.34-</span>  y en <span class='bold'>notación científica</span> es <span class='variable'>1.234000e+1 </span></td>
</span>
        </tr>
        <tr><span class='msj'><td>$v=null</td><td>Variable <span class='bold'>null</span>  es <span class='variable'>--</span> y en string es<span class='variable'> null<span> </td>
</span>
        </tr>
        <tr><span class='msj'><td>$v=true</td><td>Variable <span class='bold'>boolean</span>,valor <sapn class='variable'>-1-</sapn> y en string es <span class='variable'>true</span></td>
</span>
        </tr>
        <tr><span class='msj'><td>$v=false</td><td>Variable <span class='bold'>boolean</span>,valor <sapn class='variable'>--</sapn> y en string es <span class='variable'>false</span></td>
</span>
        </tr>
        <tr><span class='msj'><td>$v="Esto es una cadena de caracteres"</td><td>Variable <span class='bold'>string</span>, valor  <span class='variable'>-Esto es una cadena de caracteres-</span></td>
</span>
        </tr>
        <tr><span class='msj'><td>$v='Esto es una cadena de caracteres'</td><td>Variable <span class='bold'>string</span>, valor  <span class='variable'>-Esto es otra cadena de caracteres-</span></td>
</span>
        </tr>
        <tr><span class='msj'><td>$v=<<< FIN <pre>Esto que ves,
 es una cadena
multilínea
y termina aquí</pre> FIN;</td><td>Variable <span class='bold'>string</span>, valor  <span class='variable'>-Esto que ves,
 es una cadena
multilínea
y termina aquí-</span></td>
</span>
        </tr>
        <tr><span class='msj'><td>$v=<<< FIN<br /> &lt;pre&gt;<pre>Esto que ves,
 es una cadena
multilínea
y termina aquí</pre>&lt;/pre&gt;<br /> FIN;</td><td>Variable <span class='bold'>string</span>, valor  <span class='variable'>-<pre>Esto que ves,
 es una cadena
multilínea
y termina aquí</pre>-</span></td>
</span>
        </tr>
    </table>
</div>
<div class ="enunciado">
    <h3><a href="index.php">Volver</a></h3>
</div>

</div>
</body>
</html>


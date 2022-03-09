<body>
<?php
include_once("agenda.php")
?>

<table width="200" border="1">
    <?php
    $agenda =new agenda()
    ?>
    <tr>
        <th scope="col"><h1>Nombre</h1></th>
        <th scope="col"><h1>Apellidos</h1></th>
        <th scope="col"><h1>Teléfono</h1></th>
        <th scope="col"><h1>Detalles</h1></th>
    </tr>
    <tr>
        <td><?php echo $agenda->getPersona(0)->getNombre(); ?></td>
        <td><?php echo $agenda->getPersona(0)->getApellidos(); ?></td>
        <td><?php echo $agenda->getPersona(0)->getTelefono(); ?></td>
        <td><?php echo "<a href='persona.php?posicion=0'>Ver</a>"; ?></td>
    </tr>
    <tr>
        <td><?php echo $agenda->getPersona(1)->getNombre(); ?></td>
        <td><?php echo $agenda->getPersona(1)->getApellidos(); ?></td>
        <td><?php echo $agenda->getPersona(1)->getTelefono(); ?></td>
        <td><?php echo "Ver"; ?></td>
    </tr>
    <tr>
        <td><?php echo $agenda->getPersona(2)->getNombre(); ?></td>
        <td><?php echo $agenda->getPersona(2)->getApellidos(); ?></td>
        <td><?php echo $agenda->getPersona(2)->getTelefono(); ?></td>
        <td><?php echo "Ver"; ?></td>
    </tr>

</table>

</body>
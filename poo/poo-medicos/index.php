<?php
spl_autoload_register(function ($nombre_clase) {
    include ('PersonaAmbulatorio.php');
    include ('Conserje.php');
    include ('Enfermera.php');
    include ('Medica.php');

});

$medico1 = new Medica("María", "Martínez", "Casa de María", 29, "Cardiólogía");
$medico2 = new Medica("Luis", "Pérez", "Casa de Luis", 38, "Pediatría");
$medico3 = new Medica("Nieves", "Ruiz", "Casa de Nieves", 44, "Dermatología");
$conserje = new Conserje("Soledad", "Viruela", "Casa de Soledad", 58, "Mostrador Entrada");
$enfermera = new Enfermera("Javier", "Moreno", "Casa de Javier", "general", 1990);
$enfermera2 = new Enfermera("Luis", "Perez", "Casa de Javier", "general", 1990);


$conserje->avisoEnfermera($enfermera, "Realizar cura en brazo Señor Martínez NSS 50/2155441/35");

$enfermera->avisoMedico($medico3, "Paciente con toss y fiebre");

$enfermera2->avisoMedico($medico2, "Paciente con toss y fiebre");
$enfermera2->avisoMedico($medico2, "Paciente con Vómitos");
$enfermera2->avisoMedico($medico3, "Paciente con pie torcido, impresión de rotura");


$conserje->avisoMedico($medico1, "Visitar en casa con mucha fiebre", "Visita");
$conserje->avisoMedico($medico1, "Problemas para desplazarse ", "Visita");
$conserje->avisoMedico($medico2, "Mareos y vétigos", "Visita");
$conserje->avisoMedico($medico2, "Persona mayor con poca mobilidad", "Visita");
$conserje->avisoMedico($medico3, "Niño pequeño con fiebre", "Visita");
$conserje->avisoMedico($medico1, "Caída en el parque", "Consulta");
?>

<html>
<head>
    <meta charset="UTF-8">
    <title></title>
    <style type="text/css">

    </style>
    <link rel="stylesheet" href="./stilo.css" type="text/css"/>
</head>
<body>
<?php
echo "$medico3";
echo "$medico1";
echo "$medico2";
// put your code here
?>
</body>
</html>
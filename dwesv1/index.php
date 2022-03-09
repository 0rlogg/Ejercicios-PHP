<?php
error_reporting(E_ALL);
ini_set("display_errors", true);
//1º conectamos a la base de datos
$host = "172.17.0.3";
$user = "root";
$pass = "root";
try {
    $conexion = new mysqli($host, $user, $pass);
} catch (Exception $error) {
    echo "<h1>Error conectando" . $error->getMessage() . " </h1>";
//    echo "Error en la conexión " . $conexion->connect_error;
    exit();
}
echo "<h1>Estoy conectado correctamente</h1>";
$conexion->select_db("alumnos");
for ($n=0; $n<50; $n++) {
    $edad = rand(1, 50);
    $insertar = <<<FIN
  insert into alumno
  values
  ("Manuel", "Romero", $edad)
FIN;
    $resultado = $conexion->query($insertar);
//    if ($resultado)
//        echo "<h1>Se ha realizado 1 inserciones</h1>";
//    else
//        echo "<h1>Error insertando -$insertar-</h1>";
}
$sentencia = "delete from alumno where edad>25";
$resultado = $conexion->query($sentencia);
if ($resultado)
    echo "<h1>Se han borrado $conexion->affected_rows filas</h1>";
else
    echo "<h1>Error borrando $sentencia-</h1>";
$sentencia ="select * from alumno where edad <5" ;
$resultado = $conexion->query($sentencia);
$fila = $resultado->fetch_object();
while ($fila){
    echo "<h1>Nombre = $fila->nombre</h1>";
    echo "<h1>Apellido = $fila->apellidos</h1>";
    echo "<h1>Edad = $fila->edad</h1>";
    echo "<hr />";
    $fila = $resultado->fetch_object();
}
var_dump($resultado);
?>
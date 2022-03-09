<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php


//Defino dos variables con mi nombre y apellidos
$nombre = "\"Daniel\"";
$apellido = "\"Miranda\"";

//Visualizo el texto con echo y print, por ejemplo en mi caso (deben de aparecer las comillas del ejemplo
// mi nombre es "Manuel" y mi apellido es "Romero"
echo "Mi nombre es " ."$nombre". " y mi apellido es " ."$apellido". "<br />";
print("Mi nombre es " .$nombre. " y mi apellido es " .$apellido. "<br /><br />");

//1)con echo pasando varios argumentos (separadados por coma)
$nombre = "Daniel";
$apellido = "Miranda";
echo "Mi nombre es " ."$nombre". " y mi apellido es " ."$apellido". "<br />";

//2)con print
 print("Mi nombre es " .$nombre. " y mi apellido es " .$apellido. "<br /><br />");

//3,4 y 5)Explica en el fichero diferencias entre echo y print y semejanzas.
echo "<h1>Diferencias EJ 3, 4, 5</h1>";
echo "<strong>Print</strong> tiene un valor de retorno de 1, por lo que se puede usar en expresiones, print solo puede imprimir una cadena
cada vez que sea llamada." ."<br />";
echo "<strong>Echo</strong> tiene un tipo de retorno void, puede tomar multiples parametros aunque su uso es raro,
      echo es ligeramente mas rapido que print, echo puede imprimir varias cadenas a la vez." ."<br />";
echo "<h1>Semejanzas</h1>";
echo "Las semejanzas entre echo y print son que ambas funciones nos permiten mostrar un output en pantalla
 y ambas funciones no llevan paréntesis al momento de llamarlas."."<br />";

//6) Indica Por qué puedes pasar los argumentos sin usar paréntesis
echo "<h1> Indica Por qué puedes pasar los argumentos sin usar paréntesis EJ - 6</h1>";
echo "Porque en este lenguaje hay algunas funciones de salida que no son tratadas como funciones lo que hace que
no necesiten usar parentesis obligatoriamente, aunque se suele recomendar usarlo.";

/*7) Sintaxis heredoc,*/
//Asigna a una variable llamada informe un texto de cinco líneas,
//la etiqueta de finalización es FIN
//Posteriormente visualizas el texto
// El contenido de 'informe' es:
//   ........
// aquí aparecer el contenido del informe
// debe de respetarse el número de 5 líneas asignadas previamente";
//Tener cuidado con que la etiqueta no lleve en esa línea ningún otro carácter (espacios en blanco o tabulacones)
echo "<h1>Sintaxis heredoc EJ - 7</h1>";
$informe = <<<FIN
PHP es un lenguaje
de codigo abierto
muy popular
especialmente adecuado
para el desarrollo web.
FIN;

echo $informe;

/*PROBANDO VARIABLES (del 8 al 19)*/
echo"<h1>Probando variables EJ 8 - 19</h1>";
//Crea una variable y asígnale un valor
$numero = 10;
//visualiza el valor de la variable y el tipo que eś
echo "valor de variable: ".($numero)."<br/>";
echo "Tipo de variable: " .gettype($numero)."<br/>";

//Cambia la variable a los siguientes tipos :boolean, float, string y null,  y visualizar su valor y tipo
$variablenodefinida;

$numero = true ;
echo "valor de variable: ".($numero)." La variable numero cambio a tipo: ".gettype($numero)."<br/>";
$numero = null ;
echo "valor de variable: ".($numero)." La variable numero cambio a tipo: ".gettype($numero)."<br/>";
$numero = "diez" ;
echo "valor de variable: ".($numero)." La variable numero cambio a tipo: ".gettype($numero)."<br/>";
$numero = 10.1 ;
echo "valor de variable: ".($numero)." La variable numero cambio a tipo: ".gettype($numero)."<br/>";

//Prueba a ver el valor y tipo de una variable no definida previamente
echo "valor de variable: ".($variablenodefinida)." La variable no definida es de tipo: ".gettype($vvariablenodefinida)."<br/>";


/* 20)Visualiza el código ascii del valor 64 al 122 en carácter usando la función ascii  .. puedes usar la función printf o  bien char() ..*/
echo "<h1>Codigo ascii</h1>";
for ($i = 64; $i<122; $i++){
    $caracter = chr($i);
   printf($caracter);
}

$str =chr($i); /* añade un carácter de escape al final de  $str */
echo $str ."<br/>";

//21)Visualiza el contenido de la función time() y explica su valor
echo "<h1>Valor de funcion time</h1>";
echo "La variable time  devuelve el momento actual medido como el número de segundos desde la Época Unix
 (1 de Enero de 1970 00:00:00 GMT)." ."<br/>";
echo time();

//22)Obtén la fecha actual y visualiza su valor con formato dia-mes-año en número usa la función date() para ello
echo "<h1>Fecha actual</h1>";
echo date('d-m-Y  h:i:s', strtotime("now")), "<br/>";

//23,24,y 25)Obtener los días, luego horas y luego minutos transcurridos desde el 1/1/1970 (round() o floor() para redondear
$dias = floor(time() /(86400))." dias";
$horas = floor(time() /(60*60))." horas";
$minutos = floor(time() /60)." minutos";
echo "<h1>Ej 23, 24 y 25</h1>";

echo $dias."<br/>";
echo $horas."<br/>";
echo $minutos."<br/>";

//Usando la función setlocale(...) y strftime(...)
//Puede ser que tengas que habilitar el idioma en el sistema con locale-gen
//26)  Obtén la fecha actual con formato por ejemplo domingo, 28 de octubre de 2018
echo "<h1>Ej 26</h1>";
setlocale(LC_TIME, 'spanish');
echo strftime("%e %B %Y")."<br/>";

//27)  Ahora con formato en inglés  Sunday, 28 October 2018
setlocale(LC_TIME, 'english');
echo strftime("%e %B %Y")."<br/>";

//28) y con formato en francés  dimanche, 28 octobre 2018
setlocale(LC_TIME, 'french');
echo strftime("%e %B %Y")."<br/>";


// 29-30)Asigna a una variable la fecha de tu cumpleaños
echo "<h1>Ej 29 - 30</h1>";
$cumple = new DateTime("1997-06-15");

echo "La fecha del <span style='color:blue'>{$cumple->format('d-m-Y')}</span> es mi cumpleaños<br>";
$time = new DateTime(date("Y-m-d"));
$resta = $time->diff($cumple);
echo "Tienes ".$resta->format("%y")." años ".$resta->format("%m")." meses ".$resta->format("%d")." dias<br>";
// Realiza una operación y obtén tu edad en años, meses y días (valor entero).
// tienes 23 años, 10 meses y 4 días\


//31-32) Asigna a una variable una fecha de 30/10/1969 (mira las funciones strtotime() o bien mktime() para ello
$fechanacimiento = "10/30/1969";
// Obtén su edad en años, en meses y luego en días siempre redondeando
// tienes xx años
// tienes xx meses
// tienes xx días
$time_fecha_nacim = strtotime($fechanacimiento);
echo "La edad en Unix del 30/10/1969 es <span style='color:blue'>$time_fecha_nacim</span><br>";

$edad_unix = time() - $time_fecha_nacim;
$anyonacimiento = floor( $edad_unix / (60*60*24*365));
$mesesnacimiento = strftime('%m',$edad_unix);
$diasnacimiento = strftime('%d',$edad_unix);
echo "Tienes " .$anyonacimiento  ." años,<br>tienes ".$mesesnacimiento." meses,<br>tienes " .$diasnacimiento ." dias<br>";



//33-36). Usa la función getdate(...) y visualiza con la función print_r(.) el valor que retorna, comenta el resultado
echo "<h1>Funcion getdate EJ 33 - 36</h1>";
$time = time();
$getDate = getdate($time);
$datos = print_r(getdate(),true);
echo"La funcion getdate() da como resultado:<br> $datos<br/>";

echo "El valor devuelto es un array con los valores del timestamp actual partido en variables, las cuales especifican los segundos actuales, minutos, horas,
 el dia, dia de semana, numero de mes, numero de año, dia del año,nombre del dia de la semana, nombre del mes y el valor de time()<br>";

//. Si escribo getdate(1) podrías explicar el contenido del array que nos retorna
$getdate1 = getdate(1);
var_dump($getdate1);

echo "<br>Al poner getdate(1) le estamos pasando 1 segundo, por lo que muestra el 1 de Enero de 1970 +1 segundo<br/>";

//. Obtener la edad de una persona nacida el 1/1/1969
$cumple = new DateTime("1969-01-01");
$time = new DateTime(date("Y-m-d"));
$resta = $time->diff($cumple);
echo " Esta persona tiene ".$resta->format('%y')." años<br/>";


//37-64)Explica el siguiente código observando el resultado que se produce fuente obtenido en parte de http://php.net/manual/es/function.strtotime.php
echo "<hr>";
echo "37-) ".strtotime("now"), ": Devuelve la fecha Unix obtenida hasta el momento gracias al string 'now'<br/>";
echo "38-) ".date('d-m-Y', strtotime("now")), ": Hace lo mismo que lo anterior pero dandole un formato de fecha<br/>";
echo "39-) ".strtotime("27 September 1970"), ": Devuelve los segundos transcurridos desde el 1/1/1970 hasta el 27/09/1970 <br/>";
echo "40-) ".date('d-m-Y',strtotime("10 September 2000")), ": Da formato de fecha a los segundos obtenidos hasta el 10/09/2000<br/>";
echo "41-) ".strtotime("+1 day"), ": Suma los segundos correspondientes a un dia a la fecha Unix actual<br/>";
echo "42-) ".date('d-m-Y',strtotime("+1 day")), ": Hace lo mismo que lo anterior pero dandle un formato de fecha<br/>";
echo "43-) ".strtotime("+1 week"), ": Suma los segundos correspondientes a una semana a la fecha Unix actual<br/>";
echo "44-) ".date('d-m-Y',strtotime("+1 week")), ": Hace lo mismo que lo anterior pero dandole formato de fecha<br/>";
echo "45-) ".strtotime("+1 week 2 days 4 hours 2 seconds"), ": Suma los segundos correspondientes  a una semana, dos dias, cuatro horas y dos segundos a la fecha Unix actual<br/>";
echo "46-) ".date('d-m-Y',strtotime("+1 week 2 days 4 hours 2 seconds")), ": Hace lo mismo que lo anterior pero dandole un formato de fecha<br/>";
echo "47-) ".strtotime("next Thursday"), ": Suma a la fecha Unix actual los segundos correspondientes que habran pasado hasta el siguiente jueves<br/>";
echo "48-) ".date('d-m-Y',strtotime("next Thursday")), ": Hace lo mismo que lo anterior pero dandole formato de fecha<br/>";
echo "49-) ".strtotime("last Monday"), ": Recoge los segundos que habian pasado hasta el anterior Lunes<br/>";
echo "50-) ".date('d-m-Y',strtotime("last Monday")), ": Hace lo mismo que lo anterior pero dandole formato de fecha<br/>";
echo "<hr>";
?>

</body>
</html>
<?php
require "Racional.php";

$r1 = new Racional("75/6");
$r2 = new Racional("5/6");

$r3 = $r1->sumar($r2);
echo "$r1+$r2 = $r3"
//$r1 = new Racional(12,7);
//echo $r1 -> ver_Racional();
//echo "valor del objeto r1 $r1";
?>
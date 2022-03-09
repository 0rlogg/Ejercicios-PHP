<?php
$productos = [
   'lechuga' => ['unidades' => 100, 'precio' => 100],
   'tomates' => ['unidades' => 200, 'precio' => 200],
   'cebollas'=> ['unidades' => 300, 'precio' => 300],
   'fresas'  => ['unidades' => 400, 'precio' => 400],
   'manzanas'=> ['unidades' => 500, 'precio' => 500]
];

foreach ($productos as $producto => $contenido) {
    echo "el productor $producto vale {$contenido['precio']} euros <br/>";}
?>


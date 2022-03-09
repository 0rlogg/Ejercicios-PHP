<?php

$capitales = ["España" => "Madrid",
              "Italia" => "Roma",
              "Alemania" => "Berlin"];

foreach ( $capitales as $indice => $valor) {
    echo "<h2>Capital de $indice  es $valor</h2>";
}
?>
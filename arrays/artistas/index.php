<?php

 require "datos.php";

foreach($artistas ?? null as $artista ){
    echo "<h1><a href='{$artista['link']}'>{$artista['name']}</a>{$artista['decades']}</h1>";
    foreach($artista['songs'] as $cancion){
        echo "<a href='{$cancion['link']}'>{$cancion['title']}</a><br>";
    }
}
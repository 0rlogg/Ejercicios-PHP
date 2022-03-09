<?php

$arrayimg = [
"https://image.shutterstock.com/image-photo/young-woman-skateboarder-skateboarding-city-600w-664570948.jpg",
"https://gratisography.com/wp-content/uploads/2019/05/shutterstock-its-not-stock-block-new.jpg",
"https://www.cerotec.net/data/fotos/gratisography.jpg",
"https://cdn.pixabay.com/photo/2019/09/29/20/34/athens-4514311__340.jpg",
"https://cdn.pixabay.com/photo/2019/10/24/18/36/forest-4574893__340.jpg",
"https://cdn.pixabay.com/photo/2015/09/26/13/25/halloween-959049__340.jpg",
"https://cdn.pixabay.com/photo/2019/09/11/09/27/people-4468350__340.jpg",
"https://cdn.pixabay.com/photo/2019/10/23/18/58/malai-4572548__340.jpg",
"https://cdn.pixabay.com/photo/2019/06/25/05/19/waterfall-4297450__340.jpg",
"https://cdn.pixabay.com/photo/2019/10/23/10/47/aesthetic-4571211__340.jpg",
"https://cdn.pixabay.com/photo/2019/10/23/18/32/freudenberg-4572410__340.jpg"];

$indices = array_rand($arrayimg, 3);
var_dump($indices);
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta HTTP-EQUIV=Refresh CONTENT="5";>
    <title>Document</title>
</head>
<body>
<img src="<?= $indices?>" alt="">

</body>
</html>

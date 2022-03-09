<?php

$rolls = 1000000;
$sides = 6;

$results = array();

for($i = 0; $i < $rolls; $i++) {
$results[] = rand(1,$sides);
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
  <?php
  echo "Each roll:<ul><li>";
  echo implode("</li><li>", $results);
  echo "</li></ul>";

  $total = array_sum($results);

  echo "Total: $total<br>";
  echo "Average: ". $total / count($results);?>
</body>
</html>

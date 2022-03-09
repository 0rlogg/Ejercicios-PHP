<?php

$num1 = 0;
$num2 = 0;
$num3 = 0;
$num4 = 0;
$num5 = 0;
$num6 = 0;


for ($i=0; $i < 100000000 ; $i++)
 {
   $n_dado = rand (1,6);
switch ($n_dado) {
  case 1:
    $num1++;
    break;
  case 2:
    $num2++;// code...
    break;
  case 3:
    $num3++;// code...
    break;
  case 4:
    $num4++;// code...
    break;
  case 5:
    $num5++;// code...
    break;
  case 6:
    $num6++;// code...
    break;
}
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

echo "1 ha salido: " . $num1 . "</br>";
echo "2 ha salido: " . $num2 . "</br>";
echo "3 ha salido: " . $num3 . "</br>";
echo "4 ha salido: " . $num4 . "</br>";
echo "5 ha salido: " . $num5 . "</br>";
echo "6 ha salido: " . $num6 . "</br>";
?>
</body>
</html>

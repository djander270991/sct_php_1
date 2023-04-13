<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<?php
$x1 = rand(-100,100);
if ($x1>= -100 && $x1 <=100) {
echo "переменная x1 = $x1 <br>";
};
$x2 = rand(-100,100);
if ($x2 >=-100 && $x2 <=100) {
echo "переменная x2 = $x2 <br>";
};
$x3 = rand(-100,100);
if (($x3 >= -100 && $x3 <=100)) {
echo "переменная x3 = $x3 <br>";
};

?>
</body>

</html>
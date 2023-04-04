<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<a href="index.php">index page</a><br>
    <a href="1.php">This page</a><br>
    <a href="2.php">2 page</a><br>
    <a href="3.php">3 page</a><br>
    <?php
    $a = 12;
    $b= 10;
    ?>
    <h1>Математические вычисления</h1>
    <?=("$a + $b = ". $a + $b)?><br>
    <?=("$a - $b = ". $a + $b)?><br>
    <?=("$a % $b = ". $a % $b)?><br>
    <?=("$a / $b = ". $a / $b)?><br>
    <?=("$a * $b = ". $a * $b)?><br>
</body>

</html>
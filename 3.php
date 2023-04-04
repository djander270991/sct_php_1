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
    <a href="1.php">1 page</a><br>
    <a href="2.php">3 page</a><br>
    <a href="3.php">This page</a><br>
    <h1>Деление и остаток</h1>
    <?php
    $a = 23;
    $b = 7;
?>
<p>Целочисленное деление: <?= "$a / $b = ". $a / $b?> В результате получили число с плавующей точкой.</p> 
<p>Остаток от деления: <?= "$a % $b =". $a % $b?></p>
    
</body>
</html>
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
    <a href="2.php">This page</a><br>
    <a href="3.php">3 page</a><br>
    <?php
    $a = "456";
    $b = "969294233720368754775807";
    ?>
    <h1>Приведение строки в число</h1>
   <p> Переменные являються строками:
    <?= var_dump($a) ?> ,
    <?= var_dump($b) ?></p>
   <p> Приведем их к числовому типу: <?= (int)$a ?><br>
  <?= (int)$b ?> число уменьшилось,так как это предел числа в 64 разрядной операционной системе</p>
   <p>Проверим: <?= var_dump((int)$a) ?>,
    <?= var_dump((int)$b) ?></p>
</body>
</html>
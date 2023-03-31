<?php
$name = 'Ярослав';
$residential_address = 'Артельная 11а';
$residence_address = 'Ботвина 10';
$age = '32';
$floor = 'мужской';
$path_index = '../index.php';
$path_1page = '1.php';
$path_2page = '2.php';
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
<ul><a href="<?= $path_index ?>">Index</a> </ul>
<ul><a href="<?= $path_1page ?>" >1 страница</a></ul>
<ul><a href="<?= $path_2page ?>">2 страница</a></ul>
<h1>Добро пожаловать <?= $name?>!!</h1>
<p>Ваш адрес проживания: <?= $residential_address?></p>
<p>Ваш адрес прописки: <?= $residence_address?></p>
<p>Ваш возраст: <?= $age ?></p>
<p>Ваш пол: <?= $floor ?></p>
</body>
</html>

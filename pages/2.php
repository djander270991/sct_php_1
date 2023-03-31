<?php
$img1 = '../img/388.png';
$img2 = '../img/nepokolebimost.jpg' ;
$img3 = '../img/pererojdenie.jpg' ;
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
<img src="<?= $img1 ?>" alt="1img"><br>
<img src="<?= $img2 ?>" alt="1img"><br>
<img src="<?= $img3 ?>" alt="1img"><br>
<?php
$img2 = '../img/pix.jpg';
$img3 = '../img/russia1.jpg';
?>
<img src="<?= $img2 ?>" alt="1img"><br>
<img src="<?= $img3 ?>" alt="1img"><br>

</body>
</html>

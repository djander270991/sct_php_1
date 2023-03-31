<?php
$page_name = 'index.php';
$path_index = 'index.php';
$path_1page = 'pages/1.php';
$path_2page = 'pages/2.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?= $page_name ?></title>
</head>
<body>
<ul><a href="<?= $path_index ?>">Index</a> </ul>
<ul><a href="<?= $path_1page ?>" >1 страница</a></ul>
<ul><a href="<?= $path_2page ?>">2 страница</a></ul>

<h2><?= $page_name ?></h2>


</body>
</html>
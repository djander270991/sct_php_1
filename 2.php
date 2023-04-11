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
$x = '';
$c = isset($x);
var_dump($c);//bool(true)
$x = null;
$c = isset($x);
var_dump($c);//bool(false)
$x;
$c = isset($x);
var_dump($c);//bool(false)
$x = [];
$c = isset($x);
var_dump($c);//bool(true)
$x = ['a','b'];
$c = isset($x);
var_dump($c);//bool(true)
$x = false;
$c = isset($x);
var_dump($c);//bool(true)
$x = true;
$c = isset($x);
var_dump($c);//bool(true)
$x = 1;
$c = isset($x);
var_dump($c);//bool(true)
$x = 42;
$c = isset($x);
var_dump($c);//bool(true)
$x = 0;
$c = isset($x);
var_dump($c);//bool(true)
$x = -1;
$c = isset($x);
var_dump($c);//bool(true)
$x = "1";
$c = isset($x);
var_dump($c);//bool(true)
$x = "0";
$c = isset($x);
var_dump($c);//bool(true)
$x = "-1";
$c = isset($x);
var_dump($c);//bool(true)
$x = "php";
$c = isset($x);
var_dump($c);//bool(true)
$x = "true";
$c = isset($x);
var_dump($c);//bool(true)
$x = "false";
$c = isset($x);
var_dump($c);//bool(true)
?>
</body>

</html>
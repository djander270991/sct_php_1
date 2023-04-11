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
$c = (bool)$x;
var_dump($c);//bool(false)
$x = null;
$c = (bool)$x;
var_dump($c);//bool(false)
$x;
$c = (bool)$x;
var_dump($c);//bool(false)
$x = [];
$c = (bool)$x;
var_dump($c);//bool(false)
$x = ['a','b'];
$c = (bool)$x;
var_dump($c);//bool(true)
$x = false;
$c = (bool)$x;
var_dump($c);//bool(false)
$x = true;
$c = (bool)$x;
var_dump($c);//bool(true)
$x = 1;
$c = (bool)$x;
var_dump($c);//bool(true)
$x = 42;
$c = (bool)$x;
var_dump($c);//bool(true)
$x = 0;
$c = (bool)$x;
var_dump($c);//bool(false)
$x = -1;
$c = (bool)$x;
var_dump($c);//bool(true)
$x = "1";
$c = (bool)$x;
var_dump($c);//bool(true)
$x = "0";
$c = (bool)$x;
var_dump($c);//bool(false)
$x = "-1";
$c = (bool)$x;
var_dump($c);//bool(true)
$x = "php";
$c = (bool)$x;
var_dump($c);//bool(true)
$x = "true";
$c = (bool)$x;
var_dump($c);//bool(true)
$x = "false";
$c = (bool)$x;
var_dump($c);//bool(true)
?>
</body>

</html>
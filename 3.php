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
$c = empty($x);
var_dump($c);//bool(true)
$x = null;
$c = empty($x);
var_dump($c);//bool(true)
$x;
$c = empty($x);
var_dump($c);//bool(true)
$x = [];
$c = empty($x);
var_dump($c);//bool(true)
$x = ['a','b'];
$c = empty($x);
var_dump($c);//bool(false)
$x = false;
$c = empty($x);
var_dump($c);//bool(true)
$x = true;
$c = empty($x);
var_dump($c);//bool(false)
$x = 1;
$c = empty($x);
var_dump($c);//bool(false)
$x = 42;
$c = empty($x);
var_dump($c);//bool(false)
$x = 0;
$c = empty($x);
var_dump($c);//bool(true)
$x = -1;
$c = empty($x);
var_dump($c);//bool(false)
$x = "1";
$c = empty($x);
var_dump($c);//bool(false)
$x = "0";
$c = empty($x);
var_dump($c);//bool(true)
$x = "-1";
$c = empty($x);
var_dump($c);//bool(false)
$x = "php";
$c = empty($x);
var_dump($c);//bool(false)
$x = "true";
$c = empty($x);
var_dump($c);//bool(false)
$x = "false";
$c = empty($x);
var_dump($c);//bool(false)
//bool(true) bool(true) bool(true) bool(true) bool(true) bool(true) bool(false) 
// bool(false) bool(false) bool(true) bool(false) bool(false) bool(true) bool(false)
//  bool(false) bool(false) bool(false)
?>
</body>

</html>
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
function  getResult($a,$b,$action){
    switch($action){
        case 'sum':
        echo $a + $b;
            break;
        case 'difference':
        echo $a - $b;
            break;
        case 'multiplication':
         echo  $a * $b;
            break;
        case 'division':
         echo $a / $b;
            break;
default:
echo 'sum,difference,multiplication,division';
break;
    }

}
getResult(1,3,'difference');
?>
</body>

</html>
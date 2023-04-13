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
$x1 = rand(-100,100);
echo "переменная x1 = $x1 <br>";
$x2 = rand(-100,100);
echo "переменная x2 = $x2 <br>";
;
$x3 = rand(-100,100);
echo "переменная x3 = $x3 <br>";

if( $x1<=$x2 && $x2<=$x3){
    echo "$x1 $x2 $x3";
}
elseif( $x1<=$x3 && $x3<=$x2){
    echo "$x1 $x3 $x2";
}
elseif( $x2<=$x1 && $x1<=$x3){
    echo "$x2 $x1 $x3";
}
elseif( $x2<=$x3 && $x3<=$x1){
    echo "$x2 $x3 $x1";
}
elseif( $x3<=$x2 && $x2<=$x1){
    echo "$x3 $x2 $x1";
}
elseif( $x3<=$x1 && $x1<=$x2){
    echo "$x3 $x1 $x2";
}
elseif($x1 = $x2 && $x2 = $x3){
    echo " переменные равны";
}
else {
    echo 'все числа равны';
}
?>
</body>

</html>
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
// Функция вычесляет наименьшее значение,третий параметр не обязателен,
// $x3 выставленно максимально значение что бы он не влиял если введено только два.
// Так как если ставить пустую строку или false они равны 0.
// А так же переменные приводятся к числовому типу.
//@param int $x1,$x2,$x3
//return int


function minimumNumber($x1, $x2, $x3=9223372036854775807){
if( $x1<=$x2 && $x1<=$x3){
    echo (int)$x1;
}
elseif( $x2<=$x1 && $x2<=$x3){
    echo (int)$x2;
}

elseif( $x3<=$x2 && $x3<=$x1){
    echo (int)$x3;
}

}
// elseif($x1 = $x2 && $x2 = $x3){
//     echo " переменные равны";
// }
// else {
//     echo 'все числа равны';
// }

minimumNumber(100,13);


?>

</body>

</html>
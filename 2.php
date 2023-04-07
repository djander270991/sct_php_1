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
$page = 2;
if ($page == 1) {
echo '<a href="1.php"><b>Страница 1</b></a>';   
}else {
   echo '<a href="1.php">Страница 1</a>';
}
if ($page == 2) {
    echo '<a href="2.php"><b>Страница 2</b></a>';   
    }else {
       echo '<a href="2.php">Страница 2</a>';
    }
    if ($page == 3) {
        echo '<a href="3.php"><b>Страница 3</b></a>';   
        }else {
           echo '<a href="3.php">Страница 3</a>';
        }
?>
<p>Сортировка переменныx</p>
<?php
$a = rand(-10,30);
$b = rand(-10,30);
$c = rand(-10,30);
echo $a.'<br>';
echo $b.'<br>';
echo $c.'<br>';
if($a <= $b && $a<= $c && $b<=$c) {
    echo "$a,$b,$c";
} 
elseif($a <= $b && $c<= $b &&$a <$c) {
    echo "$a,$c,$b";
} 


elseif($b<=$a &&  $b<=$c && $a<=$c){
    echo "$b,$a,$c";
}
elseif($b<=$a &&  $c<=$a && $b<= $c){
    echo "$b,$c,$a";
}
elseif($c<=$a &&  $c<=$b && $a<=$b){
    echo "$c,$a,$b";
}
elseif($c<=$a &&  $b<=$a && $c<=$b){
    echo "$c,$b,$a";
}
?>

</body>

</html>
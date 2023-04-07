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
$page = 1;
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
    <div>
        <?php
$int = rand(-20,20);
echo $int.'<br>';
if ($int >= 0) {
    echo 'число положительное';
} else {
   echo 'число отрицательное';
}

?>
    </div>


</body>

</html>
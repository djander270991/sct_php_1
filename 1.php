<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 10</title>
</head>

<body>
<h1>Lesson 10</h1>
<?php
$a = rand(1,20);
switch ($a) {
    
 case 1:
        echo "заданное число = $a,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20";
        break;
  case 2:
        echo "заданное число = $a,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20";
        break;
  case 3:
        echo "заданное число = $a,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20";
        break;
  case 4:
        echo "заданное число = $a,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20";
        break;
  case 5:
        echo "заданное число = $a,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20";
        break;
  case 6:
        echo "заданное число = $a,7,8,9,10,11,12,13,14,15,16,17,18,19,20";
        break;
  case 7:
        echo "заданное число = $a,8,9,10,11,12,13,14,15,16,17,18,19,20";
        break;
  case 8:
        echo "заданное число = $a,9,10,11,12,13,14,15,16,17,18,19,20";
        break;
 
  case 9:
            echo "заданное число = $a,10,11,12,13,14,15,16,17,18,19,20";
            break;
 
  case 10:
            echo "заданное число = $a,11,12,13,14,15,16,17,18,19,20";
            break;
            
  case 11:
    echo "заданное число = $a,12,13,14,15,16,17,18,19,20";
    break;
    
  case 12:
    echo "заданное число = $a,13,14,15,16,17,18,19,20";
    break;
    
  case 13:
    echo "заданное число = $a,14,15,16,17,18,19,20";
    break;
    
  case 14:
    echo "заданное число = $a,15,16,17,18,19,20";
    break;
    
  case 15:
    echo "заданное число = $a,16,17,18,19,20";
    break;
    
  case 16:
    echo "заданное число = $a,17,18,19,20";
    break;
    
  case 17:
    echo "заданное число = $a,18,19,20";
    break;
    
  case 18:
    echo "заданное число = $a,19,20";
    break;
    
  case 19:
    echo "заданное число = $a,20";
    break;
    
  case 20:
    echo "заданное число = $a";
    break;
  
    default:
        echo "Что-то пошло не так...";
        break;
  }
  echo '<br>';
echo' Можно значительно сократить запись с помощью цикла <br>';

echo "Заданое число $a ";
while($a < 20){
    ++$a;
    echo "$a ";
}
?>
</body>

</html>
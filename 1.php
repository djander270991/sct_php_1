<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 12</title>
</head>

<body>
<h1>Lesson 12</h1>
<?php
//humanInfo -выдает информацию о имени($name),возрасте($age) ,адресе ($adress) человека.$stringYears - описание возраста.
//Возраст и адресс являються необязательным параметром.Выводяться только в случае заполнения.
//@param string $name имя
//@param bool $age возраст
//@param bool $address адрес
//@0return string
function humanInfo($name, $age = false, $address = false){
  $stringYears = '';

  switch ($age) {
    case 0:
      $stringYears = 'лет';
      case $age>4 && $age<21:
        $stringYears = 'лет';
        break;
        case $age>104 && $age<121:
          $stringYears = 'лет';
          break;
      case $age % 10 == 1:
          $stringYears = ' год';
          break;
       case $age % 10 <5 && $age %10 >1:
        $stringYears = 'года';
        break;
    default:
    $stringYears = 'лет';
     
      break;
  }
  $name = "Имя: $name <br>";
  if($age){
  $age = "Возраст: $age $stringYears <br>";
  }
  if($address){
$address = "Адрес:$address <br>";
  }
  
  echo " $name  $age   $address ";
}
humanInfo('Yaroslav','32','Astrakhan');
?>
</body>

</html>
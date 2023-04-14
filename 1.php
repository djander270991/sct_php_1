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
function humanInfo($name,$age,$address){
  $stringYears = '';
  // if ($age % 10 == 1){
  //   $stringYears = 'год';
  //   elseif ($age % 10 == ) {
  //     # code...
  //   }
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
  
  echo "Вас зовут: $name <br> Ваш возраст:$age $stringYears<br> Ваш адрес: $address <br>";
}
humanInfo('Yaroslav',rand(1,120),'Artelnay 11a')
?>
</body>

</html>
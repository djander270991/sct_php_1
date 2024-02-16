<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
     <input type="text" name="number1" placeholder="Первое число">
      <select name= "operation">
    <option value="plus">+</option>
    <option value="minus">-</option>
    <option value="multiply">*</option>
    <option value="divide">/</option>
</select>
  <input type="text" name="number2" placeholder="Второе число">
  <input type="submit" name='submit' value='Посчитать'>
</form>
<?php 
if(isset($_POST['submit'])){
      $number1 = $_POST['number1'];
      $number2 = $_POST['number2'];
      $operation = $_POST['operation'];
}
if(!$operation || (!$number1 && $number1 != '0') || (!$number2 && $number2 != '0')) {
  $error_result = 'Не все поля заполнены';
}
else { 
  if(!is_numeric($number1) || !is_numeric($number2)){
      $error_result = "Операнды должны быть числами";
  }
  else
  switch($operation){
    case 'plus':
      $result = $number1 + $number2;
      break;
      case 'minus':
        $result = $number1 - $number2;
        break;
        case 'multiply':
          $result = $number1 * $number2;
          break;
          case 'divide':
            if($number2 == '0'){
              $error_result = 'На ноль делить нельзя!';
            }
            else 
            $result = $number1 / $number2;
  }
}
if(isset($error_result)){
  echo "Ошибка: $error_result";
}
else{
  echo "Ответ: $result";
}

?>
</body>
</html>
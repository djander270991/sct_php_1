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
$useCount=0;

/**
 * Summary of useFunction
 * @return int
 */
function useFunction(){
  global $useCount;
  $useCount++;
  return $useCount;

}
var_dump(useFunction());
echo '<br>';
var_dump(useFunction());
echo '<br>';
var_dump(useFunction());
echo '<br>';
var_dump(useFunction());
echo '<br>';
var_dump(useFunction());
?>
</body>

</html>
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
$temperature = 35;
/**
 * Summary of temperatureRise
 * @param mixed $temp
 * @param mixed $meaning
 * @return void
 */
function temperatureRise(&$temp,$meaning){
    echo "Изначальная температура = $temp<br>";
   
    echo "Повышение температуры $temp + $meaning <br>";
    $temp += $meaning;
    echo "Текущая температура $temp <hr>";
}
temperatureRise($temperature,12);
/**
 * Summary of temperatureLowering
 * @param mixed $temp
 * @param mixed $meaning
 * @return void
 */
function temperatureLowering(&$temp,$meaning){
    echo "Изначальная температура = $temp<br>";
   
    echo "Понижение температуры $temp - $meaning <br>";
    $temp -= $meaning;
    echo "Текущая температура $temp <hr>";
}
temperatureLowering($temperature,4);

temperatureLowering($temperature,10);
temperatureRise($temperature,10);
?>
</body>
</html>
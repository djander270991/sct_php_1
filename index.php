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
 $a = rand(1,10);
    $b = rand(1,10);
    $operation = 'divide';
    $isAvailableCalculation = true;
 ?>
    <div><select>
    <option selected ><?= $operation ?></option>
            <option>add (+)</option>
            <option>subtract (-)</option>
            <option>multiply(*)</option>
            <option>divide (/)</option>
        </select>
    </div>
    <?php
    if ($isAvailableCalculation) {
        # code...
    
    if ($operation == 'add') {
        echo "$a + $b =".$a + $b;
    }
    elseif ($operation == 'subtract') {
        echo "$a - $b =".$a - $b;
    }
    elseif ($operation == 'multiply') {
        echo "$a *$b =".$a * $b;
    }
    elseif ($operation == 'divide') {
        echo "$a / $b =".$a / $b;
    }}
    else {
        echo 'вычисления не доступно';
    }
    ?>
    <!-- $a, $b, $operation и $isAvailableCalculation. В переменные $a и $b сохраните любые целые числа. В $operation
    сохраните одно из 4х значений: add, subtract, multiply, divide. В зависимости от установленного значения в переменой
    $operation выполните математическую операцию с переменными $a и $b. -->
</body>

</html>
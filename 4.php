<?php
function table($rows,$cols){
    echo "<table>";
for($tr = 1; $tr <= $rows; $tr++){

echo "<tr>";
for ($td = 1; $td <= $cols;$td++) { 
    echo "<td>".$tr * $td."</td>";
}
echo "</tr>";
}
echo "</table>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>  table{
      
        border:2px solid black;
        border-collapse: collapse;
    }
    th{
        width: 50px;
        border:2px solid black;
           }
    td{
        width: 50px;
        border:2px solid black;
       }
    </style>
    <title>Document</title>
</head>
<body>
   <?  echo table(20,9); ?>
</body>
</html>
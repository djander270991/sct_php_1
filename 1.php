<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 14</title>
    <style>
      h1{
       margin-left: auto;
       margin-right: auto;
       width: 5em;
      }
    </style>
</head>

<body>
<h1>Lesson 12</h1>
<?php
   
    /**
     * Summary of getTime
     * @param mixed $time
     * @return void
     */
    function getTime($time){
  $time = strtotime($time);
    echo date("d.m.Y",$time);
}
getTime("2022-01-28");
?>
</body>

</html>
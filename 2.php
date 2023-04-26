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

/**
 * Summary of useFunction
 * @return int
 */
function useFunction(){
  static $useCount = 0;
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


?>

</body>

</html>
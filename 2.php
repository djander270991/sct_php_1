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
 * Summary of lastSimbol
 * @param mixed $text
 * @return void
 */
function lastSimbol($text){
  $lastchar = $text[-1];
  
}
/**
 * Summary of textLower
 * @param mixed $text
 * @return string
 */
function textLower($text){
  $text = mb_strtolower($text);
  $text = ucfirst($text);
  for($i = 0;$i < mb_strlen($text);$i++){
    if($text[$i] == ' '){
     $text[$i] = '_';
    }
  }
  switch ($text[-1]) {
    case '!':
      break;
    case '?':
    break;
    case '.':
      break;
    default:
      $text.= '.';
      break;
  }
  return $text;

}
$someText = "lorem dsfsdDdsf SSSfd asf asf asf a fds f ds f sdfsd f.";
echo textLower($someText);
?>

</body>

</html>
<?php
function chetNechet(){
  for ($i=0 ; $i <=10; $i++){ 
switch ($i) {
  case 0:
    echo "$i - тоже четное число.<br>";
    break;
  case $i % 2 == 0:
    echo "$i – четное.<br>";
    break;
  default:
    echo "$i - нечетное.<br>";
    break;
}
  }
}
echo chetNechet();
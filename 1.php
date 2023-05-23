<?php
$a = 15;
$b = 15;
if($a>$b){
  while ($b<=$a) {
    echo $b.'<br>';
    $b++;
  }
}
elseif($b>$a){
  while($a<=$b){
    echo $a.'<br>';
    $a++;
  }
}
else{
  echo 'Числа равны';
}
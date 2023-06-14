<?php
$price = [
  [

    'name' => 'Стул 1',

    'price' => 20,

    'category' => 1,

],

[

    'name' => 'Стул 2',

    'price' => 210,

    'category' => 3,

],

[

    'name' => 'Стул 3',

    'price' => 15,

    'category' => 2,

],
];
function mySort($key){
  return function ($a,$b) use ($key){
 return $a[$key] <=> $b[$key];
};
}

usort($price,mySort('price'));
echo '<pre>';
print_r($price);
echo '</pre>';
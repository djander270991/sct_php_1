<?php
$shop = [ 'телефоны'=> ['samsung','ifone','honor'],
'мебель' => ['кресло', 'стул','кровать'],
'товары для автомобиля' => ['резина','ароматизаторы','запчасти']
];
foreach ( $shop as $key =>$value)
{echo "$key :";
    foreach ($value as $item){
        echo "$item ";
        
    }
    echo '<br>';
}
<?php
$json =  '{"phone":["89050506568", "89050506545", "335566"]}';
// $json = '{"foneNumber":{89050506568, 89050506545, 335566}}';
$jsonPhp = json_decode($json);
echo '<pre>';
print_r($jsonPhp);
echo '</pre>';
$phpJson = json_encode($jsonPhp);
echo '<pre>';
print_r($phpJson);
echo '</pre>';
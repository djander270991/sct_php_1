<?php
$oldRoles = [2,5,7,6];
$newRoles = [3,2,5,1,9];
$old = array_diff($oldRoles,$newRoles);
print_r($old);
echo '<br>';

$new = array_diff($newRoles,$oldRoles);
print_r($new);
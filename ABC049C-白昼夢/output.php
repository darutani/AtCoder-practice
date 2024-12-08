<?php

$S = trim(fgets(STDIN));

$array1 = ['eraser', 'erase', 'dreamer', 'dream'];

$SRemove1 = $S;
foreach($array1 as $arr) {
    $SRemove1 = str_replace($arr, "", $SRemove1);
}

if ($SRemove1 == "") {
    echo 'YES';
    return;
}

echo 'NO';

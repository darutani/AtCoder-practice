<?php

$n = fgets(STDIN);

$power = 1;
$mod = 1000000007;

for ($i = 1; $i <= $n; $i++) {
    $power = ($power * $i) % $mod;
}

echo $power % $mod;

<?php

$A = (int) trim(fgets(STDIN));
$B = (int) trim(fgets(STDIN));
$C = (int) trim(fgets(STDIN));
$X = (int) trim(fgets(STDIN));

$count = 0;

for ($x = 0; $x <= $A; $x++) {
    for ($y = 0; $y <= $B; $y++) {
        for ($z = 0; $z <= $C; $z++) {
            $total = $x * 500 + $y * 100 + $z * 50;
            if ($total == $X) {
                $count++;
            }
        }
    }
}

echo $count;

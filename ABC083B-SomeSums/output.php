<?php

fscanf(STDIN, "%d %d %d", $N, $A, $B);

$targets = [];

for ($i = 1; $i <= $N; $i++) {
    $array = str_split($i);
    $sum = array_sum($array);

    if ($A <= $sum && $sum <= $B) {
        $targets[] = $i;
    }
}

echo array_sum($targets);

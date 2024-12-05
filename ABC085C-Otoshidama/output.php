<?php

fscanf(STDIN, "%d %d", $N, $Y);

for ($i = 0; $i <= $N; $i++) {
    for ($j = 0; $j <= $N - $i; $j++) {
        $k = ($N - $i - $j);
        $sum = (10000 * $i) + (5000 * $j) + (1000 * $k);
        if ($sum == $Y) {
            echo sprintf('%d %d %d', $i, $j, $k);
            return;
        }
    }
}

echo '-1 -1 -1';

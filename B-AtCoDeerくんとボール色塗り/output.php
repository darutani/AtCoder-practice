<?php

fscanf(STDIN, "%d %d", $n, $k);

$count = 0;

for($i = 0; $i < $n; $i++) {
    if ($i === 0) {
        $count = $k;
    } else {
        $count *= ($k - 1);
    }
}

echo $count;

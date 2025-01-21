<?php

fscanf(STDIN, "%d %d", $h, $w);

while ($line = fgets(STDIN)){
    $lines[] = $line;
}

$answers = [];

for ($i = 0; $i < $h; $i++) {
    for ($j = 0; $j < $w; $j++) {
        $target = $lines[$i][$j];

        $targetUp = $i == 0 ? "." : $lines[$i-1][$j];
        $targetDown = $i == ($h - 1) ? "." : $lines[$i+1][$j];
        $targetLeft = $j == 0 ? "." : $lines[$i][$j-1];
        $targetRight = $j == ($w - 1) ? "." : $lines[$i][$j+1];

        if ($target == "#") {
            if ($targetUp == "#" || $targetDown == "#" || $targetLeft == "#" || $targetRight == "#") {
                continue;
            }

            echo "No\n";
            exit;
        }
    }
}

echo "Yes\n";

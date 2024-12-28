<?php

fscanf(STDIN, "%d %d", $H, $W);

while ($line = fgets(STDIN)) {
    $lines[] = $line;
}

$answers = [];
for ($i = 0; $i < $H; $i++) {
    for ($j = 0; $j < $W; $j++) {
        $target = $lines[$i][$j];
        if ($target == "#") {
            $answers[$i][] = "#";
            continue;
        }

        $surroundings = [];
        for ($si = -1; $si <= 1; $si++) {
            for ($sj = -1; $sj <=1; $sj++) {
                if ($si == 0 && $sj == 0) continue;

                $m = $i + $si;
                $n = $j + $sj;

                if ($m >= 0 && $m < $H && $n >= 0 && $n < $W) {
                    if ($lines[$m][$n] == "#") {
                        $surroundings[] = "#";
                    }
                }
            }
        }

        $answers[$i][] = count($surroundings);
    }
}

foreach ($answers as $answer) {
    echo implode('', $answer) . "\n";
}

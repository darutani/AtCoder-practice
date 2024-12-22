<?php

function strings() { return explode(' ', trim(fgets(STDIN))); }
function ints() { return array_map('intval', strings()); }
function doubles() { return array_map('doubleval', strings()); }
function output(...$args) { echo implode(' ', $args), "\n"; }

function main() {

	list($n) = ints();

    $arr = [];
    for ($i = 0; $i < $n; $i++) {
        $arr[] = ints();
    }

    $beforeTime = 0;
    $x = 0;
    $y = 0;

    foreach ($arr as list($t, $a, $b)) {

        $distance = abs($a - $x) + abs($b - $y);

        $calculatedTime = $t - $beforeTime;

        if ($distance % 2 == 0) {
            $isEvenOfDistance = true;
        } else {
            $isEvenOfDistance = false;
        }

        if ($calculatedTime % 2 == 0) {
            $isEvenOfCalculatedTime = true;
        } else {
            $isEvenOfCalculatedTime = false;
        }

        if ($calculatedTime >= $distance && $isEvenOfDistance == $isEvenOfCalculatedTime) {
            $beforeTime = $t;
            $x = $a;
            $y = $b;

            continue;
        }

        echo 'No';

        return;
    }

    echo 'Yes';
}

main();

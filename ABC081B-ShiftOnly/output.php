<?php

function strings() { return explode(' ', trim(fgets(STDIN))); }
function ints() { return array_map('intval', strings()); }

function main() {
    $n = ints();
    $arr = ints();

    $count = 0;

    while (true) {
        foreach ($arr as $value) {
            if ($value % 2 !== 0) {
                echo $count;
                return;
            }
        }
        $count++;

        $arr = array_map(fn ($value) => $value / 2, $arr);
    }

    echo $count;
}

main();

<?php

fscanf(STDIN, "%d %d %d %d", $a, $b, $c, $d);

if ($a >= $c) {
    if ($a >= $d) {
        echo 0;
        return;
    } elseif ($b >= $d) {
        echo ($d - $a);
        return;
    } elseif ($b < $d) {
        echo ($b - $a);
        return;
    }
} elseif ($a < $c) {
    if ($c >= $b) {
        echo 0;
        return;
    } elseif ($b >= $d) {
        echo ($d - $c);
        return;
    } elseif ($b < $d) {
        echo ($b - $c);
        return;
    }
}

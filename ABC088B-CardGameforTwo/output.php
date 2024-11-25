<?php

$N = trim(fgets(STDIN));
$aNum = array_map('intval', explode(' ', trim(fgets(STDIN))));

rsort($aNum);

$alice = array_filter($aNum, fn ($key) => $key % 2 == 0, ARRAY_FILTER_USE_KEY);
$bob = array_filter($aNum, fn ($key) => $key % 2 == 1, ARRAY_FILTER_USE_KEY);

$aliceSum = array_sum($alice);
$bobSum = array_sum($bob);

echo $aliceSum - $bobSum;

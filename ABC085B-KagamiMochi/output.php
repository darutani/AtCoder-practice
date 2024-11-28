<?php

$N = fgets(STDIN);

$diameterArray = [];
while ($line = fgets(STDIN)) {
    $diameterArray[] = $line;
};

echo count(array_unique($diameterArray));

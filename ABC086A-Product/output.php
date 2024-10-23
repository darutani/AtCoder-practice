<?php

function strings() { return explode(' ', trim(fgets(STDIN))); }
function ints() { return array_map('intval', strings()); }
function doubles() { return array_map('doubleval', strings()); }
function output(...$args) { echo implode(' ', $args), "\n"; }

function main() {
	list($a, $b) = ints();

	if ((($a * $b) % 2) === 0) {
		echo "Even";
		return;
	}
	echo "Odd";
}

main();

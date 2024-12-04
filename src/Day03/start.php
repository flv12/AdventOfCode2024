<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use Advent2024\Common\InputFileReader;

$globalSum = 0;

$inputFileReader = new InputFileReader();
foreach ($inputFileReader->read(__DIR__ . '/input.txt') as $line) {
    $sum = 0;
    $matches = [];

    preg_match_all("/mul\((\d{1,3}),(\d{1,3})\)/", $line, $matches);
    for ($i = 0; $i < count($matches[0]); $i++) {
        $num1 = $matches[1][$i];
        $num2 = $matches[2][$i];

        echo sprintf("[DEBUG] %s * %s\n", $num1, $num2);
        $sum += ($num1 * $num2);
    }
    $globalSum += $sum;
}

echo $globalSum . PHP_EOL;

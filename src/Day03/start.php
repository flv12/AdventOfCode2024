<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use Advent2024\Common\InputFileReader;

$globalSum = 0;
$instructionsEnabled = true;

$inputFileReader = new InputFileReader();
foreach ($inputFileReader->read(__DIR__ . '/input.txt') as $line) {
    $sum = 0;
    $matches = [];

    preg_match_all("/mul\((\d{1,3}),(\d{1,3})\)|(do\(\))|(don't\(\))/", $line, $matches);
    for ($i = 0; $i < count($matches[0]); $i++) {
        $num1 = $matches[1][$i];
        $num2 = $matches[2][$i];
        $doCall = $matches[3][$i];
        $dontCall = $matches[4][$i];

        if ($doCall === 'do()') {
            $instructionsEnabled = true;
        }

        if ($dontCall === "don't()") {
            $instructionsEnabled = false;
        }

        echo sprintf("[DEBUG] %s * %s\n", $num1, $num2);
        if ($instructionsEnabled && is_numeric($num1) && is_numeric($num2)) {
            $sum += ($num1 * $num2);
        }
    }
    $globalSum += $sum;
}

echo $globalSum . PHP_EOL;

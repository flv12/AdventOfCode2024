<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use Advent2024\Common\InputFileReader;
use Advent2024\Day04\XmasFinder;

$lines = [];
$xmasCount = 0;
$xmasFinder = new XmasFinder();
$inputFileReader = new InputFileReader();
foreach ($inputFileReader->read(__DIR__ . '/input.txt') as $line) {
    $lines[] = $line;
}

echo $xmasCount . PHP_EOL;

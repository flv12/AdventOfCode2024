<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use Advent2024\Common\InputFileReader;
use Advent2024\Day04\PatternFinder;

$lines = [];
$patternFinder = new PatternFinder('XMAS');
$inputFileReader = new InputFileReader();
foreach ($inputFileReader->read(__DIR__ . '/input.txt') as $line) {
    $lines[] = $line;
}

echo $patternFinder->countPatterns($lines) . PHP_EOL;

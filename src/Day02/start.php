<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use Advent2024\Common\InputFileReader;
use Advent2024\Day02\RedNosedReportsAnalyzer;

$safeReportsCount = 0;
$redNosedReportsAnalyzer = new RedNosedReportsAnalyzer();
$inputFileReader = new InputFileReader();

foreach ($inputFileReader->read(__DIR__ . '/input.txt') as $line) {
    $line = str_replace("\n", '', $line);

    if ($redNosedReportsAnalyzer->isSafeReport(explode(' ', $line))) {
        $safeReportsCount++;
    }
}

echo $safeReportsCount . PHP_EOL;

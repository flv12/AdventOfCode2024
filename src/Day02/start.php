<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use Advent2024\Common\InputFileReader;
use Advent2024\Day02\RedNosedReportsAnalyzer;

$safeReportsCount = 0;
$redNosedReportsAnalyzer = new RedNosedReportsAnalyzer();
$inputFileReader = new InputFileReader();

foreach ($inputFileReader->read(__DIR__ . '/input.txt') as $line) {
    $report = explode(' ', str_replace("\n", '', $line));

    $reportIsSafe = $redNosedReportsAnalyzer->isSafeReport($report);

    if ($reportIsSafe) {
        $safeReportsCount++;
    } else {
        for ($i = 0; $i < count($report); $i++) {
            $dampenedReport = $report;
            unset($dampenedReport[$i]);
            if ($redNosedReportsAnalyzer->isSafeReport($dampenedReport)) {
                $safeReportsCount++;
                continue 2;
            }
        }
    }
}

echo $safeReportsCount . PHP_EOL;

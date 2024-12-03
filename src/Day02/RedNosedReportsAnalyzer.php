<?php

namespace Advent2024\Day02;

class RedNosedReportsAnalyzer
{
    public function isSafeReport(array $report): bool
    {
        $isIncreasing = $report[0] < $report[1];

        $reportIsSafe = true;
        for ($i = 0; $i < count($report) - 1; $i++) {
            $reportIsSafe &=
                ($isIncreasing ? $report[$i] < $report[$i + 1] : $report[$i] > $report[$i + 1])
                && abs($report[$i] - $report[$i + 1]) <= 3
                && abs($report[$i] - $report[$i + 1]) >= 1;
        }

        return $reportIsSafe;
    }
}

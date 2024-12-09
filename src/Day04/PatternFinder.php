<?php

namespace Advent2024\Day04;

class PatternFinder
{
    private ?string $patternToFind = null;

    public function __construct(string $pattern)
    {
        $this->patternToFind = $pattern;
    }

    public function countPatterns(array $lines): int
    {
        $rowCount = count($lines);
        $columnCount = strlen($lines[0]);
        $patternCount = 0;
        $patternLength = strlen($this->patternToFind);

        for ($i = 0; $i < $rowCount; $i++) {
            for ($j = 0; $j < $columnCount; $j++) {
                if (substr($lines[$i], $j, $patternLength) === $this->patternToFind) {
                    $patternCount++;
                }

                if (substr(strrev($lines[$i]), $j, $patternLength) === $this->patternToFind) {
                    $patternCount++;
                }
            }
        }

        for ($k = 0; $k < $columnCount; $k++) {
            for ($l = 0; $l < $rowCount; $l++) {
                $verticalPattern = '';

                for ($m = 0; $m < $patternLength; $m++) {
                    $verticalPattern .= $lines[$l + $m][$k];
                }

                if ($verticalPattern === $this->patternToFind) {
                    $patternCount++;
                }

                if ($verticalPattern === strrev($this->patternToFind)) {
                    $patternCount++;
                }
            }
        }

        return $patternCount;
    }
}

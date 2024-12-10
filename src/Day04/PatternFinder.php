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


        // HORISONTAL PATTERN SEARCH
        for ($row = 0; $row < $rowCount; $row++) {
            for ($column = 0; $column < $columnCount; $column++) {
                if (substr($lines[$row], $column, $patternLength) === $this->patternToFind) {
                    $patternCount++;
                }

                if (substr(strrev($lines[$row]), $column, $patternLength) === $this->patternToFind) {
                    $patternCount++;
                }
            }
        }

        // VERTICAL PATTERN SEARCH
        for ($column = 0; $column < $columnCount; $column++) {
            for ($row = 0; $row < $rowCount; $row++) {
                $verticalPattern = '';

                for ($m = 0; $m < $patternLength; $m++) {
                    $verticalPattern .= $lines[$row + $m][$column];
                }

                if ($verticalPattern === $this->patternToFind) {
                    $patternCount++;
                }

                if ($verticalPattern === strrev($this->patternToFind)) {
                    $patternCount++;
                }
            }
        }

        // DIAGONAL PATTERN SEARCH
        for ($row = 0; $row <= $rowCount - $patternLength; $row++) {
            for ($column = 0; $column <= $columnCount - $patternLength; $column++) {
                $diagPattern1 = $diagPattern2 = $diagPattern3 = $diagPattern4 = '';

                for ($i = 0; $i < $patternLength; $i++) {
                    $diagPattern1 .= $llnes[$row + $i][$column + $i];
                    $diagPattern2 .= $lines[$row + $i][$column + $patternLength - $i - 1];
                    $diagPattern3 .= $lines[$row + $patternLength - $i - 1][$column + $i];
                    $diagPattern4 .= $lines[$row + $patternLength - $i - 1][$column + $patternLength - $i - 1];
                }

                if ($diagPattern1 === $this->patternToFind) {
                    $patternCount++;
                }
                if ($diagPattern2 === $this->patternToFind) {
                    $patternCount++;
                }
                if ($diagPattern3 === $this->patternToFind) {
                    $patternCount++;
                }
                if ($diagPattern4 === $this->patternToFind) {
                    $patternCount++;
                }
            }
        }

        return $patternCount;
    }
}

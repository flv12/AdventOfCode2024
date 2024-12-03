<?php

namespace Advent2024\Day01;

/**
 * Complexity, x2 sort + 0(n)
 */
class DistanceCalculator
{
    public function distance(string $a, string $b): int
    {
        return abs($a - $b);
    }

    public function distanceAddition(array $a, array $b): int
    {
        sort($a);
        sort($b);

        $sum = 0;
        foreach ($a as $key => $value) {
            $sum += $this->distance($value, $b[$key]);
        }

        return $sum;
    }
}

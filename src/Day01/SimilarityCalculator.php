<?php

namespace Advent2024\Day01;

/**
 * Complexity, 0(2n)
 */
class SimilarityCalculator
{
    private array $occurences = [];

    public function parseSecondArray(array $array): void
    {
        foreach ($array as $value) {
            if (!isset($this->occurences[$value])) {
                $this->occurences[$value] = 0;
            }

            $this->occurences[$value]++;
        }
    }

    public function calculateSimilarity(array $array): int
    {
        $similaritySum = 0;

        foreach ($array as $value) {
            $occurences = $this->occurences[$value] ?? 0;
            $similaritySum += $value * $occurences;
        }

        return $similaritySum;
    }
}

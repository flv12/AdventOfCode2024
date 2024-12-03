<?php

namespace Advent2024\Day01;

use Advent2024\Day01\DistanceCalculator;

class InputReader
{
    private array $arrayA = [];
    private array $arrayB = [];

    public function __get(string $property)
    {
        return $this->$property;
    }

    public function read(string $path): void
    {
        $stream = fopen($path, 'r');
        $lines = [];

        while (($line = fgets($stream)) !== false) {
            str_replace("\n", '', $line);
            preg_match('/(\d+)\s*(\d+)/', $line, $matches);

            if (count($matches) === 3) {
                $this->arrayA[] = $matches[1];
                $this->arrayB[] = $matches[2];
            }
        }

        fclose($stream);
    }
}

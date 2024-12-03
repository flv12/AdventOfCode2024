<?php

namespace Unit\Day01;

use Advent2024\Day01\DistanceCalculator;
use PHPUnit\Framework\TestCase;

class DistanceCalculatorTest extends TestCase
{
    private DistanceCalculator $distanceCalculator;

    public function setUp(): void
    {
        parent::setUp();
        $this->distanceCalculator = new DistanceCalculator();
    }

    /**
     * @dataProvider distanceProvider
     */
    public function testDistance(string $a, string $b, int $expected)
    {
        $this->assertEquals($expected, $this->distanceCalculator->distance($a, $b));
    }

    public static function distanceProvider(): array
    {
        return [
            ['5', '10', 5],
            ['10', '5', 5],
            ['5', '5', 0],
            ['10', '10', 0],
            ['0', '0', 0],
            ['0', '10', 10],
            ['10', '0', 10],
            ['0', '5', 5],
            ['5', '0', 5],
        ];
    }

    /**
     * @dataProvider distanceAdditionProvider
     */
    public function testDistanceAddition(array $a, array $b, int $expected)
    {
        $this->assertEquals($expected, $this->distanceCalculator->distanceAddition($a, $b));
    }

    public static function distanceAdditionProvider(): array
    {
        return [
            [
                ['3', '4', '2', '1', '3', '3'],
                ['4', '3', '5', '3', '9', '3'],
                11
            ]
        ];
    }
}

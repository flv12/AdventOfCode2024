<?php

namespace Unit\Day04;

use Advent2024\Day04\PatternFinder;
use PHPUnit\Framework\TestCase;

class PatternFinderTest extends TestCase
{
    private PatternFinder $patternFinder;

    public function setUp(): void
    {
        parent::setUp();
        $this->patternFinder = new PatternFinder('XMAS');
    }

    /**
     * @dataProvider basicPatternDataProvider
     */
    public function test(array $data, int $expectedCount): void
    {
        $this->assertEquals($expectedCount, $this->patternFinder->countPatterns($data));
    }

    public static function basicPatternDataProvider(): array
    {
        return [
            [
                [
                    'MMMSXXMASM',
                    'MSAMXMSMSA',
                    'AMXSXMAAMM',
                    'MSAMASMSMX',
                    'XMASAMXAMM',
                    'XXAMMXXAMA',
                    'SMSMSASXSS',
                    'SAXAMASAAA',
                    'MAMMMXMMMM',
                    'MXMXAXMASX'
                ],
                18
            ],
        ];
    }

    /**
     * @dataProvider simplerPatternDataProvider
     */
    public function testSimpler(array $data, int $expectedCount): void
    {
        $this->assertEquals($expectedCount, $this->patternFinder->countPatterns($data));
    }

    public static function simplerPatternDataProvider(): array
    {
        return [
            [
                [
                    'XMAS',
                    '0000',
                    'XXXX',
                    'SAMX',
                ],
                2
            ],
            [
                [
                    'XMAS',
                    'SAMX',
                    'XXSS',
                    'MMAA',
                    'AAMM',
                    'SSXX',
                ],
                6
            ],
            [
                [
                    'XOOOX',
                    'OMOMO',
                    'OOAOO',
                    'OSOSO',
                    'OOOOO',
                ],
                2
            ]
        ];
    }
}

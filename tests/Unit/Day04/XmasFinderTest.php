<?php

namespace Unit\Day04;

use PHPUnit\Framework\TestCase;

class XmasFinderTest extends TestCase
{
    /**
     * @dataProvider basicXmasDataProvider
     */
    public function test(array $data, int $expectedCount): void
    {
        $xmasCount = 0;
        $this->assertEquals($expectedCount, $xmasCount);
    }

    public static function basicXmasDataProvider(): array
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
}

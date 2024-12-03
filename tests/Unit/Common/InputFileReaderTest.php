<?php

namespace Unit\Common;

use Advent2024\Common\InputFileReader;
use PHPUnit\Framework\TestCase;

class InputFileReaderTest extends TestCase
{
    private InputFileReader $inputFileReader;

    public function setUp(): void
    {
        parent::setUp();
        $this->inputFileReader = new InputFileReader();
    }
    public function testIsIterable(): void
    {
        $this->assertIsIterable($this->inputFileReader->read(__DIR__ . '/testInput.txt'));
    }

    public function testOpenFileAsStream(): void
    {
        $this->assertTrue(is_resource($this->inputFileReader->openFileAsStream(__DIR__ . '/testInput.txt')));
    }

    public function testOpenFileAsStreamThrowsException(): void
    {
        $this->expectException(\RuntimeException::class);
        $this->inputFileReader->openFileAsStream('nonexistent.txt');
    }

    // public function testRead(): void
    // {
    //     $expectedResult = [
    //         '1 2 3\n',
    //         '4 5 6\n',
    //         '7 8 9\n',
    //     ];
    //
    //     $iteratorToArray = iterator_to_array($this->inputFileReader->read(__DIR__ . '/testInput.txt'));
    //
    //     $this->assertEquals($expectedResult, $iteratorToArray);
    // }
}

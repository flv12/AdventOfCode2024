<?php

namespace Unit\Day02;

use Advent2024\Day02\RedNosedReportsAnalyzer;
use PHPUnit\Framework\TestCase;

class RedNosedReportsAnalyzerTest extends TestCase
{
    private RedNosedReportsAnalyzer $redNosedReportsAnalyzer;

    public function setUp(): void
    {
        parent::setUp();
        $this->redNosedReportsAnalyzer = new RedNosedReportsAnalyzer();
    }

    public function testReportIsSafe(): void
    {
        $this->assertTrue($this->redNosedReportsAnalyzer->isSafeReport(['1', '2', '3', '4', '5']));
    }

    public function testReportIsUnsafe(): void
    {
        $this->assertFalse($this->redNosedReportsAnalyzer->isSafeReport(['1', '2', '3', '4', '9']));
    }
}

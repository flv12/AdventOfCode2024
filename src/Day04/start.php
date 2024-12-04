<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use Advent2024\Common\InputFileReader;

$xmasCount = 0;
$inputFileReader = new InputFileReader();
foreach ($inputFileReader->read(__DIR__ . '/input.txt') as $line) {
    echo $line;
}

echo sprintf("Count : %s", $xmasCount . PHP_EOL);

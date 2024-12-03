<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use Advent2024\Day01\{InputReader, DistanceCalculator, SimilarityCalculator};

$inputReader = new InputReader();
$inputReader->read('input.txt');
$distanceCalculator = new DistanceCalculator();
echo $distanceCalculator->distanceAddition($inputReader->arrayA, $inputReader->arrayB);

echo "\n";

$similarityCalculator = new SimilarityCalculator();
$similarityCalculator->parseSecondArray($inputReader->arrayB);
echo $similarityCalculator->calculateSimilarity($inputReader->arrayA);

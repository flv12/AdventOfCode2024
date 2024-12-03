<?php

namespace Advent2024\Common;

class InputFileReader
{
    public function read(string $path): \Generator
    {
        $stream = $this->openFileAsStream($path);

        while (($line = fgets($stream)) !== false) {
            yield $line;
        }

        fclose($stream);
    }

    /**
     * @return resource
     */
    public function openFileAsStream(string $path)
    {
        $stream = fopen($path, 'r');

        if ($stream === false) {
            throw new \RuntimeException('Could not open file');
        }

        return $stream;
    }
}

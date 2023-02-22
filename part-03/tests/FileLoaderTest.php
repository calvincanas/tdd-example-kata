<?php

use Example\FileLoader;
use PHPUnit\Framework\TestCase;

class FileLoaderTest extends TestCase
{
    /**
     * First we need a way to retrieve markdown data
     * from the filesystem ready for parsing.
     *
     * Let's try to instantiate the FileLoader class
     * to make the test fail.
     */
    public function testFileLoaderClassCanBeCreated()
    {
        $f = new FileLoader;
    }
}

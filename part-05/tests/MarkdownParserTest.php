<?php

use PHPUnit\Framework\TestCase;
use Example\MarkdownParser;

class MarkdownParserTest extends TestCase
{
    public function testMarkdownParserCanBeCreated()
    {
        $m = new MarkdownParser;
    }
}

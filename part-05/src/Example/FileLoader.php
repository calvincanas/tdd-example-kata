<?php

namespace Example;

class FileLoader
{
    public function get($file): bool|string
    {
        return file_get_contents($file);
    }
}

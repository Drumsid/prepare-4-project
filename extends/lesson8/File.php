<?php

require_once('Exceptions\FileException.php');
require_once('Exceptions\NotReadableException.php');
require_once('Exceptions\NotExistsException.php');

class File
{
    private $path;

    public function __construct($path)
    {
        $this->path = $path;
    }

    public function read()
    {
        if (! file_exists($this->path)) {
            throw new NotExistsException();
        }
        if (! is_readable($this->path)) {
            throw new NotReadableException();
        }
        return file_get_contents($this->path);
    }
}

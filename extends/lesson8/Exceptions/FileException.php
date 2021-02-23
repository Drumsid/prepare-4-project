<?php

class FileException extends \Exception
{
    public function __construct($message = "FileException")
    {
        parent::__construct($message);
    }
}

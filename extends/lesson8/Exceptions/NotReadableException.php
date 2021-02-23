<?php

require_once('FileException.php');

class NotReadableException extends FileException
{
    public function __construct()
    {
        parent::__construct('file not read');
    }
}

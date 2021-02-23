<?php

require_once('FileException.php');

class NotExistsException extends FileException
{
    public function __construct()
    {
        parent::__construct('file not exists');
    }
}

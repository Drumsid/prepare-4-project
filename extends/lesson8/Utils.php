<?php

require_once('File.php');
require_once('Exceptions\FileException.php');
require_once('Exceptions\NotReadableException.php');
require_once('Exceptions\NotExistsException.php');

function readFiles(array $filepaths): array
{
    // BEGIN (write your solution here)
    $res = array_map(function ($path) {
        $file = new File($path);
        try {
            $redable = $file->read();
        } catch (\Exception $e) {
            return null;
        }
        return $redable;
    }, $filepaths);
    return $res;
    // END
}

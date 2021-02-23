<?php

require_once('SmartSplFileInfo.php');

$file = new SmartSplFileInfo(__DIR__ . '/testFile.txt');
var_dump($file->getSize());
var_dump($file->getSize('kb'));
var_dump($file->getSize('kdb'));

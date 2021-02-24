<?php

require_once('Sanitizer.php');
require_once('SanitizerStripTagsDecorator.php');

$sanitizer = new Sanitizer();
$decorated = new SanitizerStripTagsDecorator($sanitizer);
// var_dump($sanitizer->sanitize(' <br> test  '));
var_dump($decorated->sanitize(' <br> test  '));
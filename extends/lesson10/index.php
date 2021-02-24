<?php

require_once('HTMLBrElement.php');
require_once('HTMLDivElement.php');

// $element = new HTMLBrElement();
// var_dump($element->__toString());

$div = new HTMLDivElement();
$div->setTextContent('hello!');
var_dump($div->__toString());
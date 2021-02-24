<?php

require_once('HTMLImgElement.php');
require_once('HTMLButtonElement.php');

$button1 = new HTMLButtonElement(['class' => 'rounded']);
echo "<pre>";
print_r($button1);
print_r($button1->getAttributeNames());
print_r($button1->getAttributes());
var_dump($button1->isValid());
















echo "</pre>";
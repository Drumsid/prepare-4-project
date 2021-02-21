<?php

require_once('HTMLElement.php');
require_once('HTMLDivElement.php');

$div = new HTMLDivElement(['class' => 'one two']);
// print_r($div->getAttribute('class'));
$div->addClass('small');
// print_r($div->getAttribute('class'));
$div->addClass('small');
// print_r($div->getAttribute('class'));
$div->removeClass('two');
// var_dump($div->issetClass('small'));
$div->toggleClass('small');
$div->toggleClass('small');
print_r($div->getAttribute('class'));

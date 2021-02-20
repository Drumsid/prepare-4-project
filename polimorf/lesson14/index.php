<?php

require_once('InputTag.php');
require_once('LabelTag.php');

$inputTag = new InputTag('submit', 'Save');
$labelTag = new LabelTag('Press Submit', $inputTag);
print_r($labelTag->render());
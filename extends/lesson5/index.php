<?php

require_once('HTMLDivElement.php');
$div = new HTMLDivElement(['name' => 'div', 'data-toggle' => 'true']);
$div->setTextContent('Body');
print_r($div->__toString());
// var_dump($div->__toString());

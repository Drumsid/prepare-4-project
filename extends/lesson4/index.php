<?php

require_once('Base.php');
require_once('FirstChild.php');

$base = new Base();
$FirstChild = new FirstChild();
var_dump($base->isInstanceOf('Bsaase'));
var_dump($base->isInstanceOf('FirstChild'));

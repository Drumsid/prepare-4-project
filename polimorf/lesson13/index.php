<?php

require_once('Config.php');
require_once('ConfigFactory.php');
require_once('JsonParser.php');

$config = ConfigFactory::build(__DIR__ . '/test.json');
print_r($config);
print_r($config->key);
print_r(get_class($config));
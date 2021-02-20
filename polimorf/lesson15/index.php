<?php

use App\PasswordBuilder;
use App\HackzillaPasswordGeneratorAdapter;

$autoloadPath1 = __DIR__ . '/vendor/autoload.php';
if (file_exists($autoloadPath1)) {
    require_once $autoloadPath1;
}

$builder = new PasswordBuilder(new HackzillaPasswordGeneratorAdapter());
print_r($builder->buildPassword(10, ['upperCase', 'symbols']));

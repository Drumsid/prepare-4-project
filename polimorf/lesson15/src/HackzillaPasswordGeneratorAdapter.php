<?php

namespace App;

use Hackzilla\PasswordGenerator\Generator\ComputerPasswordGenerator;

class HackzillaPasswordGeneratorAdapter implements PasswordGeneratorInterface
{
    private $passwordgenerator;

    public function __construct()
    {
        $this->passwordGenerator = new ComputerPasswordGenerator();
    }

    public function generatePassword($length, $options)
    {
        $generator = $this->passwordGenerator
            ->setOptionValue(ComputerPasswordGenerator::OPTION_UPPER_CASE, (in_array("upperCase", $options) ?? false))
            ->setOptionValue(ComputerPasswordGenerator::OPTION_NUMBERS, (in_array("numbers", $options) ?? false))
            ->setOptionValue(ComputerPasswordGenerator::OPTION_SYMBOLS, (in_array("symbols", $options) ?? false))
            ->setLength($length);
        return $generator->generatePasswords()[0];
    }
}
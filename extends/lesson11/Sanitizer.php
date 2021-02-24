<?php

require_once('SanitizerInterface.php');

class Sanitizer implements SanitizerInterface
{
    public function sanitize(string $text)
    {
        return trim($text);
    }
}
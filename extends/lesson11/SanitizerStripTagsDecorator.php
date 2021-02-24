<?php

require_once('SanitizerInterface.php');

class SanitizerStripTagsDecorator implements sanitizerInterface
{
    private $sanitizer;

    public function __construct($sanitizer)
    {
        $this->sanitizer = $sanitizer;
    }

    public function sanitize(string $text)
    {
        $noTags = strip_tags($text);
        return $this->sanitizer->sanitize($noTags);
    }
}
<?php

class HTMLElement
{
    private $body;

    public function setTextContent($body)
    {
        $this->body = $body;
    }

    // BEGIN (write your solution here)
    public function __toString()
    {
        $tagName = static::$params['name'];
        // print_r($tagName);
        if (static::$params['pair'] === false) {
            return "<{$tagName}>";
        } else {
            return "<{$tagName}>{$this->body}</{$tagName}>";
        }
    }
    // END
}
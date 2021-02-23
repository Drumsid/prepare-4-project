<?php

require_once('HTMLPairElement.php');

class HTMLDivElement extends HTMLPairElement
{
    private $tagName = 'div';

    public function getTagName()
    {
        return $this->tagName;
    }
}

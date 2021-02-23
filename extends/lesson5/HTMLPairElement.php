<?php

require_once('HTMLElement.php');

class HTMLPairElement extends HTMLElement
{
    private $body;
    public function getTextContent()
    {
        return $this->body;
    }
    public function setTextContent(string $body)
    {
        $this->body = $body;
    }
    public function __toString()
    {
        $attrLine = $this->stringifyAttributes();
        $body = $this->getTextContent();
        $tagName = $this->getTagName();
        return "<{$tagName}{$attrLine}>{$body}</{$tagName}>";
    }
}

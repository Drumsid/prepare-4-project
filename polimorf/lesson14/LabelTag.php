<?php

require_once('Tag.php');

class LabelTag implements Tag
{
    private $tagObject;
    private $labelName;
    public function __construct($labelName, $tagObject)
    {
        $this->tagObject = $tagObject;
        $this->labelName = $labelName;
    }

    public function render()
    {
        $render = "<label>{$this->labelName}{$this->tagObject->render()}</label>";
        return $render;
    }

    public function __toString()
    {
        return $this->render();
    }
}
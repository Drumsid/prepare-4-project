<?php

require_once('HTMLElement.php');

class HTMLImgElement extends HTMLElement
{
    private const ATTRIBUTE_NAMES = ['src'];

    public static function getAttributeNames()
    {
        return array_merge(parent::getAttributeNames(), static::ATTRIBUTE_NAMES);
    }

    // BEGIN (write your solution here)
    public function isValid()
    {
        foreach ($this->getAttributes() as $name => $atrr) {
            if (! in_array($name, self::getAttributeNames())) {
                return false;
            }
        }
        return true;
    }
    // END
}
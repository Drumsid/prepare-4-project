<?php

require_once('HTMLElement.php');

class HTMLButtonElement extends HTMLElement
{
    private const ATTRIBUTE_NAMES = ['type'];
    private const TYPE_NAMES = ['button', 'submit', 'reset'];

    public static function getAttributeNames()
    {
        return array_merge(parent::getAttributeNames(), static::ATTRIBUTE_NAMES);
    }

    // BEGIN (write your solution here)
    public function isValid()
    {
        if (! array_key_exists('type', $this->getAttributes())) {
            return false;
        }
        $typeValue = $this->getAttributes()['type'];
        $diff = array_diff(explode(' ', $typeValue), self::TYPE_NAMES);
        if (count($diff) > 0) {
            return false;
        }
        foreach ($this->getAttributes() as $name => $atrr) {
            if (! in_array($name, self::getAttributeNames())) {
                return false;
            }
        }
        return true;
    }    
    // END
}
<?php

class HTMLElement
{
    private $attributes = [];

    public function __construct($attributes = [])
    {
        $this->attributes = $attributes;
    }

    public function getAttribute($key)
    {
        return $this->attributes[$key];
    }

    // BEGIN (write your solution here)
    public function addClass($className)
    {
        if ($this->issetClass($className)) {
            return;
        }
        $arrClasses = $this->explodeStr($this->getAttribute('class'));
        $arrClasses[] = $className;
        $this->attributes['class'] = $this->implodeStr($arrClasses);
    }
    
    public function removeClass($className)
    {
        $arrClasses = $this->explodeStr($this->getAttribute('class'));
        unset($arrClasses[array_search($className, $arrClasses)]);
        $this->attributes['class'] = $this->implodeStr($arrClasses);
    }

    public function toggleClass($className)
    {
        if ($this->issetClass($className)) {
            $this->removeClass($className);
        } else {
            $this->addClass($className);
        }
    }
    public function explodeStr($data)
    {
        return explode(' ', $data);
    }
    public function implodeStr($data)
    {
        return implode(' ', $data);
    }
    public function issetClass($className)
    {
        $arrClasses = $this->explodeStr($this->getAttribute('class'));
        return in_array($className, $arrClasses);
    }
    // END
}

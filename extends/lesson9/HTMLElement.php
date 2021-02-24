<?php

abstract class HTMLElement
{
    private const ATTRIBUTE_NAMES = ['name', 'class'];

    public $attributes = [];

    public static function getAttributeNames()
    {
        return self::ATTRIBUTE_NAMES;
    }

    public function __construct($attributes = [])
    {
        $this->attributes = $attributes;
    }

    public function getAttributes()
    {
        return $this->attributes;
    }

    // BEGIN (write your solution here)
    abstract public function isValid();
    // END
}
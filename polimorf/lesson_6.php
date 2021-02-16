<?php

class InMemoryKV
{
    private $base;

    public function __construct(array $base)
    {
        $this->base = $base;
    }
    public function get($key, $default = '')
    {
        if (isset($this->base[$key])) {
            return $this->base[$key];
        }
        if (! array_key_exists($key, $this->base) && $default != '') {
            return $default ;
        }
        if (! array_key_exists($key, $this->base)) {
            return null;
        }
        
    }
    public function set($key, $value)
    {
        return $this->base[$key] = $value;
    }
    public function unset($key)
    {
        if (array_key_exists($key, $this->base)) {
            unset($this->base[$key]);
        }
    }
    public function toArray()
    {
        return $this->base;
    }
}

function swapKeyValue($obj)
{
    $arr = $obj->toArray();
    foreach ($arr as $key => $value) {
        $obj->unset($key);
    }
    foreach ($arr as $key => $value) {
        $obj->set($value, $key);
    }
}


$mem = new InMemoryKV(['key' => 10, '123' => 'qsdas']);

swapKeyValue($mem);

print_r($mem);

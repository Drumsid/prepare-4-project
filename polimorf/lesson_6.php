<?php

class InMemoryKV
{
    private $base;

    public function __construct(array $base)
    {
        $this->base = $base;
    }
    public function get($key)
    {
        if (! array_key_exists($key, $this->base)) {
            return null;
        }
        return $this->base[$key];
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

$mem = new InMemoryKV(['key' => 'value']);
print_r($mem->set('key2', 'test'));
print_r($mem->unset('key'));

<?php

class JsonParser
{
    public function get($path)
    {
        $data = file_get_contents($path);
        return json_decode($data, true);
    }
}
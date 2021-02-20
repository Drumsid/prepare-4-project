<?php

class YamlParser
{
    public function get($path)
    {
        $data = file_get_contents($path);
        return Yaml::parse($data);
    }    
}
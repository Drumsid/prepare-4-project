<?php

class ConfigFactory
{
    public static function build($path)
    {
        $pathExtension = pathinfo($path, PATHINFO_EXTENSION);

        $mapping = [
            'json' => JsonParser::class,
            'yaml' => YamlParser::class,
            'yml' => YamlParser::class,
        ];
        $className = $mapping[$pathExtension];
        $obj = new $className();
        $data = $obj->get($path); 
        return new Config($data);

    }
}
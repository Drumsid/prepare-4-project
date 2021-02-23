<?php

class SmartSplFileInfo extends SplFileInfo
{
    public function getSize($str = 'b')
    {
        if ($str === 'kb') {
            return (parent::getSize() / 1024);
        } elseif ($str === 'b') {
            return parent::getSize();
        } else {
            return 'exeption';
        }
    }

    // hexlet solutions
    // public function getSize($unit = 'b')
    // {
    //     $size = parent::getSize();
    //     switch ($unit) {
    //         case 'b':
    //             return $size;
    //         case 'kb':
    //             return $size / 1024;
    //         default:
    //             throw new \Exception("Unknown unit name: {$unit}");
    //     }
    // }
}

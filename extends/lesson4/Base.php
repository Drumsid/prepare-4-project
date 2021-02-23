<?php

class Base
{
    // BEGIN (write your solution here)
    function isInstanceOf($className)
    {
        try {
            $res = is_array(class_parents($className)) ? true : false;
            return $res;
        } catch (\Exception $e) {
            return false;
        }
    }
    // END
}

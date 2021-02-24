<?php

trait Enumerable
{
    abstract public function getIterator(): iterable;

    // BEGIN (write your solution here)
    public function maxBy($fn)
    {
        $arr = $this->getIterator();
        if (count($arr) === 0) {
            return null;
        }
        $res = array_reduce($arr, function ($acc, $item) {
            return $item->getDuration() > $acc->getDuration() ? $item : $acc;
        }, $arr[0]);
        return $res;
    }
    // END
}

// hexlet solution
// public function maxBy(callable $fn)
// {
//     $items = $this->getIterator();
//     if (!count($items)) {
//         return null;
//     }
//     $result = array_reduce($items, function ($acc, $item) use ($fn) {
//          $value = $fn($acc, $item);
//          return $value >= 0 ? $acc : $item;
//     }, $items[0]);
//     return $result;
// }

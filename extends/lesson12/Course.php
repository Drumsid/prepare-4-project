<?php

require_once('Enumerable.php');

class Course
{
    // BEGIN (write your solution here)
    use Enumerable;
    // END

    private $lessons;

    public function __construct($lessons)
    {
        $this->lessons = $lessons;
    }

    public function getIterator(): iterable
    {
        // Для простоты возвращает массив, вместо итератора
        return $this->lessons;
    }
}

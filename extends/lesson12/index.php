<?php

require_once('Course.php');
require_once('Lesson.php');

$lessons = [
    // Второй параметр это продолжительность урока в минутах
    new Lesson('react start', 3),
    new Lesson('react component', 9),
    new Lesson('react lifecycle', 2),
    new Lesson('redux', 4),
];
 
// use Enumerable;
$course = new Course($lessons);
echo "<pre>";
print_r($course->getIterator());
print_r($course->maxBy('fh'));
echo "</pre>";

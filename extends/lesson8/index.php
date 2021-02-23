<?php

require_once('File.php');
require_once('Exceptions\FileException.php');
require_once('Exceptions\NotReadableException.php');
require_once('Exceptions\NotExistsException.php');
require_once('Utils.php');

// $file = new File(__DIR__ . '/tesst.txt');
// try {
//     var_dump($file->read());
// } catch (NotExistsException $e) {
//     echo $e->getMessage();
//     // echo $e;
// } catch (NotReadableException $e) {
//     echo $e->getMessage();
//     // echo $e;
// }

var_dump(readFiles([__DIR__ . '/test.txt', 'test']));

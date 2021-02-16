<?php

require_once('User.php');
require_once('Guest.php');
require_once('Helpers.php');

$guest = new Guest();
// print_r($guest);
print_r(getGreeting($guest)); // 'Nice to meet you Guest!'
 
$user = new User('Petr');
// print_r($user);
print_r(getGreeting($user)); // 'Hello Petr!'
<?php

require_once('User.php');
require_once('FakeSubscription.php');
require_once('Subscription.php');

$user = new User('vasya@email.com', new Subscription('premium'));
$u1 = $user->getCurrentSubscription()->hasPremiumAccess(); // true
$u2 = $user->getCurrentSubscription()->hasProfessionalAccess(); // false

 
$user = new User('vasya@email.com', new Subscription('professional'));
$u3 = $user->getCurrentSubscription()->hasPremiumAccess(); // false
$u4 = $user->getCurrentSubscription()->hasProfessionalAccess(); // true
 
// Внутри создается фейковая, потому что подписка не передается
$user = new User('vasya@email.com');
$u5 = $user->getCurrentSubscription()->hasPremiumAccess(); // false
$u6 = $user->getCurrentSubscription()->hasProfessionalAccess(); // false
 
$user = new User('rakhim@hexlet.io'); // администратор, проверяется по емейлу
$u7 = $user->getCurrentSubscription()->hasPremiumAccess(); // true
$u8 = $user->getCurrentSubscription()->hasProfessionalAccess(); // true
// var_dump($u8);
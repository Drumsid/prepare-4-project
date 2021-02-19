<?php
require_once('TicTacToe.php');
require_once('Easy.php');
require_once('Normal.php');
// require_once('function.php');

// $game = new TicTacToe();

// var_dump($game->go(2,2));
// var_dump($game->go());
// var_dump($game->go(2,3));
// var_dump($game->go());
// var_dump($game->go(3,3));
// var_dump($game->go());
// print_r($game->toArray());
// print_r($game->getNameMode());

$game2 = new TicTacToe('normal');
// var_dump($game2->go());
var_dump($game2->go(3,3));
var_dump($game2->go());
var_dump($game2->go(2,2));
var_dump($game2->go());
var_dump($game2->go(1,1));
// var_dump($game2->go());
echo "<pre>";
print_r($game2->toArray());
echo "</pre>";
print_r($game2->getNameMode());

<?php

require_once('TcpConnection.php');
require_once('Connected.php');
require_once('Disconnected.php');

$connection = new TcpConnection('132.223.243.88', 2342);
echo "<pre>";
print_r($connection);
// print_r($connection->connect());
// print_r($connection->getCurrentState());
// print_r($connection->connect());
// print_r($connection->write('test'));
// print_r($connection->disconnect());
// print_r($connection->getCurrentState());
// print_r($connection->write('test'));
// print_r($connection->disconnect());












echo "</pre>";

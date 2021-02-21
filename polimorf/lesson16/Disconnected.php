<?php

class Disconnected
{
    private $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }
    public function switchOn()
    {
        if ($this->connection->getCurrentState() == 'disconnected') {
            throw new \Exception("Boom!");
        }
        $this->connection->setState('disconnected');
    }
}

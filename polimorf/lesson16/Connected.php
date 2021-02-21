<?php

class Connected
{
    private $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }
    public function switchOn()
    {
        if ($this->connection->getCurrentState() == 'connected') {
            throw new \Exception("Boom!");
        }
        $this->connection->setState('connected');
    }
}

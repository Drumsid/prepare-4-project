<?php

require_once('TcpConnectionInterface.php');
require_once('Connected.php');
require_once('Disconnected.php');

class TcpConnection implements TcpConnectionInterface
{
    private $ip;
    private $port;
    private $state;
    private $connect;
    private $disconnect;

    public function __construct($ip, $port)
    {
        $this->ip = $ip;
        $this->port = $port;
        $this->connect = new Connected($this);
        $this->disconnect = new Disconnected($this);
    }
    public function getCurrentState()
    {
        return $this->state;
    }
    public function connect()
    {
        try {
            $this->connect->switchOn();
        } catch (\Exception $e) {
            // echo 'Выброшено исключение: ',  $e->getMessage(), "\n";
            return $e;
        }
    }
    public function disconnect()
    {
        try {
            $this->disconnect->switchOn();
        } catch (\Exception $e) {
            echo 'Выброшено исключение: ',  $e->getMessage(), "\n";
        }
    }
    public function write($data)
    {
        try {
            $this->isConnected();
        } catch (\Exception $e) {
            echo 'Выброшено исключение: ',  $e->getMessage(), "\n";
        }
    }
    public function setState($data)
    {
        $this->state = $data;
    }
    public function isConnected()
    {
        if ($this->state == 'disconnected') {
            throw new \Exception("Boom!");
        }
        return $this->state == 'connected';
    }
}

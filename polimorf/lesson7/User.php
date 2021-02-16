<?php

class User
{
    private $currentSubscription;
    private $email;

    public function __construct($email, $currentSubscription = null)
    {
        $this->email = $email;
        // BEGIN (write your solution here)
        $this->currentSubscription = $currentSubscription ?? new FakeSubscription($email);
        // END
    }

    public function getCurrentSubscription()
    {
        return $this->currentSubscription;
    }

    public function isAdmin()
    {
        return $this->email === 'rakhim@hexlet.io';
    }
}
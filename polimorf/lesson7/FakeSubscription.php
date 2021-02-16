<?php

class FakeSubscription
{
    private $userEmail;

    public function __construct($userEmail)
    {
        $this->userEmail = $userEmail;
    }
    public function hasProfessionalAccess()
    {

        return $this->userEmail === 'rakhim@hexlet.io';
    }

    public function hasPremiumAccess()
    {
        return $this->userEmail === 'rakhim@hexlet.io';
    }   
}
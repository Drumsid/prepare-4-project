<?php

function getGreeting($user)
{
    if(!$user->isAuth()){
        return 'Nice to meet you Guest!';
    }
    return "Hello {$user->getName()}!";
}
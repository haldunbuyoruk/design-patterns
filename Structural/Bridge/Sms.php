<?php

namespace Structural\Bridge;


class Sms implements MessageInterface
{
    public function send($message){
        echo $message;
    }
}
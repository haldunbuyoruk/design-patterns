<?php

namespace Structural\Bridge;


class Email implements MessageInterface
{
    public function send($message){
        echo $message;
    }
}
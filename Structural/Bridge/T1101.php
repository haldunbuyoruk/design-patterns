<?php

namespace Structural\Bridge;


class T1101 extends Barrier
{
    public function send($message) {
        $message .= "\n\n Sent from T1101.";

        return $this->sender->send($message);
    }
}
<?php


namespace Structural\Bridge;


class T1000 extends Barrier
{

    public function send($message) {
        $message .= "\n\n Sent from T1000.";

        return $this->sender->send($message);
    }
}
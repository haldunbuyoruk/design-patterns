<?php


namespace Structural\Bridge;


abstract class Barrier implements BarrierInterface {
    protected $sender;

    public function setSender(MessageInterface $sender) {
        $this->sender = $sender;
    }
}
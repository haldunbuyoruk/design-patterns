<?php

namespace Structural\Bridge;

interface BarrierInterface
{
    public function setSender(MessageInterface $sender);

    public function send($message);
}
<?php

namespace Behavioral\Observer;


class Follower implements \SplObserver
{
    protected $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function update(\SplSubject $subject)
    {
        echo $this->name." : Highlights :  <b>".$subject->getContent()."</b><br>\n\n";
    }
}
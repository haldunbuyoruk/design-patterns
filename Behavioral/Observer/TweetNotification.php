<?php

namespace Behavioral\Observer;


class TweetNotification implements \SplSubject
{
    private $name = "";
    private $observers = array();
    private $content;

    public function __construct(string $content,string $name)
    {
        $this->content = $content;
        $this->name = $name;
    }

    public function getContent()
    {
        return $this->content.'('.$this->name.')';
    }

    public function notify()
    {
        foreach ($this->observers as $value) {
            $value->update($this);
        }
    }

    public function attach(\SplObserver $observer)
    {
        $this->observers[] = $observer;
    }

    public function detach(\SplObserver $observer)
    {

        $key = array_search($observer, $this->observers, true);
        if ($key) {
            unset($this->observers[$key]);
        }
    }

    public function post()
    {
        $this->notify();
    }
}
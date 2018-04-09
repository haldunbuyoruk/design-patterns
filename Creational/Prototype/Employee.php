<?php

namespace Creational\Prototype;

class Employee
{
    protected $name;
    protected $lunchAmount;
    protected $laptop;
    protected $mouse;
    protected $monitor;


    public function getName()
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getLunchAmount()
    {
        return $this->lunchAmount;
    }

    public function setLunchAmount(int $lunchAmount)
    {
        $this->lunchAmount = $lunchAmount;
    }
    public function getLaptop()
    {
        return $this->laptop;
    }

    public function setLaptop(string $laptop)
    {
        $this->laptop = $laptop;
    }
    public function getMonitor()
    {
        return $this->monitor;
    }

    public function setMonitor(string $monitor)
    {
        $this->monitor = $monitor;
    }
    public function getMouse()
    {
        return $this->mouse;
    }

    public function setMouse(string $mouse)
    {
        $this->mouse = $mouse;
    }
}
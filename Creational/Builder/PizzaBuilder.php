<?php


namespace Creational\Builder;


class PizzaBuilder
{
    public $size;
    public $piece;
    public $cheese      = false;
    public $sausage     = false;
    public $beef        = false;
    public $mushroom    = false;

    public function __construct(int $piece, string $size)
    {
        $this->piece = $piece;
        $this->size = $size;
    }


    public function addCheese()
    {
        $this->cheese = true;
        return $this;
    }

    public function addMushroom()
    {
        $this->mushroom = true;
        return $this;
    }

    public function addBeef()
    {
        $this->beef = true;
        return $this;
    }

    public function addSausage()
    {
        $this->sausage = true;
        return $this;
    }

    public function build(): Pizza
    {
        return new Pizza($this);
    }
}

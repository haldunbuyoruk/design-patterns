<?php

namespace Creational\Builder;


class Pizza
{
    protected $size;
    protected $piece;
    protected $cheese=false;
    protected $sausage = false;
    protected $beef = false;
    protected $mushroom = false;

    public function __construct(PizzaBuilder $builder)
    {
        $this->size     = $builder->size;
        $this->piece    = $builder->piece;
        $this->beef     = $builder->beef;
        $this->mushroom = $builder->mushroom;
        $this->sausage  = $builder->sausage;
    }
}
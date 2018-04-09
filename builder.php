<?php

include_once ('autoloader.php');

$pizza = (new \Creational\Builder\PizzaBuilder(2,'medium'))
    ->addBeef()
    ->addCheese()
    ->addSausage()
    ->build();

print_r($pizza);



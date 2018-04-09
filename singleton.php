<?php

include_once ('autoloader.php');

$ceo1 = \Creational\Singleton\Ceo::getInstance();
$ceo2 = \Creational\Singleton\Ceo::getInstance();
var_dump($ceo1 === $ceo2); // true
//$ceo1 = new \Creational\Singleton\Ceo(); // gives fatal error - construct disabled



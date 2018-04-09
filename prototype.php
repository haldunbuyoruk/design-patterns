<?php

include_once ('autoloader.php');

$employee1 = new \Creational\Prototype\Employee();
$employee1->setName('Haldun');
$employee1->setLunchAmount(350);
$employee1->setLaptop('15-inch MacBook Pro');
$employee1->setMouse('Magic Mouse 2 - Silver');
$employee1->setMonitor('LG UltraFine 4K Display');

// assume you hire new employee
$employee2 = clone $employee1;
$employee2->setName('Deniz');

echo  $employee2->getName()."\n";
echo  $employee2->getLunchAmount()."\n";
echo  $employee2->getLaptop()."\n";
echo  $employee2->getMouse()."\n";
echo  $employee2->getMonitor()."\n";





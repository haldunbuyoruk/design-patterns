<?php

include_once ('autoloader.php');

$t1000 = new \Structural\Bridge\T1000();
$t1000->setSender(new \Structural\Bridge\Sms());
$t1000->send("My battery level is %10\n");

$t1101 = new \Structural\Bridge\T1101();
$t1101->setSender(new \Structural\Bridge\Email());
$t1101->send("My battery level is %20\n");


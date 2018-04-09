<?php

include_once ('autoloader.php');

$content = "7 Nisan Cumartesi günü  etkinliğimiz 12.30'da başlayacak.";
$name = "AnkaraPHP";
$tweet = new \Behavioral\Observer\TweetNotification($content,$name);

$haldun = new \Behavioral\Observer\Follower('Haldun');
$deniz = new \Behavioral\Observer\Follower('Deniz');
$yolcu = new \Behavioral\Observer\Follower('Yolcu');

$tweet->attach($haldun);
$tweet->attach($yolcu);
$tweet->attach($deniz);
$tweet->post();
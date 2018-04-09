<?php

include_once ('autoloader.php');
use \Structural\Adapter\PaypalAdapter as PaypalAdapter;
use  \Structural\Adapter\PayPal as PayPal;


$paypal = new PaypalAdapter(new PayPal());
$paypal->pay('1500');
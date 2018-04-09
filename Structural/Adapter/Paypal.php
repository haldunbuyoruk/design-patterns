<?php

namespace Structural\Adapter;

class PayPal {

    public function __construct() {
    }

    public function sendPayment($amount) {
        // Paying via Paypal //
        echo "Paying via PayPal: ". $amount;
    }
}


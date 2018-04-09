<?php

namespace Structural\Adapter;

class PaypalAdapter implements PaymentAdapterInterface
{

    private $paypal;

    public function __construct(PayPal $paypal) {
        $this->paypal = $paypal;
    }

    public function pay($amount) {
        $this->paypal->sendPayment($amount);
    }
}

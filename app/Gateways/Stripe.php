<?php


namespace App\Gateways;


use App\Contracts\PaymentContract;

class Stripe implements PaymentContract
{

    public function pay()
    {
        echo 'Paying using stripe';
    }
}

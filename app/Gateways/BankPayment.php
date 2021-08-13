<?php


namespace App\Gateways;


use App\Contracts\PaymentContract;

class BankPayment implements PaymentContract
{

    public function pay()
    {
        echo 'Paying using Bank';
    }
}

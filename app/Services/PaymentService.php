<?php


namespace App\Services;


use App\Gateways\BankPayment;
use App\Gateways\Stripe;

class PaymentService
{
    public function init(string $key) {

        switch ($key) {
            case 'stripe':
                return new Stripe();
                break;
            default:
                return new BankPayment();
        }
    }
}

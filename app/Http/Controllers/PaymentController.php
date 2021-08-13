<?php

namespace App\Http\Controllers;

use App\Services\PaymentService;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function pay(Request $request, PaymentService $paymentService) {
        $payment_type = $request->input('payment_type');

        $payment = $paymentService->init($payment_type);
        $payment->pay();
    }
}

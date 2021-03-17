<?php


namespace App\Services\Payment;

use App\Services\Payment\Status\PaymentStatusInterface;

interface PaymentServiceInterface
{
    public function makePayment(float $amount) : PaymentStatusInterface;
}

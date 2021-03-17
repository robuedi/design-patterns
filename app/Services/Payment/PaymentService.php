<?php


namespace App\Services\Payment;

use App\Services\Payment\Gateways\GatewayInterface;
use App\Services\Payment\Status\PaymentStatusInterface;

class PaymentService implements PaymentServiceInterface
{
    private GatewayInterface $gateway;

    public function __construct(GatewayInterface $gateway)
    {
        $this->gateway = $gateway;
    }

    public function makePayment(float $amount): PaymentStatusInterface
    {
        return $this->gateway->process($amount);
    }
}

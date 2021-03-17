<?php


namespace App\Services\Payment\Gateways;

use App\Services\Payment\Status\PaymentStatusInterface;

interface GatewayInterface
{
    public function process(float $amount) : PaymentStatusInterface;
}

<?php


namespace App\Services\Payment\Gateways;


use App\Services\Payment\Status\PaymentStatusInterface;

class CreditCard implements GatewayInterface
{
    private PaymentStatusInterface $payment_status;

    public function __construct(PaymentStatusInterface $payment_status)
    {
        $this->payment_status = $payment_status;
    }

    public function process(float $amount): PaymentStatusInterface
    {
        //check amount
        if($amount <= 0)
        {
            return $this->payment_status->setNoPaymentValueMsg();
        }

        //make payment
        return $this->payment_status->setMsg($amount.' paid using your credit card.')
                                    ->setStatus(true);
    }
}

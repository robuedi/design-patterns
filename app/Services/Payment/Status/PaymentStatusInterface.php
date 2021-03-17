<?php

namespace App\Services\Payment\Status;

interface PaymentStatusInterface
{
    /**
     * @param bool $status
     */
    public function setStatus(bool $status): PaymentStatusInterface;

    /**
     * @param string $msg
     */
    public function setMsg(string $msg): PaymentStatusInterface;

    /**
     * @return bool
     */
    public function getStatus(): bool;

    /**
     * @return string
     */
    public function getMsg(): string;

    public function setNoPaymentValueMsg(): PaymentStatusInterface;
}

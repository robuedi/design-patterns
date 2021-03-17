<?php


namespace App\Services\Payment\Status;


class PaymentStatus implements PaymentStatusInterface
{
    private bool $status = false;
    private string $msg = '';

    /**
     * @param bool $status
     */
    public function setStatus(bool $status): PaymentStatusInterface
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @param string $msg
     */
    public function setMsg(string $msg): PaymentStatusInterface
    {
        $this->msg = $msg;
        return $this;
    }

    /**
     * @return bool
     */
    public function getStatus(): bool
    {
        return $this->status;
    }

    /**
     * @return string
     */
    public function getMsg(): string
    {
        return $this->msg;
    }

    public function setNoPaymentValueMsg() : PaymentStatusInterface
    {
        $this->msg = 'No Payment value';
        return $this;
    }

}

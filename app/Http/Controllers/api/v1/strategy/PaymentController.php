<?php

namespace App\Http\Controllers\api\v1\strategy;

use App\Http\Controllers\api\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\v1\PaymentPayRequest;
use App\Services\Payment\PaymentServiceInterface;
use Illuminate\Http\Response;

class PaymentController extends Controller
{
    use ApiResponse;

    private PaymentServiceInterface $payment_service;

    public function __construct(PaymentServiceInterface $payment_service)
    {
        $this->payment_service = $payment_service;
    }

    public function pay(PaymentPayRequest $payment_pay_request)
    {
        //make payment
        $payment = $this->payment_service->makePayment($payment_pay_request->get('payment_amount'));

        return $this->apiResponse(
            [
                'status' => $payment->getStatus(),
                'msg' => $payment->getMsg()
            ],
            Response::HTTP_OK);
    }
}

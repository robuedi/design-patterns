<?php

namespace App\Providers;

use App\Services\Payment\Gateways\CreditCard;
use App\Services\Payment\Gateways\GatewayInterface;
use App\Services\Payment\Gateways\NullGateway;
use App\Services\Payment\Gateways\PayPal;
use App\Services\Payment\Gateways\Stripe;
use App\Services\Payment\PaymentService;
use App\Services\Payment\PaymentServiceInterface;
use App\Services\Payment\Status\PaymentStatus;
use App\Services\Payment\Status\PaymentStatusInterface;
use Illuminate\Support\ServiceProvider;

class PaymentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        app()->bind(PaymentServiceInterface::class, PaymentService::class);

        app()->bind(GatewayInterface::class, function () {

            switch (request()->get('payment_type'))
            {
                case 'stripe':
                    return app()->make(Stripe::class);

                case 'paypal':
                    return app()->make(PayPal::class);

                case 'credit_card':
                    return app()->make(CreditCard::class);

                default:
                    return app()->make(NullGateway::class);
            }
        });

        app()->bind(PaymentStatusInterface::class, PaymentStatus::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

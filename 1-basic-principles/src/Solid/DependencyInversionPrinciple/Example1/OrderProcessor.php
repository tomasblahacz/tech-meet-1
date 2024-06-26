<?php

declare(strict_types=1);

namespace App\Solid\DependencyInversionPrinciple\Example1;

readonly class OrderProcessor
{

    public function __construct(
        private PaymentProcessor $paymentProcessor
    )
    {
    }

    public function processOrder(Payment $payment): void
    {
        $this->paymentProcessor->processPayment($payment);

        //do SRP COMPLIANT magic stuff...
    }

}
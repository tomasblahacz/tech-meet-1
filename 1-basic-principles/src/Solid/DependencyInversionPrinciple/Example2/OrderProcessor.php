<?php

declare(strict_types=1);

namespace App\Solid\DependencyInversionPrinciple\Example2;

readonly class OrderProcessor
{

    public function __construct(
        private PaymentProcessorInterface $paymentProcessor
    )
    {
    }

    public function processOrder(Payment $payment): void
    {
        $this->paymentProcessor->processPayment($payment);

        //do SRP COMPLIANT magic stuff...
    }

}
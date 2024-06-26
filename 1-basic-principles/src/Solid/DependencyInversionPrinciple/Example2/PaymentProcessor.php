<?php

declare(strict_types=1);

namespace App\Solid\DependencyInversionPrinciple\Example2;

class PaymentProcessor implements PaymentProcessorInterface
{

    public function processPayment(Payment $payment): void
    {
        //do SRP COMPLIANT magic stuff...
    }

}
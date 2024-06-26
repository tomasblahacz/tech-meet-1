<?php

declare(strict_types=1);

namespace App\Solid\DependencyInversionPrinciple\Example1;

class PaymentProcessor
{

    public function processPayment(Payment $payment): void
    {
        //do SRP COMPLIANT magic stuff...
    }

}
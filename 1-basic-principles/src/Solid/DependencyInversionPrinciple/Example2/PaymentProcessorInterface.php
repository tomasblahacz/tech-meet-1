<?php

declare(strict_types=1);

namespace App\Solid\DependencyInversionPrinciple\Example2;

interface PaymentProcessorInterface
{

    public function processPayment(Payment $payment): void;

}
<?php

declare(strict_types=1);

namespace App\Dry\Example3;

class WebCheckout
{

    public function processOrder(Order $order): void
    {
        $this->validateOrder($order);
        $this->chargeCustomer($order);
        $this->updateInventory($order);
        $this->sendConfirmationEmail($order);
    }

    private function validateOrder(Order $order): void { /* validation logic */ }
    private function chargeCustomer(Order $order): void { /* payment logic */ }
    private function updateInventory(Order $order): void { /* inventory logic */ }
    private function sendConfirmationEmail(Order $order): void { /* email logic */ }

}
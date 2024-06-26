<?php

declare(strict_types=1);

namespace App\Dry\Example3;

class MobileCheckout
{

    public function processOrder(Order $order): void
    {
        $this->validateOrder($order);
        $this->chargeCustomer($order);
        $this->updateInventory($order);
        $this->sendPushNotification($order);
    }

    private function validateOrder(Order $order): void { /* validation logic */ }
    private function chargeCustomer(Order $order): void { /* payment logic */ }
    private function updateInventory(Order $order): void { /* inventory logic */ }
    private function sendPushNotification(Order $order): void { /* push notification logic */ }

}
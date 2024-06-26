<?php

declare(strict_types=1);

namespace App\Dry\Example4;


readonly class OrderProcessor
{


    public function __construct(
        private OrderNotifierResolver $orderNotifierResolver
    )
    {
    }

    public function processOrder(
        Order $order,
        NotificationChannelEnum $notificationChannel
    ): void
    {
        $this->validateOrder($order);
        $this->chargeCustomer($order);
        $this->updateInventory($order);

        $this->orderNotifierResolver->getNotifier($notificationChannel)->notify($order);
    }

    private function validateOrder(Order $order): void { /* validation logic */ }
    private function chargeCustomer(Order $order): void { /* payment logic */ }
    private function updateInventory(Order $order): void { /* inventory logic */ }


}
<?php

declare(strict_types=1);

namespace App\Dry\Example4;

class MobileCheckout
{

    public function __construct(
        private OrderProcessor $orderProcessor
    )
    {
    }

    public function processOrder(Order $order): void
    {
        $this->orderProcessor->processOrder($order, NotificationChannelEnum::PUSH_NOTIFICATION);
    }

}
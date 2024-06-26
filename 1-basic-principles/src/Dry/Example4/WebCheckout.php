<?php

declare(strict_types=1);

namespace App\Dry\Example4;

use App\Dry\Example4\Order;
use App\Dry\Example4\OrderProcessor;

class WebCheckout
{

    public function __construct(
        private OrderProcessor $orderProcessor
    )
    {
    }

    public function processOrder(Order $order): void
    {
        $this->orderProcessor->processOrder(
            $order,
            NotificationChannelEnum::EMAIL
        );
    }

}
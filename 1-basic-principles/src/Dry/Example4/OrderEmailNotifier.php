<?php

declare(strict_types=1);

namespace App\Dry\Example4;

class OrderEmailNotifier implements OrderNotifierInterface
{

    public function notify(Order $order): void
    {
        // send email
    }

    public function getSupportedNotificationChannel(): NotificationChannelEnum
    {
        return NotificationChannelEnum::EMAIL;
    }

}
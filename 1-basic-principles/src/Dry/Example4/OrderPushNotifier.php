<?php

declare(strict_types=1);

namespace App\Dry\Example4;

class OrderPushNotifier implements OrderNotifierInterface
{

    public function notify(Order $order): void
    {
        // send push notification
    }

    public function getSupportedNotificationChannel(): NotificationChannelEnum
    {
        return NotificationChannelEnum::PUSH_NOTIFICATION;
    }

}
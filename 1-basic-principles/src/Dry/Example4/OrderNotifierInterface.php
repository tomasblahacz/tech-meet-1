<?php

declare(strict_types=1);

namespace App\Dry\Example4;

interface OrderNotifierInterface
{

    public function notify(Order $order): void;

    public function getSupportedNotificationChannel(): NotificationChannelEnum;

}
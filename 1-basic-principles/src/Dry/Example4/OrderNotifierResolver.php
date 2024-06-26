<?php

declare(strict_types=1);

namespace App\Dry\Example4;

use App\Dry\Example4\Exception\UnsupportedNotificationChannelException;

class OrderNotifierResolver
{

    /** @var OrderNotifierInterface[]  */
    private array $orderNotifiers;

    public function __construct(OrderNotifierInterface ...$orderNotifiers)
    {
        $this->orderNotifiers = $orderNotifiers;
    }

    public function getNotifier(NotificationChannelEnum $notificationChannel): OrderNotifierInterface
    {
        foreach ($this->orderNotifiers as $orderNotifier) {
            if ($orderNotifier->getSupportedNotificationChannel() === $notificationChannel) {
                return $orderNotifier;
            }
        }

        throw new UnsupportedNotificationChannelException(
            sprintf('Unsupported file type: %s', $notificationChannel->name)
        );
    }

}
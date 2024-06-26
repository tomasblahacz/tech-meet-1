<?php

declare(strict_types=1);

namespace App\Solid\SingleResponsibilityPrinciple\Example2;

use App\Helper\Client;

class UserNotifier
{

    private const PUSH_NOTIFICATION_ADMIN_DEVICE_ID = 28163;

    public function __construct(
        private readonly Client $pushNotificationClient,
    )
    {
    }

    public function sendAdminUserConfirmation(
        string $userEmail
    ): void
    {
        $content = sprintf(
            'User %s has been created.',
            $userEmail
        );

        $this->pushNotificationClient->send(self::PUSH_NOTIFICATION_ADMIN_DEVICE_ID, $content);
    }

}
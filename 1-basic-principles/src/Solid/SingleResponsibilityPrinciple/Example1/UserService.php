<?php

declare(strict_types=1);

namespace App\Solid\SingleResponsibilityPrinciple\Example1;

use App\Helper\Client;
use App\Helper\EntityManager;
use App\Helper\Mailer;

class UserService
{

    private const PUSH_NOTIFICATION_ADMIN_DEVICE_ID = 28163;


    public function __construct(
        private readonly EntityManager $entityManager
    )
    {
    }

    public function create(): void
    {
        $user = new User(1, 'John Doe', 'john.doe@csretail.cz');

        $this->entityManager->save($user);

        $emailBody = sprintf(
            'Hi %s, your account has been created successfully.',
            $user->getName()
        );

        $emailClient = new Client('https://api.mailer.com');
        $emailClient->send($user->getEmail(), $emailBody);

        $pushNotificationClient = new Client('https://api.pusher.com');
        $pushNotificationClient->send(
            self::PUSH_NOTIFICATION_ADMIN_DEVICE_ID,
            sprintf(
                'User %s has been created.',
                $user->getName()
            )
        );
    }

}
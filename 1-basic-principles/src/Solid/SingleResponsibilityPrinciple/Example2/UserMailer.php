<?php

declare(strict_types=1);

namespace App\Solid\SingleResponsibilityPrinciple\Example2;

use App\Helper\Client;

class UserMailer
{


    public function __construct(
        private readonly Client $emailClient,
    )
    {
    }

    public function sendUserConfirmationEmail(
        string $userName,
        string $userEmail
    ): void
    {
        $emailBody = sprintf(
            'Hi %s, your account has been created successfully.',
            $userName
        );

        $this->emailClient->send($userEmail, $emailBody);
    }

}
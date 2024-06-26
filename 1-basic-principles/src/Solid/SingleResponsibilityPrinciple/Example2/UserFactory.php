<?php

declare(strict_types=1);

namespace App\Solid\SingleResponsibilityPrinciple\Example2;

use App\Helper\DateTimeFactory;

class UserFactory
{


    public function __construct(
        private readonly DateTimeFactory $dateTimeFactory
    )
    {
    }

    public function create(
        string $name,
        string $email
    ): User
    {
        return new User(
            $name,
            $email,
            $this->dateTimeFactory->now()
        );
    }

}
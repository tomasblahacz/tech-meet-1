<?php

declare(strict_types=1);

namespace App\Solid\InterfaceSegregationPrinciple\Example1;

class UserController
{

    public function changeUserPassword(
        UserInterface $user,
        string $newPassword
    ): void
    {
        $user->setPassword($newPassword);
    }

}
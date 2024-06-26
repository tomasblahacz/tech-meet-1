<?php

declare(strict_types=1);

namespace App\Solid\InterfaceSegregationPrinciple\Example2;

use App\Solid\InterfaceSegregationPrinciple\Example1\Exception\NotImplementedException;

class Admin implements HavingEmailInterface
{

    private string $name;

    private string $email;

    public function __construct(
        string $name,
        string $email
    )
    {
        $this->name = $name;
        $this->email = $email;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getAge(): int
    {
        throw new NotImplementedException('Method getAge() not implemented for admin. Admin does not have age');
    }

    public function getCredits(): int
    {
        throw new NotImplementedException(
            'Method getCredits() not implemented for admin. Admin does not have credits'
        );
    }

    public function setPassword(): string
    {
        throw new NotImplementedException(
            'Method setPassword() not implemented for admin. Admin needs to change assigned key'
        );
    }

}
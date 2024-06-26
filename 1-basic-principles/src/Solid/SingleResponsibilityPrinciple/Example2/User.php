<?php

declare(strict_types=1);

namespace App\Solid\SingleResponsibilityPrinciple\Example2;

use DateTimeImmutable;

class User
{

    private int $id;

    private string $name;

    private string $email;

    private DateTimeImmutable $createdAt;

    public function __construct(
        string $name,
        string $email,
        DateTimeImmutable $createdAt
    )
    {
        $this->name = $name;
        $this->email = $email;
        $this->createdAt = $createdAt;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

}
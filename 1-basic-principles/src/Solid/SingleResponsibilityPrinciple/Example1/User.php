<?php

declare(strict_types=1);

namespace App\Solid\SingleResponsibilityPrinciple\Example1;

class User
{

    private int $id;

    private string $name;

    private string $email;

    public function __construct(
        int $id,
        string $name,
        string $email
    )
    {
        $this->id = $id;
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

}
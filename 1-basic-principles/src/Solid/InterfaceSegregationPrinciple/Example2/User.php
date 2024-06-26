<?php

declare(strict_types=1);

namespace App\Solid\InterfaceSegregationPrinciple\Example2;

class User implements HavingEmailInterface
{

    private string $name;

    private string $email;

    private int $age;

    private int $credits;

    private string $password;

    public function __construct(
        string $name,
        string $email,
        int $age,
        int $credits,
        string $password
    )
    {
        $this->name = $name;
        $this->email = $email;
        $this->age = $age;
        $this->credits = $credits;
        $this->password = $password;
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
        return $this->age;
    }

    public function getCredits(): int
    {
        return $this->credits;
    }

    public function setPassword(): string
    {
        return 'password';
    }

}
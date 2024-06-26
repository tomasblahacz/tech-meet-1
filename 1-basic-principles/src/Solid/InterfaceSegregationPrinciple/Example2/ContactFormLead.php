<?php

declare(strict_types=1);

namespace App\Solid\InterfaceSegregationPrinciple\Example2;

class ContactFormLead implements HavingEmailInterface
{

    private string $email;

    public function __construct(
        string $email,
    )
    {
        $this->email = $email;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

}
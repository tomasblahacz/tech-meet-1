<?php

declare(strict_types=1);

namespace App\Solid\InterfaceSegregationPrinciple\Example1;

interface UserInterface
{

    public function getName(): string;

    public function getEmail(): string;

    public function getAge(): int;

    public function getCredits();

    public function setPassword(string $newPassword): string;

}
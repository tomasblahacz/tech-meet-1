<?php

declare(strict_types=1);

namespace App\Solid\LiskovSubstitutionPrinciple\Example1;

class Product
{


    public function __construct(
        private string $name,
        private int $price
    )
    {
    }

    public function getPrice(): int {
        return $this->price;
    }

}
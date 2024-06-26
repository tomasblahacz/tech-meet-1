<?php

declare(strict_types=1);

namespace App\Solid\LiskovSubstitutionPrinciple\Example2;

abstract class Product
{


    public function __construct(
        private string $name,
        private int $price
    )
    {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): int {
        return $this->price;
    }

    abstract public function getPriceAfterSale(): int;

}
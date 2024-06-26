<?php

declare(strict_types=1);

namespace App\Solid\LiskovSubstitutionPrinciple\Example2;

class DigitalProduct extends Product
{

    private string $version;

    public function __construct(
        string $name,
        int $price,
        string $version
    )
    {
        parent::__construct($name, $price);
        $this->version = $version;
    }

    public function getPriceAfterSale(): int {
        return (int) round($this->getPrice() * 0.8);
    }

}
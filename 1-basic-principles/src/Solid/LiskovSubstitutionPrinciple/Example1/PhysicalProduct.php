<?php

declare(strict_types=1);

namespace App\Solid\LiskovSubstitutionPrinciple\Example1;

class PhysicalProduct extends Product
{

    private int $weight;

    public function __construct(
        string $name,
        int $price,
        int $weight
    )
    {
        parent::__construct($name, $price);
        $this->weight = $weight;
    }

}
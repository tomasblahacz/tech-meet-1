<?php

declare(strict_types=1);

namespace App\Solid\LiskovSubstitutionPrinciple\Example1;

class ProductExporter
{

    public function export(array $products): void
    {
        $feedItems = [];

        foreach ($products as $product) {
            if ($product instanceof PhysicalProduct) {
                $priceAfterSale = $product->getPrice() * 0.9;
            } elseif ($product instanceof DigitalProduct) {
                $priceAfterSale = $product->getPrice() * 0.8;
            } else {
                $priceAfterSale = $product->getPrice();
            }

            $feedItems[] = [
                'name' => $product->getName(),
                'price' => $priceAfterSale
            ];
        }


        // @todo implement export logic
    }

}
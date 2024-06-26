<?php

declare(strict_types=1);

namespace App\Solid\LiskovSubstitutionPrinciple\Example2;

class ProductExporter
{

    /**
     * @param Product[] $products
     */
    public function export(array $products): void
    {
        $feedItems = [];

        foreach ($products as $product) {
            $feedItems[] = [
                'name' => $product->getName(),
                'price' => $product->getPriceAfterSale()
            ];
        }


        // @todo implement export logic
    }

}
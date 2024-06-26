<?php

declare(strict_types=1);

namespace App\Solid\OpenClosedPrinciple\Example2;

interface InvoiceGeneratorInterface
{

    public function generate(array $items, string $fileName): void;

    public function getSupportedFileType(): FileType;
    
}
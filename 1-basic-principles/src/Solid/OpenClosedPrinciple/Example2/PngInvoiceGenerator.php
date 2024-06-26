<?php

declare(strict_types=1);

namespace App\Solid\OpenClosedPrinciple\Example2;

class PngInvoiceGenerator implements InvoiceGeneratorInterface
{

    public function generate(
        array $items,
        string $fileName
    ): void
    {
        // Generate PNG
    }

    public function getSupportedFileType(): FileType
    {
        return FileType::PNG;
    }

}
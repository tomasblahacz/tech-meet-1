<?php

declare(strict_types=1);

namespace App\Solid\OpenClosedPrinciple\Example2;

class TxtInvoiceGenerator implements InvoiceGeneratorInterface
{

    public function generate(
        array $items,
        string $fileName
    ): void
    {
        // Generate TXT
    }

    public function getSupportedFileType(): FileType
    {
        return FileType::TXT;
    }

}
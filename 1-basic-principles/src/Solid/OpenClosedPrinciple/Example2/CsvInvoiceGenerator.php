<?php

declare(strict_types=1);

namespace App\Solid\OpenClosedPrinciple\Example2;

class CsvInvoiceGenerator implements InvoiceGeneratorInterface
{

    public function generate(
        array $items,
        string $fileName
    ): void
    {
        // Generate CSV
    }

    public function getSupportedFileType(): FileType
    {
        return FileType::CSV;
    }

}
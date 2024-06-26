<?php

declare(strict_types=1);

namespace App\Solid\OpenClosedPrinciple\Example2;

class PdfInvoiceGenerator implements InvoiceGeneratorInterface
{

    public function generate(
        array $items,
        string $fileName
    ): void
    {
        // Generate PDF
    }

    public function getSupportedFileType(): FileType
    {
        return FileType::PDF;
    }

}
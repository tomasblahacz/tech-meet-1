<?php

declare(strict_types=1);

namespace App\Solid\OpenClosedPrinciple\Example1;

class InvoiceGenerator
{

    public function generateInvoice(
        array $items,
        string $fileName,
        string $fileType
    ): void
    {
        if ($fileType === 'pdf') {
            $this->generatePdf($items, $fileName);
        } elseif ($fileType === 'csv') {
            $this->generateCsv($items, $fileName);
        }

        $this->generateTxt($items, $fileName);
    }

    private function generatePdf(array $items, string $fileName): void
    {
        // Generate PDF
    }

    private function generateCsv(array $items, string $fileName): void
    {
        // Generate CSV
    }

    private function generateTxt(array $items, string $fileName): void
    {
        // Generate TXT
    }

}
<?php

declare(strict_types=1);

namespace App\Solid\OpenClosedPrinciple\Example2;

use App\Solid\OpenClosedPrinciple\Example2\Exception\UnsupportedFileTypeException;

class InvoiceGeneratorResolver
{

    /** @var InvoiceGeneratorInterface[]  */
    private array $invoiceGenerators;

    public function __construct(InvoiceGeneratorInterface ...$invoiceGenerators)
    {
        $this->invoiceGenerators = $invoiceGenerators;
    }

    public function getInvoiceGenerator(FileType $fileType): InvoiceGeneratorInterface
    {
        foreach ($this->invoiceGenerators as $invoiceGenerator) {
            if ($invoiceGenerator->getSupportedFileType() === $fileType) {
                return $invoiceGenerator;
            }
        }

        throw new UnsupportedFileTypeException(
            sprintf('Unsupported file type: %s', $fileType->name)
        );
    }

}
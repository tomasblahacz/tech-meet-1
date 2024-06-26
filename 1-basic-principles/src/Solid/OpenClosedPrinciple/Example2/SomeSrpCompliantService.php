<?php

declare(strict_types=1);

namespace App\Solid\OpenClosedPrinciple\Example2;

class SomeSrpCompliantService
{

    private const FileType INVOICE_FILE_TYPE_FOR_EMAILS = FileType::PDF;
    private const string INVOICE_FILE_NAME_FOR_EMAILS = 'invoice.pdf';


    private InvoiceGeneratorResolver $invoiceGeneratorResolver;

    public function __construct(
        InvoiceGeneratorResolver $invoiceGeneratorResolver
    )
    {
        $this->invoiceGeneratorResolver = $invoiceGeneratorResolver;
    }

    public function someMagicStuff(array $invoiceItems): void
    {
        $this->invoiceGeneratorResolver->getInvoiceGenerator(FileType::PNG)
            ->generate(
                $invoiceItems,
            'file'
            );
    }

}
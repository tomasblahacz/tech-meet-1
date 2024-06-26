<?php

declare(strict_types=1);

namespace App\Solid\InterfaceSegregationPrinciple\Example2;

use App\Solid\InterfaceSegregationPrinciple\Example1\UserInterface;

class NewsletterController
{

    public function sendNewsletter(
        HavingEmailInterface $havingEmail,
        string $content
    ): void
    {
        $emailAddress = $havingEmail->getEmail();

        // @todo send email...
    }

}